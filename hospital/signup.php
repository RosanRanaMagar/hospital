<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
    body {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}
body:before {
  content: '';
  position: fixed;
  width: 100vw;
  height: 100vh;
  background-image: url("img/slider/18284ec99d85c9ee5afaf05baf77083a.jpg");
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  -webkit-background-size: cover;
  background-size: cover;
  -webkit-filter: blur(10px);
  -moz-filter: blur(10px);
  filter: blur(10px);
}
.contact-form{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 600px;
  height: 610px;
  padding: 80px 40px;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 10%;
}
.avatar {
  position: absolute;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  overflow: hidden;
  top: calc(-80px/2);
  left: 190px;
}
.contact-form h2 {
  margin: 0;
  padding: 0 0 20px;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
}
.contact-form p {
  margin: 0;
  padding: 0;
  font-weight: bold;
  color: #fff;
}
.contact-form input {
  width: 100%;
  margin-bottom: 20px;
}
.contact-form input[type=text], .contact-form input[type=email], .contact-form input[type=password]{
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}
.contact-form input[type=submit] {
  height: 30px;
  color: #fff;
  font-size: 15px;
  background: red;
  cursor: pointer;
  border-radius: 35px;
  border: none;
  outline: none;
  margin-top: 15%;
}
.contact-form button[type=submit]
{
  height: 30px;
  color: #fff;
  font-size: 15px;
  background: red;
  cursor: pointer;
  border-radius: 35px;
  border: none;
  outline: none;
  margin-top: 5%;
}
.contact-form a {
  color: #fff;
  font-size: 14px;
  font-weight: bold;
  text-decoration: none;
}
input[type=checkbox] {
  width: 20%;
}

  </style>
</head>
<body>
<div class="contact-form">
    <img alt="" class="avatar" src="https://i.postimg.cc/zDyt7KCv/a1.jpg">
    <h2>Sign Up</h2>
    <form action="">
      <p>Username</p><input placeholder="Enter username" type="text" >
      <p>Email</p><input placeholder="Enter Email" type="email">
      <p>Passwrod</p><input placeholder="Enter Password" type="password"> <input type="submit" value="Sign in">
      <p><input type="checkbox">Remember Me</p>
      <button type="submit" class="btn btn-secondary">Submit</button>
    </form>
  </div>
</body>
</html>
