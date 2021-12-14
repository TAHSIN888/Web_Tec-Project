<?php
    session_start();
    if (!isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: index.php");
    }
    include 'config.php';
if((isset($_POST['submit'])))
{
      //fetching and storing the form data in variables

    
    $Name = $conn->real_escape_string($_POST['name']);
    $Email = $conn->real_escape_string($_POST['email']);
    $Subject = $conn->real_escape_string($_POST['subject']);
    $Message = $conn->real_escape_string($_POST['message']);
      //query to insert the variable data into the database
    $sql="INSERT INTO message (name, email, subject, message) VALUES ('".$Name."','".$Email."', '".$Subject."', '".$Message."')";
      //Execute the query and returning a message
    if(!$result = $conn->query($sql))
    {
    die('Error occured [' . $conn->error . ']');
    }
    else
      
   echo '<script>alert("Thank you! We will get in touch with you soon")</script>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-banking</title>
    <link rel="stylesheet" href="CSS/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">E <span>Bank</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Service Center</a></li>
                <li><a href="#skills" class="menu-btn">My Banking</a></li>
                <li><a href="#teams" class="menu-btn"> Retail</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>


            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, Have any bank account?</div>
                <div class="text-2">    MAKE A FREE BANK ACCOUNT</div>
                <div class="text-3">E bank gives you <span class="typing"></span></div>
                <a href="Registration.html"> Create Account</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About us</h2>
            <div class="about-content">
                <div class="column left">
<div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="images/1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/4.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      
     
    </div>
   

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 2500);
    </script>
                </div>
                <div class="column right">
                    <div class="text">Let's save money for your future </div>
                    <p>E Bank has become the first Bangladeshi Bank to be rated the best by three of the top domestic credit rating agencies in Bangladesh and two of the world’s leading credit rating agencies portraying quality portfolio, higher capital base, stability and steady growth trends.</p>
                    <a href="#">Download journal</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Our services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                    
                    
                      
                        <div class="text">Help Dask</div>
                        <p>Are you in trouble need some halp? <br>E-bank help desk is open for 24 hours at your service</p>
                    <a   href="#">Go</a>
                
                </div>
                </div>
                <div class="card">

                    <div class="box">
                       
                        <div class="text">Complain Box</div>
                        <p>Need any improvement or feeling disappointed to our suevice  then go to our complain box.</p>
                   <a href="Complain Box/index.html">Go</a>
                    </div>
            
                </div>
                <div class="card">
                    <div class="box">
                        <div class="text">Loan Dask</div>
                        <p>E-bank Loan to fulfill all your dreams, reach to new heights and make your life joyful.</p>
                        <a href="Bank_Loan/index.php">Go</a>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My Banking</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Where you can insure your  future sefty.</div>
                    <p>E Bank has proudly introduced the ground-breaking "Two Factor Authentication (2FA) Security Solution" that protects a customer's identity and account information from access by an unauthorized person. This security solution is designed for Internet Banking third party fund transfer transactions within the E Bank account holders.</p>
                    <a href="accountLogin.html">My account</a>
                </div>

                <div class="column right">
              <img src="images/banking.gif" width="300px" style="margin-left: 200px;">
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Retail</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpg" alt="">
                        <div class="text">Woman banking</div>
                        <p>To make a woman's life easy E-bank is always there.</p>
                         <a href="#">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpg" alt="">
                        <div class="text">Student banking</div>
                        <p>Education is a general right for all girls and boys.</p>
                         <a href="#">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpg" alt="">
                        <div class="text">Business loan</div>
                        <p>Trying somethig new and need a fund go for a loan.</p>
                         <a href="#">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpg" alt="">
                        <div class="text">EB Card</div>
                        <p>Smart technology makes our life more easier</p>
                         <a href="#">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpg" alt="">
                        <div class="text">EB Scholarship</div>
                        <p>Schlarship is a way to give a chance to a talent</p>
                         <a href="#">Read more</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Do you hava any confusion or question then let us khow. We are always at your service</p>
                    <div class="icons">
                        
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Bosundhara, Dhaka</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">ebank@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message us</div>


                    <form action="" method="post" >
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" id="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="message" id="message" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By @Tahsin </span>
    </footer>

    <script src="JS/script.js"></script>
</body>
</html>
