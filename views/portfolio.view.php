<?php

require 'layout/header.php';

?>

<main>
    <style>
        @import "../views/css/portfolio.css";
    </style>
    <div class="container">
        <div class="intro">
            <h1 class="title">Projecten</h1>
            <p class="disc">Bekijk hier een lijst aan projecten die ik heb gemaakt of aan meegewerkt.</p>
        </div>
        <div class="filter">
            filter
        </div>
        <div class="projectcontainer">
            <?php foreach ($projects as $project): ?>
                <div class="project">
                    <h2><?= htmlspecialchars($project['title']); ?></h2>
                    <img src="<?= htmlspecialchars($project['featuredimg']); ?>" alt="Project Image">
                    <p><?= htmlspecialchars($project['tinydescription']); ?></p>
                    <p>Company: <?= htmlspecialchars($project['company']); ?></p>
                    <p>Client: <?= htmlspecialchars($project['client']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php

require 'layout/footer.php';

?>
