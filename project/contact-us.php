<!DOCTYPE html>
<html lang="en">
   <head>
      <title>64-contact-us-b5.php</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/MY-CUSTOM-STYLE-SHEET-HERE.css">
      <style>
         .form-label { padding: 2px; font-weight: bold; }
      </style>
   </head>
   <body>
      <!--  Add whatever HTML code you need here -->
      <main>
         <div class="container-fluid p-5 bg-primary text-white text-center">
            <h1>64-contact-us-b5.php</h1>
            <p>Resize this responsive page to see the effect!</p>
         </div>



         <!--  ************************** BELOW IS THE START OF THE PHP SEND MAIL CODE  ********************* -->
         <!-- To create HTML code here you MUST use the PHP  (( echo ""; )) statement examples below -->
         <?php 
            if(isset($_POST['submit'])){
                $to = "yourEmail@goesHere.com";             // PUT YOUR EMAIL ADDRESS HERE
                // ------------------------------------------- Variables from the <form> go here
                $first_name = $_POST['first_name'];
                $last_name  = $_POST['last_name'];
                $from       = $_POST['email'];              // this is the sender's Email address
                $pswd       = $_POST['pswd'];
                $remember   = $_POST['remember'];
                $color      = $_POST['color'];
                $message    = $_POST['message'];

                // --------------------------------------- Variables for writting data to a file
                // ----------- Prepare the data to append

                $d = '\t';       // This is a 'tab' delimiter character
                $n = '\n';       // This is a 'newline' character
                $fileName = 'mydata-64.txt';

                $thisRecord = $first_name .$d. $last_name .$d. $from .$d. $pswd .$d. $remember .$d. $color .$d. $message .$n ;
            
                // ----------- Save the data to a text file
                file_put_contents($fileName, $thisRecord, FILE_APPEND);

                // --------------------------------------- Build the variables for sending 2 emails (to you & to user)
                $subject1 = "Form submission (Sent to webmaster)" ;
                $subject2 = "Copy of your form submission (Sent to the Person filling out the form)";
            
                $message1 = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $message;
                $message1 = $message1 . "<br>\n\n Your color code: " . $color ;
                $message1 = $message1 . "<br>\n\n Remember: " . $remember ;
                $message1 = $message1 . "<br>\n\n Password: " . $pswd ;
            
                $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $message;
                $message2 = $message2 . "<br>\n\n Your color code: " . $color ;
                $message2 = $message2 . "<br>\n\n Remember: " . $remember ;
                $message2 = $message2 . "<br>\n\n Password: " . $pswd ;
            
                $headers1 = "From:" . $from;
                $headers2 = "From:" . $to;
            
                // You can also use header('Location: thank_you.php'); to redirect to another page.
            
                // ----------------------------------------------- SEND THE EMAILS WITH PHP mail() function
            
                mail($to,$subject1,$message1,$headers1);        // Sends an email to YOU!
                mail($from,$subject2,$message2,$headers2);      // sends a copy of the message to the sender
             
                // ------ *********** -- START of Results Page USING PHP echo() to print HTML code -----*-------
                // if you are careful you can use the 'echo' command to display the results HTML page.
            
                echo "<div class='row'><div class='col-md-12 p-5'>";
                echo "<h2>Mail Sent. Thank you</h2> " . $first_name . ", we will contact you shortly.";
                echo '<hr>$message1<br>';
                echo $message1;
                echo '<hr>$message2<br>';
                echo $message2;
                echo "<hr>";
                echo "<a href=''>Click here to return</a>";
                echo "</div></div>";
            
                // -------- ************ -- END of Results Page ------------------------
            
                } else {  ?>
       
       <!-- ************************ ABOVE IS THE END OF THE PHP SEND MAIL CODE ************************** -->


         <!-- This HTML form will display if NOT sending an email -->
         <div class="row">

            <div class="col-md-4 p-5">  <!-- A column 4 wide --> 
               <h3>Your Heading Here</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dolorum aut, quidem nam molestiae expedita dicta facilis reiciendis quam esse itaque placeat velit voluptatum aperiam? Amet incidunt doloremque rem ab.</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi reprehenderit quis, consequatur, at tenetur modi, nam provident quaerat sed sequi cupiditate perferendis consectetur incidunt voluptates maiores ipsam ipsum excepturi veniam?</p>
               <i class="bi bi-facebook"></i>
            </div>

            <div class="col-md-8 p-5">  <!-- A column 8 wide --> 
               <!-- <form id="contactForm" method="post" action="display-form-data.php"> -->  <!-- Use this to TEST your variaables -->
               <form id="contactForm" method="post" action="">
                  <fieldset class="form-group border p-3">
                     <legend>Section Fieldset legend here</legend>
                     <div class="mt-2">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name"name="first_name">
                     </div>
                     <div class="mt-2">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" >
                     </div>
                     <div class="mt-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" >
                     </div>
                     <div class="mt-2">
                        <label for="pwd" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
                     </div>
                  </fieldset>
                  <div class="form-check mt-2 input-group-lg">
                     <label for="remember" class="form-label "> Remember me?
                     <input class="form-check-input" type="checkbox" id="remember" name="remember"> 
                     </label>  
                  </div>
                  <div class="mt-2 input-group-lg">
                     <label for="color" class="form-label">Pick a color
                     <input type="color" class="form-control form-control-color" id="color" name="color" value="#CCCCCC" >
                     </label>
                  </div>
                  <div class="mt-2">
                     <label for="message" class="form-label">Send me a message here</label>
                     <textarea class="form-control" cols="50" rows="5" id="message" name="message"></textarea>
                  </div>
                  <div class="mt-2">
                     <button type="submit" class="btn btn-primary mt-3" id="submit" name="submit">Submit</button>
                     <button type="reset"  class="btn btn-primary mt-3" id="reset"  name="reset">Clear Form Data</button>
                  </div>
               </form>
            </div>
         </div>


         <?php }  ?>    <!-- This line is important is it the ending of the PHP "if/else" statement  -->


         <!--  Okay to put your own HTML below this line --> 
 
 
 
 
         <!--  Closing HTML tags for the page -->   
      </main>
   </body>
</html>