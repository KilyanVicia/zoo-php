<?php
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

<?php
    $sqlQuery="SELECT * FROM utilisateurs WHERE login = :login AND mdp = :mdp;";
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    $recipesStatement->execute(['login' => $_POST["identifiant"] , 'mdp' => $_POST['mdp']]); 					
    $recipes = $recipesStatement->fetch();
    if(empty($recipes)){
        header("Location: login.php");
        echo ($_POST['login']);
    }
    else{
        session_start();
        $_SESSION['image'] = $recipes['image'];
        $_SESSION['categorie'] = $recipes["categorie"];
        header("Location: index.php");
    }             
?>            