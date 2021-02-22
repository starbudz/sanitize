<?php
         $nameErr = $emailErr = $urlErr = "";
         $name = $email = $url = "";

          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
     
              echo "<h2>Your Input:</h2>";
         
         if (isset($_POST["submit"])) {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
               echo $nameErr;
               echo "<br>";
            }else {
               $name = test_input($_POST["name"]);
               echo $name;
               echo "<br>";
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
               echo $emailErr;
               echo "<br>";
            }else {
               $email = test_input($_POST["email"]);
              
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                  echo $emailErr;
                  echo "<br>"; 
               }
            }
            if (empty($_POST["url"])) {
               $urlErr = "Website required";
               echo $urlErr;
               echo "<br>";
            }else{
               $url = test_input($_POST["url"]);
               echo $url;
               echo "<br>";

             if (!filter_var($url, FILTER_VALIDATE_URL)) {
                   $urlErr = "Enter a valid Website";
                   echo $urlErr;
                   echo "<br>";
            }
            } 
            
    }
 
		
	
		
	 
      ?>