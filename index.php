<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="#"> <!-- "get" <- a címsorban küldi az adatot, a "post" nem; "#" a script helye az adott fájl -->
            <input type="text" name="username" required placeholder="Felhasználónév">
            <input type="text" name="pwd" required placeholder="Jelszó">
            <input type="submit" value="Belépés" name="submit">
        </form>
        <?php
            echo $_POST['username']."<br>"; // server oldalo a name értékre van szükség
            echo $_POST['pwd'];
        ?>
    </body>
</html>
