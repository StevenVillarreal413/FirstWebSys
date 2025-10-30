<?php

    class Contact{
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


        public function getUserID(){
            return $this->userID;
        }
        public function getUsername(){
            return $this->username;
        }
        public function getLastName(){
            return $this->lastname;
        }
        public function getFirstName(){
            return $this->firstname;
        }
        public function getPasswd(){
            return $this->passwd;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getURole(){
            return $this->urole;
        }
        public function getLastModified(){
            return $this->lastModified;
        }
    }

?>