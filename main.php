<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>PHP Practice</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="blocks.css">
    </head>
    <body>
        <?php include 'menu.inc.php'; ?>
        <div class="container">
            <div calss="col-md-8">
                <h1><?php echo $welcome ?></h1>
                <div class="row">
                    <?php echo "<img src=\"https://thispersondoesnotexist.com/image\" width=\"250px\" class=\"ml-3 mb-2 rounded-circle img-fluid float-left\">"?>        
                    <p class="ml-3">
                       Имя: <?php echo $name; ?><br>
                       Фамилия: <?php echo $surname; ?><br>
                       Говрод: <?php echo $city; ?><br>
                       Лет: <?php echo $age; ?><br>
                    </p>
                </div>
                <div class="col-md-12">
                    <!-- knowledge -->
                    <p>
                        <?php  include 'knowledge.inc.php'; ?>
                        <?php echo $a, ' ', $b, ' ', $c; ?><br>
                        
                        <?php
                        $a = 1;
                        $b = 10;
                        $c = $a + $b;
                        echo $c;
                        ?> <br>                
                        <?php echo $d; ?><br>
                        
                        Fake Name: <strong><?php echo $fake->{'name'}; ?></strong><br>
                        Fake Address: <strong><?php echo $fake->{'address'}; ?></strong><br>
                        Fake Password: <?php echo '<strong>',$fake->{'password'}, '</strong><br>base64_password: <strong>', base64_encode($fake->{'password'}), '</strong>'; ?><br>
                    
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mollis risus vel augue aliquam eleifend. Phasellus augue ante, fermentum a euismod vitae, pulvinar eget tellus. Fusce sollicitudin laoreet nulla at sagittis. Pellentesque molestie ligula eleifend luctus fermentum. Suspendisse at neque rutrum, lacinia urna non, semper risus. Cras sit amet consequat lorem, a consectetur arcu. Suspendisse mauris sapien, accumsan non hendrerit cursus, tincidunt sed quam. Sed lacus quam, egestas sit amet libero ut, commodo tincidunt massa. </p>
                </div>
            </div>
            <?php include 'footer.inc.php'; ?>
        </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
