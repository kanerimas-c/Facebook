
<?php 

session_start();


	 	$host = "localhost";
        $dbusername = "root";
        $dbpassword = "root";
        $dbname = "dbfacebook";

        $connect = mysqli_connect('localhost', 'root', 'root', 'dbfacebook');

 		if (isset($_POST['signup'])) {
        $FNAME = $_POST['firstname'];
        $LNAME = $_POST['lastname'];
        $EMAIL = $_POST['email'];
        $PASS = $_POST['password'];
        $BM = $_POST['Bmonth'];
        $BD = $_POST['Bday'];
        $BY = $_POST['Byear'];
        $GEN = $_POST['gender'];


	
	$sql = "SELECT * FROM tblfacebook WHERE email = '$EMAIL' AND newpassword == $PASSWORD" ;
	$result = mysqli_query($connect, $sql);
	$num = mysqli_num_rows($result);

	if ($num == 1) {
		$_SESSION['Email'] = $EMAIL;
		header('location:Facebookvalidation.php');
	}else{
		header('location:facebook.php');
	}
}
?>

