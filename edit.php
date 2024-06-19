<?php
include 'config.php';
extract($_REQUEST);
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
                <?php
                $query = "SELECT * from emp where id=$empid";
                $result = mysqli_query($link, $query);
                 // print_r($result,$query);
                // echo $query;
                if (mysqli_num_rows($result) > 0) {
                    ?>
                    <form class="empform" action="manfunctions.php" method="post" enctype="multipart/form-data">
                        <table cellspacing="20">
                            <tr>
                                <!-- <th colspan="2"><center>New Employee Form</center> </th> -->
                                <th>New Employee Form </th>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <tr>
                                    <td>Emp ID</td>
                                    <td><input type="text" name="empid"  value="<?= $row['id'] ?>" readonly="" /></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="empname" required="" value="<?= $row['name'] ?>"/></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="email" name="empemail" required="" value="<?= $row['email'] ?>"/></td>
                                </tr>
                                <tr>
                                    <td>Photo</td>
                                    <td><img src="<?= $row['profilepic'] ?>" alt="Profile Picture" width="200" height="200"/></td>
                                </tr>
                                <tr>
                                    <td>Change (optional)</td>
                                    <td><input type="file" name="profilepic" /></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button class="sbtn" name="submit" value="update">Update</button></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </form>
                    <?php
                } else {
                    echo 'Record Not found';
                }
                ?>
            </div>
        </div> 
    </body>
</html>


