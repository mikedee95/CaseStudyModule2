<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style> body {
        background: grey;
        margin-top: 120px;
        margin-bottom: 120px;
    }</style>
<body>
<div class="container">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="row p-5">
                    <div class="col-md-6">
                        <h1> Invoice Detail </h1>
                    </div>

                    <div class="col-md-6 text-right">
                        <p class="font-weight-bold mb-1">Invoice #<?php echo rand(1,1000) ?></p>
                        <p class="text-muted">Due to: <?php echo(strftime("%d.%m.%Y %H:%M")); ?></p>
                    </div>
                </div>

                <hr class="my-5">

                <div class="row pb-5 p-5">
                    <div class="col-md-6">
                        <p class="font-weight-bold mb-4">Order Information</p>
                        Table: <br><p class="mb-1" type="number" name="number"><?php echo rand(1,22) ?></p><br>
                        Checkin Time:<p><span id="datetime"></span><?php echo(strftime("%d.%m.%Y %H:%M")); ?></p>

                        <p class="mb-1"></p>
                    </div>

                </div>

                <div class="row p-5">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Dish</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Price Each</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                            </tr>
                            </thead>
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
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>

                <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                    <a class="btn btn-success" href="TableList.php" style="align-self: center">Print Receipt</a>
                    <div class="py-3 px-5 text-right">
                        <div class="mb-2">Grand Total</div>
                        <div class="h2 font-weight-light">$250</div>
                    </div>

                    <div class="py-3 px-5 text-right">
                        <div class="mb-2">Discount</div>
                        <div class="h2 font-weight-light">10%</div>
                    </div>

                    <div class="py-3 px-5 text-right">
                        <div class="mb-2">Sub - Total amount</div>
                        <div class="h2 font-weight-light">$276</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div>

</div>
</body>
</html>