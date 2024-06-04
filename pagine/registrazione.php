<?php
    session_start();
    if (isset($_POST["user"])) $user = $_POST["user"]; else $user = "";
    if (isset($_POST["pass"])) $pass = $_POST["pass"]; else $pass = "";
    if(isset($_POST["pass_confirm"])) $conferma = $_POST["pass_confirm"];  else $conferma = "";
    if(isset($_POST["nome"])) $nome = $_POST["nome"];  else $nome = "";
    if(isset($_POST["cognome"])) $cognome = $_POST["cognome"];  else $cognome = "";
    if(isset($_POST["email"])) $email = $_POST["email"];  else $email = "";
    if(isset($_POST["telefono"])) $telefono = $_POST["telefono"];  else $telefono = "";    
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
                                    <td><label for="password" class="minecraft_text">Password:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="password" name="password" id="password" value=""></td>   
                                </tr>
                                <tr>
                                    <td><label for="pass_confirm" class="minecraft_text">Conferma password:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="password" name="pass_confirm" id="pass_confirm" value=""></td>   
                                </tr>
                                <tr>
                                    <td><label for="nome" class="minecraft_text">Nome:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="text" name="nome" id="nome" value=""></td>   
                                </tr>
                                <tr>
                                    <td><label for="cognome" class="minecraft_text">Cognome:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="text" name="cognome" id="cognome" value=""></td>   
                                </tr>
                                <tr>
                                    <td><label for="email" class="minecraft_text">Email:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="text" name="email" id="email" value=""></td>   
                                </tr>
                                <tr>
                                    <td><label for="telefono" class="minecraft_text">Telefono:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="text" name="telefono" id="telefono" value=""></td>   
                                </tr>                       
                            </table>
                            <br>
                            <br>
                            <table>
                                    <tr>
                                        <td id="registrati">
                                            <a href="login.php" class="minecraft_text">Login</a>
                                            <a href="" class="minecraft_text">ㅤ|ㅤ</a>
                                            <a href="../index.php" class="minecraft_text">Home</a>
                                        </td>
                                        <td>
                                            <input type="submit" value="Registrati" id="accedi" class="minecraft_text">

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