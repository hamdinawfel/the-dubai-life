<!DOCTYPE html>
<?php
    // Get current page file name
    $page = basename($_SERVER["PHP_SELF"]);
?>
<html>
    <head>
        <title>The Dubai Life</title>
        <link href="../../../dist/main.css" rel="stylesheet" />
        <!-- font-awesome -->
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
        <!-- Alpine.js -->
        <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    </head>
    <body>

        <!-- Header -->
        <?php include('../../shared/header.php'); ?>

         <!-- Hero -->
        <?php include('../../shared/hero.php'); ?>

         <!-- Main -->
        <?php include('./main.php'); ?>

         <!-- Call To Action -->
        <?php include('./cta.php'); ?>

        <!-- Footer -->
        <?php include('../../shared/footer.php'); ?>
    </body>
</html>