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
            <div class="rright">
                <?php
                $query = "SELECT * from emp";
                $result = mysqli_query($link, $query);
                if (mysqli_num_rows($result) > 0) {
                    ?>
                    <h3>Employee List</h3>
                    <table class="ta">
                        <thead>
                            <tr>
                                <th>Emp id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Profile</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody class="tb">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><img src="<?= $row['profilepic'] ?>" width="100" height="100"></td>
                                    <td>
                                        <a href="edit.php?empid=<?= $row['id'] ?>">Edit</a> | 
                                        <a href="manfunctions.php?empid=<?= $row['id']?> &submit=delete" onclick=" return confirm('Are You sure to delete thid?')">Delete</a>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <?php
                } else {
                    echo 'Record Not found';
                }
                ?>
            </div>
        </div>

    </body>
</html>




