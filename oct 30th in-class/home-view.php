<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CSCE 20303 | Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar bg-body-tertiary mb-5">
            <div class="container">
                <a class="navbar-brand" href="#">
                <img src="images/logo.png" height="40%" width="40%" alt="UAFS">
                </a>
            </div>
        </nav>
        <div class="container">
            <a href="contactAddController.php" class="btn btn-primary">Add Contact</a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>User Role</th>
                        <th>Last Modified</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($index=0;$index<count($users);$index++){
                    ?>
                    <tr>
                        <td><?php echo $users[$index]->userID ?></td>
                        <td><?php echo $users[$index]->username ?></td>
                        <td><?php echo $users[$index]->lastname ?></td>
                        <td><?php echo $users[$index]->firstname ?></td>
                        <td><?php echo $users[$index]->passwd ?></td>
                        <td><?php echo $users[$index]->email ?></td>
                        <td><?php echo $users[$index]->urole ?></td>
                        <td><?php echo $users[$index]->lastModified ?></td>
                        <td><a href="contactDeleteConfirmController.php?contactID=<?php echo $contacts[$index]-> contactID ?>" class = "btn btn-danger">Delete</a></td>
                        <td><a href ="contactUpdateController.php?contactID=<?php echo $contacts[$index]-> contactID ?>" class = "btn btn-primary">Update</a></td>
                    </tr>
                    <?php
                        }
                    ?>        
                </tbody>
            </table>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>