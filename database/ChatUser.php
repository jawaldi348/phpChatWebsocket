<?php

//ChatUser.php

class ChatUser
{
    private $user_id;
    private $user_name;
    private $user_email;
    private $user_password;
    private $user_profile;
    private $user_status;
    private $user_created_on;
    private $user_verification_code;
    private $user_login_status;
    public $connect;

    public function __construct()
    {
        require_once('Database_connection.php');
        $database_object = new Database_connection;
        $this->connect = $database_object->connect();
    }
}
