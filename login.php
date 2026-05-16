<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title>Zooparc de THOIRY</title>
		<link rel = "stylesheet" href = "style1.css"/>
	</head>
	
	<body>
        <header>
            <img id = "logo" src = "Images/logo.png"/>
            <h1>ZOOPARC DE THOIRY</h1>
            <img id = "User" src="Images/User.png">
            <form id = "mode">
                <input type = "radio" name = "choix" id = "sombre" checked/><label id = "l1">SOMBRE</label><br/>
                <input type = "radio" name = "choix" id = "clair" /><label id = "l2">CLAIR</label><br/>
            </form>
        </header>
        <div id = "principal">
            <h2>Connexion au compte</h2>
            <div id = "connexion">
                <form action=".\connexion.php" method="post" id="formconnexion">
                    <label class="labelconnexion" for="identifiant">identifiant</label><br>
                    <input type="text" id="identifiant" name="identifiant" required><br>
                    <label class="labelconnexion" for="mdp">Le mot de passe</label><br>
                    <input type="password" id="mdp" name="mdp" required><br>
                    <input type="submit" value="Connexion">
                </form>
            </div>
        </div>
        <footer>
            <a href = "">Mentions légales</a>
            <a href = "">Conditions générales d'utilisation</a>
            <div>
                <a href = "https://www.facebook.com/zoothoiry/"><img src = "Images/facebook.png"/></a>
                <a href = "https://twitter.com/zoothoiry"><img src = "Images/twitter.png"/></a>
                <a href = "https://www.instagram.com/zoothoiry/"><img src = "Images/insta.png"/></a>
                <a href = "https://www.youtube.com/channel/UCp1G0HHODCG4qaSwagxQW2w"><img src = "Images/youtube.png"/></a>
            </div>
        </footer>
    </body>
</html>