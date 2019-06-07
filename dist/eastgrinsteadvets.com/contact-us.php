<?php
    $contents = include('includes/config.php');
    $successMessage = "";

    if (isset($_POST['submit'])):
        $to = $contents->email;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = "New website enquiry";
        $message = $name . " has sent a new website enquiry." . "\n\nMessage: \"" . $_POST['message'] . "\"\nEmail: " . $email . "\nPhone: " . $phone;
        $headers = "From:" . $email;
        if (mail($to,$subject,$message,$headers)):
            $successMessage = "Thank you for your enquire. We will be in touch as soon as possible";
        else:
            $successMessage = "Sorry there has been a problem. Please call us on " . $contents->phone;
        endif;
    endif;

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

                    <?php if (isset($_POST['submit']) && $successMessage != ""): ?>
                        <div class="alert">
                            <?php echo $successMessage; ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-section">
                        <div class="form">
                            <form action="contact-us.php" method="POST">
                                <div class="form-control">
                                    <label for="name">Name</label>
                                    <input required type="text" required id="name" name="name" />
                                </div>
                                <div class="form-control">
                                    <label for="email">Email address</label>
                                    <input required type="email" required id="email" name="email" />
                                </div>
                                <div class="form-control">
                                    <label for="phone">Telephone number</label>
                                    <input required type="number" required id="phone" name="phone" />
                                </div>
                                <div class="form-control">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="message" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-control">
                                    <input required type="submit" name="submit" class="button" value="Send" />
                                </div>
                            </form>
                        </div>
                        <div class="details">
                            <ul>
                                <li>
                                    <a class="icon-link" href="tel:<?php echo $contents->phone; ?>">
                                        <?php echo file_get_contents("icons/phone.svg"); ?>
                                        <?php echo $contents->phone; ?>
                                    </a>
                                </li>
                                <li>
                                    <a class="icon-link" href="tel:<?php echo $contents->email; ?>">
                                        <?php echo file_get_contents("icons/email.svg"); ?>
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