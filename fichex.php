<?php
    session_start();
    if(empty($_SESSION['image'])){
        $_SESSION['image'] = "User.png";
    }

    try
    {
    $mysqlClient=new PDO(
        'mysql:host=localhost;dbname=zoo2024;charset=utf8','root','',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
    }
    catch(PDOException $e){
    die("Échec de la connexion : %s\n".$e->getMessage());
    }

    $lephat = $_POST["chiffre"];
    
    $sqlQuery="SELECT * FROM especes INNER JOIN animaux ON especes.id = animaux.idAnimaux WHERE especes.id = :chemin;";
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    $recipesStatement->execute(["chemin" => $lephat]); 					
    $recipes = $recipesStatement->fetchAll();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title>Zooparc de THOIRY</title>
		<link rel = "stylesheet" href = "stylefiche.css"/>
	</head>
	
	<body>
        <header>
            <img id = "logo" src = "Images/logo.png"/>
            <h1>ZOOPARC DE THOIRY</h1>

            <?php
                if ($_SESSION['image'] == "User.png"){
                    echo '<a href="http://kicks/Lezoon2/login.php">';
                    echo "<img id = 'User' title = 'Cliquez pour vous connectez' src='Images/".$_SESSION['image']."'>";
                }
                else{
                    echo '<a href="http://kicks/Lezoon2/deconnexion.php">';
                    echo "<img id = 'User' title = 'Cliquez pour vous déconnecter' src='Images/".$_SESSION['image']."'>";
                }
            ?>

            </a>
            <form id = "mode">
                <input type = "radio" name = "choix" id = "sombre" checked/><label id = "l1">SOMBRE</label><br/>
                <input type = "radio" name = "choix" id = "clair" /><label id = "l2">CLAIR</label><br/>
            </form>
        </header>

        <div id = "principal">
            <nav>
                <a class = "menu" id = "animaux" href = "animaux.php"><h2>LES ANIMAUX</h2></a>
                <a class = "menu" id = "acces" href = "acces.html"><h2>VENIR AU ZOOPARC</h2></a>
                <a class = "menu" id = "actu" href = "actualites.html"><h2>ACTUALITES</h2></a>
                <a class = "menu" href = "reservations.html"><h2>RESERVATIONS</h2></a>
            </nav>
            <section>
            <h2>Venez rencontrer nos animeaux !</h2>
                    <?php
                    foreach($recipes as $recipe){
                        echo "<div class = fiche>";
                        echo "<ul class = 'animal'>";
                        echo "<li><span class = 'gras'>Surnom </span>: ".$recipe["surnom"]."</li>";
                        echo "<li><span class = 'gras'>Date de naissance </span>: ".$recipe["naissance"]."</li>";
                        echo "<li><span class = 'gras'>Poids </span>: ".$recipe["poids"]."</li>";
                        echo "<li><span class = 'gras'>Espéce </span>: ".$recipe["nom"]."</li>";
                        echo "<li><span class = 'gras'>Commentaire </span>: ".$recipe["commentaire"]."</li>";
                        echo "</ul>";
                        echo "<img class = 'photo' src='Images/".$recipe["photo"]."'>";
                        echo "</div>";
                    }    
                    ?>
            </section>
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
		<script src = "script.js"></script>
    </body>	
</html>