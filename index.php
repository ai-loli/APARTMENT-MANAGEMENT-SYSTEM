<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title></title>

    <script>
      <!--
        var ScrollMsg= "Apartment Management System - "
        var CharacterPosition=0;
        function StartScrolling() {
        document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
        ScrollMsg.substring(0, CharacterPosition);
        CharacterPosition++;
        if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
        window.setTimeout("StartScrolling()",150); }
        StartScrolling();
      // -->
    </script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<body class="hold-transition login-page">
<?php
  require('connect_to_sql.php');
  session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = stripslashes($username);
        $username =  mysqli_real_escape_string($dbc,$username);

        $password = stripslashes($password);
        $password =  mysqli_real_escape_string($dbc,$password);

        //Checking is user existing in the database or not
        $query = "SELECT * FROM `member` WHERE username='$username' and password='$password'";
        $result = mysqli_query($dbc,$query) or die((mysqli_error($dbc)));
        $rows = mysqli_num_rows($result);

        if($rows==1)
        {
          $_SESSION['username'] = $username;
          header("Location: index.php");
        }
        else
        {
          ?>
          <script>
            alert('Invalid Keyword, please try again.');
            window.location.href='login.php';
          </script>
          <?php
        }
    }
    else
    {
?>
        <div>
          <h1 style= "font: 50px Times New Roman, serif";><center>APARTMENT MANAGEMENT SYSTEM<center></h1>
        </div>
        <div class="container mt-5">
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="card bg-dark"style="width: 30rem;">
        <form action="home.php" method="post">

  <div class="container">
    <label class=text-light for="username"><b>Username</b></label>
    <input class="form-control" type="text" placeholder="Enter Username" name="username" required>

    <label class="text-white" for="psw"><b>Password</b></label>
    <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>

    <button class="btn btn-success" type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button class="btn btn-danger" type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>
</div>
</div>
</div>


<?php } ?>


  </body>
</html>