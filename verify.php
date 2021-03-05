<?php
//verify.php

$error = '';
session_start();
if (isset($_GET['code'])) {
    require_once('database/ChatUser.php');
    $user_object = new ChatUser;
    $user_object->setUserVerificationCode($_GET['code']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Email Verify | PHP Chat Application using Websocket</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor-front/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="vendor-front/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="vendor-front/parsley/parsley.css" />

    <!-- Bootstrap core JavaScript -->
    <script src="vendor-front/jquery/jquery.min.js"></script>
    <script src="vendor-front/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor-front/jquery-easing/jquery.easing.min.js"></script>

    <script type="text/javascript" src="vendor-front/parsley/dist/parsley.min.js"></script>
</head>

<body>
    <div class="containter">
        <br />
        <br />
        <h1 class="text-center">PHP Chat Application using Websocket &mdash; Email Verify</h1>
        <div class="row justify-content-md-center">
            <div class="col col-md-4 mt-5">
                <div class="alert alert-danger">
                    <h2>Message</h2>
                </div>
            </div>
        </div>
    </div>
</body>

</html>