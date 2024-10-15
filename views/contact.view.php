<?php

require 'layout/header.php';

?>

<main>
    <div class="contactContainer">
        <form action="/contact" method="POST">
            <label>Naam:</label>
            <input type="text" name="name" minlength="3" maxlength="64" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Telefoon nummer:</label>
            <input type="tel" name="phone" maxlength="20" required>
            <label>Bericht:</label>
            <input type="text" name="message" required>
            <button name="submit" type="submit">Verstuur bericht</button>
        </form>
    </div>
</main>

<?php

require 'layout/footer.php';

?>
