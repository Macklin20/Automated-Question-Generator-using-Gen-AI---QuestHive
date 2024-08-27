<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>
    <style>
        
        .login-container {
            background-color: #d9d9d9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 450px;
            color: rgb(71, 71, 71);
            font-size: larger;
            justify-content: center;
            align-items: center;
            margin-top: 200px;
        }
        h2 {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: large;
            border-bottom:  rgb(99, 99, 99) 2px solid;
            border-right:  rgb(99, 99, 99) 2px solid;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #727476;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: large;
        }
        .login-btn:hover {
            background-color: #acacae;
            color: white;
            border: 1px solid black;
        }
        .error-message {
            color: red;
            margin-top: 10px;
            display: none;
        }
        #questhive{
            position: relative;
            margin: 0 ;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body style="background-image: url(bg.jpg);">
<h2 id="questhive"><sTRong>QUESTHIVE</sTRong></h2>
    <center>
<div class="login-container">
    <h2 style="font-size: xx-large;">Administrator Login</h2>
    <form onsubmit="return validateLogin()">
        <input type="text" id="username1" name="username1" placeholder="Username" required>
        <input type="password" id="password1" name="password1" placeholder="Password" required>
        <button type="submit" class="login-btn">Login</button>
        <p id="error-message" class="error-message">Invalid username or password</p>
    </form>
</div>
</center>

<script>
    function validateLogin() {
        const username1 = document.getElementById('username1').value;
        const password1 = document.getElementById('password1').value;

        if (username1 === 'admin' && password1 === '123') {
            window.location.href = 'admin_page.php'; // Redirect to the admin dashboard
            return false; // Prevent the form from actually submitting
        } else {
            document.getElementById('error-message').style.display = 'block'; // Show error message
            return false; // Prevent the form from submitting
        }
    }
</script>

</body>
</html>
