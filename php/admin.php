
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
<button><a href="../index.php" style="text-decoration:none; color:black"> Log Out</a></Button></p>
</nav>

<section>
<div id= "signup1">
Database Management: Admin Panel.
</div>

<div id= "signup2">

<?php

$bookidErr = $booknameErr = $authorErr = $hardcopyErr =$yearErr = "" ;
$bookid = $bookname = $author = $hardcopy = $year = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
if (empty($_POST["bookid"])){
		$bookidErr = "Book ID is Required" ;	
	}
	else 
	$bookid = test_input($_POST["bookid"]) ;


if (empty($_POST["bookname"])){
		$booknameErr = "Book Name is Required" ;	
	}
	else 
	$bookname = test_input($_POST["bookname"]) ;

if (empty($_POST["author"])){
		$authorErr = "Author Name is Required" ;	
	}
	else 
	$author = test_input($_POST["author"]) ;

if (empty($_POST["hardcopy"])){
		$hardcopyErr = "Hardcopy Information is Required" ;	
	}
	else 
	$hardcopy = test_input($_POST["hardcopy"]) ;


if (empty($_POST["year"])){
		$year = "" ;	
	}
	
	else 
	$year = test_input($_POST["year"]) ;	


}



function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
    return $data ;	
}
?>




<p><b>Enter Book Information:</b></p><hr>
<p><span class = "error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

Book ID:  
<div class="para1">
<input type="text"  name="bookid">
<span class="error">* <?php echo $bookidErr;?></span>
</div><br><br>

Book Name: 
<div class="para1"><input type="text"  name="bookname">
<span class="error">*<?php echo $booknameErr;?></span>

</div><br><br>

Author: 
<div class="para1"><input type="text"  name="author">
<span class="error">*<?php echo $authorErr;?></span>
</div><br><br>

Published Year: 
<div class="para1"><input type="text"  name="year">
<span class="error"><?php echo $yearErr;?></span>
</div><br><br>

Available Hardcopy: 
<div class="para1"> 
<input type="text" name="hardcopy"> 
<span class="error">* <?php echo $hardcopyErr;?></span>
</div><br><br>



<div style="text-align:center; margin-top:40px;"><input type="submit" value="submit"></div>
</form>


</div>

<div id= "signup3">
<p><b> Book Information Details:</b>
<?php
if ($bookid && $bookname && $author && $hardcopy){
	echo  ' <p style="color:red"> *** Registered Successfully</p>'; 
	
}
else 
{echo ' <p style="color:red"> *** Please Enter Book Information in the left box.</p>';}	
	

?>
</p><hr>

<table  id="newtable1">
<tr> 
<th style="text-align:center;"> Book ID</th>   
<th style="text-align:center;">Name</th>
<th style="text-align:center;"> Author</th>   
<th style="text-align:center;"> Published Year</th>   
<th style="text-align:center;"> Available Copy</th>    </tr>

<tr>

<td>
<?php
if ($bookid && $bookname && $author && $hardcopy)
	echo $bookid ;
?>
</td>


<td>
<?php
if ($bookid && $bookname && $author && $hardcopy)
	echo $bookname ;
?>
</td>


<td>
<?php
if ($bookid && $bookname && $author && $hardcopy)
	echo $author ;
?>
</td>


<td>
<?php
if ($bookid && $bookname && $author && $hardcopy)
	echo $year ;
?>
</td>


<td>
<?php
if ($bookid && $bookname && $author && $hardcopy)
	echo $hardcopy ;
?>
</td>
</tr>
</table>
<br><br> <br>


<?php




if ($bookid && $bookname && $author && $hardcopy){
	include "connect_database.php";
	include "createtable2.php"; 

	
	$data = "INSERT INTO bookInfo(id, bookname, bookid, author, published_year, available_hardcopy)

VALUES('', '$bookname', '$bookid','$author', '$year', '$hardcopy')";

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