<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login page</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body class ="mainbody">

   <div class="header">
	<h2>Library management system</h2>
   </div>

   <br>
   <hr class="style1">
   <br>

	<div  class="row" id="form">
	<div class="col-sm-3">
		
	</div>
       
	  <div class="col-sm-3 padd verticalLine ">
       <b><h3> Admin Login</h3></b>
        <br><br>
	     <form action="userlogin.php" method="POST">

	     	   <p>
		 	   <label>Username</label>
		 	   <input type="text"  id="user" name="user"></input>
		 	   </p>

		 	   <p>
		 	   <label>Password</label>
		 	   <input type="password"  id="pass" name="pass"></input>
		 	   </p>
               
		 	   <button type="submit">LOGIN</button>

	     </form>

      </div>

	     <br><br>

    <div class="col-sm-3 space">
    <b><h3> Admin Registration</h3></b>
        <br><br>
		 <form action="process.php" method="POST">
		 	   <p>
		 	   <label>Username</label>
		 	   <input type="text"  id="user" name="user"></input>
		 	   </p>

		 	   <p>
		 	   <label>Password</label>
		 	   <input type="password"  id="pass" name="pass"></input>
		 	   </p>

		 	   <p>
		 	   <input type="submit"  id="btn" name="Login"></input>
		 	   </p>
		 </form>
         </div>
     <div class="col-sm-3">
     	
     </div>

	</div>
</body>
</html>