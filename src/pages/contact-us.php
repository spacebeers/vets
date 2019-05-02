<?php
    $contents = include('includes/config.php');
    $page = 'contact';
?>

<html>
    <?php include('includes/meta.php') ?>
    <body>
        <?php include('includes/header.php') ?>

        <?php include('includes/navigation.php') ?>

        <?php include('includes/contact-bar.php') ?>

        <section class="hero hero-small">
            <h1>Contact us</h1>
            <img src="assets/shutterstock_1245943594.jpg" alt="An image of cats in a basket at the vets" />
        </section>
        <section class="content strip">
            <div class="container">
                <div class="constrainer">
                    <p>Please feel free to get in touch with us using our online form or any of the contact details below.</p>

                    <p>Consultations available by appointment only. Free parking on site.</p>

                    <div class="form-section">
                        <div class="form">
                            <form action="" method="POST">
                                <div class="form-control">
                                    <label for="name">Name</label>
                                    <input type="text" required id="name" name="name" />
                                </div>
                                <div class="form-control">
                                    <label for="email">Email address</label>
                                    <input type="email" required id="email" name="email" />
                                </div>
                                <div class="form-control">
                                    <label for="phone">Telephone number</label>
                                    <input type="number" required id="phone" name="phone" />
                                </div>
                                <div class="form-control">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" name="message" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-control">
                                    <input type="submit" value="Send" />
                                </div>
                            </form>
                        </div>
                        <div class="details">
                            <ul>
                                <li>
                                    <a href="tel:<?php echo $contents->phone; ?>" class="telephone-link">
                                        <?php echo $contents->phone; ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:<?php echo $contents->email; ?>" class="email-link">
                                        <?php echo $contents->email; ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('includes/map.php') ?>

        <?php include('includes/branches.php') ?>

        <?php include('includes/footer.php') ?>
    </body>
</html>