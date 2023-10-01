
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>document</title>
    </head>

    <body>
        <?php
            $num1=15;
            $num2=2;
        ?>
        <h1>Formulaire d'addition</h1>

        <form method="POST" action="">
            <label for="num1"><?php echo $num1; ?> :</label>
            <input type="text" name="num1" id="num1" required>

            <p>+</p>

            <label for="num2"><?php echo $num2; ?>:</label>
            <input type="text" name="num2" id="num2" required>
            

            <input type="submit" value="calculer">
        </form>

        <p>le resultat est : <?php echo $num1+$num2; ?></p>
    </body>

<html>