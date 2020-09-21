<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <main>
            <p>Send E-mail</p>
            <form class="contactForm" action="contactForm.php" method="POST">
                <input type="text" name="name" placeholder="Nom">
                <input type="text" name="email" placeholder="Votre e-mail">
                <input type="text" name="subject" placeholder="Sujet">
                <textarea name="message" placeholder="Message"></textarea>
                <button type="submit" name="submit">Envoyer</button>
            </form>
        </main>
    </body>
</html>

