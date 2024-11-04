<?php

require 'layout/header.php';

?>

<main>
    <style>
        @import "views/css/project.css";
    </style>
    <div class="container">
        <img src="views/img/<?=htmlspecialchars($project['featuredimg']); ?>" alt="Project Image">
        <h1><?= htmlspecialchars($project['title']); ?></h1>
        <div class="info">
        <p><?= htmlspecialchars($project['description']); ?></p>
            <ul>
                <li class="item"><span>Bedrijf:</span><?= htmlspecialchars($project['company']); ?></li>
                <li class="item"><span>Klant:</span><?= htmlspecialchars($project['client']); ?></li>
                <li class="item"><span>Website:</span><a href="<?= htmlspecialchars($project['url']); ?>"><?= htmlspecialchars($project['url']); ?></a></li>
            </ul>
        </div>
    </div>
    <a href="/portfolio">
        <i class="material-icons goBack">arrow_back</i>
    </a>

</main>

<?php

require 'layout/footer.php';

?>
