<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User Management</title>
    <link rel="stylesheet" href="static/user.css">
    <style>
        body {
            background-color: #F53D68;
            margin: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
            animation: backgroundAnimation 10s ease-in-out infinite;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }
        .logo1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 10px 40px;
            position: fixed;
            top: 0;
            background-color: #F53D68;
            z-index: 10;
            animation: backgroundAnimation 10s ease-in-out infinite;
        }
        .logo1 #questhive1 {
            display: flex;
            align-items: center;
            font-size: 45px;
            color: white;
            font-weight: bold;
            margin-left: 10px;
        }
        .logo1 #questhive1 img {
            margin-left: 8px;
        }
        .content-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin-top: 60px;
            padding: 0 20px;
            text-align: center;
            color: white;
        }
        .logo {
            font-size: 45px;
            animation: slideIn 1s ease-in-out;
        }
        #questhive {
            font-size: 100px;
            animation: bounce 1.5s infinite;
        }
        #logout {
            width: 80px;
            padding: 10px 15px;
            text-align: center;
            background-color: white;
            border: 1px solid #F53D68;
            color: #F53D68;
            font-size: 25px;
            border-radius: 10px;
            text-decoration: none;
            margin: 0 20px;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
            margin-bottom: 80px;
            width: calc(100% - 10px);
            padding: 0 10px;
        }
        .row {
            display: flex;
            justify-content: center;
            gap: 60px 40px;
            margin-bottom: 20px;
        }
        .button {
            width: 250px;
            height: 80px;
            background-color: white;
            border: 1px solid #F53D68;
            color: #F53D68;
            font-size: 30px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            animation: fadeInUp 1.5s ease-in-out;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .button:hover {
            background-color: #F53D68;
            color: white;
        }
        @keyframes backgroundAnimation {
            0% { background-color: #F53D68; }
            50% { background-color: #F5007D; }
            100% { background-color: #F53D68; }
        }
        @keyframes slideIn {
            0% { transform: translateX(-100%); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-30px); }
            60% { transform: translateY(-15px); }
        }
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .content {
            font-size: 25px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="logo1">
        <div id="questhive1">
            Questhive
            <img src="images/image3.png" alt="logo" style="width: 50px; height: 50px;" class="img">
        </div>
        <a id="logout" href="admin_page.php">Back</a>
    </div>
    <div class="content-container">
        <div class="logo">
            <div id="questhive">User Management</div>
            <div class="content">Manage your users efficiently with our easy-to-use interface!</div>
        </div>
        <div class="container">
            <div class="row">
                <a href="t_register.php" class="button">Add Trainer</a>
                <a href="e_register.php" class="button">Add Employee</a>
                <a href="trainer_user_list.php" class="button">Trainer List</a>
            </div>
            <div class="row">
                <a href="t_remove.php" class="button">Remove Trainer</a>
                <a href="e_remove.php" class="button">Remove Employee</a>
                <a href="employee_user_list.php" class="button">Employee List</a>
            </div>
        </div>
    </div>
</body>
</html>
