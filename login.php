
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login-Page [TODO]</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!--Intergrates JQuery -->
    <script src="./scripts/script.js"></script>
    <style>
    .error {color: #FF0000;}
    </style>
  </head>
  <body>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        try{
                $conn= new PDO("mysql:host=$servername;dbname=database_new",$username,$password);
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $error) {
                echo "connection failed!".$error->getMessage();
        }
    ?> 
    <?php 
        $username1=$email=$password1="";
        $username_err=$email_err=$password_err=$check_err="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            class check_assign_input{
            function check_empty($id,$id_err){
                if(empty($_POST["$id"])){
                    $id_err="Input is required";
                }
                else{
                    $id=$_POST["$id"];
                    return $id;
                }
                return "";
            }       
        }
        $username1=$email=$password1= new check_assign_input;
        $username1=$username1->check_empty("username","username_err");
        if(!filter_var($username1, FILTER_VALIDATE_EMAIL)){               
                if(preg_match("/_[a-zA-Z0-9]/",$username1)){
                    $username_err="Please kindly enter name using _,alphabet,number,*$";
                
                }
        }
        else{
                $email=$email->check_empty("username","username_err");
                    /*if(empty($_POST["email"])){
                       $email_err="email is required";
            
                     }*/
                    if(preg_match("/_[a-zA-Z0-9]@./",$email)){
                       $email_err="Invalid Email";
                    }
            }
         if(empty($_POST["username"])){
                    $username_err="username is required";
                
                }
        $password1=$password1->check_empty("password","password_err");
            if(empty($_POST["password"])){
                $password_err="password is required";
                
            }
            if(preg_match("/_[a-zA-Z0-9]/",$password1)){
                $password_err="Please kindly enter password using _,alphabet,number,*$";
            
            }
            if($password1=='' && $password1<8){
                $password_err="Password should have 8 or more alphabet";
                
            }
            $user = 'SELECT username,email,password FROM user_info';
            $info = $conn->query($user);
            $info->setFetchMode(PDO::FETCH_ASSOC);
            while($row=$info->fetch()){
                if($username1==$row['username']&&$password1==$row['password']){
                    header('location:profile.php');
                }
                else{
                    if($username1!=$row['username']){
                        $check_err="User does not exist";
                    }
                    if($password1!=$row['password']&&$username1==$row['username']){
                        $password_err="Incorrect password";
                    }
                }
            }
    }
?>
  <div class="container">
    <section class="section">
        <div class="hero">
            <div class="hero-body">
            <h1 class="title is-1">
                Todo App
            </h1>
            <p class="subtitle">
                Log In page
            </p>
            </div>
        </div>
        </section>

    
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="columns">
            <div class="column"></div>
            <div class="column is-half">
            <div class="card">
            <div class="card-content">  
            <div class="field">
                <label class="label">Username</label>
                <span class="error"><?php echo $check_err?></span>
                <span class="error">*<?php echo $username_err?></span>
                <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" name="username" placeholder="Prefered username">
                <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
                </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Password</label>
                <span class="error">*<?php echo $password_err?></span>
                <div class="control has-icons-left has-icons-right">
                <input class="input" type="password" name="password" placeholder="Enter your password">
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
                </div>
            </div>
           <div id="buttons" class="columns">
               <div class="column">
               <button type="submit" id="login" class="button is-large is-primary is-rounded">Log In</button>
                </div>
                <div class="column">
                <button id="reg"  class="button is-large is-primary is-rounded"><a href="index2.php" style="color: white;text-decoration: none;">Don't have account?</a></button>
                </div>
            </div>
            </div>
           </div>
          </div>
        <div class="column"></div>
        </div>

    </form>
    <?php 
        $username_err=$email_err=$password_err="";
    ?>
  </div>
  </body>
</html>