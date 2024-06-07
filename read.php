<?php

include 'Database.php';
include 'User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$result = $user->getUsers();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>READ DATA</title>

        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }
            h1 {
                text-align: center;
                margin-top: 20px;
            }
            table {
                width: 80%;
                margin: 20px auto;
                border-collapse: collapse;
                border: 1px solid #ccc;
            }
            th, td {
                padding: 10px;
                border: 1px solid #ccc;
            }
            th {
                background-color: #f2f2f2;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            tr:hover {
                background-color: #e0e0e0;
            }
            a {
                text-decoration: none;
                color: #007bff;
            }
            a:hover {
            text-decoration: underline;
            }
        </style>
        <h1>Registration Data</h1>

    </head>

    <body>
        <table border="1">
            <tr>
                <th>Matric</th>
                <th>Name</th>
                <th>Level</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row["matric"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["role"]; ?></td>
                        <td><a href="update_form.php?matric=<?php echo $row["matric"]; ?>">Update</a></td>
                        <td><a href="delete.php?matric=<?php echo $row["matric"]; ?>">Delete</a></td>
                    </tr>
                </tr>
                <?php
                } 
            } else {
                echo "<tr><td colspan='3'>No users found</td></tr>";
            }

            $db->close();
            ?>
        </table>
    </body>
</html>