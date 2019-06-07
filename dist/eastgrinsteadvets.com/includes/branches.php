<?php
    $branches = include('includes/branch-config.php');
?>

 <section class="content strip strip-dark">
    <h2>Our practices</h2>
    <div class="container branches">
        <?php
            foreach($branches as $branch): ?>
            <div class="branch">
                <h3><?php echo $branch['name']; ?></h3>

                <ul>
                    <li>
                        <a class="icon-link" href="tel:<?php echo $branch['phone']; ?>">
                            <?php echo file_get_contents("icons/phone.svg"); ?>
                            <?php echo $branch['phone']; ?>
                        </a>
                    </li>
                    <li>
                        <a class="icon-link" href="tel:<?php echo $branch['email']; ?>">
                            <?php echo file_get_contents("icons/email.svg"); ?>
                            <?php echo $branch['email']; ?>
                        </a>
                    </li>
                    <li>
                        <a class="icon-link" href="<?php echo $branch['mapLink']; ?>" target="_blank">
                            <?php echo file_get_contents("icons/pin.svg"); ?>
                            View map
                        </a>
                    </li>
                    <li>
                        <a class="icon-link" href="<?php echo $branch['url']; ?>" target="_blank">
                            <?php echo file_get_contents("icons/computer.svg"); ?>
                            Visit website
                        </a>
                    </li>
                </ul>
            </div>
        <?php
            endforeach;
        ?>
    </div>
</section>