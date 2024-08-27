<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Remove</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
    <style>
        .container{
            background-color: #d9d9d9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 500px;
            color: rgb(71, 71, 71);
            font-size: larger;
            justify-content: center;
            align-items: center;
            margin-top: 150px;
            display: flex;
            flex-direction: column;
        
        }
        
        input[type="email"],input[type="password"],input[type="text"]{
            width: 300px;
          position: relative;
            
        }
        .btn{
            width: 200px;
             background-color: rgb(161, 159, 159); 
             font-size: large; 
             height: 50px; 
             border-radius: 10px; 
             margin-top: 20px;
        }
        
        .btn:hover{
            background-color: rgb(178, 176, 176);
        }

        #fName{
            justify-content: center;
            height: 25px;
           margin: 5px;
           padding: 4px;
            
        }
        #lName{
            justify-content: center;
            height: 25px;
            
           margin: 5px;
           padding: 4px;
        }
        #email{
            justify-content: center;
            height: 25px;
           margin: 5px;
           padding: 4px;
        }
        #password{
            justify-content: center;
            height: 25px;
           margin: 5px;
           padding: 4px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
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
    <div class="container" id="signup">
      <h1 class="form-title">Trainer Remove</h1>
      <form method="post" action="t_remote.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Remove Trainer" name="signUp">
      </form>
    </div></center>
</body>
</html>
