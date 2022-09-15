<?php 
    include_once('config.php');
    
    class DB_CON{
        function __construct()
        {
            $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSSWORD, DB_NAME);
            if(mysqli_error()){
                echo "Not connect Database";
            }
        }
    }

?>