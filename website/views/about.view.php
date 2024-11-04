<?php

require 'layout/header.php';

?>

<main>
    <style>
        @import "../views/css/about.css";
    </style>
    <div class="about">
        <h1>Wie ben ik?</h1>
        <p>
            Ik ben Jay Beitsma, opgegroeid en gevestigd in Zeewolde.
            Al van kinds af aan geïnteresseerd in werken met computers, wat is uitgegroeid tot een passie voor software.
            Daarnaast ben ik een fanatieke gamer en hou ik van een uitdaging
        </p>
        <h2>Carriere</h2>
        <p>
            Begonnen op het MBO Landstede in Harderwijk waar ik mijn eerste software developer diploma heb gehaald.
            In mijn tijd bij Landstede heb ik 2 stages van 800 uur gelopen en daar veel werkervaring opgedaan.
            Tijdens mijn opleiding wist ik al dat ik graag verder wilde studeren en daarom studeer ik nu aan Windesheim in Almere.
        </p>
    </div>
    <div class="container">
        <div id="swap" class="swap">
            <span id="quality" onclick="qualitySwap()">Vaardigheden</span>
            <span id="experience" onclick="experienceSwap()">Ervaring</span>
        </div>
        <div class="content">
            <div id="qualities" class="qualities">
                <h3>Eigenschappen</h3>
                <div class="quality" data-skill="7">
                    <p>Probleemoplossend</p>
                    <div class="cube-container"></div>
                </div>
                <div class="quality" data-skill="8">
                    <p>Flexibiliteit</p>
                    <div class="cube-container"></div>
                </div>
                <div class="quality" data-skill="8">
                    <p>Besluitvorming</p>
                    <div class="cube-container"></div>
                </div>
                <div class="quality" data-skill="10">
                    <p>Doel-georiënteerd</p>
                    <div class="cube-container"></div>
                </div>
                <div class="quality" data-skill="7">
                    <p>Zelfstandig</p>
                    <div class="cube-container"></div>
                </div>
                <h3>Programmer talen</h3>
                <div class="quality" data-skill="8">
                    <p>PHP</p>
                    <div class="cube-container"></div>
                </div>
                <div class="quality" data-skill="6">
                    <p>JavaScript</p>
                    <div class="cube-container"></div>
                </div>
                <div class="quality" data-skill="9">
                    <p>HTML</p>
                    <div class="cube-container"></div>
                </div>
                <div class="quality" data-skill="7">
                    <p>CSS</p>
                    <div class="cube-container"></div>
                </div>
                <div class="quality" data-skill="8">
                    <p>MYSQL</p>
                    <div class="cube-container"></div>
                </div>
            </div>
            <div id="experiences" class="experiences">
                <h3>Werk Ervaring</h3>
                <div class="experience">
                    <div class="job">
                        <p class="company">Wij zijn merlin</p>
                        <p>Stagair</p>
                    </div>
                    <div class="dates">
                        <p>25/09/23</p>
                        <p>-></p>
                        <p>05/04/24</p>
                    </div>
                </div>
                <div class="experience">
                    <div class="job">
                        <p class="company">Acrelec</p>
                        <p>Stagair</p>
                    </div>
                    <div class="dates">
                        <p>06/09/22</p>
                        <p>-></p>
                        <p>04/02/23</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="social">
            <a href="assets/CV.pdf" download>
                <i class="material-icons">download</i>
            </a>
            <a class="icons" href="https://github.com/JayBeitsma" target="_blank"><i class="devicon-github-original subtext"></i></a>
            <a class="icons" href="https://www.linkedin.com/in/jay-beitsma/" target="_blank"><i class="devicon-linkedin-plain subtext"></i></a>
        </div>
    </div>
    <script src="views/js/about.js">

    </script>
</main>

<?php

require 'layout/footer.php';

?>
