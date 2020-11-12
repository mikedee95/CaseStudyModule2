<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form_main">
                <h4 class="heading"><strong>ADD NEW </strong> STAFF <span></span></h4>
                <div class="form">
                    <form method="post" id="contactFrm" name="contactFrm">
                        <input type="text" placeholder="Please input name" name="name" class="txt">
                        <input type="text" placeholder="Please input staff number" name="number" class="txt">
                        <input type="text" placeholder="Please input phone number" name="phone" class="txt">
                        <input type="text" placeholder="Please input address" name="address" class="txt">
                        <input type="submit" value="submit" name="add" class="txt2">
                    </form>
                </div>
            </div>
        </div
    </div>
</div>
<style>

    form_main {
        width: 100%;
    }
    .form_main h4 {
        font-family: roboto;
        font-size: 20px;
        font-weight: 300;
        margin-bottom: 15px;
        margin-top: 20px;
        text-transform: uppercase;
    }
    .heading {
        border-bottom: 1px solid #fcab0e;
        padding-bottom: 9px;
        position: relative;
    }
    .heading span {
        background: #9e6600 none repeat scroll 0 0;
        bottom: -2px;
        height: 3px;
        left: 0;
        position: absolute;
        width: 75px;
    }
    .form {
        border-radius: 7px;
        padding: 6px;
    }
    .txt[type="text"] {
        border: 1px solid #ccc;
        margin: 10px 0;
        padding: 10px 0 10px 5px;
        width: 100%;
    }
    .txt_3[type="text"] {
        margin: 10px 0 0;
        padding: 10px 0 10px 5px;
        width: 100%;
    }
    .txt2[type="submit"] {
        background: #242424 none repeat scroll 0 0;
        border: 1px solid #4f5c04;
        border-radius: 25px;
        color: #fff;
        font-size: 16px;
        font-style: normal;
        line-height: 35px;
        margin: 10px 0;
        padding: 0;
        text-transform: uppercase;
        width: 30%;
    }
    .txt2:hover {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        color: #5793ef;
        transition: all 0.5s ease 0s;
    }

</style>
</body>
</html>