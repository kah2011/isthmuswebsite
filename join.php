<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Isthmus society, isthmus society, dialogue among religions and sciences, dialogue among religions and sciences at university of wisconsin, uw-mad isthmus society" />
<meta name="description" content="The Isthmus Society of UW-Madison is a local network of scientists, scholars, religious leaders, and interested community members who seek to cultivate open and lively conversation at the intersections of the sciences and diverse religious traditions. " />

<title>Isthmus Society -- Join Our List </title>
<link href="stylesheets/template.css" rel="stylesheet" type="text/css" />
<link href="stylesheets/join.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"
src="javascripts/jquery-1.8.0.min.js"></script>
<script type="text/javascript" 
src="http://code.jquery.com/jquery-1.8.0.min.js">
</script>

<script type="text/javascript">
var length = 0;
function keyPress(chars) {
   length = chars.value.length;
}

$(document).ready(function(){
    $("fieldset").focusin(function(){
      $(this).css("background-color","#DDDED7");
   });
  $("fieldset").focusout(function(){
    $(this).removeAttr("style");
  });
  
  $("#txtarea").focusin(function(){
    if(length == 0) {
      $(this).val("");
    }
  });
  $("#txtarea").focusout(function(){
    if(length == 0) {
      $(this).val("Enter your comment(s) here");        
    }
  });
});
</script>
</head>

<body>
<div id="wrapper">
<div id="logo">
<!--Logo --><a href="index.html">
<img src="images/isthmus_logo.png" alt="logo" width="750" height="150" /></a>
</div> 
<!-- logo -->

<div id="body_content">
<!--content and menu list-->
<div id="menulist">
<ul>
<li>
<a href="index.html" class=""> Home </a>
</li>
<li>
<a href="Activities.html" class=""> Activities &amp; Events </a>
</li>
<li>
<a href="join.php" class="current"> Join Our List </a>
</li>
<li>
<a href="about.html" class=""> About Us </a>
</li>
<li>
<a href="staff.html" class=""> Staff</a><br />
</li></ul>

<p id="address">
The Isthmus Society<br />
c/o LISAR<br />
5222 Mosse Humanities Bldg<br />
455 N. Park Street<br />
Madison, WI  53706<br /><br />
Inquiries &amp; webmaster:<br />

<a href="mailto:isthmus@mailplus.wisc.edu">isthmus@mailplus.wisc.edu</a>
</p>
</div> <!--menu list-->

<div id="content">
<p>To receive occassional announcements of Isthmus Society events via email, <a href="mailto:isthmus@mailplus.wisc.edu">send a request</a> containing your email address to join our list-serve. Your contact information will not be shared with any third parties.</p>
<p>We also eagerly welcome your comments, questions, suggestions, and ideas!</p>
<p>Email: <a href="mailto:isthmus@mailplus.wisc.edu">isthmus@mailplus.wisc.edu</a> </p>
<p> Or fill up the form below to get subscribed for the upcoming events: </p>

<form action="phpscripts/form_input.php" method="post">
<fieldset>
<legend>Subscription Form:</legend>
<br />
FirstName: 
<?php 
if(isset($_SESSION['errorFirstN']) && $_SESSION['errorFirstN'] == 1) {
  echo "<p style='font-size:10px; color:red; margin:0px; padding:0px;'>";
  echo "Please enter a name with only characters. </p>";
}
else {
  echo "<br />";
}
?> 
<input type="text" name="firstname" maxlength="50" class="box_align" /><br /><br />
LastName: 
<?php 
if(isset($_SESSION['errorLastN']) && $_SESSION['errorLastN'] == 1) {
  echo "<p style='font-size:10px; color:red; margin:0px; padding:0px;'>";
  echo "Please enter a name with only characters. </p>";
}
else {
  echo "<br />";
}
?> 
<input type="text" name="lastname" maxlength="50" class="box_align" /><br /><br />
Email: 
<?php 
if(isset($_SESSION['errorEmail']) && $_SESSION['errorEmail'] == 1) {
  echo "<p style='font-size:10px; color:red; margin:0px; padding:0px;'>";
  echo "Please enter a valid email. </p>";
}
else {
  echo "<br />";
}
?> 
<input type="text" name="email" class="box_align"/> @ 
<select name="email_provider">
<option value="hotmail.com">hotmail.com</option>
<option value="gmail.com">gmail.com</option>
<option value="yahoo.com">yahoo.com</option>
<option value="live.com">live.com</option>
<option value="wisc.edu">wisc.edu</option>
</select><br /><br />
Comment: <br />
  <textarea name="comments" id="txtarea" onkeyup="keyPress(this)">Enter your comment(s) here</textarea>
<input type="submit" name="submit" value="Click to submit"/>
</fieldset>
</form>

</div> <!-- content -->
<div id="clear"> </div> 
</div> <!-- content and menulist -->
</div> <!-- wrapper -->

</body>
</html>
<?php
  session_destroy();
?>