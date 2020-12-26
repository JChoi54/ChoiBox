<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - ChoiBox</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <?php include "inc/nav.php"; ?>
    <div class="container">

        <section class="top"></section>

        <section class="middle"></section>

        <section class="bottom"></section>

        <section class="main">
            <div class="info">
                <div class="inner-info">
                    <h1>Phone</h1>
                    <p>(347) 669-2588</p>
                    <h1>Email</h1>
                    <p>contact@choibox.com</p>
                    <h1>Location</h1>
                    <p>267 West 17th Street</p>
                    <p>New York, NY 10011</p>
                </div>
            </div>

            <div class="contact">
                <div class="inner-contact">
                    <div class="topbar">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="contact-form">
                        <form id="contact-form" method="POST" action="form-processor.php">
                            <div class="input-area">
                                <label for="name">Name:</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter Name" required>
                            </div>

                            <div class="input-area">
                                <label for="email">Email:</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
                            </div>

                            <div class="input-area">
                                <label for="company">Company:</label>
                                <input name="company" type="text" class="form-control" id="company" placeholder="Enter Company" required>
                            </div>

                            <div class="input-area input-message">
                                <label for="message">Message:</label>
                                <textarea name="message" class="form-control" id="message" placeholder="Enter Your Message" required></textarea>
                            </div>

                            <div class="send">
                                <input type="submit" name="submit" class="submit" value="Send"
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="js/menu-highlighter.js"></script>
    <script src="js/contact.js"></script>
</body>
</html>