<?php
    $contents = include('includes/config.php');
?>

<footer>
    <div class="footer-bar">
        <div class="container">
            <span>&copy;
                <?php echo date("Y"); ?>
                <?php echo $contents->name; ?></span>
            <span><a href="//atomichorse.agency" target="_blank">Website by Atomic Horse</a></span>
        </div>
    </div>
</footer>
<script src="js/theme.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $contents->trackingID; ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', '<?php echo $contents->trackingID; ?>');
</script>