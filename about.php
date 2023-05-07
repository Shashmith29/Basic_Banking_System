<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo '<link href="style.css" rel="stylesheet">'; ?>
</head>

<body>
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
                <a class="expandHome" href="index.php">Home</a>
                <a href="about.php" class="expandHome">About</a>
                <a href="customers.php" class="expandHome">Customers</a>
                <a href="services.php" class="expandHome">Services</a>
            </div>
        </nav>


        <div class="background">



            <section id="About">
                <h1>About</h1>
                <hr>
                <p>Sparks Bank of India allows you to conduct financial transactions</br> via the Internet. Sparks Bank
                    of
                    India
                    is also
                    known as Internet </br>banking or web banking.

                    Sparks Bank of India offers customers </br>almost every service traditionally available through a
                    local
                    branch</br>
                    including deposits, transfers, and online bill payments. Virtually</br> every banking institution
                    has
                    some
                    form of online banking you </br>can access through a computer or app.Banking transactions
                    </br>offered
                    online
                    vary by institution. Most banks generally offer </br>basic services such as transfers and bill
                    payments.
                    Some
                    banks </br>also allow customers to open up new accounts and apply for </br>credit cards through
                    online
                    banking
                    portals. Other functions may</br> include ordering checks, putting stop payments on checks, or</br>
                    reporting
                    a
                    change of address.There are numerous benefits to </br>online banking such as convenience,
                    transparency,
                    anytime, </br>anywhere access, one stop management of bills and payments</br>and cost efficiency.

                    However there are associated risks which </br>the consumers need to be aware and take necessary
                    preventive</br>
                    measures. One of the important security related risk include </br>unauthorized access to user
                    accounts.
                </p>
            </section>

        </div>

    </body>

</html>