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
                        <?php echo $branch['phone']; ?>
                    </li>
                    <li>
                        <?php echo $branch['email']; ?>
                    </li>
                    <li>
                        <a href="<?php echo $branch['mapLink']; ?>" target="_blank">View map</a>
                    </li>
                    <li>
                        <a href="<?php echo $branch['url']; ?>" target="_blank">Visit website</a>
                    </li>
                </ul>
            </div>
        <?php
            endforeach;
        ?>
    </div>
</section>