<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<script>
    $(document).ready(function () {
        $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });

        $("[data-toggle=tooltip]").tooltip();
    });
</script>
<div class="container">
    <div class="row">


        <div class="col-md-12">
            <div class="table-responsive">
                <table border="1px" id="mytable" class="table table-bordred table-striped">
                    <tr>
                        <td>STT</td>
                        <td>Name</td>
                        <td>Staff Code</td>
                        <td>Phone</td>
                        <td>Address</td>
                        <td>Action</td>
                    </tr>
                    <?php foreach ($staff as $key => $item): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $item->getName() ?></td>
                            <td><?php echo $item->getNumber() ?></td>
                            <td><?php echo $item->getPhone() ?></td>
                            <td><?php echo $item->getAddress() ?></td>
                            <td>
                                <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger"
                                   href="StaffManagement.php?page=delete&id=<?php echo $item->getId(); ?>">Delete</a>
                                <a class="btn btn-warning"
                                   href="StaffManagement.php?page=edit&id=<?php echo $item->getId(); ?>">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <a class="btn btn-success" href="StaffManagement.php?page=add">Add new staff</a>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>