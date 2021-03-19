<?php
session_start();
if (!isset($_SESSION['user_data'])) {
    header('location:index.php');
}
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
        <h3 class="text-center">Welcome to Chatroom</h3>
        <br />
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-4">
                <?php
                $login_user_id = '';
                foreach ($_SESSION['user_data'] as $key => $value) {
                    $login_user_id = $value['id'];
                ?>
                    <input type="hidden" name="login_user_id" id="login_user_id" value="<?= $login_user_id ?>">
                    <div class="mt-3 mb-3 text-center">
                        <img src="<?= $value['profile'] ?>" width="150" class="img-fluid rounded-circle img-thumbnail">
                        <h3 class="mt-2"><?= $value['name'] ?></h3>
                        <a href="profile.php" class="btn btn-secondary mt-2 mb-2">Edit</a>
                        <input type="button" class="btn btn-primary mt-2 mb-2" name="logout" id="logout" value="Logout">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        var conn = new WebSocket('ws://localhost:8080');
        conn.onopen = function(e) {
            console.log("Connection established!");
        };

        conn.onmessage = function(e) {
            console.log(e.data);
        };

        $('#logout').click(function() {
            user_id = $('#login_user_id').val();
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    user_id: user_id,
                    action: 'leave'
                },
                success: function(data) {
                    var response = JSON.parse(data);
                    if (response.status == 1) {
                        location = 'index.php';
                    }
                }
            })
        });
    });
</script>

</html>