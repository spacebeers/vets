<?php
    $contents = include('includes/config.php');
?>

<header>
    <div class="contact-banner">
        <div class="container">
            <a href="tel:<?php echo $contents->phone; ?>" class="telephone-link">Call us:
                <?php echo $contents->phone; ?></a>
            <a href="<?php echo $contents->facebook; ?>" aria-label="View our Facebook page" class="facebook-link" target="_blank">
                <svg width="27px" height="27px" viewBox="0 0 27 27" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Desktop" transform="translate(-953.000000, -9.000000)" fill="currentColor">
                            <path d="M978.875281,9 L954.125563,9 C953.503719,9 953,9.50371875 953,10.1247187 L953,34.8752813 C953,35.4962813 953.503719,36 954.125563,36 L967.34375,36 L967.34375,25.875 L963.96875,25.875 L963.96875,21.65625 L967.34375,21.65625 L967.34375,18.28125 C967.34375,14.7940312 969.551844,13.0778437 972.66275,13.0778437 C974.152812,13.0778437 975.433625,13.1892188 975.806563,13.2381563 L975.806563,16.8831562 L973.649094,16.884 C971.957375,16.884 971.5625,17.6880938 971.5625,18.8676563 L971.5625,21.65625 L975.78125,21.65625 L974.9375,25.875 L971.5625,25.875 L971.63,36 L978.875281,36 C979.496281,36 980,35.4962813 980,34.8752813 L980,10.1247187 C980,9.50371875 979.496281,9 978.875281,9"
                                id="Fill-3">
                            </path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div class="container" aria-label="<?php echo $contents->name; ?>">
        <div class="logo" aria-hidden="true">
            <p class="top">
                <?php echo $contents->logoTop; ?>
            </p>
            <p class="bottom">
                <?php echo $contents->logoBottom; ?>
            </p>
        </div>
    </div>
</header>