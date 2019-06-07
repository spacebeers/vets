<?php
    $contents = include('includes/config.php');
    $page = 'home';
?>

<html>
    <?php include('includes/meta.php') ?>
    <body>
        <?php include('includes/header.php') ?>

        <?php include('includes/navigation.php') ?>

        <?php include('includes/contact-bar.php') ?>

        <section class="hero">
            <img src="assets/vets.jpg" alt="An image of a dog at the vets" />
        </section>
        <section class="content strip">
            <div class="container">
                <div class="constrainer">
                    <h1>Welcome to our practice</h1>

                    <p>Our well-equipped Independent clinics provide a friendly, caring and compassionate veterinary service to East Grinstead, Copthorne, Crawley and surrounding areas.</p>

                    <p>Great personal care for all yours pets, including dogs, cats, small mammals, poultry and also for wildlife.</p>

                    <p>The Vets at the East Grinstead Veterinary Hospital aim to practise the very highest standard of medicine and surgery. We undertake a wide variety of clinical procedures to both help us make a diagnosis, and then treat any problems we find.</p>

                    <p>With more than 65 years experience between them, the vets have a wide range of particular interests and skills, including; orthopaedic and soft-tissue surgery, clinical diagnostic medicine, ultrasonography, endoscopy and clinical laboratory medicine.</p>
                </div>
            </div>
        </section>
        <section class="content strip strip-dark">
            <div class="container">
                <div class="constrainer">
                    <h2>Services</h2>

                    <?php include('includes/services.php'); ?>

                    <p class="small">Our out of hours emergencies are covered by the referral centre in godstone who are specialist in
                    emergency medicine. (your call will be automatically be diverted to the out of hours service)
                    </p>
                </div>
            </div>
        </section>

        <?php include('includes/map.php') ?>

        <?php include('includes/branches.php') ?>

        <?php include('includes/footer.php') ?>
    </body>
</html>