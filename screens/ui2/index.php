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
        <!--International phone Number-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    </head>
    <!-- Customize width for the International phone Number field-->
    <style>
        .iti {
           width: 100% !important;
        }
    </style>
    <body>

        <!-- Header -->
        <?php include('../../shared/header.php'); ?>

         <!-- Hero -->
        <!-- <?php include('../../shared/hero.php'); ?> -->

         <!-- Main -->
        <?php include('./main.php'); ?>

        <!-- Footer -->
        <?php include('../../shared/footer.php'); ?>

    </body>
    <!-- Initialize the phone plugin -->
    <script>
        const phoneInputField = document.querySelector("#tel");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        const info = document.querySelector(".alert-info");

        function process(event) {
            event.preventDefault();

            const phoneNumber = phoneInput.getNumber();

            info.style.display = "";
            info.innerHTML = 'Phone number in E.164 format: <strong>${phoneNumber}</strong>';
        }
    </script>
</html>