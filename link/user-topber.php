<!Doctype html>
<head>
<link rel="stylesheet" href="css/all.min.css" media="screen" >
<nav class="navbar top-navbar bg-white box-shadow" style="background-color:#333">
            	<div class="container-fluid">
                    <div class="row"> 
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="index.php" style="color:#999; padding-top:20px" >
                			    Home Page
                			</a>
                            <span class="small-nav-handle hidden-sm hidden-xs"></span>
                			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                				<span class="sr-only">Toggle navigation</span>
                			
                			</button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				
                			</button>
                		</div>
                        <!-- /.navbar-header -->

                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
                			<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">


                        
                				<li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                               
                			</ul>
                            <!-- /.nav navbar-nav -->

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                              
                				
							<li><a href="user_logout.php " onclick="return confirm('Do you wants to log out ?');" class="color-danger text-center">Logout</a></li>
                					
                		
                            
                			</ul>
                            <!-- /.nav navbar-nav navbar-right -->
                		</div>
                		<!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
            	</div>
            	<!-- /.container-fluid -->
            </nav>
</head>