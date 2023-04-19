<?php 
    // $conn = mysqli_connect("localhost", "root", "", "chat");
    // if($conn){
    //     echo "co database" . mysqli_connect_error();
    // }
    define('HOST' , 'localhost');
    define('USERNAME', 'root'); 
    define('PASSWORD', '');
    define('DB_NAME', 'chat');
    define('PORT' , 3306);

    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME, PORT);
    mysqli_set_charset($conn, 'utf8');
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ". mysqli_connect_error();
        exit();
    }
?>