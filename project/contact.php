
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Contact Me - Gilroy McCalla Jr.</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/final-project-style.css">
      <style>
         .form-label { padding: 2px; font-weight: bold; }
      </style>
   </head>
   <body>
      <!--  Add whatever HTML code you need here -->
      <main>
         <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
          <div class="container-fluid">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Ice based Skating</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href ="ice-skating.html">Ice Skating</a></li>
                  <li><a class="dropdown-item" href="ice-hockey.html">ice hockey</a></li>
                </ul>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="roller-skating.html">Roller Skating</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="longboarding.html">Longboarding</a>
              </li>
          

              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Me</a>
              </li>
              </ul>
          </div>
        </nav>
         <div class="container-fluid p-5 text-white text-center" style="border-bottom: .3em solid white;  border-radius: .8em; ">
            <h1>Contact Me!</h1>
            <p>Resize this responsive page to see the effect!</p>
         </div>



         <!--  ************************** BELOW IS THE START OF THE PHP SEND MAIL CODE  ********************* -->
         <!-- To create HTML code here you MUST use the PHP  (( echo ""; )) statement examples below -->
                
       <!-- ************************ ABOVE IS THE END OF THE PHP SEND MAIL CODE ************************** -->


         <!-- This HTML form will display if NOT sending an email -->
         <div class="row">

            <div class="col-md-4 p-5">  <!-- A column 4 wide --> 
               <h3>Skating Information</h3>
                <p>Skating is a great way to get exercise and have fun. In this form, answer some questions about your skating experience and what you would like to try. I love to skate and I hope soon you will too!</p>
               <i class="bi bi-facebook"></i>
            </div>

            <div class="col-md-8 p-5">  <!-- A column 8 wide --> 
               <!-- <form id="contactForm" method="post" action="display-form-data.php"> -->  <!-- Use this to TEST your variaables -->
               <form id="contactForm" method="post" action="display-form-data.php">
                  <fieldset class="form-group border p-3">
                     <legend>Basic Information</legend>
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
                         <label for="location" class="form-label">Location (City)</label>
                         <input type="text" class="form-control" id="location" name="location" >
                      </div>
                  </fieldset>
                  <div class="form-check mt-2 input-group-lg">
                     <label for="remember" class="form-label "> Remember me?
                     <input class="form-check-input" type="checkbox" id="remember" name="remember"> 
                     </label>  
                  </div>
                  <br>

                  <fieldset class="form-group border p-3">
                    <legend>Skating History</legend>
                    <b>Preivous Skating Experience</b>
                    <div class="mt-2">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="ice-skating" id="ice-skating" value="true">
                        <label for="ice-skating" class="form-check-label">Ice Skating</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="roller-skating" id="roller-skating" value="true">
                        <label for="roller-skating" class="form-check-label">Roller Skating</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="longboarding" id="longboarding" value="true">
                        <label for="longboarding" class="form-check-label">Longboarding</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="none" id="none" value="true">
                        <label for="none" class="form-check-label">None</label>
                      </div>
                    </div>
                    <div class="mt-2">
                      <label for="skill" class="form-label">Skill Level</label>
                      <select class="form-select" id="skill" name="skill-level">
                        <option>Beginner</option>
                        <option>Intermediate</option>
                        <option>Advanced</option>
                        <option>Pro/Competitive</option>
                      </select>
                    </div>

                    <div class="mt-2">
                      <label for="age-exp" class="form-label">Age Experience</label>
                      <select class="form-select" id="age-exp" name="wah">
                        <option>1-2</option>
                        <option>3-5</option>
                        <option>5-10</option>
                        <option>11+</option>
                      </select>
                    </div>
                  </fieldset>
                  <br>
                  <fieldset class="form-group border p-3">
                    <legend>Interests</legend>
                    <b>Main Interests</b>
                    <div class="mt-2">
                       <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="tricks-freestyle" id="tricks-freestyle" value="true">
                        <label for="tricks-freestyle" class="form-check-label">Tricks / Freestyle</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="cruising" id="cruising" value="true">
                        <label for="cruising" class="form-check-label">Cruising</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="racing" id="racing" value="true">
                        <label for="racing" class="form-check-label">Racing</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="commuting" id="commuting" value="true">
                        <label for="commuting" class="form-check-label">Commuting</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="dance" id="dance" value="true">
                        <label for="dance" class="form-check-label">Dance</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="street-urban" id="street-urban" value="true">
                        <label for="street-urban" class="form-check-label">Street / Urban skating</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="events-group-rides" id="events-group-rides" value="true">
                        <label for="events-group-rides" class="form-check-label">Events / Group rides</label>
                      </div> 
                    </div>
                  </fieldset>
                  
                  <div class="mt-2">
                     <button type="submit" class="btn btn-primary mt-3" id="submit" name="submit">Submit</button>
                     <button type="reset"  class="btn btn-primary mt-3" id="reset"  name="reset">Clear Form Data</button>
                  </div>
               </form>
            </div>
         </div>


             <!-- This line is important is it the ending of the PHP "if/else" statement  -->


         <!--  Okay to put your own HTML below this line --> 
 
 
 
 
         <!--  Closing HTML tags for the page -->   
      </main>
   </body>
</html>