
<?php

session_start();
?>


<html>
<head>
<title> Shapla Academy Library Database </title>
<meta charset="UTF-8">
<meta name="author"     content="jannat">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css"   href="../css/mystyle 2.css">


</head>
<body>
<header><h4>Shapla Academy Library Database</h4></header>
<nav><p>
<button><a href="../index.php" style="text-decoration:none; color:black"> Home</a></Button></p>
</nav>

<section>
<div id= "signup1">
Sign up Form: Please Sign up if you are an admin or a student of Shapla Academy.
</div>

<div id= "signup2">

<?php

$nameErr = $departmentErr = $majorErr = $minorErr = $emailErr = $useridErr = $password1Err = "" ;
$name = $department = $major = $minor = $email = $userid = $password1= "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
if (empty($_POST["name"])){
		$nameErr = "Name is Required" ;	
	}
	else 
	$name = test_input($_POST["name"]) ;	

if (empty($_POST["department"])){
		$department = " " ;	
	}
	
	else 
	$department = test_input($_POST["department"]) ;	


if (empty($_POST["major"])){
		$major = " " ;	
	}
	
	else 
	$major = test_input($_POST["major"]) ;

if (empty($_POST["minor"])){
		$minor = " " ;	
	}
	
	else 
	$minor = test_input($_POST["minor"]) ;


if (empty($_POST["email"])){
		$emailErr = "Email is Required" ;	
	}
	
	else {
	$email = test_input($_POST["email"]) ;	
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    } }
if (empty($_POST["userid"])){
		$useridErr = "Academy ID is Required" ;	
	}
	
	else 
	$userid = test_input($_POST["userid"]) ;	

if (empty($_POST["password1"])){
		$password1Err = "Password is Required" ;	
	}
	
	else 
	$password1 = test_input($_POST["password1"]) ;	


}



function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
    return $data ;	
}
?>




<p><b>Enter Your Information:</b></p><hr>
<p><span class = "error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

Name:  
<div class="para1">
<input type="text"  name="name">
<span class="error">* <?php echo $nameErr;?></span>
</div><br><br>

Department: 
<div class="para1"><input type="text"  name="department">
<span class="error"><?php echo $departmentErr;?></span>

</div><br><br>

Major: 
<div class="para1"><input type="text"  name="major">
<span class="error"><?php echo $majorErr;?></span>
</div><br><br>
Minor: 
<div class="para1"><input type="text"  name="minor">
<span class="error"><?php echo $minorErr;?></span>
</div><br><br>

Email: 
<div class="para1"> 
<input type="email" name="email"> 
<span class="error">* <?php echo $emailErr;?></span>
</div><br><br>

Academy ID: 
<div class="para1"><input type="text" name="userid">
<span class="error">* <?php echo $useridErr;?></span>
</div><br><br>


Password: 
<div class="para1"><input type="password" name="password1">
<span class="error">* <?php echo $password1Err;?></span>
</div><br><br>


<div style="text-align:center; margin-top:40px;"><input type="submit" value="submit"></div>
</form>


</div>

<div id= "signup3">
<p><b>Information Details:</b>
<?php
if ($name && $email && $userid && $password1){
	echo  ' <p style="color:red"> *** Registered Successfully</p>'; 
	
}
else 
{echo ' <p style="color:red"> *** For Registration, Please Enter Required Information in the left box.</p>';}	
	

?>
</p><hr>

<table  id="newtable1">
<tr> <th style="text-align:center;"> Category</th>   <th style="text-align:center;">Information</th> </tr>

<tr><td><?php if ($name && $email && $userid && $password1){echo "Name"; } ?></td>  
<td>  <?php if ($name && $email && $userid && $password1) echo $name;  ?> </td> </tr>

<tr><td><?php if ($name && $email && $userid && $password1){echo "Department"; } ?></td> 
<td> <?php if ($name && $email && $userid && $password1) echo $department;  ?> </td> </tr>

<tr> <td><?php  if ($name && $email && $userid && $password1){echo "Major"; } ?></td>  
<td>  <?php if ($name && $email && $userid && $password1) echo $major;  ?> </td> </tr>

<tr> <td><?php  if ($name && $email && $userid && $password1){echo "Minor"; } ?></td>  
<td>  <?php if ($name && $email && $userid && $password1) echo $minor;  ?> </td>  </tr>

<tr>  <td><?php  if ($name && $email && $userid && $password1){echo "Email"; } ?></td> 
<td>  <?php  if ($name && $email && $userid && $password1) echo $email;  ?> </td> </tr>

<tr> <td><?php  if ($name && $email && $userid && $password1){echo "User ID"; } ?></td>  
<td>  <?php if ($name && $email && $userid && $password1) echo $userid;  ?> </td> </tr>

<tr> <td> <?php  if ($name && $email && $userid && $password1){echo "Password"; } ?> </td> 
<td>  <?php if ($name && $email && $userid && $password1) echo $password1;  ?> </td> </tr>




</table>
<br><br> <br>
<?php

if ($name && $email && $userid && $password1){
	echo ' <button><a href="admin.php" style="text-decoration:none; color:black"> log in </a></Button>' ;
echo ' <span><button><a href="../index.php" style="text-decoration:none; color:black"> log out </a></Button>' ;



	include "create_database.php";
	include "createtable.php";
	$data = "INSERT INTO userInfo(id, name, userid, password, email, department, major, minor)

VALUES('', '$name','$userid','$password1', '$email', '$department', '$major', '$minor')";

if (mysqli_query($conn,$data)){
	
	echo " " ;
	
}

else {
    echo " System Error " . mysqli_error($conn);
}



}
 session_destroy();?>
</div>
</section>





<footer  style="padding-bottom:10px">
<table style="width:100%; text-align:center; color: white; text-size:20px;">

<tr>
<td>
@copyright: Jannatul Ferdaus
</td>
</tr>

</table>
</footer>



</body>


</html>