<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Signup form</title>
  <link rel='stylesheet prefetch' href='css/jwmbjg.css'>
  <!-- <script src="js/index.js" charset="utf-8"></script> -->
      <link rel="stylesheet" href="css/style.css">
    </head>
    <style media="screen">
.container > div > form > div{
  background-color: #ffebee ;
}
/* label color */
 .input-field label {
   color: #1b5e20;
 }
 /* label focus color */
 .input-field input[type=text]:focus + label {
   color: #01579b ;
 }
 /* label underline focus color */
 .input-field input[type=text]:focus {
   border-bottom: 1px solid #000;
   box-shadow: 0 1px 0 0 #000;
 }
 /* valid color */
 .input-field input[type=text].valid {
   border-bottom: 1px solid #000;
   box-shadow: 0 1px 0 0 #000;
 }
 /* invalid color */
 .input-field input[type=text].invalid {
   border-bottom: 1px solid #000;
   box-shadow: 0 1px 0 0 #000;
 }
 /* icon prefix focus color */
 .input-field .prefix.active {
   color: #000;
 }

    </style>
<body style="background: url('images/background.jpg') ; opacity:0.8">
  <!-- <main>
<form id="signUp"name="signUp"  method="post">
    <hgroup>
      <h2>welcome</h2>
    </hgroup>

    <fieldset>
      <input type="text" name="names"placeholder="name" required>
      <input type="email" name="emails" placeholder="email" required>
      <input type="password" name="password" placeholder="password" required>
    </fieldset>
  <input type="button" id="btnSubmit" value="button">
  </form>
</main> -->


<div class=""  style="background-color: #fffde7">



<div class="container" >
<div class="row">
    <form class="col s12" name="signUp">
      <div class="row">
        <div class="input-field col s12">
          <input id="names" name="names" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="emails" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password"type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="button"class="waves-effect waves-light btn btn-large" onclick="clientsignUp()" id="btnSubmit" name="button"><a href="#">submit</a></button>
        </div>
      </div>


      </div>

    </form>
  </div>
</div>

</div>




  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
