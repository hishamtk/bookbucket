<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Foodda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="stylle.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!--header-->
	<div class="navigation_bar">
		<a href="home.php" style="font-size: 30px; float: left;padding-top: 10px">Fooddaa</a>
		<a href="javascript:div_show()">Sign In or Sign Up</a>
		<a href="">Cart<img src="images/cart.gif" style="width:20px; height: 20px;"></a>
	</div>
	<!--slideshow-->
	<div class="w3-content w3-display-container" style="max-width:100%;padding-top: 60px;">
      <img class="mySlides" src="images/photo1.jpeg" style="width:100%"/>
      <img class="mySlides" src="images/photo2.jpeg" style="width:100%"/>
      <img class="mySlides" src="images/photo3.jpg" style="width:100%"/>
      <div class=" w3-display-left w3-hover-grey" style="cursor:pointer;width: 67px;height: 120px; position:absolute;padding:10px;font-size:50px" onclick="plusDivs(-1)"><div class="w3-center" style="padding-top: 10px;color: #FFFF">&#10092</div></div>
      <div class="w3-display-right w3-hover-grey" style="cursor:pointer;width: 67px;height: 120px; position:absolute;padding:10px;font-size:50px" onclick="plusDivs(1)"><div class="w3-center" style="padding-top: 10px;color: #FFFF">&#10093</div></div>
      <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
	</div>

  <div id="popupBody" style="display: none;">
    <div id="abc">
      <!-- Popup Div Starts Here -->
      <div id="popupContact" style=" width: 500px;">
        <!-- Contact Us Form -->
        <div id="form">
          <img id="close" src="images/close.png" onclick ="div_hide()">
          <div class="signIn" style="display: table;">
            <a href="javascript:loginShow()" style="display: table-cell;"><b>Log In</b></a>
            <a href="javascript:signupShow()" style="display: table-cell;"><b>Sign Up</b></a>
          </div>
          <a href=""><img src="images/facebookLogIn.png" style="margin-top: 10px;width: 400px;"></a>
          <h6><b>OR</b></h6>
          <form action="login.php" method="POST" id="login">
            <input id="email" type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password" id="customShowHide">
            <input type="checkbox" name="" style="margin-top: 10px;background-color: red" checked>Remember me
            <a href="#" style="text-decoration: none;color: #E86316;float: right;margin: 10px 0px;">forgot your password?</a>
            <!--a href="javascript:%20check_empty()" id="submit">Log in</a-->
            <input type="submit" name="" id="submit" value="Log in">
          </form>
          <form action="register.php" method="POST" id="signup" style="display: none;">
          <div style="display: table;">
            <input id="name" name="firstname" placeholder="First name" type="text" style="display: table-cell;width: 190px;">
            <input id="name" name="lastname" placeholder="Last name" type="text" style="display: table-cell;width: 190px;margin-left: 9px;">
          </div>
          <input id="name" name="mobile" placeholder="Mobile" type="text">
          <input id="email" name="email" placeholder="Email" type="text">
          <input id="name" name="password" placeholder="Password" type="password">
          <input id="name" name="password" placeholder="Confirm password" type="password">
          <input type="checkbox" name="checkbox" style="margin-top: 10px;">I have read and accepted the<a href="" style="text-decoration: none;"><b> Terms and conditions </b></a>and <a href="" style="text-decoration: none;"><b>Privacy policy</b></a>
          <!--a href="javascript:%20check_empty()" id="submit">Sign up</a-->
          <input type="submit" name="" id="submit" value="Sign up">
          </form>
        </div>
      </div>
      <!-- Popup Div Ends Here -->
    </div>
  </div>
  <!--restaurant list-->
  <section>
    <h2 style="text-align: center;">Restaurants</h2>
    <div style="display: table;margin: auto;">
      <a href="dashboard.php" style="display: table-cell;"><img src="images/zam zam.png" style="width: 174;height: 174;margin-right: 400px;"></a>
      <a href="" style="display: table-cell;"><img src="images/kfc.png" style="width: 174;height: 174;"></a>
    </div>
    <br>
    <div style="display: table;margin: auto;>
      <a href="" style="display: table-cell;"><img src="images/dominospizza.jpeg" style="width: 174;height: 174;margin-right: 250px;margin-left: 96px;border: 1px solid black;></a>
      <a href="" style="display: table-cell;"><img src="images/le arabia.png" style="margin-bottom: 13px;"></a>
    </div>
  </section>
  <!--footer-->
  <section style="background-color: #A52A2A;">
    <div class="" style="display: table;margin: auto;">
      <div style="display: table-cell;float: left; margin-left:250px;margin-top: 100px;">
        <h3 style="text-align: center;">Get in touch</h3>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        <br><br><br>
        <a href="#"><img src="images/googleplay.jpg" style="margin-left: 18px;"></a>
      </div>
      <div style="width: 400px;display: table-cell;float: right;margin-left: 370px;">
        <h3>Contact us</h3>
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" maxlength="1000" cols="20" rows="5" placeholder="Message"></textarea>
        <input type="submit" name="submit" value="Submit" id="submit">
      </div>
    </div>
    <hr>
    <p style="text-align: center;">&#169;copyright foodda inc.<a href="#" style="text-decoration: none;">  Terms and conditions</a><a href="#" style="text-decoration: none;">  Privacy policy</a></p>
  </section>
	<script type="text/javascript">
		var slideIndex = 1;
		var timer = null;
		showSlides(slideIndex);

		function plusDivs(n) {
  			clearTimeout(timer);
  			showSlides(slideIndex += n);
		}

		function currentDiv(n) {
  			clearTimeout(timer);
  			showSlides(slideIndex = n);
		}

		function showSlides(n) {
  		var i;
  		var slides = document.getElementsByClassName("mySlides");
  		var dots = document.getElementsByClassName("demo");
  		if (n==undefined){n = ++slideIndex}
  		if (n > slides.length) {slideIndex = 1}
  		if (n < 1) {slideIndex = slides.length}
  		for (i = 0; i < slides.length; i++) {
      		slides[i].style.display = "none";
  		}
  		for (i = 0; i < dots.length; i++) {
      		dots[i].className = dots[i].className.replace("w3-white", "");
  		}
  		slides[slideIndex-1].style.display = "block";
  		dots[slideIndex-1].className += " w3-white ";
  		timer = setTimeout(showSlides, 5000);
		}

    // Validating Empty Field
  function check_empty() {
    if (document.getElementById('password').value == "" || document.getElementById('email').value == "") {
      alert("Fill All Fields !");
    }else {
      document.getElementById('form').submit();
      alert("Form Submitted Successfully...");
    }
  }
  //Function To Display Popup
  function div_show() {
    document.getElementById('abc').style.display = "block";
    document.getElementById('popupBody').style.display = "block";
  }
  //Function to Hide Popup
  function div_hide(){
    document.getElementById('abc').style.display = "none";
  }
  function loginShow(){
    document.getElementById('login').style.display="inline";
    document.getElementById('signup').style.display="none";
  }
  function signupShow(){
    document.getElementById('login').style.display="none";
    document.getElementById('signup').style.display="inline";
  } 

  $(document).ready(function() {
    ux.load("showHidePassword", function(){
        $('#customShowHide').showHidePass({showText:"Show",hideText:"Hide"});
    });
  });
	</script>
</body>
</html>