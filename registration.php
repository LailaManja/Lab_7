<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>

        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background-color: grey;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            form {
                background-color: white;
                padding: 20px;
                border-radius: 20px;
                box-shadow: 0 0 10px black;
                width: 300px;
            }
            h1 {
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }
            label {
                font-weight: bold;
                color: black;
            }
            input[type="text"],
            input[type="password"],
            select{
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid grey;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 16px;
            }
            input[type="submit"] {
            width: 100%;
            background-color: grey;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            }
            input[type="submit"]:hover {
            background-color: blue;
            }
            p {
                text-align: center;
            }

        </style>
    </head>

    <body>
        <form action="insertdata.php" method="post">
            <h1>Welcome to Registration Form</h1>
            <label for="matric">Matric:</label>
            <input type="text" name="matric" id="matric" required><br>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>
            <label for="role">Role:</label>
            <select name="role" id="role" required>
                <option value="">Please Select</option>
                <option value="lecturer">Lecturer</option>
                <option value="student">Student</option>
            </select><br>
            <input type="submit" name="submit" value="Register">
            <p>Return to <a href="login.php">login.</p>
        </form>
    </body>
</html>