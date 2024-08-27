<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automated Question Builder Application - Login</title>
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
            
            
            
        }
        h2 {
            margin-bottom: 20px;
        }
        .role-btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .role-btn:hover {
            background-color: #dcdcdc;
        }
        .admin {
            background-color: #c2c2c2;
            color: rgb(81, 102, 115);
            font-size: 1.5pc;
            border-bottom:  rgb(99, 99, 99) 2px solid;
            border-right:  rgb(99, 99, 99) 2px solid;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            height: 50px;
        }
        .trainer {
            background-color: #c2c2c2;
            color: rgb(81, 102, 115);
            font-size: 1.5pc;
            border-bottom:  rgb(99, 99, 99) 2px solid;
            border-right:  rgb(99, 99, 99) 2px solid;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            height: 50px;
        }
        .employee {
            background-color: #c2c2c2;
            color: rgb(81, 102, 115);
            font-size: 1.5pc;
            border-bottom:  rgb(99, 99, 99) 2px solid;
            border-right:  rgb(99, 99, 99) 2px solid;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            height: 50px;
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
   <h2 id="questhive"><strong>QUESTHIVE</strong></h2>
<center>

<div class="login-container" style="margin-top: 200px; align-items: center;">
    <h2 style="padding-bottom: 5px;">Login as:</h2>
    <button class="role-btn admin" onclick="window.location.href='admin_login.php'">Administrator</button>
    <button class="role-btn trainer" onclick="window.location.href='trainer_login.php'">Trainer</button>
    <button class="role-btn employee" onclick="window.location.href='employee_login.php'">Employee</button>
</div>
</center>
</body>
</html>
