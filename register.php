<?php
$att = '';
if (isset($_GET['att'])) {
   $att = $_GET['att'];
}

if (isset($_POST['submit'])) {
    $post = $_POST;
    $fullname = $post['firstname']. ' '. $post['lastname'];
    $username = $post['username'];
    $email = $post['email'];
    $password = $post['password'];

    require 'classes/users.php';
    $user = new Users;
    $register = $user->register($fullname,$username,$email,$password);
    echo $register;
}elseif (isset($_POST['login'])) {
    $post = $_POST;
    $email = $post['email'];
    $password = $post['password'];

    require 'classes/users.php';
    $user = new Users;
    $register = $user->login($email,$password);
    echo $register;
}else{

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src ="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src ="assets/js/bootstrap.bundle.js"></script>
    <style>
    .container{margin: 50px auto;
        width:400px;}
    </style>

</head>
<body>

<?php 
include 'views/header.php';

if ($att == 'register') {
    # code...
    ?>

    <div class= "container">
    <div class="row">
        <div class="col-md-12 ">
        
            <form class="text-center border border-light p-5" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <p class="h4 mb-4">Sign Up!</p>
            <div class="form-row mb-4">
                <div class="col">
                    <input type="text" name="firstname" placeholder="Firstname" class="form-control" />
                </div>

                <div class="col">
                    <input type="text" name="lastname" placeholder="Lastname" class="form-control">
                </div>
               
            </div>

             <input type="email" name="email" placeholder="Email" class="form-control mb-4" />
            <input type="text" name="username" placeholder="Username" class="form-control mb-4" />
            <input type="password" name="password" placeholder="password" class="form-control mb-4" />
            <input type="submit" name="submit" class="btn btn-primary" value="Sign Up!" />
            </form>
        </div>
    </div>
    
    </div>
<?php
}elseif($att == 'login'){
    ?>

   <!--  Login container -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="text-center border border-light p-5" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                    <p class="h4 text-primary mb-4">Log in</p>
                    <input type="email" class="form-control mb-4" name="email" placeholder = "Email" />
                        
                    <input type="password" class="form-control mb-4" name="password" placeholder="password">
                    <input type="submit" name="login" class="btn btn-primary" value="Log in"/>
                </form>
            </div>
        </div>
    </div>
<?php
}elseif ($att == 'logout') {
    session_destroy();
    header("Location:index.php");
}else{?>
       <div class= "container">
    <div class="row">
        <div class="col-md-12 ">
        
            <form class="text-center border border-light p-5" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <p class="h4 mb-4">Sign Up!</p>
            <div class="form-row mb-4">
                <div class="col">
                    <input type="text" name="firstname" placeholder="Firstname" class="form-control" />
                </div>

                <div class="col">
                    <input type="text" name="lastname" placeholder="Lastname" class="form-control">
                </div>
               
            </div>

             <input type="email" name="email" placeholder="Email" class="form-control mb-4" />
            <input type="text" name="username" placeholder="Username" class="form-control mb-4" />
            <input type="password" name="password" placeholder="password" class="form-control mb-4" />
            <input type="submit" name="submit" class="btn btn-primary" value="Sign Up!" />
            </form>
        </div>
    </div>
    
    </div>
    <?php
}

include 'views/footer.php';
?>
   
</body>

</html>