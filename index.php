
<!DOCTYPE html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
    <head>  
        <title>Disease Prediction System </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/login.css">

 
        <style>

button{
    cursor:pointer;
}

</style>

    </head>
    <body>



    <?php
      include "login.php";
    ?> 
        <section class="container content">
            <div class="hompage">
            <div class="home-content">
            <h1>Disease Prediction System</h1>
            <h2>Your Good Health Is Your Greatest Wealth</h2>
            <br><br>
           
            <br>
            <br>
            <br>
            <ul>
            <li><button class="homepage-button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a>Login as Admin</a></button></li>
           &nbsp&nbsp&nbsp&nbsp&nbsp<li> <button class="homepage-button"><a href="intro.php"> Start Checkup </a></button></li>           
            </ul>
            </div>
      </div>
        </section>


    </body>
</html>