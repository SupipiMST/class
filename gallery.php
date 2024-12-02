<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        body {
            background-image: url(images/background.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
        }

        main {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
        }

        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .box {
            width: 300px;
            height: 300px;
            margin: 10px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

      
    </style>
</head>
<body>
<main>
   
    <div class="box"><img src="images/Biology.jpeg" ></div>
    <div class="box"><img src="images/Combined Maths4.jpg" ></div>
    <div class="box"><img src="images/Chemistry.jpg" ></div>
    <div class="box"><img src="images/Physics2.jpg" ></div>
   
</main>
</body>
</html>
