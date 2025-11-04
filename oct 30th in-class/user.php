<?php

    class User{
        public $userID;
        public $username;
        public $lastname;
        public $firstname;
        public $passwd;
        public $email;
        public $urole;
        public $lastModified;

        public function load($row){
            $this->userID = $row['userID'];
            $this->username = $row['username'];
            $this->lastname = $row['lastname'];
            $this->firstname = $row['firstname'];
            $this->passwd = $row['passwd'];
            $this->email = $row['email'];
            $this->urole = $row['urole'];
            $this->lastModified = $row['lastModified'];
        }
    }

 ?>