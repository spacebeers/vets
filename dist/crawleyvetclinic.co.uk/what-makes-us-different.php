<?php
    $contents = include('includes/config.php');
    $parent = 'about';
    $page = 'different';
?>

<html>
    <?php include('includes/meta.php') ?>
    <body>
        <?php include('includes/header.php') ?>

        <?php include('includes/navigation.php') ?>

        <?php include('includes/contact-bar.php') ?>

        <section class="hero hero-small">
            <h1>What makes us different</h1>
            <img src="assets/shutterstock_528658561.jpg" alt="An image of a cat at the vets" />
        </section>
        <section class="content strip">
            <div class="container">
                <div class="constrainer">
                    <p>The Royal College of Veterinary Surgeons Practice Standards Scheme</p>

                    <p>The RCVS launched the Practice Standards Scheme in March 2006. The pupose of the scheme is to ensure that all veterinary practices adhere to strict guidelines governing quality of medicine practiced, hygiene, clinical governence and service.     Only practices that have succeeded in reaching the highest standards of; medicine & surgery, care & communication and hygiene & cleanliness are allowed to display this symbol.   The East Grinstead Veterinary Hospital is proud to be allowed to display the RCVS Accredited Small Animal Hospital symbol.        </p>

                    <p>The RCVS Practice Standards Scheme is a three-tiered system. For a practice to become accredited as "RCVS Accredited Core Standards" (or Tier 1), it must fulfil specific criteria regarding; medicine & surgery, care & communication, hygiene & cleanliness and health & safety. To reach "RCVS Accredited General Practice" (or Tier 2), the standards required to be met are more strict. "RCVS Accredited Small Animal Hospital" (or Tier 3) requires yet more strict and wide-ranging standards, including;   Nursing staff present on the premises round the clock and if required a veterinary surgeon available at all times to attend in-patients.  </p>

                    <p>A system for checking that clinical standards are maintained and improved by monitoring performance and outcome of treatments.   A high quality and broad range of available equipment, for example, diagnostic equipment such as ECG and ultrasound.   Premises and facilities that have been rigorously examined, with the emphysis on cleanliness and sterility    </p>

                    <p>More information can be found at the RCVS Practice Standards website www.rcvs.org.uk/practicestandards Or by asking for a leaflet at the reception desk.</p>
                </div>
            </div>
        </section>
        <?php include('includes/footer.php') ?>
    </body>
</html>