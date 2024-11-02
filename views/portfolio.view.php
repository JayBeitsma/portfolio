<?php

require 'layout/header.php';

?>

<main>
    <style>
        @import "../views/css/portfolio.css";
    </style>
    <div class="intro">
        <h1 class="title">Projecten</h1>
        <p class="disc">Bekijk hier een lijst aan projecten die ik heb gemaakt of aan heb meegewerkt.</p>
    </div>
    <div class="projectcontainer">
        <?php foreach ($projects as $project):
            $project['url'] = '/project?id=' . $project['projectId'];
            ?>
            <a href="<?= htmlspecialchars($project['url']); ?>">
                <div class="project">
                    <img src="views/img/<?=htmlspecialchars($project['featuredimg']); ?>" alt="Project Image">
                    <div class="infobox">
                        <h2><?= htmlspecialchars($project['title']); ?></h2>
                        <div>
                            <p><?= htmlspecialchars($project['tinydescription']); ?></p>
                            <p><span class="highlight">Company:</span> <?= htmlspecialchars($project['company']); ?></p>
                            <p><span class="highlight">Client:</span> <?= htmlspecialchars($project['client']); ?></p>
                        </div>
                        <span class="btn-more btn">Bekijk >>></span>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</main>

<?php

require 'layout/footer.php';

?>
