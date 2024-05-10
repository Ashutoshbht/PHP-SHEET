<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="top_bar">
       <div class="facebook_text">Facebook</div>
       <div class="signup_button">Signup</div>
    </div>
    <div class="insert_data">
        <h2>Signup</h2><br>
        <input type="text" name="firstname"  placeholder="Enter your First Name"><br><br>
        <input type="text" name="lastname"  placeholder="Enter your last Name"><br><br>
        <select class="select_gender" name="gender">
            <option value="">select your Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>
        <input type="text" name="email"  placeholder="Enter your Email address"><br><br>
        <input type="password" name="password"  placeholder="Enter your Password"><br><br>
        <input type="password" name="cpassword"  placeholder="Confirm your Password"><br><br>
        <input type="submit" value="Signup" id="submit"><br><br>
    </div><br>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Before and After in CSS</title>
<style>
  .box {
    width: 200px;
    height: 200px;
    background-color: #ccc;
    position: relative; /* Needed for absolute positioning of pseudo-elements */
  }

  .box::before {
    content: "Before";
    position: absolute;
    top: 10px;
    left: 10px;
    color: white;
    background-color: blue;
    padding: 5px;
  }

  .box::after {
    content: "After";
    position: absolute;
    bottom: 10px;
    right: 10px;
    color: white;
    background-color: red;
    padding: 5px;
  }
</style>
</head>
<body>

<div class="box"></div>

</body>
</html>



</body>
</html>