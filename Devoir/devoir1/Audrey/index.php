<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cours php</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper" class="container">
            <?php
            require("templates/header.php");
            ?>
            <div id="main" class="row well">
                <?php
                require("templates/aside.php");
                ?>

                <section class="col-lg-8 well alert alert-success">
                    <?php
                    echo ("Hello World!")
                    ?>

                </section> 
            </div>

            <?php
            require("templates/footer.php");
            ?>
        </div>
    </body>
</html>

