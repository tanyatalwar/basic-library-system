<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login admin page</title>
	<link rel="stylesheet" href="css/profile.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="max">

<div id="header" class="banner">

  <div class="images">
  <img src="lib.jpg" width="1350" height="300">
  </div>
<br>
  <form id="infoform" action="info.php" method="POST" class="form-group issuebook" >

               
               <h3>Enter student information</h3>
               <p>
		 	   <!-- <label>student name</label>
		 	   <input type="text"  id="user" name="studentname"></input> -->
		 	   <!-- <label for="student name"><h4>Student Name</h4></label> -->
                <input class="form-control" id="studentname"  name="studentname" type="text" placeholder="Student name">
		 	   </p>
               

               <!-- <p>
               <h4>Year</h4>
		 	   <select type="text" name="year">
		 	   <option value="se">SE</option>
               <option value="te">TE</option>
               <option value="be">BE</option>
               </select>
               </p>
                 
		 	   <p>
               <h4>Section</h4>
		 	   <select type="text" name="section">
		 	   <option value="a">A</option>
               <option value="b">B</option>
               </select>
               </p> -->

		 	   <p>
		 	   <!-- <label>roll number</label>
		 	   <input type="text"  id="rollno" name="rollno"></input> -->
		 	   <!--  <label for="Roll number"><h4>Roll Number</h4></label> -->
                <input class="form-control" id="rollno"  name="rollno" type="text" placeholder="Roll Number">
		 	   </p>

		 	   <p>
		 	  <!--  <label>book name</label>
		 	   <input type="text"  id="bookname" name="bookname"></input> -->
		 	   <!--  <label for="Bookname"><h4>Book Name</h4></label> -->
                <input class="form-control" id="bookname"  name="bookname" type="text" placeholder="Book Name">
		 	   </p>


		 	    <p>
		 	   <!-- <label>issue date</label>
		 	   <input type="text"  id="issuedate" name="issuedate"></input> -->
		 	  <!--  <label for="IssueDate"><h4>Issue Date</h4></label> -->
                <input class="form-control" id="issuedate"  name="issuedate" type="text" placeholder="Issue Date">
		 	   </p>

		 	   <p>
		 	   <!-- <label>return date</label>
		 	   <input type="text"  id="returndate" name="returndate"></input> -->
		 	    <!-- <label for="return date"><h4> return date</h4></label> -->
                <input class="form-control" id="returndate"  name="returndate" type="text" placeholder="Return Date">
		 	   </p>

		 	   <p>
               <h4>Year</h4>
		 	   <select type="text" name="year">
		 	   <option value="se">SE</option>
               <option value="te">TE</option>
               <option value="be">BE</option>
               </select>
               </p>
                 
		 	   <p>
               <h4>Section</h4>
		 	   <select type="text" name="section">
		 	   <option value="a">A</option>
               <option value="b">B</option>
               </select>
               </p>

		 	   <!-- <button type="submit">submit</button> -->
		 	   <button type="input" class="btn btn-primary btn-lg">submit</button>
               <br>
               <br>
		 	   <button class="btn btn-primary btn-lg" formaction="viewuser.php">view student info who issued books</button>
		 	   <br>
		 	   <br>
		 	   <button formaction="bookinfo.php" class="btn btn-primary btn-lg"> issue books information</button>
  </form>

</div>
<!-- /header -->	
</body>
</html>

