<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<style>
	.error {color: #F00000;}
	</style>
    <title><h1>UCSC-RTLTS DATABASE HANDLER<h1></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

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
			<script>
			function goBack() {
				window.history.back()
			}
            </script>
			
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="javascript:history.back()">Back</a>
                    </li>
					
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
				  <li class="active"><a href="#login" role="tab" data-toggle="tab">Search</a></li>
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
							<tr><td>Enter the Name:</td><td> <input type="text" name="userName"></td></tr>
							<!--<tr><td>Password:</td><td> <input type="password" name="password"></td></tr>-->
							</table>
							
							<input type="submit" value="Search">
							
						</form>
						<!-- 
							generate code from here
							
							http://www.map-embed.com/

						-->
						
						<hr/>
				    </div>
					
					
	<!--Parts i have edited-->
				 <?php 
				 $userNameErr = $firstNameErr= $lastNameErr= $emailErr = $MACErr = $pwErr = "";
				 $userName = $firstName = $lastName = $email = $mac= $password = "";
				 
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				    if (empty($_POST["userName"])) {
					 $userNameErr = "Name is required";
				    } else {
					 $userName = test_input($_POST["userName"]);
					 // check if name only contains letters and whitespace
					 if (!preg_match("/^[a-zA-Z ]*$/",$userName)) {
					   $userNameErr = "Only letters and white space allowed"; 
					}
				 }
				 
				if (empty($_POST["firstName"])) {
					$firstNameErr = "First Name is required";
			    } else {
				 $firstName = test_input($_POST["firstName"]);
				 // check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
				    $firstNameErr = "Only letters and white space allowed"; 
				 }
			   }
			   
			    if (empty($_POST["lastName"])) {
					$lastNameErr = "Last Name is required";
			    } else {
					$lastName = test_input($_POST["lastName"]);
				 // check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
				   $lastNameErr = "Only letters and white space allowed"; 
			       }
			    }
			   
			    if (empty($_POST["email"])) {
					$emailErr = "Email is required";
			    } else {
					$email = test_input($_POST["email"]);
				 // check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				    $emailErr = "Invalid email format"; 
				    }
			    }
				
				if (empty($_POST["mac"])) {
					$MACErr = "MAC is required";
			    } else {
					$mac = test_input($_POST["mac"]);
				 // check if e-mail address is well-formed
				if (!preg_match("/^[0-9:]*$/",$mac)) {
				   $MACErr= "Invalid format"; 
			       }
			    }
			   
			    if (empty($_POST["password"])) {
					$pwErr = "Password is required";
			    } else {
					$password = test_input($_POST["password"]);
				 // check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
					$pwErr = "Only letters,numbers and characters are allowed"; 
				    }
			   }
			   }
				
				function test_input($data) {
			   $data = trim($data);
			   $data = stripslashes($data);
			   $data = htmlspecialchars($data);
			   return $data;
}
				?>
				  
				  <div class="tab-pane fade" id="addNew">
					</br>
					<p><span class="error">* required field.</span></p>
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<form action = "addNew.php" method = "post">
						<table>
						<tr><td>User Name : </td><td><input type = "text" name = "userName" value="<?php echo $userName;?>">
						<span class="error">* <?php echo $userNameErr;?></span>
						</td></tr>
						<tr><td>First Name : </td><td><input type = "text" name = "firstName" value="<?php echo  $firstName;?>">
						<span class="error">* <?php echo $firstNameErr;?></span>
						</td></tr>
						<tr><td>Last Name : </td><td><input type = "text" name = "lastName" value="<?php echo  $lastName;?>">
						<span class="error">* <?php echo $lastNameErr;?></span>
						</td></tr>
						<tr><td>E-mail : </td><td><input type = "text" name = "email" value="<?php echo $email;?>">
						<span class="error">* <?php echo $emailErr;?></span>
						</td></tr>
						<tr><td>MAC Address : </td><td><input type = "text" name = "mac" value="<?php echo $mac;?>">
						<span class="error">* <?php echo $MACErr;?></span>
						</td></tr>
						<tr><td>Password :</td><td><input type = "password" name = "password" value="<?php echo $password;?>">
						<span class="error">* <?php echo $pwErr;?></span>
						</td></tr>
						</table>
						<input type = "submit" name="submit" value = "Submit">
						<hr/>
					</form>
					
				
				  </div>
				  <?php
				  $newMac= $newEmail= $newPw= "";
				  $newMacErr= $newEmailErr= $newPwErr= "";
				  
					 if ($_SERVER["REQUEST_METHOD"] == "POST") {
						if (empty($_POST["userName"])) {
						   $userNameErr = "User name is required";
						} else {
						   $userName = test_input($_POST["userName"]);
						 // check if name only contains letters and whitespace
						if (!preg_match("/^[a-zA-Z ]*$/",$userName)) {
						   $userNameErr = "Only letters and white space allowed"; 
						}
					    }
						
						if(!empty($_POST["newMac"])){
						   $newMac = test_input($_POST["newMac"]);
						 // check if name only contains letters and whitespace
							if (!preg_match("/^[a-zA-Z ]*$/",$newMac)) {
								$newMacErr = "Only letters and white space allowed"; 
							}
					    }
						
						
						if (!empty($_POST["newEmail"])) {
							$newEmail = test_input($_POST["newEmail"]);
							 // check if e-mail address is well-formed
							if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
								$newEmailErr = "Invalid email format"; 
							}
						}
						
						if (!empty($_POST["newPw"])){
						   $newPw = test_input($_POST["newPw"]);
						 // check if name only contains letters and whitespace
							if (!preg_match("/^[a-zA-Z ]*$/",$newPw)) {
								$newPwErr = "Only letters and white space allowed"; 
							}
					    }
					
					}
					
					?>
				   
   
				  
				  <div class="tab-pane fade" id="update">
					</br>
					<p><span class="error">* required field.</span></p>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
						<table>
						<tr><td>Enter the user name want to update:</td><td> <input type="text" value="" name="userName" value="<?php echo $userName;?>">
						<span class="error">* <?php echo $userNameErr;?></span>
						</td></tr>
						<tr><td>New MAC :</td><td><input type="text" value="" name="newMAC" value="<?php echo $newMac;?>">
						<span class="error"> <?php echo $newMacErr;?></span>
						</td></tr>
						<tr><td>New E-mail :</td><td><input type="text" value="" name="newEmail" value="<?php echo $newEmail;?>">
						<span class="error"> <?php echo $newEmailErr;?></span>
						</td></tr>
						<tr><td>New password :</td><td><input type="text" value="" name="newPassword" value="<?php echo $newPw;?>">
						<span class="error"> <?php echo $newPwErr;?></span>
						</td></tr>
						<tr><td><input type = "submit" value = "update"></p>
						</table>
					</form>
					<hr/>
				  </div>
	
<!--upto this point-->
	
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
