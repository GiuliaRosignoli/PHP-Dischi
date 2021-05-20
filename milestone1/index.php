<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Style -->
    <link rel="stylesheet" href="./style/style.css">
    <!--/ Style -->

    <title>PHP Dischi</title>
</head>
<body>
    <header>  <!-- Header -->
        <div class="header-wrapper">
            <div class="container flex">
                <img class="logo" src="./style/img/logo.png" alt="logo">
            </div>
        </div>
    </header>
    <main>   <!-- Main -->

    <?php include './partials/database.php';  //PHP include
    ?>

        <div class="main-wrapper">   <!-- discs section starts here -->
            <div class="item container flex">

            <?php foreach($database as $disc) { ?>
                <div class="item"> <!--single disc -->
                   <div class="card flex">
                    <img src="<?php echo $disc['poster']; ?>" alt="">
                        <h3><?php echo $disc['title']; ?></h3>
                        <h4><?php echo $disc['author']; ?></h4>
                        <h4><?php echo $disc['year']; ?></h4>
                        <h5><?php echo $disc['genre']; ?></h5>
                   </div>
                </div>
            <?php } ?>

                
            </div>
        </div> <!-- general wrapper -->
    </main>

</body>
</html>