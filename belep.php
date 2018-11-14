<?php
            if (isset($_POST["submit"])){ // server oldalo a name értékre van szükség
//                echo $_POST['username']."<br>"; 
//                echo $_POST['pwd'];
                $un = $_POST["username"];
                $pwd = $_POST["pwd"];
                $pwd2 = $_POST["pwd2"];
                
                if ($un == "user" && $pwd == "password" && $pwd == $pwd2){
                    echo "Üdvözöllek ".$un;
                }
                 else {
                        echo "A jelszó helytelen, vagy nem egyezik meg a megerősítéssel!<br>";
                }
                echo '<a href="index.php"><br>Vissza az előző oldalra</a>';
            }
        ?>