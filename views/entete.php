<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"
charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="/Historia/bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<style type="text/css">
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #544caf;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}



.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
<link href="/Historia/styles/csi.css" rel="stylesheet">
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="/Historia/index.php">Accueil</a>
  <a href="/Historia/views/histoire.php">Histoire</a>
  <a href="/Historia/views/annonces.php">Annonces</a>
  <a href="#contact">Suggestions</a>
  <a href="/Historia/views/contact.php">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script type='text/javascript' src='js/collapse.js'></script>
