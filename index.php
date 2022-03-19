<?php include('includes/con.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <link rel="stylesheet" href="bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  function preventBack(){ window.history.forward()};
  setTimeout("preventBack()",0);
  window.onunload=function(){null;}
  </script>
  <link rel="shortcut icon" type="image/x-icon" href="includes/logo.png">
  <title>Rafay Digital Agency</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="mb-3">
                <h3>Login Form</h3>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="shadow p-4" autocomplete="off">
                <div class="mb-3">
				    <div class="form-floating p-1">
                    <input type="email" class="form-control" name="username" id="username" placeholder="Username">
					<label for="username">Email/Username</label></div>
                </div>
                <div class="mb-3">
				    <div class="form-floating p-1">
                    <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
					<label for="Password">Password</label></div>
                </div>
                <div class="mb-3">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>
                <hr>
                <p class="text-center mb-0">If you have not account <a href="signup.php">Register Now</a></p>
            </form>
        </div>
    </div>
</div>
<?php
        if(isset($_POST['login'])){
          if(!isset($_POST['username']) || $_POST['username'] == ''){

            echo '<div class="message error">Please Fill All The Fields.</div>';

          }else if(!isset($_POST['password']) || $_POST['password'] == ''){

            echo '<div class="message error">Please Fill All The Fields.</div>';
          }else{
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = $conn->prepare("SELECT * FROM users WHERE user_email = ? AND password = ?");
            $sql->bind_param("ss",$username,$password);
            $sql->execute();
            //  ' or ''='

            $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";
            // exit;
            if (count($result) > 0) {

              /* Start the session */
              session_start();
              /* Set session variables */
             $_SESSION["id"] = $result[0]['id'];
             $_SESSION["first_name"] = $result[0]['first_name'];
             $_SESSION["last_name"] = $result[0]['last_name'];
             $_SESSION["user_email"] = $result[0]['user_email'];
             $_SESSION["password"] = $result[0]['password'];
              header("location: home");

            }else{
                echo "<div class='message error'><script>alert('Email and Password Not Matched.')</script></div>";
            }
            $sql->close();
          }
        }
        // db close connection
        $conn->close();
      ?>
</body>
</html>
