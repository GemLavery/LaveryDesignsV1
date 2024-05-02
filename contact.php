<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> <?php include 'css/style.css'; ?> </style>
    <script src="https://kit.fontawesome.com/d4163eac13.js" crossorigin="anonymous"></script>
    <title>Lavery Designs</title>
</head>
<body>
    <div class="container">
        <div class="menuBar">
            <div class="menuLeft">
                <img class="logo" src="img/LogoNew.png" alt="Logo">
                <h3>Lavery Designs</h3>
            </div>
            <div class="menuRight">
                <a href="index.php" class="menuBtns">Home</a>
                <a href="about.php" class="menuBtns">About</a>
                <a href="portfolio.php" class="menuBtns">Portfolio</a>
                <a href="testimonial.php" class="menuBtns">Testimonials</a>
                <a href="contact.php" class="menuBtns">Contact</a>
            </div>
        </div>
        
        <div class="heading">
            <hr class="line">
            <h1>Contact Me</h1>
        </div>

        <div class="contactMe">
            <div class="socialContact">
                <h2>My Social Media</h2>
                <a href="" class="smLinks">
                    <i class="fa-brands fa-facebook"></i>
                    <h3>Facebook</h3>
                </a>
                <a href="" class="smLinks">
                    <i class="fa-brands fa-square-instagram"></i>
                    <h3>Instagram</h3>
                </a>
                <a href="" class="smLinks">
                    <i class="fa-brands fa-linkedin"></i>
                    <h3>LinkedIn</h3>
                </a>
                
                
                
            </div>
            <section class="contactFrom">
                <form action="contact-form.php" method="post">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name" >
                    
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@email.com" >
                    <br><br>

                    <label for="message">Message</label>
                    <br>
                    <textarea name="message" id="message" placeholder="Write your message here...." style></textarea>
                    <br><br>
            

                <button type="submit" value="submit">Send</button>
                </form>
            </section>

        </div>

        <div class="footer">
            <div class="footerLeft">
                <i class="fa-regular fa-copyright"></i>
                <p>2024 Gemma Lavery</p>
            </div>
            <div class="footerRight">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                <a href=""><i class="fa-brands fa-github"></i></a>
            </div>

        </div>
    </div>
</body>
</html>