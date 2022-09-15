<?php 
    include_once('config.php');
    
    class DB_CON {
        function __construct()
        {
            $conection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
            $this->dbcon=$conection;
        }
    
    

        public function sql($sql){
            $result = mysqli_query($this->dbcon,$sql);
            return $result;
        }
    }

?>