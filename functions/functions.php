<?php 
    include_once('config.php');
    
    class DB_CON{
        function __construct()
        {
            $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSSWORD, DB_NAME);
            if($connection->connect_errno){
                echo "Not connect Database";
            }
        }
    }

?>