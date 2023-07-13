<?php
    class Connected{
        public static function ConnectDB(){
        include("connectDB.php");
        return $dbs;
        }
    }
?>