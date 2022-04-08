<!DOCTYPE html>
<?php
    // Get current page file name
    $page = basename($_SERVER["PHP_SELF"]);
?>
<html>
    <head>
        <title>The Dubai Life</title>
        <!-- font-awesome -->
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Alpine.js -->
        <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body>

        <!-- Header -->
        <?php include('../../shared/header.php'); ?>

         <!-- Hero -->
        <?php include('./hero.php'); ?>

         <!-- Main -->
        <?php include('./main.php'); ?>

         <!-- Call To Action -->
        <?php include('./cta.php'); ?>

        <!-- Footer -->
        <?php include('../../shared/footer.php'); ?>
    </body>
</html>