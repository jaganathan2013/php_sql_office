<?php
include 'config.php';
?>
<!doctype html>
<html>
    <head>
        <title>Employee list</title>
        <link href="css/crudstyles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="left">
                <?php require 'menu.php'; ?>
            </div>
            <div class="right">
                <form class="empform" action="manfunctions.php" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th>New Employee Form</th>
                        </tr>
                        <tr>
                            <td>Emp ID</td>
                            <td><input type="text" required="" name="empid"  placeholder="1 to 100"/></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" required="" name="empname"  placeholder="name"/></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" required="" name="empemail" placeholder="h@gmail.com"/></td>
                        </tr>
                        <tr>
                            <td>Photo</td>
                            <td><input type="file" name="profilepic" required  /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="sbtn" name="submit" value="create">Submit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </body>
</html>

