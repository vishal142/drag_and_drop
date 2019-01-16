<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Get All Menu </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style type="text/css">
     .nav,.nav ul 
    {
      margin:0px;
      padding :0px;
      list-style :none outside none;
      height:30px;
      
      
    }
    .nav li
    {
      float :left;
      width:150px;
      position:relative;
      height:50px;
      background:#cc101c;
      display:block;
      
      margin-left:2px;
        
     }
    .nav a
    {
      text-decoration :none;
      height:50px;
      display:block ;
      text-align :center ;
      
        
    }
  
    .sub
    {
      left:-9999px;
      position :absolute ;
      top:-9999px;
      z-index :2;
      
      
    }
    
    .nav li:hover .sub
    {
      visibility:visible ;
      
      
    }
    .nav
    {
      font-family :Calibri;
      font-size :20px;
      height:50px;
      font-weight:bold;
      margin:40px auto;
      text-shadow :0 -1px 3px #ffcc00;
      border-radius:4px;
      
      
    }
    .nav li:first-child
    {
      border-left :0 none;
      margin-left :5px;
      
      
    }
   
   .nav li a
   {
    color:White ;
    display :block;
    line-height :24px;
    text-decoration :none;
    }
    @keyframes ss
    {
      0%
      {
      transform:scale(1);
    }
      30%
      {
        transform:scale(1.3);
      }
      100%
      {
        transform:scale(1);
      }
    }
    .nav li >a:hover
    {
      animation:ss 0.7s linear infinite forwards;
      
      
    }
    .nav li:hover>a
    {
      z-index:4;
      
    }
    .nav li:hover .sub
    {
    left:0;
    top:50px;
    width:150px;
    }
    .nav ul li
    {
      background :none repeat scroll 0 0 #ff6565;
      box-shadow:5px 5px 5px rgb(0,0,0,0.5);
      opacity:0.3;
      width :100%;
      
    }
      
    .nav li:hover ul li 
    {
    animation:ss1 0.3s linear 1 forwards; 
      
    }
    @keyframes ss1
    {
      0%
    {
     margin-left :300px;top:900px;transform:rotate(90deg);
    }
    100%
    {
      
    margin-left :0px;top:0px;transform:rotate(360deg);
    opacity:1;
      
    }
      }
      
      .nav li:hover ul li:nth-child(3)
      {
        animation-delay:0;
      }
        
      .nav li:hover ul li:nth-child(2)
      {
        animation-delay:0.1s;
      }
      
        
      .nav li:hover ul li:nth-child(1)
      {
        animation-delay:0.2s;
      }
      
  </style>
</head>
<body>
	<div class="container">
  
  <div class="row">
   <div>
  <ul class="nav">
    <?php foreach($getAllmenu as $row): ?>
  <li><a href="#"><?php echo $row['title'];?></a></li> 
  <?php endforeach;?>
  </ul>

   </div>
  </div>

  </div> <!-- container / end -->
</body>
</html>