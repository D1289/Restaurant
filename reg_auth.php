<?php include ('database.php');
   
 $error = false;
 if (isset($_POST['name'])) {
    $errorMsg = "";
    $response = [];

    $name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
   
	
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$errorMsg = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$errorMsg = "Please Enter Valid Email ID";
	}
	if(strlen($password) < 6) {
		$error = true;
		$errorMsg = "Password must be minimum of 6 characters";
	}
   
    if (!$error) {
		if(mysqli_query($con, "INSERT INTO register (name, email, password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
			$response['response'] = "Successfully Registered!";
            $response['status'] = 'success';
		} else {
			$response['response'] = "Error in registering...Please try again later!";
            $response['status'] = 'failure';
		}
	} else {
        $response['response'] = $errorMsg;
        $response['status'] = 'failure';
    }

    echo json_encode($response);
}
?>