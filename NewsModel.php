<?php 
    include("NewsConnect.php");
    $dbs = Connected::ConnectDB();
    class NewsModel{
        public static function getCount($limit){
            global $dbs;
            $res_count = $dbs->query("SELECT COUNT(*) FROM news");
            $row = $res_count->fetch();
            $total = $row[0];
            $str_page = ceil($total / $limit);
            return $str_page;
        }
        public static function getList($offset, $limit){
            global $dbs;
            $query = $dbs->query("SELECT *,DATE_FORMAT(date,'%d.%m.%y') dt FROM news ORDER BY date DESC LIMIT $offset, $limit");
            return $query;
        }
        public static function getItem($limithero){
            global $dbs;
            $resi = $dbs->query("SELECT * FROM news ORDER BY date DESC LIMIT $limithero");
            return $resi;
        }
        public static function getID(){
            global $dbs;
            $st = $dbs->prepare("SELECT *,DATE_FORMAT(date,'%d.%m.%y') dt FROM news WHERE id=?");
            $st -> bindValue(1, $_GET['id'], PDO::PARAM_INT);
            $st -> execute();
            $row = $st->fetch();
            return $row;
        }
        public static function getMail(){
            global $dbs;
            $st = $dbs->prepare("INSERT INTO feedback VALUES (0, ?, ?, ?)");
            return $st;
        }
    }
?>