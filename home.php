<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;   
        }
        body{
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #242424;
            background-color: #f0f3fa;
        }
        .container{
            width: 90%;
            margin: 0 auto;
            overflow: hidden;
        }
      
        .header{
            background: #46b7c1;
            padding: 10px 0;
            text-align: center;
        }
        .header b{
            color: #fff;
            font-size: 20px;
            font-weight: bold;
        }
        .header marquee{
            font-size: 18px;
            color: #fff;
            width: 80%;
        }
        .logo{
            height: 60px;
            width: auto;
            margin-top: 10px;
        }
        nav{
            float: right;
            padding: 25px 0px;
        }
        nav a{
            color: #333;
            text-decoration: none;
            font-size: 18px;
            padding: 0 15px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #46b7c1;
        }
        .slider {
            text-align: center;
            margin-top: 20px;
        }
        .slider img{
            width: 60%;
            max-width: 400px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        .main-section {
            padding: 30px 0;
        }
        .event {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            max-height:200px;

        }
        .event h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .event ul {
            list-style: none;
        }
        .event ul li {
            font-size: 18px;
            margin-bottom: 10px;
            color: #555;
        }
    </style>
</head>
<body>
   <div class="header">
    <div class="container">
        <b>NEWS : </b>
        <marquee>
            My Tuition Class : Intelligence plus curiosity that is the root of true education.
        </marquee>
    </div>
   </div>
   <div class="container1">
    <img src="images/supi.webp" class="logo">
    <nav>
        <a href="home.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="gallery.php">Gallery</a>
        <a href="sign.php">Sign-Up</a>
    </nav>
   </div>
   <div class="slider">
    <img src="images/Study.jpg">
   </div>
   <div class="main-section">
    <div class="container">
        <div class="event">
            <h2>Class News</h2>
            <div>
                <marquee direction="up" scrollamount="7" style="height: 340px;">
                <ul>
                    <li>18-April-2024 : <i>Celebrating New Year</i></li>
                    <li>20-May-2024 : <i>Making Vesak lanterns and celebrating Vesak Festival.</i></li>
                </ul>
                </marquee>
            </div>
        </div>
    </div>
   </div>
</body>
</html>
