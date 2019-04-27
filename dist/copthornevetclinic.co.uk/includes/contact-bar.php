<?php
    $contents = include('includes/config.php');
?>

<section class="contact-bar">
    <div class="container">
        <ul class="contact-info">
            <li><a href="tel:<?php echo $contents->phone; ?>">
                    <?php echo $contents->phone; ?></a></li>
            <li>
                <?php echo $contents->address; ?>
            </li>
        </ul>

        <ul class="contact-links">
            <li>
                <span class="toggletip-container">
                    <button type="button" class="tab opening-times toggletip">Opening hours</button>
                    <span role="status" aria-hidden="true" class="toggletip-contents">
                        <ul class="opening-times-list">
                            <li>
                                <span>Monday:</span>
                                <span>
                                    <?php echo $contents->monday; ?></span>
                            </li>
                            <li>
                                <span>Tuesday:</span>
                                <span>
                                    <?php echo $contents->tuesday; ?></span>
                            </li>
                            <li>
                                <span>Wednesday:</span>
                                <span>
                                    <?php echo $contents->wednesday; ?></span>
                            </li>
                            <li>
                                <span>Thursday:</span>
                                <span>
                                    <?php echo $contents->thursday; ?></span>
                            </li>
                            <li>
                                <span>Friday:</span>
                                <span>
                                    <?php echo $contents->friday; ?></span>
                            </li>
                            <li>
                                <span>Saturday:</span>
                                <span>
                                    <?php echo $contents->saturday; ?></span>
                            </li>
                            <li>
                                <span>Sunday:</span>
                                <span>
                                    <?php echo $contents->sunday; ?></span>
                            </li>
                            <li>
                                <em>
                                    <?php echo $contents->notes; ?></em>
                            </li>
                        </ul>
                    </span>
                </span>
            </li>
            <li><a href="tel:<?php echo $contents->phone; ?>" class="tab" aria-label="Call us on <?php echo $contents->phone; ?>">
                    <svg role="presentation" width="14px" height="22px" viewBox="0 0 14 22" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <path d="M388.625,429 L379.875,429 C378.839844,429 378,429.839844 378,430.875 L378,447.125 C378,448.160156 378.839844,449 379.875,449 L388.625,449 C389.660156,449 390.5,448.160156 390.5,447.125 L390.5,430.875 C390.5,429.839844 389.660156,429 388.625,429 Z M384.25,447.75 C383.558594,447.75 383,447.191406 383,446.5 C383,445.808594 383.558594,445.25 384.25,445.25 C384.941406,445.25 385.5,445.808594 385.5,446.5 C385.5,447.191406 384.941406,447.75 384.25,447.75 Z M388.625,443.53125 C388.625,443.789063 388.414063,444 388.15625,444 L380.34375,444 C380.085938,444 379.875,443.789063 379.875,443.53125 L379.875,431.34375 C379.875,431.085938 380.085938,430.875 380.34375,430.875 L388.15625,430.875 C388.414063,430.875 388.625,431.085938 388.625,431.34375 L388.625,443.53125 Z"
                                id="path-1"></path>
                        </defs>
                        <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Icons" transform="translate(-377.000000, -428.000000)">
                                <mask id="mask-2" fill="white">
                                    <use xlink:href="#path-1"></use>
                                </mask>
                                <use id="mobile-alt" stroke="currentColor" fill-rule="nonzero" xlink:href="#path-1"></use>
                            </g>
                        </g>
                    </svg>
                    <?php echo $contents->phone; ?>
                </a></li>
        </ul>
    </div>
</section>