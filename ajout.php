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
            <h2>ajouter un animal</h2>
            <div id = "ajout">
                <form action=".\ajoutage.php" method="post" id="formajout">
                    <label for="">Surnom</label><br>
                    <input type="text" id="" name="surnom"><br>
                    <label for="">Naissance</label><br>
                    <input type="date" name="date"><br>
                    <label for="">photo</label><br>
                    <input type="text" name="photo"><br>
                    <label for="">poid</label><br>
                    <input type="number" name="poid"><br>
                    <label for="">Espece</label><br>
                    <input type="radio" name="espece">Guépard<br>
                    <input type="radio" name="espece">Héron garde-boeuf<br>

                    
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