<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> <style>
        .container{
            background-image:url(log.1.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:cover;width: 100%;
            height: auto;
        }
        @media screen and (max-width:1000px){
           .container{
            background-image:url(home.jpg);
           }
        }
        .d1{
            margin-top: 250px;
        }
        .checkbox{
            color:whitesmoke;
        }
      .form-control ::placeholder
      {
        color: cyan;
      }
      
      
    </style>
</head>
<body class="container">
    <div class="d1">        <form class="form-horizontal" action="login.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-4" for="username">User name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" placeholder="Enter name" name="username">
                </div>
            </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="pwd">Password:</label>
                    <div class="col-sm-4">          
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    </div>
                </div>
                <div class="form-group">        
                    <div class="col-sm-offset-4 col-sm-10">
                      <div class="checkbox">
                        <label><input  type="checkbox" name="remember"> Remember me</label>
                      </div>
                    </div>
                  </div>
                <div class="form-group">        
                    <div class="col-sm-offset-4 col-sm-10">
                      <button type="submit" style="font-size: 20px;color: white;" class="btn btn-success" >Login</button>
                      <button style="font-size: 20px;" class="btn btn-primary"><a style="color: white;" href="signup.html">Register</a></button>
                    </div>
                  </div>
                  
            </div>

                </body>
</html>