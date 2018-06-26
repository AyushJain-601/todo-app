
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup-Page [TODO]</title>
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
    $name=$username=$email=$password=$re_password="";
    $name_err=$username_err=$email_err=$password_err=$re_password_err="";
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
        $name=$username=$email=$password=$re_password= new check_assign_input;
        $name=$name->check_empty("name","name_err");
            if(empty($_POST["name"])){
                $name_err="Name is required";
                
            }
            if(!preg_match("/[a-zA-Z ]/",$name)){
                $name_err="only alphabet and space is allowed";
                
            }
        $username=$username->check_empty("username","username_err");
            if(empty($_POST["username"])){
                $username_err="username is required";
                
            }
            if(preg_match("/_[a-zA-Z0-9]/",$username)){
                $username_err="Please kindly enter username using _,alphabet,number,*$";
                
            }
        $email=$email->check_empty("email","email_err");
            if(empty($_POST["email"])){
                $email_err="email is required";
                

            }
            if(preg_match("/_[a-zA-Z0-9]@./",$email)){
                $email_err="Invalid Email";
                
            }
        $password=$password->check_empty("password","password_err");
            if(empty($_POST["password"])){
                $password_err="password is required";
                
            }
            if(preg_match("/_[a-zA-Z0-9]/",$password)){
                $password_err="Please kindly enter password using _,alphabet,number,*$";
            
            }
            if($password=='' && $password<8){
                $password_err="Password should have 8 or more alphabet";
                
            }
        $re_password=$re_password->check_empty("repassword","re_password_err");
            if(empty($_POST["repassword"])){
                $re_password_err="password is required";
                
            }
            if(preg_match("/_[a-zA-Z0-9]/",$re_password)){
                $re_password_err="Please kindly enter password using _,alphabet,number,*,$";
            
            }
            if($re_password!=$password){
                $re_password_err="Password did not match.Please Re-enter";
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
                Sign up page
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
            <label class="label">Name</label>
              <span class="error">*<?php echo $name_err?></span>
                    
                <div class="control">
                    <input class="input" type="text" name="name" placeholder="Prefered display name">

                </div>
            </div>

            <div class="field">
                <label class="label">Username</label>
                <span class="error">*<?php echo $username_err?></span>
                <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" name="username" placeholder="Prefered username">
                <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
                </span>
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <span class="error">*<?php echo $email_err?></span>
                <div class="control has-icons-left has-icons-right">
                <input class="input" type="email" name="email" placeholder="Email you want to register with">
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
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

            <div class="field">
                <label class="label">Re-enter Password</label>
                <span class="error">*<?php echo $re_password_err?></span>
                <div class="control has-icons-left has-icons-right">
                <input class="input" type="password" name="repassword" placeholder="Re-enter your password for confirmation">
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
                </div>
            </div>    

    

           <div id="buttons" class="columns">
               <div class="column">
               <button type="submit" id="login" class="button is-large is-primary is-rounded">Register</button>
                </div>
                <!-- <div class="column">
                <button id="forgot" class="button is-small is-danger is-rounded is-outlined">Forgot password</button>
                </div> -->
                <div class="column">
                <button id="reg" class="button is-large is-primary is-rounded"><a href="login.php" style="color: white;text-decoration: none;">Already a member?</a></button>
                </div>
            </div>
            </div>
           </div>
          </div>
        <div class="column"></div>
        </div>
        <?php
            if(empty($name_err)&&empty($username_err)&&empty($email_err)&&empty($password_err)&&empty($re_password_err)){
                echo "Succesfully registered!";
            } 
        ?>
    </form>
   <?php 
        $name_err=$username_err=$email_err=$password_err=$re_password_err="";
    ?>
    <!-- <?php
        $var=5;
        $fruit="apples";
        echo "I brough with me ", $var, " amount of ", $fruit,"<br>";
        $var=51;
        $fruit="pineapples";
        echo "But it became ", $var, " amount of ", $fruit;
    ?> -->

    
  </div>
  </body>
</html>