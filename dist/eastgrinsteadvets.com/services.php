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

                    <ul class="services-list">
                        <li>4 Weeks Free Pet Insurance</li>
                        <li>In House Laboratory</li>
                        <li>Dental Fac Plus Dental Xray</li>
                        <li>Full Surgical Facilities</li>
                        <li>Orthopeadic Surgeon</li>
                        <li>Ultra Sound</li>
                        <li>Digital Xray</li>
                        <li>Endoscopes</li>
                        <li>Massage Therapist</li>
                        <li>Nurses Clinics</li>
                        <li>Weight Clinics</li>
                        <li>Full Range Of Diet</li>
                    </ul>

                    <p>Our out of hours emergencies are covered by the referral centre in godstone who are specialist in
                    emergency medicine. (your call will be automatically be diverted to the out of hours service)
                    </p>
                </div>
            </div>
        </section>

        <?php include('includes/footer.php') ?>
    </body>
</html>