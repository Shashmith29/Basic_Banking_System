<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo '<link href="style.css" rel="stylesheet">'; ?>
    <script>
        $('.expandHome').mouseover(function () {
            $('.sub-home').css({
                'display': 'block'
            });
        });
        $('.subnavbtn').mouseover(function () {
            $('.sub-home').css({
                'display': 'none'
            });
        });

        $('#trapezoid').mouseleave(function () {
            $('#trapezoid').css({
                'margin-top': '-53px'
            });
            $('.sub-home').css({
                'display': 'none'
            });
        }).mouseenter(function () {
            $('#trapezoid').css({
                'margin-top': '0px'
            });
        });


    </script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>

<body>
    <nav class="navbar">
        <div id="trapezoid">
            <a class="expandHome" href="#">Home</a>
            <a href="about.php" class="expandHome">About</a>
            <a href="customers.php" class="expandHome">Customers</a>
            <a href="services.php" class="expandHome">Services</a>
        </div>
    </nav>
    <div class="logo">
        <img src="logo1.png" alt="" height="120px" width="120px">
    </div>

    <div class="interface">
        <section id="two">
            <div class="buttons-container">
                <button class="button-arounder"> <a href="customers.php">Get Started</button>
            </div>
        </section>


    </div>
    <div>
        <h2>This Project is made by Manikonda Shashmith with tons of respect and love</br> towards web development for
            #May_2024 GRIP by
            </br>
            <h3><span class="heart"></span>SPARKS FOUNDATION<span class="heart"></span></h3>
            <div class="icon"> <a href="https://www.linkedin.com/in/manikonda-shashmith-1703261aa/"
                    class='fa fa-linkedin blue-color'></a>
                <a href="https://github.com/Shashmith29" class='fa fa-github black-color'></a>
                <h1>Contact Me!?</h1>
            </div>
        </h2>

    </div>

</body>

</html>