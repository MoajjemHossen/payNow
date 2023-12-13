
<?php  
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
$name = $email = $mobileno = $gender = $website = $agree = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["number_email"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
    //Email Validation   
    if (empty($_POST["password"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  

<div class="container-fluid ">
	<div class="wraper">
		<div class="main_div">
			<div class="form_title">
				<h1>Please input your infomation</h1>
			</div>
			<div class="form_fields">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label for="exampleInputNumber1">Mobile/Email</label>
						<input type="text" name="number_email" class="form-control" id="exampleInputNumber1" placeholder="Number/Email">
						<span class="error">* <?php echo $nameErr; ?> </span>  
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						<span class="error">* <?php echo $emailErr; ?> </span>  

					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label for="exampleCheck1" class="form-check-label">Remember me</label>
					</div>
					<button type="submit" name="submitbtn" class="btn btn-primary">SignUp</button>
				</form>
			</div>
		</div>
	</div>
</div>