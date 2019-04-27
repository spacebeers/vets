<?php
    $contents = include('includes/config.php');
?>

<html>
    <?php include('includes/meta.php') ?>
    <body>
        <?php include('includes/header.php') ?>

        <?php include('includes/contact-bar.php') ?>

        <section class="hero">
            <img src="assets/vets.jpg" alt="An image of a dog at the vets" />
        </section>
        <section class="content strip">
            <div class="container">
                <h1>Our new website is coming soon</h1>

                <p>If you would like to get in touch with us please contact us on <a href="tel:<?php echo $contents->phone; ?>"><?php echo $contents->phone; ?></a>.</p>

                <p>Alternatively you can also email us at <a href="mailto:<?php echo $contents->email; ?>"><?php echo $contents->email; ?></a></p>
            </div>
        </section>

        <?php include('includes/footer.php') ?>
    </body>
</html>