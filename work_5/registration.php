<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
<div class="form">
    <h1>Registration</h1>
        <form name="registation" action="" method="post">
            <input type="text" name="username" placeholder="Username" require>
            <input type="email" name="email" placeholder="Email" require>
            <input type="password" name="password" placeholder="Password" require>
            <input type="submit" name="submit" value="Register">
        </form>
</div>
    <?php
        require('db.php');
        if(isset($_REQUEST['username'])) {
            $username = stripslashes($_REQUEST['username']);
            
            $email = stripslashes($_REQUEST['email']);
            
            $password = stripslashes($_REQUEST['password']);
            
            $trn_date = date("Y-m-d H:i:S");
            $query = "INSERT INTO users (username, password, email, trn_date)
                        VALUES ('$username','".md5($password)."','$email','$trn_date')";
            $result = mysqli_query($con,$query);
            if($result) {
                echo "<div class='form'>
                    <h3>You are registered successfully<h3>
                    <br> Click here to <a href='login.php'>Login</a>
                </div>";
            } else { 
            }
        }
         ?>
</body>
</html>