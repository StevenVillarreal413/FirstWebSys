<?php
    require_once 'classDAO.php';

    showErrors(0);

    $method=$_SERVER['REQUEST_METHOD'];

    if($method=='GET)'){
        $classDAO = new ClassDAO();
        $users = $classDAO->getContacts();
        include "home-view.php";
    }

?>