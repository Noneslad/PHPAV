<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cours php</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container ">
            <div class="row">
                <header class="col-lg-12">
                    <?php include './views/header.php';?>
                </header>
                <aside class="col-lg-3 ">
                    <?php include './views/aside.php';?>
                </aside>
                <section class="col-lg-9 ">
                    <?php include './views/content.php';?>
                </section> 
                <footer class="col-lg-12 ">
                    <?php include './views/footer.php';?>
                </footer>
            </div>
        </div>
    </body>
</html>


