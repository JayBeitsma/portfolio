<?php

require 'layout/header.php';

?>

<main>
    <style>
        @import "../views/css/about.css";
    </style>
    <div class="about">
        <h1>Ik ben Jay Beitsma</h1>
        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Quis sed nisl sit mi eros posuere commodo phasellus. In cras sapien semper nam platea pellentesque. Auctor curabitur felis et elit finibus nulla pulvinar fringilla. Lacinia venenatis aenean nisi enim viverra platea. Amet lacinia magnis nascetur varius maecenas nibh. Sem erat laoreet efficitur fames vulputate. Magnis hac praesent mi tempus elit porttitor.</p>
        <h2>Meer ik</h2>
        <p>Morbi consectetur class conubia hac potenti ullamcorper lobortis nisi porttitor. Maecenas mi in nisl ultricies nibh. Commodo libero sodales porttitor amet commodo euismod habitasse. Pretium sapien scelerisque tincidunt at aliquam malesuada aptent dis. Non habitasse vel maximus proin placerat, placerat magnis urna natoque. Dui sollicitudin risus non ac congue cras penatibus turpis. Ipsum justo ullamcorper bibendum eleifend adipiscing primis mus cubilia adipiscing. Eget etiam hac ultricies; netus libero himenaeos litora. Vitae maximus aliquet nullam pellentesque condimentum, a dolor.</p>
        <h2>Nog meer ik</h2>
        <p>Habitant condimentum ipsum aliquet sem ullamcorper dui morbi maecenas. Luctus dapibus quis id dictumst potenti dis. Vulputate feugiat diam ullamcorper augue gravida elementum non tristique nec? Dictum ipsum volutpat hac dolor eros leo tortor efficitur. Fermentum gravida luctus iaculis ante in nisi. Imperdiet aptent bibendum erat urna lectus pharetra quam. Rutrum adipiscing pellentesque sit fringilla vehicula vulputate.</p>

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
