<?php
    require_once 'classDAO.php';

    showErrors(1);

    $method=$_SERVER['REQUEST_METHOD'];

    if($method=='GET)'){
        $classDAO = new ClassDAO();
        $contacts = $classDAO->getContacts();
        include "home-view.php";
    }

?>