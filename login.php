<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>

        <style>
            body {
                font-family: Arial, san-serif;
                background-color: pink;
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
            }
            h1 {
                text-align: center;
            }
            label {
                font-weight: bold;
            }
            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid hotpink;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type="submit"] {
                width: 100%;
                background-color: hotpink;
                color: white;
                padding: 10px;
                border: 1px solid hotpink;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }
            input[type="submit"]:hover{
                background-color: white;
                color: hotpink;
            }
        </style>
    </head>

    <body>
        <form action="authenticate.php" method="post">
        <h1>Login Page</h1>
            <label for="matric">Matric:</label>
            <input type="text" name="matric" id="matric" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>
            <input type="submit" name="submit" value="Submit">
            <div class="register">
                <p>Don't have account? Register 
                    <a href="registration.php">here.</p>
            </div>
        </form>
    </body>
</html>