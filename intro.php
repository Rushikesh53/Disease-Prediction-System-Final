
<!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Welcome to the disease Prediction System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link rel="stylesheet" href="css/login.css">
        <script src="js/modernizr/modernizr.min.js"></script>
        <style> 
             
             body{
                 background-color:white;
                 width:auto;
                 height:auto;
                 /* margin:30 auto; */
             }
             #register-btn, #next-btn {
                margin-left: 20px;
             }
             .intro-page{
                margin-left: 100px;
               margin-right: 150px;
               margin-top:0px;
             }
             .intro-page h2{
                font-size: 32px;
               font-weight: 900;
               color: #499bea;
             }
             .intro-page p
             {
                color: #071c55;
                font-size: 19px;
                font-weight: 800;
             }

             .flex-p {
                display: flex;

flex-wrap: wrap;

align-items: center;

}
            
             .flex-p .image-p{
      flex-basis: 40%;
    max-width: 40%;
    
             }
.flex-p .content-p {
    flex-basis: 60%;
    max-width: 60%;
   
    
}



    .intro-page a{
     background-color: #25dfce;
    font-size: 60x;
    font-weight: 900;
    color: #131001;

}     
 
.intro-page button{
   /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#499bea+33,207ce5+67 */
background: #333; /* Old browsers */
/* background: -moz-linear-gradient(top,  #499bea 33%, #207ce5 67%); 
background: -webkit-linear-gradient(top,  #499bea 33%,#207ce5 67%);
background: linear-gradient(to bottom,  #499bea 33%,#207ce5 67%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#499bea', endColorstr='#207ce5',GradientType=0 );  */

   
    float: right;
    /* border-radius: 25px; */
    transition:0.5s;
   color:white;

}  
.intro-page button:hover{
   /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#29b8e5+50,bce0ee+90 */
background: #000; /* Old browsers */
/* background: -moz-linear-gradient(top,  #29b8e5 50%, #bce0ee 90%); 
background: -webkit-linear-gradient(top,  #29b8e5 50%,#bce0ee 90%);
background: linear-gradient(to bottom,  #29b8e5 50%,#bce0ee 90%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#29b8e5', endColorstr='#bce0ee',GradientType=0 );  */

   color:white;
    /* border-radius: 25px; */


} 
li{
    list-style-type:none;
    display:block;
}
 
.flex-p-inside{
    display:flex;
    flex-wrap:wrap;
    align-items:center;
    margin-left:15px;
    margin-right:10px;
}
.flex-p-1{
    flex-basis: 6%;
    max-width: 53%;
    justify-content: flex-start;
    
}
.flex-p-2{
    flex-basis: 90%;
    max-width: 91%;
}
.flex-p-1 li a button i {
    color:white;
}
.flex-p-1 li a button i {
    color:white;
}

</style>
    </head>
    <body >
        
      
    <?php
      include "user_login.php";

      include "signup.php";

    ?> 
             
  <?php include('link/user-topber.php'); ?> 
    

     <div class="intro-page"> 


<div class="flex-p">

<div class="content-p">
   
                <ul>
                    <li>
                        <h2>Empower Your Future with Our Disease Prediction System!</h2>
                    </li>
                    <li>
                        <p>Harness knowledge as your ally in well-being. Our platform isn't just tech; it's your
                            health's proactive partner. Envision foreseeing health hurdles and seizing control of your
                            destiny. With top tech and a dedicated team, embark on this journey. Embrace info's power,
                            choose wisely, and unlock a brighter, healthier you. Your path to a better future starts
                            now.&nbsp&nbsp</p>
                    </li>

                </ul>

</div>  

<div class="image-p">
<img src="images/intro.JPG">
</div>
</div>

<div class="flex-p-inside">
<h5><b style="color:red;font-weight:900px;">NOTE : &nbsp</b><b>Here, you can login or check annonymously. If you don't have any account in this system then you can registered yourself. Registered users can get lot advantage than annonymous users. If you are already registered then simply login by putting your userID and Password. It's easy and free..</b></h5>

<div class="flex-p-1">
<li><a href="index.php" ><button>Back</button></li>
</div>

<div class="flex-p-2">
<li><a href="policy.php" ><button id="next-btn">Login as Guest</button></li>
<li><a><button id="register-btn" onclick="document.getElementById('0303').style.display='block'" style="width:auto;">Register</button></a></li>
<li><a><button id="login-btn" onclick="document.getElementById('1111111111').style.display='block'" style="width:auto;" >Login</button></a></li>
 <!-- class="homepage-button" -->
</div>

</div>

       
            
</div>

    </div>

        <!-- /.main-wrapper -->
        <script src="js/jquery-2.2.4.min.js"></script>

        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
