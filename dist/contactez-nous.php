<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez Nous</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400&family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="./logo.ico">
</head>
<body>
    <header>
        <nav class="navbar">
            <img class="logo" src="./logo.png" alt=""><span class="word-archimind"><span class="first-word">Archi</span><span class="second-word">Mind</span></span>
          <ul class="navbar-links">
            <li><a href="./Home-page.html" id="style-2" data-replace="Accueil"><span>Accueil</span></a></li>
            <li><a href="./Home-page.html" id="style-2" data-replace="Telecharger"><span>Telecharger</span></a></li>
            <li><a href="#" id="style-2" data-replace="Guide"><span>Guide</span></a></li>
            <li><a href="./documentation-page.html" id="style-2" data-replace="Documentation"><span>Documentation</span></a></li>
            <li><a href="./contactez-nous.html" id="style-2" data-replace="Contactez-Nous"><span>Contactez-Nous</span></a></li>
          </ul>
        </nav>
    </header>
    <main>
        <section class="contact-us">
        <h2>Contactez-Nous</h2>
        <div class="under-line"></div>
        <p>Contactez notre equipe pour en savoir plus sur ArchiMind</p>
        <article class="contact-us-container">
        <form action="http://localhost:80/project_website/send-email.php"  method="POST">
        <div class="name"><label for="name">Nom :</label><input type="text" id="name" name="name" required></div>
        <div class="prenom"><label for="prenom">Prenom :</label><input type="text" id="Prenom" name="Prenom" required></div>
        <div class="email"><label for="email">Email :</label><input type="email" id="email" name="email" required></div>
        <div class="object"><label for="object">Objet :</label><input type="text" id="object" name="object" required></div>
        <div class="message"><label for="message">Message :</label><textarea name="message" id="message" cols="30" rows="10"></textarea></div>
        <div class="contact-btn"><button type="submit">Contactez-Nous</button></div>
        </form>
        </article>
        </section>
    </main>
    <footer>
        <p>© 2023 | 2CP - Equipe 32 | Tous droits réservés.</p>
    </footer>
</body>
</html>