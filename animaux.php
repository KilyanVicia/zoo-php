<?php
    session_start();
    if(empty($_SESSION['image'])){
        $_SESSION['image'] = "User.png";
    }

    if(empty($_SESSION["categorie"])){
        $_SESSION['categorie'] = "utilisateur";
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

?>

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

            <?php
                if ($_SESSION['image'] == "User.png"){
                    echo '<a href="login.php">';
                    echo "<img id = 'User' title = 'Cliquez pour vous connectez' src='Images/".$_SESSION['image']."'>";
                }
                else{
                    echo '<a href="deconnexion.php">';
                    echo "<img id = 'User' title = 'Cliquez pour vous déconnecter' src='Images/".$_SESSION['image']."'>";
                }
            ?>

            </a>

            <?php
            if($_SESSION["categorie"] == "Soigneur"){
                echo '<a href = "ajout.php">';
                echo '<img src="Images/plus.png" id="plus" alt="">';
                echo '</a>';
            }
            ?>

            


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
                <table>
                    <caption>Découvrez quelques animaux du zoo !</caption>

                    <?php
                        $sqlQuery="SELECT * from Especes";
                        $recipesStatement = $mysqlClient->prepare($sqlQuery);
                        $recipesStatement->execute(); 					
                        $recipes = $recipesStatement->fetchAll();
                        
                        $i = 0; $nb = 0;
                        if($_SESSION['image'] == "User.png"){
                            foreach ($recipes as $recipe) {
                                if ($i % 4 == 0)
                                    echo "<tr>";					
                                echo "<td>";                                
                                echo "<img class = 'img_anim' src = 'Images/".$recipe['image']."'/>";
                                echo "<h3>".mb_strtoupper($recipe['nom'])."</h3>";                            				
                                echo "</td>";
                                if ($i % 4 == 3) 
                                    echo "</tr>";
                                $i++;
                            } 
                        }
                        else{
                            $laviraible = 0;
                            foreach ($recipes as $recipe) {
                                $laviraible++;
                                if ($i % 4 == 0)
                                    echo "<tr>";				
                                echo "<td>";
                                echo '<form action="./fichex.php" method="post">';
                                echo '<input type="hidden" name="chiffre" value="'.$laviraible . '">';
                                echo '<button type = "submit">';
                                // echo "<a href =fiche".$laviraible.".php>";	                                
                                echo "<img class = 'img_anim' src = 'Images/".$recipe['image']."'/>";
                                echo "<h3>".mb_strtoupper($recipe['nom'])."</h3>";      
                                echo "</button>";
                                echo "</form>";                      				
                                echo "</td>";
                                // echo "</a>";
                                if ($i % 4 == 3) 
                                    echo "</tr>";
                                $i++;
                            } 
                        }                    
                    ?>    
                </table>
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