<?php session_start();
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 2019-02-12
 * Time: 23:53
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nouveau Pokémon</title>
</head>
<body>
<form enctype="multipart/form-data" action="FormAjout.php" method="Post">
    <fieldset>
        <legend>Nouveau Pokémon</legend>
        <p>
            <label>Id</label>
            <input type="number" name="id" required>

            <label>Nom</label>
            <input type="text" name="nom" required>

            <label>Courbe XP</label>
            <input type="text" name="courbe" required>

            <label>Evolution</label>
            <input type="text" name="evolution" required>

            <label>Type 1</label>
            <input type="text" name="type1" required>

            <label>Type 2</label>
            <input type="text" name="type2" required>

            <input type="submit" name="submit" value="Inscrire votre Pokémon !!!" />
        </p>
    </fieldset>
</form>

</body>
</html>


</body>
</html>