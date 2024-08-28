<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login</title>
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
<div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="eregister.php">
         <table><tr> <div class="input-group">
             <td> <i class="fas fa-envelope"></i></td>
              <td><input type="email" name="email" id="email" placeholder="Email" required></td>
              <td><label for="email">Email</label></td>
          </div></tr>
          <tr><div class="input-group">
             <td><i class="fas fa-lock"></i></td>
             <td> <input type="password" name="password" id="password" placeholder="Password" required></td>
              <td><label for="password">Password</label></td>
          </div></tr></table>
          <p class="recover">
            <a href="#" style="color: rgb(98, 97, 97);">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
</div></center>
</body>
</html>





