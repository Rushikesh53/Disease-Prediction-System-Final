   
<?php    
session_start();  
error_reporting(0);   
include('link/config.php');
if(strlen($_SESSION['alogin'])=="")
    {    
    header("Location: user_login.php");  
    }
    else{  
     $username=$_SESSION["username"];

?>



<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Result</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <style>
             
             body{
                 background-color:white;
                 width:auto;
                 height:auto;
                
             }
             .intro-page{
                margin-left: 203px;
               margin-right: 203px;
               
             }
             .intro-page h2{
                font-size: 20px;
               font-weight: 900;
               color: black;
             }
             .intro-page p
             {
                padding-left: 10px;
                margin-bottom: 50px;

         color: #02050c;
    font-size: 16px;
    font-weight: 800;
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#87e0fd+41,53cbf1+57,05abe0+78 */
background: #87e0fd; /* Old browsers */
/* background: -moz-linear-gradient(top,  #87e0fd 41%, #53cbf1 57%, #05abe0 78%); 
background: -webkit-linear-gradient(top,  #87e0fd 41%,#53cbf1 57%,#05abe0 78%);
background: linear-gradient(to bottom,  #87e0fd 41%,#53cbf1 57%,#05abe0 78%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#87e0fd', endColorstr='#05abe0',GradientType=0 );  */
 color:black;
    /* border-radius: 10px; */
             }

             .flex-p {
                display: flex;

flex-wrap: wrap;

align-items: center;

}
             
             .flex-p .image-p{
                flex-basis: 30%;
    max-width: 30%;
    padding: 10px;
             }
.flex-p .content-p {
    flex-basis: 100%;
    max-width: 100%;
    padding: 21px;
    
}
.flex-p .content-p li{
     

}



             .intro-page a{
    color: white;

}     
 
.intro-page button{
   /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#499bea+33,207ce5+67 */
background: #333; /* Old browsers */
/* background: -moz-linear-gradient(top,  #499bea 33%, #207ce5 67%); 
background: -webkit-linear-gradient(top,  #499bea 33%,#207ce5 67%);
background: linear-gradient(to bottom,  #499bea 33%,#207ce5 67%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#499bea', endColorstr='#207ce5',GradientType=0 ); */

   
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
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#29b8e5', endColorstr='#bce0ee',GradientType=0 ); */

   color:white;
    /* border-radius: 25px; */


}
.flex-p-inside{
    display:flex;
    flex-wrap:wrap;
    align-items:center;
    position:relative;

}
.flex-p-1{
    flex-basis: 29%;
    max-width: 29%;
    position: absolute;
    top: -20px;
    
}
.flex-p-2{
    flex-basis: 100%;
    max-width: 100%;
}
li{
    list-style-type:none;
    display:block;
}
.result-color
{
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#a90329+40,8f0222+53,6d0019+84 */
background: #a90329; /* Old browsers */
/* background: -moz-linear-gradient(top,  #a90329 40%, #8f0222 53%, #6d0019 84%);
background: -webkit-linear-gradient(top,  #a90329 40%,#8f0222 53%,#6d0019 84%);
background: linear-gradient(to bottom,  #a90329 40%,#8f0222 53%,#6d0019 84%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 );  */
/* border-radius:20px; */
    font-weight:900;
    color:white;
}
.result-color1{
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#eeeeee+43,cccccc+72 */
background: #eeeeee; /* Old browsers */
/* background: -moz-linear-gradient(top,  #eeeeee 43%, #cccccc 72%); 
background: -webkit-linear-gradient(top,  #eeeeee 43%,#cccccc 72%);
background: linear-gradient(to bottom,  #eeeeee 43%,#cccccc 72%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#cccccc',GradientType=0 );  */

/* border-radius:20px;  */
    font-weight:900;
    color:black;
}
.flex-p-1 i{
    color:white;
}
</style>
    </head>
    <body >
      

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('link/user-topber.php'); ?> 
        </div>

        <div class="intro-page" >
    
 
        <div class="flex-p">
       <div class="content-p"> 
       <table id="example"  cellspacing="0" width="100%">

  
                                                    <tbody>
<?php $sql = "SELECT *from user where user_name='$username'";
$query = $dbh->prepare($sql);
$query->execute(); 
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0) 
{
foreach($results as $result)
{   ?> 
<tr> 
 <!-- <td><?php echo htmlentities($cnt);?></td> -->
       
                                <?php           $resultname=$result->result ; 

                                ?>
                                                           

</tr>
<?php $cnt=$cnt+1;}} ?>
                       
                                                    </tbody>
                                                </table>


<?php 

if($resultname==NULL)
{ 

?>
    <form class="form-horizontal" method="post">
 
    <table id="example"  >
                                   

                                                 <tbody>

<tr>
           
 <h3 class="result-color">&nbsp &nbspYou Didn't Check Yet.Maybe you are new user.To see your Result you have to check first</h3><br>
      
                                                        

</tr>  

                                                  
                                                 
                                                  </tbody>
                                             </table>

</div>
</div>
  </form>

<?php }
else 
{

?>

       <form class="form-horizontal" method="post">
 
       <table id="example"  >
                                      
       <h2>Previous Result</h2> 
           <p class="form-horizontal">&nbsp&nbspThis result is based on your symptoms.If you want to know better check again.</p>
           
                                                    <tbody>
<?php $sql = "SELECT  *from disease_tb where id=$resultname";

$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<tr>
 <!-- <?php echo htmlentities($cnt);?> -->
                 <h2>Previously Checked Result </h2>
                 <h3 class="result-color">&nbsp &nbsp<?php echo htmlentities($result->disease_name);?></h3><br>
                 <h2>Disease Cause </h2>                                 
             <h2 > <td class="result-color1"><?php echo htmlentities($result->cause);?></td><h2>
              
                                                            
             <!-- <input type="hidden" name="var1" value="<?php echo htmlentities($mainresult);?>"/> -->

</tr>  
<?php $cnt=$cnt+1;}} ?>
                                                       
                                                    
                                                     </tbody>
                                                </table>

 <!-- <input type="hidden" name="var1" value="<?php echo htmlentities($mainresult);?>"/> --> 

 <p> &nbsp&nbsp 
Disclaimer :
The information provided here is for educational purposes only and is not a substitute for qualified medical advice. 
It is essential to consult a healthcare professional for any health concerns or emergencies. If you're experiencing a 
medical emergency, call your local emergency number immediately.</p>


 <div class="flex-p-inside">

<div class="flex-p-2">


</div>
</div>
     </form>
 
<?php } ?>




     <div class="flex-p-inside">
 
<div class="flex-p-1">
<button ><a href="user_interface.php"><b style="color:white">Back</b></a> </button>

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

        <?php } ?>