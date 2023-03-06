<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<style>
* {
  box-sizing: border-box;
}
#grad1 {
  height: 200px;
  background-color: pink; /* For browsers that do not support gradients */
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color:pink;
}
body {
  font-family: Arial;
  padding: 10px;
  background: #000000;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: rgb(0, 0, 0);
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
  background-color: #000000;
}

/* Right column */
.rightcolumn {
  float: right;
  width: 25%;
  background-color: #000000;
  padding-left: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: pink;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: pink;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
/* DROPDOWNS */
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

div.shape {
  width: 150px;
  height: 150px;
  background-color: red;
  position: relative;
  animation-name: example;
  animation-duration: 6s;
  animation-iteration-count: infinite;
}

.pagination {
  display: inline-block;
  border-width: 5px;
  width: 100%;
}

.pagination a {
  color: rgb(255, 255, 255);
  float: center;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.pagination a:hover:not(.active) {background-color: pink;}
@keyframes example {
  0%   {background-color:pink; left:0px; top:0px;}
  25%  {background-color:rgb(155, 51, 70); left:200px; top:0px;}
  50%  {background-color:rgb(0, 0, 0); left:200px; top:200px;}
  75%  {background-color:rgb(146, 53, 68); left:0px; top:200px;}
  100% {background-color:pink; left:0px; top:0px;}
}

</style>
</head>
<body>

<div class="header">
    <div id="grad1">
        <h19 style="font-family: Copperplate, Copperplate, fantasy; position: absolute; margin-top: 65px; margin-left: 1250px; font-size:3vw;" >All About Me</h19>
    </div>
</div>

<ul>
    <li><a href="#alreadyhome" style="font-size:20px;">Home</a></li>
    <li><a href="http://apcwebprog.csf.ph/~zafrancia/lab3/ci4/public/news" style="font-size:20px;">News</a></li>
    <li><a href="https://www.facebook.com/zachfrancia.11/" style="font-size:20px;">Contact</a></li>
    <li><a href="http://apcwebprog.csf.ph/~zafrancia/lab3/ci4/public/guest" style="font-size:20px;">Guests</a></li>
    <li><a href="http://apcwebprog.csf.ph/~zafrancia/lab3/ci4/public/guest/create" style="font-size:20px;">Register</a></li>
  </ul>

<div class="row">
    
  <div class="leftcolumn">
    <div class="card">
      <h2>Jordan 1 Lost and Found</h2>
      <h5>A shoe that I own</h5>
      <div> 
        <img style="border: 5px double black;" src="https://i.pinimg.com/564x/20/1e/94/201e94013060518ff1904c1a6952b5b8.jpg" alt="J1 Lost and Found">
      </div>
      <p id="cost"></p>

      <script>
      document.getElementById("cost").innerHTML =
      Math.floor(Math.random() * 10000);
      </script>
      <p>"Finders keepers! Celebrating the thrill of the vintage score, the AJ1 'Chicago' reunites you with a classic colourway that's gone through a bit of a journey. From the weathered box (look at those throwback ads) to the cracked leather accents, these kicks deliver big on original '80s vibes. No detail is overlooked—an "old, hand-written" receipt is paired with an aged Sail midsole, letting you step back to the beginning of the hoops revolution."</p>
    </div>
    <div class="card">
      <h2>Kobe 8 Challenge Red</h2>
      <h5>Best Shoe I had worn</h5>
      <div>
        <img style="border: 5px double black;" src="https://i.pinimg.com/564x/0f/e8/1c/0fe81c97eb1cddc3ff7e6df6f7a47029.jpg" alt="Challenge Red">
      </div>
      <p>8,000.00</p>
      <p>Colorway - CHALLENGE RED/REFLECTIVE SILVER-TEAM ORANGE-ELECTRO ORANGE
        Release Date - 06/15/2013 </p>
    </div>
    <div class="card">
        <h2>Kpop Group That I Like</h2>
        <h5>Blackpink</h5>
        <div>
            <img style="border: 5px double black;" src="https://i.pinimg.com/564x/0f/85/51/0f8551af2a5fe750c5da13e655a3c141.jpg" alt="Blackpink">
        </div>
        <p>OT4</p>
        <div class="card">
            <h2 style = "color: rgb(0, 0, 0); font-size: 30px;">Blackpink Bias</h2>
            <div class="dropdown">
                <span style="border: black; color:rgb(0, 0, 0); font-size: 20px;border-style: double;"> Hover mouse over me to know my Blackpink bias</span>
                <div class="dropdown-content">
                <p style="color:black;text-align: center;font-size: 50px;text-transform:capitalize";> Jisoo </p>
                  <img src="https://i.pinimg.com/564x/b5/10/24/b51024a72e95f71fc384d6bc621cf753.jpg" alt="Jisoo">
                </div>
              </div>
      </div>
    </div>
  </div>

  <div class="rightcolumn">
    <div class="card">
      <html>
<body>

<p id="info"></p>

<script>
document.getElementById("info").innerHTML = 
"Screen pixel depth is " + screen.pixelDepth;
</script>

<p id="demo"></p>

<script>
setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}


</script>


</body>
</html>

      <h2>Hometown</h2>
      <div>
        <img style="border: 5px double black;" src="http://en.wikipedia.org/wiki/Special:FilePath/Mayon_Volcano_as_of_March_2020.jpg" alt="Mayon" height="300px" width="600px">
      </div>
      <p>Albay</p>
      <p>April 8, 2019</p>
    </div>
    <div class="card">
      <h3>Random Gifs</h3>
      <div>
        <p style=" font-size: 30; text-align: justify;">Nba player I idolize</p>
        <img style="border: 5px double black;" src="https://media0.giphy.com/media/KPfkwDtE0fBKkJVYyN/giphy.gif?cid=ecf05e47d5lkrhozv8gbkqui5dwr19mc7r6bok40uoyrkbnj&rid=giphy.gif&ct=g" alt="Steph" height="300px" width="600px">
    </div>
      <div>
        <p style=" font-size: 30; text-align: justify;">When there are 10 assignment tabs</p>
        <img style="border: 5px double black;" src="https://media.tenor.com/MYZgsN2TDJAAAAAC/this-is.gif" alt="Fine" height="300px" width="600px">
    </div>
      <div>
        <p style=" font-size: 30; text-align: justify;">??</p>
        <img style="border: 5px double black;" src="https://64.media.tumblr.com/7f91d5621462fffec229ab51701ad9a1/tumblr_njpyn0a6xj1ruw1vso2_500.gifv" alt="F13?">
      </div>

    </div>
    <div class="card">
      <h3>Old Valorant Highlights</h3>
      <a onclick="setTimeout(myFunction, 3000);" href="https://www.youtube.com/@shcgaming4423" target="_blank">
        <button 
          style="
            background-color: pink;
            color: rgb(0, 0, 0);
            border-radius: 8px;
            height: 50px;
            width: 200px;
            font-size: 18px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
              sans-serif;
          "
        >
          Check Youtube
        </button>
      </a>
      <h3>Socials</3>
        <a href="https://www.facebook.com/zachfrancia.11/" target="_blank">
          <button
            style="
              background-color: pink;
              color: rgb(0, 0, 0);
              border-radius: 8px;
              height: 50px;
              width: 200px;
              font-size: 18px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            Check Facebook
        </a>
      </a>
    </button>
    <button onclick="myFunction()">Try it</button>

    <script>
    function myFunction() {
      alert("Well Dont Click here! Press the button beside it.");
    }

    </script>
      <h3>Credits</h3>
        <a href="https://my-learning.w3schools.com/tutorial/css" target="_blank">
          <button
            style="
              background-color: pink;
              color: rgb(0, 0, 0);
              border-radius: 8px;
              height: 50px;
              width: 200px;
              font-size: 18px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            Check Credits
          </button>
        </a>
        </button>
      </a>
      <h3>Add info to Database</h3>
      
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webprogsf211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (name ,email, website, comment, gender)
VALUES ('$name', '$email', '$website','$comment', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

}
}
?>
      <h3>Validation</h3>
        <a href="http://apcwebprog.csf.ph/~zafrancia/lab2/week9/validation_complete.php" target="_blank">
          <button
            style="
              background-color: pink;
              color: rgb(0, 0, 0);
              border-radius: 8px;
              height: 50px;
              width: 200px;
              font-size: 18px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            Forms Validation
        </a>
      </a>
    </div>
  </div>
</div>



<div class="footer" style="text-align: center;">
    <div id="grad1"></div>
</div>

<div class="pagination" style="transform: translate(1250px);font-size: 40px;">
    <a href="#">&laquo;</a>
    <a class="active" href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
  </div>

</body>
</html>
