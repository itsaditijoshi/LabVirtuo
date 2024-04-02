<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <title>Dropdown Menu</title>
  <style>
    body{
      font-family: 'Poppins',sans-serif;
      background: linear-gradient(to right, #ff6e7f,#bfe9ff);
    }
   
    .dropdown {
      position: relative;
      display: inline-block;
    }

    
    .dropdown-btn {
      padding: 30px;
      background-color: #fff;
      color: #000000;
      border:none ;
      cursor: pointer;
     
      width:500px;
    }

    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      
      z-index: 1;
    }

    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    
    .dropdown-content a:hover {
      background-color: #fff;
    }

    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    header {
            background-color: #000000;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            
            font-size: 20px;
        }
        header button {
            padding: 10px 20px;
            background-color: #ff6e7f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        header button:hover {
            background-color: #ff6e7f;
        }
        section {
            padding: 20px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }
        h1{
            font-size:28px;
        }

  </style>
</head>
<body>
    <header>
        <h1>LabVirtuo</h1>
            <nav>
                <ul>
                    
                    
                    <li><a href="aboutus(maybefinal).html">About us</a></li>
                    <li><a href="feed.html">Feedback</a></li>
                    <li><a href="hhh.html">Home</a></li>
                    
                </ul>
            </nav>
            
        

        
    </header>

    <section>
        
        <h2>Welcome to the services page of our system</h2>
        <p>This section contains information about the all the labs available in the premises .<br>
        You can choose the desirable branch for which you want to book the slot by clicling on labs button given below .</p>
    </section>


<div class="dropdown">
  
  <button class="dropdown-btn">Labs</button>
  
  <div class="dropdown-content">
    
    <a href="dropcs.html">Computer Science Labs</a>
    <a href="dropit.html">Information Technology labs</a>
    
  </div>
</div>

</body>
</html>