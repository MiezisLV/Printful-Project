<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'printful', 'printful1', 'printful_project');

          // check connection
          if(!$conn){
            echo 'Connection error: ' . mysqli_connect_error();
            }
?>