<?php 
    session_start();
    include_once "config.php";
    //1:44:57 / 2:44:59
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}"); // ko hien ban than
    $output = "";
    if(mysqli_num_rows($sql) == 1){
        $output .= "no users are available to chat";
    }else if(mysqli_num_rows($sql) > 0){

        include "data.php";
        // while($row = mysqli_fetch_assoc($sql)){
        //     $output .= '<a href="#">
        //         <div class="content">
        //             <img src="php/images/' . $row['img']. '" alt="">
        //             <div class="details">
        //                 <span>' . $row['fname'] . " " . $row['lname']. '</span>
        //                 <p>this is test message</p>
        //             </div>
        //         </div>
        //         <div class="status-dot">
        //             <i class="fas fa-circle"></i>
        //         </div>
        //     </a>';
        // }
    }
    echo $output;
?>