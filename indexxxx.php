<html>

<head>
    <title>Mon Site Web</title>
    <link rel="stylesheet" type="text/css" href="SiteWeb.CSS" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="background-overlay"></div>
        <div class="content">
            <nav class="shadow-sm navbar-header">
                <a href="index.html">Accueil</a>
                <a href="indexx.HTML">À propos</a>
                <a href="indexxx.HTML">Contact</a>
                <a href="indexxxx.html">Formulaire <img src="Icone_couleur_trans.png" alt="Images 1" class="logo-10mw-navbar" title="La page formulaire affichera un formulaire à compléter pour envoyer un mail directe à @10mentionweb.org"></a>
            </nav>
            <br/>
            <br/>
            <h1>Formulaire de contact</h1>
            <br/>
            <br/>
            <form class="w-50 mx-auto">
                <label for="name">Nom :</label>
                <input class="form-control mb-3" type="text" id="name" name="name"><br>
                <label for="email">Email :</label>
                <input class="form-control mb-3" type="email" id="email" name="email"><br>
                <label for="message">Message : </label>
                <textarea class="form-control mb-3" id="message" name="message"></textarea><br>
                <input class="bouton-envoyer" type="submit" value="Envoyer">
            </form>
    </main>
</body>

</html>