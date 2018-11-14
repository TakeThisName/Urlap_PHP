<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="belep.php"> <!-- "get" <- a címsorban küldi az adatot, a "post" nem; "#" a script helye az adott fájl -->
            <input type="text" name="username" required placeholder="Felhasználónév">
            <input type="text" name="pwd" required placeholder="Jelszó">
            <input type="text" name="pwd2" required placeholder="Jelszó mégegyszer">
            <input type="submit" value="Belépés" name="submit">
        </form>
        
    </body>
</html>
