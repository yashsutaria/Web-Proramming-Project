<html>  
<head>  
<style>  
.error {color: #FF0001;}  
body {
  background: url(NMquery.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
</style>  
<link href="query.css" rel="stylesheet">
</head>  
<body>    
<center>
<?php  
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = $queryErr = $agreeErr = "";  
$name = $email = $mobileno = $query = $agree = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
    
    //Number Validation  
    if (empty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = input_data($_POST["mobileno"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    }  
      
    //Empty Field Validation  
    if (empty ($_POST["query"])) {  
            $queryErr = "Didn't get your Query!";  
    } else {  
            $query = input_data($_POST["query"]);  
    }  
  
    //Checkbox Validation  
    if (!isset($_POST['agree'])){  
            $agreeErr = "Accept terms of services before submit.";  
    } else {  
            $agree = input_data($_POST["agree"]);  
    }  
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  
<h2>Registration Form</h2>  
<span class = "error">* required field </span>  
<br><br> 
<div class="form-container">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >  
    Name:   
    <input type="text" class="form-control" name="name">  
    <span class="error">* <?php echo $nameErr; ?> </span>  
    <br><br>  
    E-mail:   
    <input type="text" class="form-control" name="email">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    <br><br>  
    Mobile No:   
    <input type="text" class="form-control" name="mobileno">  
    <span class="error">* <?php echo $mobilenoErr; ?> </span>  
    <br><br>   
    Query:  
    <input type="text" class="form-control" name="query">  
    <span class="error">* <?php echo $queryErr; ?> </span>  
    <br><br> 
    Agree to Terms of Service:  
    <input type="checkbox" class="form-control" name="agree">  
    <span class="error">* <?php echo $agreeErr; ?> </span>  
    <br><br>                          
    <input type="submit" class="btn" name="submit" value="Submit">   
    <br><br>  
                           
</form>  
</div>
<?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $queryErr == ""&& $agreeErr == "") {  
        echo "<h3 color = #FF0001> Your query is sucessfully registered. </h3>";  
        echo "<h2>Your Input:</h2>";  
        echo "Name: " .$name;  
        echo "<br>";  
        echo "Email: " .$email;  
        echo "<br>";  
        echo "Mobile No: " .$mobileno;  
        echo "<br>";  
        echo "Query: " .$query;  
    } else {  
        echo "<h3> <b>You didn't filled up the query form correctly.</b> </h3>";  
    }  
    }  
?>  
 </center> 
</body>  
</html>