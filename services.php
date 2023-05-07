<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <?php echo '<link href="css\style1.css" rel="stylesheet">'; ?>
    <?php echo '<link href="css\style2.css" rel="stylesheet">'; ?>
</head>

<body style="background-color : white;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sparks Bank Of India</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="services.php">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="customers.php">CUSTOMERS</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="https://www.xe.com/currencyconverter/convert/?Amount=20&From=INR&To=EUR">CURRENCY
                            CONVERTER </a>
                    </li>
                </ul>

            </div>
        </div>
        </div>
    </nav>
    <div class="logo4">
        <img src="img\logo4.png" style="width:200px">
    </div>
    <div class="logo3">


        <img src="img\logo3.png" style="width:200px">
    </div>

    <div class="service">



        <a href="index.php" target="_blank"><img src="img\logo2.png" style="width:200px"></a>
        <div class="pictures">

            <button id="photo-1" type="button" class="photo-small">
                <img src="img\service1.png" alt="Band photo">
            </button>
            <label for="photo-5" class="back">
                <div></div>
                <img class="photo" src="img\service1.png" alt="Band photo">
            </label>
            <label for="photo-2" class="forward">
                <img class="photo" src="img\service1.png" alt="Band photo">
                <div></div>
            </label>

            <button id="photo-2" type="button" class="photo-small">
                <img src="img\service2.png" alt="Band photo">
            </button>
            <label for="photo-1" class="back">
                <div></div>
                <img class="photo" src="img\service2.png" alt="Band photo">
            </label>
            <label for="photo-3" class="forward">
                <img class="photo" src="img\service2.png" alt="Band photo">
                <div></div>
            </label>

            <button id="photo-3" type="button" class="photo-small">
                <img src="img\service3.png" alt="Band photo">
            </button>
            <label for="photo-2" class="back">
                <div></div>
                <img class="photo" src="img\service3.png" alt="Band photo">
            </label>
            <label for="photo-4" class="forward">
                <img class="photo" src="img\service3.png" alt="Band photo">
                <div></div>
            </label>



            <button id="photo-4" type="button" class="photo-small">
                <img src="img\service4.png" alt="Band photo">
            </button>
            <label for="photo-3" class="back">
                <div></div>
                <img class="photo" src="img\service4.png" alt="Band photo">
            </label>
            <label for="photo-1" class="forward">
                <img class="photo" src="img\service4.png" alt="Band photo">
                <div></div>
            </label>
        </div>
    </div>
    <footer class="text-center mt-5 py-2">
        <p>&copy 2024 <b>Manikonda Shashmith</b> <br>Sparks Bank of India</p>
    </footer>


</body>

</html>