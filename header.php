<?php
session_start();
?>
<html>
<head>
  <title>SuitYou</title>
  <!-- TODO -->
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" /> 
</head>

<body>
<div id="main">
    <div id="header">
     <div id="logo">
        <div id="logo_text">
          <h1><a href="index.php">Suit<span class="logo_colour">You</span></a></h1>
          <h2>Simply suits you.</h2>
        </div>
      </div>
     
     
      <div id="menubar">
        <ul id="leftmenu">
          <li><a href="shop.php">Shop</a></li>
          <li><a href="match.php">Match</a></li>	
          <li><a href="trends.php">Trends</a></li>
        </ul>
		
        <ul id="rightmenu">
          <li><a href="cart.php">Shopping Cart</a></li>
          <li><a href="user.php">User</a></li>	
          <li><a href="index.php">Logout</a></li>
        </ul>
      </div>
    </div>