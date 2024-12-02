<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url(images/background.jpg);
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #efaefc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
    }
    input[type="text"], input[type="email"], input[type="password"], input[type="address"], input[type="no"], input[type="sub"], input[type="NIC"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #1f0909;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Registration Form</h2>
  <form action="data.php" method="post">

    <label for="NIC">National Identity Card Number</label>
    <input type="NIC" id="NIC" name="NIC" placeholder="Your NIC No..">

    <label for="fullname">Full Name</label>
    <input type="text" id="fullname" name="fullname" placeholder="Your full name..">

    <label for="address">Address</label>
    <input type="address" id="address" name="address" placeholder="Your address..">

    <label for="no">Contact Number</label>
    <input type="no" id="email" name="no" placeholder="Your Contact Number..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email..">

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Your password..">

    <label for="sub">Subjects</label>
    <input type="sub" id="sub" name="sub" placeholder="Your Subjects..">

    <label for="gender">Gender</label><br>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
