<!DOCTYPE html>
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
  </head>
  <body>
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

        <div class="columns">
        <div class="column"></div>
        <div class="column is-half">
        <div class="card">
        <div class="card-content">  
        <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input class="input" type="text" placeholder="Prefered display name">
        </div>
        </div>

        <div class="field">
        <label class="label">Username</label>
        <div class="control has-icons-left has-icons-right">
        <input class="input" type="text" placeholder="Prefered username">
        <span class="icon is-small is-left">
        <i class="fas fa-user"></i>
        </span>
        </span>
        </div>
        </div>

    <div class="field">
    <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
        <input class="input" type="email" placeholder="Email you want to register with">
        <span class="icon is-small is-left">
        <i class="fas fa-envelope"></i>
        </span>
    </div>
    </div>

    <div class="field">
    <label class="label">Password</label>
        <div class="control has-icons-left has-icons-right">
        <input class="input" type="email" placeholder="Enter your password">
        <span class="icon is-small is-left">
        <i class="fas fa-lock"></i>
        </span>
    </div>
    </div>

    <div class="field">
    <label class="label">Re-enter Password</label>
        <div class="control has-icons-left has-icons-right">
        <input class="input" type="email" placeholder="Re-enter your password for confirmation">
        <span class="icon is-small is-left">
        <i class="fas fa-lock"></i>
        </span>
    </div>
    </div>    

    

           <div id="buttons" class="columns">
               <div class="column">
               <button id="login" class="button is-large is-primary is-rounded">Register</button>
                </div>
                <!-- <div class="column">
                <button id="forgot" class="button is-small is-danger is-rounded is-outlined">Forgot password</button>
               </div> -->
               <div class="column">
               <button id="reg" class="button is-large is-primary is-rounded">Already a member?</button>
               </div>
            </div>
            </div>
           </div>
          </div>
        <div class="column"></div>
    </div>

    
  </div>
  </body>
</html>