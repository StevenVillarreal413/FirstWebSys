<?php
    require_once 'userinfo.php';

    class classDAO{

        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "mvcuser", "mvcpass", "patternMVCAuth");
            if($mysqli->connect_errno){
                $mysqli=null;
            }

            return $mysqli;
        }

        public function getContacts(){
            $connection = $this->getConnection();
            $state = $connection->prepare("SELECT * FROM users;");
            $state->execute();
            $result = $state->get_result();
            while($row = $result->fetch_assoc()){
                $info = new userInfo.php();
                $info->load($row);
                $userInfo[]=$info;
            }
        }
    }

?>