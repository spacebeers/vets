<?php
    $menu = [
        [
            "title" => "Home",
            "url" => "index.php",
            "id" => "home",
            "pages" => []
        ],
        [
            "title" => "What we do",
            "url" => "what-we-do.php",
            "id" => "about",
            "pages" => [
                [
                    "title" => "Our history",
                    "url" => "history.php",
                    "id" => "history"
                ],
                [
                    "title" => "What makes us different",
                    "url" => "what-makes-us-different.php",
                    "id" => "different"
                ]
            ]
        ],
        [
            "title" => "Services",
            "url" => "services.php",
            "id" => "services",
            "pages" => []
        ],
        [
            "title" => "Contact us",
            "url" => "contact-us.php",
            "id" => "contact",
            "pages" => []
        ]
    ];
?>

<nav class="navigation">
    <ul>
        <?php foreach($menu as $item): ?>
            <li <?php if ($page == $item['id']): echo 'class="selected"'; endif; ?>>
                <a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>

                <?php if ($item['pages']): ?>
                    <ul>
                        <?php foreach($item['pages'] as $child): ?>
                            <li <?php if ($page == $child['id']): echo 'class="selected"'; endif; ?>>
                                <a href="<?php echo $child['url']; ?>"><?php echo $child['title']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>