<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - About</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <?php include_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About
                        <strong>business casual</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <style>
                        .embed-container {
                            position: relative;
                            padding-bottom: 56.25%;
                            height: 0;
                            overflow: hidden;
                            max-width: 100%;
                        }

                        .embed-container iframe,
                        .embed-container object,
                        .embed-container embed {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                        }
                    </style>
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed/ooUAVHJAcyk' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <div class="col-md-6">
                    <p>The Perfect Cup launched in 2000, in the heart of California. Our mission is simple. We want to teach coffee drinkers all over the world how to make the perfect blend! Our Coffee experts have a lifelong passion for coffee. They are internationally traveled and have experienced many varieties.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/abt1.jpg" alt="">
                    <h3>Sam Smith
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/abt2.jpg" alt="">
                    <h3>John Smith
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/abt3.jpg" alt="">
                    <h3>Jack Smith
                    </h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>

</html>