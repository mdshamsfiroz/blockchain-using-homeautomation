<?php session_start();
include_once('config.php');
error_reporting(0);

//validation page
if($_SESSION['emailid']=='' ){
echo "<script>window.location.href='login.php'</script>";
}else{

//Code for otp verification
if(isset($_POST['verify'])){
//Getting Post values
$emailid=$_SESSION['emailid'];	
$otp=$_POST['emailotp'];	
// Getting otp from database on the behalf of the email
$stmt=$dbh->prepare("SELECT emailOtp FROM  tblusers where emailId=:emailid");
$stmt->execute(array(':emailid'=>$emailid)); 
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
$dbotp=$row['emailOtp'];
}
if($dbotp!=$otp){
echo "<script>alert('Please enter correct OTP');</script>";	
} else {
$emailverifiy=1;
$sql="update tblusers set isEmailVerify=:emailverifiy where emailId=:emailid";
$query = $dbh->prepare($sql);
// Binding Post Values
$query->bindParam(':emailid',$emailid,PDO::PARAM_STR);
$query->bindParam(':emailverifiy',$emailverifiy,PDO::PARAM_STR);
$query->execute();	
session_destroy();
echo "<script>alert('OTP verified successfully');</script>";	
echo "<script>window.location.href='login.php'</script>";
}}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<title>User Registration with email otp verification in PHP</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #999;
	background: #e2e2e2;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	min-height: 41px;
	box-shadow: none;
	border-color: #e1e1e1;
}
.form-control:focus {
	border-color: #00cb82;
}	
.form-control, .btn {        
	border-radius: 3px;
}
.form-header {
	margin: -30px -30px 20px;
	padding: 30px 30px 10px;
	text-align: center;
	background: #00cb82;
	border-bottom: 1px solid #eee;
	color: #fff;
}
.form-header h2 {
	font-size: 34px;
	font-weight: bold;
	margin: 0 0 10px;
	font-family: 'Pacifico', sans-serif;
}
.form-header p {
	margin: 20px 0 15px;
	font-size: 17px;
	line-height: normal;
	font-family: 'Courgette', sans-serif;
}
.signup-form {
	width: 390px;
	margin: 0 auto;	
	padding: 30px 0;	
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f0f0f0;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}		
.signup-form label {
	font-weight: normal;
	font-size: 14px;
}
.signup-form input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;
	background: #00cb82;
	border: none;
	min-width: 200px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #00b073 !important;
	outline: none;
}
.signup-form a {
	color: #00cb82;		
}
.signup-form a:hover {
	text-decoration: underline;
}
</style>
</head>
<body>
<div class="signup-form">
    <form  method="post">
		<div class="form-header">
			<h2>Verify OTP</h2>
		</div>
        <div class="form-group">
			<label>Email OTP</label>
        	<input type="text" class="form-control" name="emailotp" maxlength="6" required="required">
        </div>
    

		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="verify">Verify</button>
		</div>	
    </form>
	<div class="text-center small">Already have an account? <a href="#">Login here</a></div>
</div>
</body>
</html>