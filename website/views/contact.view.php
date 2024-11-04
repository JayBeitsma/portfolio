<?php

require 'layout/header.php';

?>

<main>
    <style>
        @import "../views/css/contact.css";
    </style>
    <div class="contactContainer">
        <div class="formIntro">
            <h1>Let's connect!</h1>
        </div>
        <div class="infoContainer">
            <div class="info">
                <div class="icon">
                    <i class="material-icons">location_on</i>
                </div>
                <h4>Adress:</h4>
                <p>
                    Zeewolde, Nederland
                </p>
            </div>
            <div class="info">
                <div class="icon">
                    <i class="material-icons">phone</i>
                </div>
                <h4>Phone:</h4>
                <p>+31 6 46 87 22 90</p>
            </div>
            <div class="info">
                <div class="icon">
                    <i class="material-icons">email</i>
                </div>
                <h4>E-mail:</h4>
                <p>jay@beitsma.nl</p>
            </div>
        </div>
        <div class="formIntro">
            <h1>Or leave a message</h1>
        </div>
        <form class="contactForm" action="/contact" method="POST">
            <label>Naam:</label>
            <input type="text" name="name" minlength="3" maxlength="64" class="inputField" placeholder="name" required>
            <label>Email:</label>
            <input type="email" name="email" class="inputField" placeholder="E-mail" required>
            <label>Telefoon nummer:</label>
            <input type="tel" name="phone" maxlength="20" class="inputField" placeholder="Phone number" required>
            <label>Bericht:</label>
            <textarea type="text" name="message" class="inputField" placeholder="Message" required></textarea>
            <button name="submit" class="input-btn btn" type="submit">Verstuur -></button>
        </form>
    </div>
</main>

<?php

require 'layout/footer.php';

?>
