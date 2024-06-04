<?php
    session_start();
    if (isset($_POST["user"])) $user = $_POST["user"]; else $user = "";
    if (isset($_POST["pass"])) $pass = $_POST["pass"]; else $pass = "";
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Login
        </title>

        <link rel="icon" type="image/x-icon" href="../immagini/mappa-icona.png">
        <link rel="stylesheet" href="../style.css">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    </head>


    <body>
        <div class="cover">
            <div class="cover__content">

                <!-- <img src="../immagini/background_image3.jpg" alt="" class="login-background"> -->
                <div class="login-background">
                    <p>
                        ㅤ
                    </p>
                    
                </div>
                <main id="login-main">
                    
                    <div class="login">

                        <div class="titolo__login">
                            <div class="titolo__login__img">
                                <img src="../immagini/creeper_face.png" alt="" class="img_res">
                            </div>
                            <h1>Minewiki</h1>
                        </div>
                        <div class="login__content">

                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloremque id pariatur praesentium, fugiat incidunt et minus quam obcaecati! Optio architecto officiis repudiandae aliquam id sint quae sit mollitia! Et.</p> -->
                            <form action="" method="post">
                                <table>
                                    <tr>

                                        <td><label for="user" class="minecraft_text">Username:</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="user" id="user" value="<?php echo $user?>" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="pass" class="minecraft_text">Password:</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="password" name="pass" id="pass" required></td>

                                    </tr>
                                </table>
                                <br>
                                <br>
                                <table>
                                    <tr>
                                        <td id="registrati">
                                            <a href="registrazione.php" class="minecraft_text">Registrati</a>
                                            <a href="" class="minecraft_text">ㅤ|ㅤ</a>
                                            <a href="../index.php" class="minecraft_text">Home</a>
                                        </td>
                                        <td>
                                            <input type="submit" value="Accedi" id="accedi" class="minecraft_text">

                                        </td>

                                    </tr>
                                </table>
                            </form>
                            <?php
                                if (isset($_POST["user"]) and isset($_POST["pass"])){
                                    
                                    require("../data/connessione_db.php");
    
                                    $conn = new mysqli($db_servername, $db_user, $db_pass, $db_nome);
                                    if ($conn->connect_error){
                                        die("<p>Suca: ".$conn->connect_error."</p>");
                                    }
    
                                    $myquery = "SELECT username, password FROM utenti WHERE username='$user' AND password='$pass'";
    
                                    $ris = $conn->query($myquery) or die("<p> mammt è fallita! ".$conn->connect_error."</p>");
    
                                    if($ris->num_rows == 0){
                                        echo "<p>Utente o password non trovati :(</p>";
                                        $conn->close();
                                    } else{
                                        session_start();
                                        $_SESSION["user"] = $user;
    
                                        $conn->close();
                                        header("location: ../index.php");
                                    }
                                };
    
                                
                            ?>
    
                            <!-- <p>Se non hai un account <a href="registrazione.php">registrati</a> </p> -->
                        </div>

                    </div>


                </main>
            </div>
        </div>
    </body>
</html>