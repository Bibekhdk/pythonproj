<?php
include('server.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Photography Site</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <!-- header -->
        <header>
            <div class = "header1">
            <div class = "nav-section">
                <div class = "brand-and-navBtn">
                    <span class = "brand-name" style="color: aliceblue; font-family: 'Patua One';font-size: 35px;">
                        PhotoLab
                    </span>
                    
    
                    <span class = "navBtn flex">
                        <i class = "fas fa-bars"></i>
                    </span>
                </div>
               <!-- navigation menu -->
               <nav class = "top-nav">
                <ul>
                    <li><a href = "index.html">Home</a></li>
                    <li><a href = "gallery.html">Gallery</a></li>
                    <li><a href = "blog.html">Blog</a></li>
                    <li><a href = "contact.html"class="active">Contact</a></li> 
                    <!-- <li><a href = "signin.html">Sign up</a></li> -->
                </ul>
            
            <span class = "search-icon">
                <i class = "fas fa-search"></i>
            </span>
        </div>
            </nav>    
    </div>
           
    </header>
          
        <!-- end of header -->

        <!-- main -->
        <section class = "section-five">
            <div class = "container">
                <div class = "contact-top">
                    <h3>CONTACT ME</h3>
                    <p>Have a vision you'd like to bring to life? Questions about my photography services? Or perhaps you just want to share your thoughts on a particular image that resonated with you? I'd love to hear from you!</p>
                </div>

                <div class = "contact-middle">
                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-map-signs"></i>
                        </span>
                        <span>Address</span>
                        <p>Samakhusi,Kathmandu, Nepal</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-phone"></i>
                        </span>
                        <span>Contact Number</span>
                        <p>9812124993</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-paper-plane"></i>
                        </span>
                        <span>Email Address</span>
                        <p>photolab@gmail.com</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-globe"></i>
                        </span>
                        <span>Website</span>
                        <p>www.PhotoLab.com</p>
                    </div>
                </div>
                 <h3>Contact Form:</h3>
                <div class = "contact-bottom">
                    <form class = "form" method="post" action="contact.php">
                        <?php include('errors.php');?>
                        <input type = "text" placeholder="Your Name" name="name" required  >
                        <input type = "email" placeholder="Your Email" name="email" required >
                        <input type = "text" placeholder="Subject" name="subject" required>
                        <input type="text" placeholder="Phone Number" pattern="[0-9]{10}" name="phonenumber" required>
                        <textarea rows = "9" placeholder="Message" name="message"></textarea>
                        <button type = "submit" class = "btn" value = "Send Message" name="contact">Send Message</button>
                    </form>

                    <!-- Map -->
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.27776848722!2d85.28493299361479!3d27.70903024183718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1707632755056!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                    </div>
                </div>
            </div>
        </section>
        <!-- end of main -->


        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container container">
                <div>
                    <h2>Bibek Hadkhale</h2>
                    <p>With a profound love for storytelling through photography, My journey is not just about clicking pictures, it's about understanding the unique narratives of each moment and translating them into stunning visual tales.Thank you for considering PhotoLab for your photographic needs. I look forward to creating lasting memories with you.

                    </p>
                </div>
                <div>
                    <h3>Free Subscription!</h3>
                    <p>Be the first to explore our latest photo series and projects. Our Free Subscription grants you early access to these visual narratives, allowing you to experience the stories behind the lens before anyone else.</p>

                    <div class = "subs">
                        <i class = "fas fa-envelope"></i>
                        <input type = "email" id = "email" placeholder="Email Address">
                        <button type = "submit">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <p>&copy; Copyright 2024 PhotoLab</p>
        </footer>
        <!-- end of footer -->
        

        <script src="script.js"></script>
    </body>
</html>
