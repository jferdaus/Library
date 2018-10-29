




<html>
<head>
<title> Shapla Academy Library Database </title>
<meta charset="UTF-8">
<meta name="author"     content="jannat">
<meta http-equiv="refresh"   content="30">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css"   href="../css/mystyle 3.css">

</head>



<body>



<header><h4>Shapla Academy Library Database</h4></header>


<nav><p>
<button><a href="../index.php" style="text-decoration:none; color:black"> Home</a></Button></p>
</nav>



<section>

<div id= "signin1"> Login

<div id= "signin2"> 
<div id= "signin3"> <h1> Login Account</h1>
<p>Type username and password to Login</p>

</div>
<hr>
<div id= "signin4"> 


<?php

$useridError = $passwordError = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $valid = true;

    if(empty($_POST['userid'])){
        $valid=false;
        $useridError = '<span style = "font-size:12px; color:red">** Username is missing</span>';
		
    }
	
	

    if(empty($_POST['password'])){
        $valid=false;
        $passwordError = '<span style = "font-size:12px; color:red" >** Password is missing</span>'; 
    }

    if($valid){
        header('location:admin.php');
        exit();
    }
}

?>



<br>
<form action=" " method="post">
  Username:<input type="text" name="userid" size="15"/> <?PHP echo $useridError; ?> <br><br>
  Password: <input type="password" name="password" size="15"/> <?PHP echo $passwordError; ?> <br><br>
  
 
  
  <input type="submit" value="Login"/>
</form>

<?php
/*
$useridErr = $password1Err = "" ;
$userid = $password1= "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
if (empty($_POST["userid"])){
		$useridErr = "User ID is Required" ;	
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



*/

?>



</div>

</div>
 </div>

</section>


<footer  style="padding-bottom:10px">
<table style="width:100%; text-align:center; color: white text-size:20px;">

<tr>
<td>
@copyright: Jannatul Ferdaus
</td>
</tr>

</table>
</footer>








<body>


</html>