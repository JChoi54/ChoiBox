<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChoiBox</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <?php include "inc/nav.php"; ?>


    <div class="container">
        <section class="main">
            <div class="inner">
                <div class="clipper">
                    <h1>ChoiBox</h1>
                </div>
                <div class="animate">
                    <p>Audio Control System</p>
                </div>
            </div>
            <img src="images/choiboxhome.jpg" alt="example">
        </section>

        <section class="about">
            <div class="inner">
                <div class="clipper">
                    <h2>About</h2>
                </div>
                <div class="animate">
                    <p>ChoiBox is an audio interface technology company headquartered in New York, NY.
                        The company designs, develops, and sells audio interface products.</p>
                    <a href="about.php" class="read-more">Read More</a>
                </div>
            </div>
        </section>

        <section class="products">
            <div class="inner">
                <div class="rectangle"></div>

                <div class="clipper">
                    <h2>Products</h2>
                </div>
                <div class="animate">
                    <p><a href="mutebox.php">Mute Button Interface Box</a></p>
                    <p><a href="toolbox.php">Toolbox</a></p>
                    <p><a href="mini.php">Toolbox Mini</a></p>
                </div>
            </div>
        </section>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="js/menu-highlighter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="js/home.js"></script>


</body>
</html>