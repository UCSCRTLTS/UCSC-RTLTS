<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UCSC-RTLTS DATABASE HANDLER</title>

    <!-- Bootstrap Core CSS -->
    <link href="user_interface_layer/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="user_interface_layer/css/blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- For using tabs -->

        <script type="text/javascript">
            $('#myTab a').click(function(e) {
                e.preventDefault()
                $(this).tab('show')
            })
        </script>
        <script type="text/javascript">
            $('#myTab a[href="#profile"]').tab('show') // Select tab by name
            $('#myTab a:first').tab('show') // Select first tab
            $('#myTab a:last').tab('show') // Select last tab
            $('#myTab li:eq(2) a').tab('show') // Select third tab (0-indexed)
        </script>
        <!-- ends using tabs -->
		
		
	
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">View</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
	
                <!-- Title -->
				<div>
                <h1>UCSC-RTLTS DATABASE HANDLER<h1>
				</div>
                <!-- Author -->
                <hr>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
				  <li class="active"><a href="#login" role="tab" data-toggle="tab">Login</a></li>
				  <!--<li><a href="#sign_up" role="tab" data-toggle="tab">Sign Up</a></li> -->
				  <li><a href="#addNew" role="tab" data-toggle="tab">Add New</a></li>
				  <li><a href="#update" role="tab" data-toggle="tab">Update</a></li>
				  <li><a href="#delete" role="tab" data-toggle="tab">Remove</a></li>
				  <li><a href="#view" role="tab" data-toggle="tab">Members</a></li>
				  
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
				  <div class="tab-pane fade in active" id="login">
					</br>
					<form action="login.php" method="post">
						
						<table>
						<tr><td>User Name:</td><td> <input type="text" name="userName"></td></tr>
						<tr><td>Password:</td><td> <input type="password" name="password"></td></tr>
						</table>
						
						<input type="submit" value="Login">
						
					</form>
					<!-- 
						generate code from here
						
						http://www.map-embed.com/

					-->
					
					<hr/>
				  </div>
				  
				  
				  <div class="tab-pane fade" id="addNew">
					</br>
					<form action = "addNew.php" method = "post">
						
						<table>
						<tr><td>User Name : </td><td><input type = "text" name = "userName"></td></tr>
						<tr><td>First Name : </td><td><input type = "text" name = "firstName"></td></tr>
						<tr><td>Last Name : </td><td><input type = "text" name = "lastName"></td></tr>
						<tr><td>E-mail : </td><td><input type = "text" name = "email"></td></tr>
						<tr><td>MAC Address : </td><td><input type = "text" name = "mac"></td></tr>
						<tr><td>Password :</td><td><input type = "password" name = "password"></td></tr>
						</table>
						<input type = "submit" value = "Submit">
						<hr/>
					</form>
					
				
				  </div>
				  
				  <div class="tab-pane fade" id="update">
					</br>
					<form action = "update.php" method = "post">
						<table>
						<tr><td>Enter the user name want to update:</td><td> <input type="text" value="" name="userName"></td></tr>
						<tr><td>New MAC :</td><td><input type="text" value="" name="newMAC"></td></tr>
						<tr><td>New E-mail :</td><td><input type="text" value="" name="newEmail"></td></tr>
						<tr><td>New password :</td><td><input type="text" value="" name="newPassword"></td></tr>
						<tr><td><input type = "submit" value = "update"></p>
						</table>
					</form>
					<hr/>
				  </div>
				  
				   <div class="tab-pane fade" id="delete">
					</br>
					<form action = "delete.php" method = "post">
						<tr><td>User Name :</td><td><input type="text" value="" name="userName"></p></td></tr>
						<tr><td><input type = "submit" value = "Remove"></p>	
					</form>
					<hr/>
				   </div>
				   
				    <div class="tab-pane fade" id="view">
					</br>
					<form action = "view.php">
						<input type = "submit" value = "Registerd Members">	
					</form>
					<hr/>
				   </div>
				   
				</div>
			</div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

				<img src="images/ucsc.png" alt="logo"/>

               <!-- Side Widget Well -->
                <div class="well" style="margin-top: 4.5em;">
				
				
                    <h4>About UCSC RTLTS</h4>
<p>The professors and lectures are considered as the most important human resources in the University. Be because they are the key players of University. Sometimes they are really busy with their schedules. So most of the times the students and the staff members of the University will not be able to meet them is case of urgent requirements without knowing the exact place they are in the considered time. This problem leads to waste time. So we are introducing a system to find out the exact location of the lecturers in real-time. It will save our time and efforts.					


					</p>
                </div>
	
            </div>
			
			

        </div>
        <!-- /.row -->



        <!-- Footer -->
		
        <footer>
            <div class="row">
                <div class="col-lg-12">
					<hr/>
                    <p>Developed by Group-02</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
