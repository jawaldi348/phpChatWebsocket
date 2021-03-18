<?php
session_start();
if (!isset($_SESSION['user_data'])) {
    header('location:index.php');
}

require('database/ChatUser.php');
$user_object = new ChatUser;
$user_id = '';
foreach ($_SESSION['user_data'] as $key => $value) {
    $user_id = $value['id'];
}
$user_object->setUserId($user_id);
$user_data = $user_object->get_user_data_by_id();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Chat application in php using web scocket programming</title>
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
    <div class="container">
        <br />
        <h3 class="text-center">Profile</h3>
        <br />
        <br />
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">Profile</div>
                    <div class="col-md-6 text-right">
                        <a href="chatroom.php" class="btn btn-warning btn-sm">Go to Chat</a>
                    </div>
                </div>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
</body>

</html>