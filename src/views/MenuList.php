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
<body style="background-color: lightgrey">
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
<h1 class="modal-title custom_align" style="border-bottom:1px solid red;display:inline-block;">Table Management</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table border="1px" id="mytable" class="table table-bordered table-striped">
                    <tr>
                        <th>STT</th>
                        <th>Dish Code</th>
                        <th>Dish Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <td><a class="modal btn btn-success" href="MenuManagement.php?page=addMenu">Add new dishes</a></td>
                    </tr>
                    <?php foreach ($menu as $key => $item): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $item->getNumber() ?></td>
                            <td><?php echo $item->getName() ?></td>
                            <td><?php echo $item->getPrice() ?></td>
                            <td><?php echo $item->getDescription() ?></td>
                            <td>
                                <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger"
                                   href="MenuManagement.php?page=delete&id=<?php echo $item->getId(); ?>">Delete</a>
                                <a class="btn btn-warning"
                                   href="MenuManagement.php?page=editMenu&id=<?php echo $item->getId(); ?>">Edit</a>
                                <a class="btn btn-success"
                                   href="MenuManagement.php?page=editMenu&id=<?php echo $item->getId(); ?>">Add to table</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>