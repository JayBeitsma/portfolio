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
            <p>Reach out so we can get in touch</p>
        </div>
        <form class="contactForm" action="/contact" method="POST">
            <label>Naam:</label>
            <input type="text" name="name" minlength="3" maxlength="64" class="inputField" placeholder="name" required>
            <label>Email:</label>
            <input type="email" name="email" class="inputField" placeholder="E-mail" required>
            <label>Telefoon nummer:</label>
            <input type="tel" name="phone" maxlength="20" class="inputField" placeholder="Phone number" required>
            <label>Bericht:</label>
            <input type="text" name="message" class="inputField" placeholder="Message" required>
            <button name="submit" class="input-btn btn" type="submit">Verstuur -></button>
        </form>
    </div>
</main>

<?php

require 'layout/footer.php';

?>
