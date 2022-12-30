<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
	 <link rel="stylesheet" href="css/style.css">
    <title>SESSION</title>
    
</head>
<body>
    <div class="container">
        <div class="w-50 m-auto mt-5">
            <?php
                if(isset($_SESSION['connected']) and ($_SESSION['connected'] == true)){
                    ?>
                    <div class="border">
                        <span class="p-2 m-3 text-success">Vous êtes connecter</span>
                        <h1>Bonjour, <?php echo $_SESSION['username']; ?><h1>
                        <a  href="logout.php">Déconnexion</a>
                        <?php
                } else {
                    ?>
                    <form action="traitement.php" method="POST">
                        <h1>Connectez-vous</h1>
                        <input type="text" class="form-control mb-3" name="username" placeholder="Enter username" required>
                        <input type="password" class="form-control " name="password" placeholder="Password" required> </br>
                        <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
                </form>
                <?php
                }

                ?>
        </div>
    </div>
</body>
</html>