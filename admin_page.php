<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        

        .container {
            text-align: center;
            justify-content: center;
            align-items: center;
            margin-top: 200px;
        }

        .button {
            display: inline-block;
           
            font-size: x-large;
            font-weight: bold;
            color: #2d2c2c;
            background-color:  rgb(160, 160, 160);
            border: 2px rgb(69, 69, 69) solid;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            margin: 10px;
            width: 250px;
            height: 50px;
            padding: 25px 0px 0px 0px;

           
        }

        .button:hover {
            background-color: #c5c7c8;
            transform: translateY(-2px);
        }

        .button:active {
            background-color: #c6c7c9;
            transform: translateY(1px);
        }

        .button.add-employee {
            background-color: #28a745;
        }

        .button.add-employee:hover {
            background-color: #218838;
        }

        .button.add-employee:active {
            background-color: #1e7e34;
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
    <div class="container">
        <a href="t_register.php" class="button" >Add Trainer</a>
        <a href="e_register.php" class="button">Add Employee</a>
    </div>
    <br>
    <div class="container" style="margin-top: 10px;">
        <a href="t_remove.php" class="button">Remove Trainer</a>
        <a href="e_remove.php" class="button">Remove Employee</a>
    </div>
</body>
</html>
