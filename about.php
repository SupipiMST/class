<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url(images/background.jpg);

        }
        .content {
            max-width: 800px;
            padding: 20px;
            background-color: #dfd9d9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(206, 9, 9, 0.1);
            display: flex;
        }
        .image {
            flex: 1;
        }
        .image img {
            width: 100%;
            border-radius: 10px 0 0 10px;
        }
        .description {
            flex: 2;
            padding: 20px;
        }
        h1, p {
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #4a19bc;
            line-height: 1.6;
        }
        footer{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="image">
                <img src="images/Tution class.jpg" alt="Tuition Class Photo">
            </div>
            <div class="description">
                <h1>About Us</h1><br>
                <p<b><i>Welcome to our Advanced Level Science Tuition Classes!</i></b></p><br>
                <p>We are dedicated to providing high-quality education to help students excel in their studies and achieve their academic goals. With experienced and passionate instructors, we offer comprehensive lessons tailored to meet the needs of individual students.</p>
                <p>Our focus is not only on imparting knowledge but also on fostering critical thinking skills, problem-solving abilities, and a deep understanding of the subjects. Whether you're struggling with complex mathematical concepts or intricate biological processes, our team is here to guide you every step of the way.</p>
                <p>Join us today and embark on a journey towards academic success!</p>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; Supi Tuition Class</p>
        <p>Email : supipithashmilakumari@gmail.com     Tel: 0788685695</p>
    </footer>
</body>
</html>
