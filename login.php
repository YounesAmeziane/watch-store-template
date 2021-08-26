<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Log In</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>login</h2>
                    <form action="" method="post">
                        <input type="text" class="input-box" name="username" placeholder="Username">
                        <input type="password" class="input-box" name="password" placeholder="Password">
                        <button type="submit" class="submit-btn" name="submit">Submit</button>
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">I'm new here</button>
                    <a href="">forgot password</a>
                </div>
                <div class="card-back">
                <h2>register</h2>
                    <form action="" method="post">
                        <input type="text" class="input-box" name="username" placeholder="Username">
                        <input type="email" class="input-box" name="email" placeholder="Email">
                        <input type="text" class="input-box" name="number" placeholder="Number">
                        <input type="password" class="input-box" name="password" placeholder="Password">
                        <button type="submit" class="submit-btn" name="submit">Submit</button>
                    </form>
                    <button type="button" class="btn" onclick="openLogin()">I've an account</button>
                </div>
            </div>
        </div>
    </div>
<script>
    var card = document.getElementById("card");

    function openRegister(){
        card.style.transform = "rotateY(-180deg)"
    }

    function openLogin(){
        card.style.transform = "rotateY(0deg)"
    }
</script>
<footer>
   <div class="content">
     <div class="left box">
       <div class="upper">
         <div class="topic">About us</div>
         <p>Leax programmed all that in less than two days,
         and he will add php and sql when someone will buy this site .</p>
       </div>
       <div class="lower">
         <div class="topic">Contact us</div>
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i>+212638869954</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i>leaxforbusiness@gmail.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Others pages</div>
       <div><a href="#">FAQ</a></div>
       <div><a href="#">Contact us</a></div>
       <div><a href="#">Support</a></div>
       <div><a href="#">Blog</a></div>
     </div>
     <div class="right box">
       <div class="topic">Join our newsletter</div>
       <form action="#">
         <input type="text" placeholder="Enter email address">
         <input type="submit" name="" value="Send">
         <div class="media-icons">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-whatsapp"></i></a>
           <a href="#"><i class="fab fa-youtube"></i></a>
         </div>
       </form>
     </div>
   </div>
   <div class="bottom">
     <p>Copyright © 2021 <a href="#"> All rights reserved</a></p>
   </div>
 </footer>
</body>
</html>
