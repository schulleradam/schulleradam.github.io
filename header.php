<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style type="text/css">
@import url("style.css");
</style>
</head>

<body>
<div id="container">
  <div id="header">
		Rocky Studios
	</div>
	<div id="menubar">
		<ul>
			<li><a href="index.php" class="active" href="#home">Home</a></li>
			<li><a href="http://www.rockystudios.hu">News</a></li>
			<li class="dropdown">
   				 <a href="javascript:void(0)" class="dropbtn">Support</a>
    			<div class="dropdown-content">
      				<a href="#">Link 1</a>
      				<a href="#">Link 2</a>
      				<a href="#">Link 3</a>
   				 </div>
 			 </li>
 			 <li style="float:right"><a class="active" href="signup.php">Sign up</a></li>
 			 <li style="float:right"><a class="active" href="#submit">Log in</a></li>
 			 <li class="input"> 	
			<form>
				<input type="password" name="pwd" placeholder="Password">
				<input type="text" name="uid" placeholder="Username/e-mail">
			</form>
				 </li>
 			 <li>
				 <button type="submit" name="submit" hidden>Log in</button>
 			 </li>
		</ul>
		
		<div class="main-kontent">