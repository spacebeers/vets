<?php
    $contents = include('includes/config.php');
    $page = 'services';
?>

<html>
    <?php include('includes/meta.php') ?>
    <body>
        <?php include('includes/header.php') ?>

        <?php include('includes/navigation.php') ?>

        <?php include('includes/contact-bar.php') ?>

        <section class="hero hero-small">
            <h1>Our services</h1>
            <img src="assets/shutterstock_760460794.jpg" alt="An image of a dog and a cat at the vets" />
        </section>
        <section class="content strip">
            <div class="container">
                <div class="constrainer">
                    <h2>We provide an array of services for you</h2>
                    <p>If you require additional help please <a href="contact-us.php">contact us</a></p>

                    <?php include('includes/services.php'); ?>

                    <p class="small">Our out of hours emergencies are covered by the referral centre in godstone who are specialist in
                    emergency medicine. (your call will be automatically be diverted to the out of hours service)
                    </p>
                </div>
            </div>
        </section>

        <?php include('includes/footer.php') ?>
    </body>
</html>