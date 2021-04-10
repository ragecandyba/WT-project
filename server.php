<?php
include("connection1.php");
error_reporting(0);
?>
<?php

	if($_GET['submit']){

		$username = $_GET['username'];
		$email = $_GET['email'];
		$password_1 = $_GET['password_1'];
		$password_2 = $_GET['password_2'];
		

		

		if($username!="" && $email!="" && $password_1!="" && $password_2!="" ){
			$insertquery = "Insert into users values ('$username','$email','$password_1','$password_2')";

			$insertdata = mysqli_query($conn, $insertquery);

			if($insertdata)
			{
				echo "Data Inserted";
			}
		}
	}
	else{
		echo "Enter data in all fields";
	}
		 
		



  
  ?>

<script type="text/javascript">
      $(function() {

 

     
         $("#email_error_message").hide();
    
 

      
         var error_email = false;
         

 

  
         $("#form_email").focusout(function() {
            check_email();
         });
         

 

         

        

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }

 

         $("#registration_form").submit(function() {

            error_email = false;
           


            check_email();
         

            if (error_email === false ) {
               alert("Submitted Successfull");
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }

 


         });
      });
   </script>