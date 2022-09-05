
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link href="css/font.css" rel="stylesheet">
  <link href="css/style.css" media="screen" rel="stylesheet" type="text/css">
  <link href="css/common.css" media="screen" rel="stylesheet" type="text/css">
  <link href="css/main.css" media="screen" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  
</head>

<body>

  <div class="header-warning">
    WARNING: This product contains nicotine. Nicotine is an addictive chemical.
  </div>

  <header class="public-header clearfix frame-adaption transition7">
    <div class="header-box">
      <div class="mobile-back"><i class="icon-arrow-left"></i></div>
      <div class="logo-container">
        <img src="assests/images/logo.jpg" />
      </div>
      <div class="mobile-icons">
        <i class="icon-menu_icon openheaderbar"></i>
        <i style="display: none" class="icon-close closeheaderbar"></i>
      </div>
      <nav class="top-nav">
        <ul>
          <li><a href="index.html" class="active">HOME<i class="icon-arrow-right"></i></a></li>
          <li><a href="product.html" class="">PRODUCTS<i class="icon-arrow-right"></i></a></li>
          <li><a href="verify.html" class="">VERIFY PRODUCT<i class="icon-arrow-right"></i></a></li>
          <li class="slide-li">
            <a href="javascript:;" class="">WHOLESALE<i class="icon-arrow-right"></i><i class="icon-arrow-down"></i></a>
            <div class="category-wrapper">
              <a href="wholesale.html">Become a Wholesale</a>
              <a href="distributor.html">Our Distributors </a>
            </div>
          </li>
          <li class="slide-li">
            <a href="javascript:;" class="">SUPPORT<i class="icon-arrow-right"></i><i class="icon-arrow-down"></i></a>
            <div class="category-wrapper">
              <a href="faq.html">FAQ</a>
              <a href="">DOWNLOADS</a>
            </div>
          </li>
          <li><a href="contact-us.html" class="">CONTACT US<i class="icon-arrow-right"></i></a></li>
          <li class="showlanguagebox">
            <a class="language_a">LANGUAGE
              <i class="icon-arrow-down"></i>
            </a>

          </li>
        </ul>
      </nav>
    </div>
  </header>

  <div id="main_content" class="main-content frame-adaption">
    <div class="inner-pagebox">
      <div class="inner-title">
        Contact Us
      </div>
      <div class="innerresize-box">
        <div class="innerresize-des">
          If you are interested in our products please contact us, our team will get back to you as soon as possible! In
          order to serve you better, please leave the following information.
        </div>
        <div class="innerresize-body">
          <div class="innerresize-l">
            <form action="" method="post" >
              <ul class="tips-form">
                <li>
                  <div class="inputgroup">
                    <input name="name" type="text" id="name" name="name" required>
                    <span class="s-tips transition3">Name*</span>
                  </div>
                </li>
                <li>
                  <div class="inputgroup">
                    <input name="email" type="text" id="email" name="email" required>
                    <span class="s-tips transition3">Email*</span>
                  </div>
                </li>
                <li>
                  <div class="inputgroup">
                    <span class="s-tips transition3">Message*</span>
                    <textarea name="message" type="text" id="message" name="message" required></textarea>
                  </div>
                </li>
              </ul>
              <button type="submit" class="btn">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer frame-adaption">
    <div class="footer-box">
      <div class="footer-row footer-flex clearfix">
        <div class="subscribe">
          <div class="s-title">Subscribe For More Updates</div>
          <p>Get instant updates about our new products and special promos!</p>
          <div class="input-group">
            <input type="text" name="subscribe" placeholder="Enter your email address">
            <button type="button" class="button-subscribe">Subscribe</button>
          </div>
        </div>
        <div class="follow-us">
          <div class="s-title">Follow Us</div>
          <ul class="clearfix">
            <li><a href="" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a href="" target="_blank"><i class="icon-instagram"></i></a></li>
            <li><a href="" target="_blank"><i class="icon-vk"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="footer-row clearfix border">
        <div class="copyright">
          <p>© Copyright 2022 AIRO. All Right Reserved.</p>
          <ul>
            <li><a href="" target="_blank">Privacy Policy </a></li>
            <li><a href="" target="_blank">Terms & Conditions</a></li>
          </ul>
        </div>
        <div class="footer-des">
          California Proposition 65 Warning:This product contains chemicals known to the state of California
          to
          cause
          cancer and birth defects or other reproductive harm.
        </div>
      </div>
    </div>

  </footer>
   
</body>

</html>
 
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

$name = $_REQUEST['name'];
$message = $_REQUEST['message'];
$email = $_REQUEST['email'];

try {
 
                  
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'Admin Mail here';                    
    $mail->Password   = 'Admin gmail app password here';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

  
    $mail->setFrom('Admin Mail here', "Admin name here");

    $mail->addAddress('Admin Mail here');             

    $mail->isHTML(true);                                 
    $mail->Subject = 'Query from website';
    $mail->Body    = "Name :- $name </br> Email:- $email </br> Message:- $message";
    $mail->AltBody = "Name :- $name </br> Email:- $email </br> Message:- $message";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}  

