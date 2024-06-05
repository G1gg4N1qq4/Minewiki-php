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
            Registrazione
        </title>

        <link rel="icon" type="image/x-icon" href="../immagini/icona-registrazione.png">
        <link rel="stylesheet" href="../style.css">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    </head>


    <body >
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
                                    <td><input type="password" name="pass" id="password" value="<?php echo $pass?>" required></td>   
                                </tr>
                                <tr>
                                    <td><label for="pass_confirm" class="minecraft_text">Conferma password:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="password" name="pass_confirm" id="pass_confirm" value="<?php echo $conferma?>" required></td>   
                                </tr>
                                <tr>
                                    <td><label for="nome" class="minecraft_text">Nome:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="text" name="nome" id="nome" value="<?php echo $nome?>"></td>   
                                </tr>
                                <tr>
                                    <td><label for="cognome" class="minecraft_text">Cognome:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="text" name="cognome" id="cognome" value="<?php echo $cognome?>"></td>   
                                </tr>
                                <tr>
                                    <td><label for="email" class="minecraft_text">Email:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="text" name="email" id="email" value="<?php echo $email?>"></td>   
                                </tr>
                                <tr>
                                    <td><label for="telefono" class="minecraft_text">Telefono:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="text" name="telefono" id="telefono" value="<?php echo $telefono?>"></td>   
                                </tr>
                                <tr>
                                    <td>

                                        <p>Scegli un'immagine profilo</p>
                                    </td>
                                </tr>
                                <tr class="profile-img_chooser">
                                    <td colspan="2" style="text-align: center" >
                                        <div class="profile-img">
                                            <input type="radio" name="profile_img" value="cat.jpg" >
                                            <img src="../immagini/mobs/icons/cat.jpg" alt="" class="img_res">

                                        </div>
                                        <div class="profile-img">
                                            <input type="radio" name="profile_img" value="zombie.png">
                                            <img src="../immagini/mobs/icons/zombie.png" alt="" class="img_res">

                                        </div>
                                        <div class="profile-img">
                                            <input type="radio" name="profile_img" value="blaze.png">
                                            <img src="../immagini/mobs/icons/blaze.png" alt="" class="img_res">

                                        </div>
                                        <div class="profile-img">
                                            <input type="radio" name="profile_img" value="fox.jpg">
                                            <img src="../immagini/mobs/icons/fox.jpg" alt="" class="img_res">

                                        </div>
                                    </td>
                                    <td colspan="2" style="text-align: center" >
                                        <div class="profile-img">
                                            <input type="radio" name="profile_img" value="enderdragon.png">
                                            <img src="../immagini/mobs/icons/enderdragon.png" alt="" class="img_res">

                                        </div>
                                        <div class="profile-img">
                                            <input type="radio" name="profile_img" value="magma-cube.png">
                                            <img src="../immagini/mobs/icons/magma-cube.png" alt="" class="img_res">

                                        </div>
                                        <div class="profile-img">
                                            <input type="radio" name="profile_img" value="pigman.png">
                                            <img src="../immagini/mobs/icons/pigman.png" alt="" class="img_res">

                                        </div>
                                        <div class="profile-img">
                                            <input type="radio" name="profile_img" value="turtle.png">
                                            <img src="../immagini/mobs/icons/turtle.png" alt="" class="img_res">

                                        </div>
                                    </td>
                                    <td colspan="2" style="text-align: center" >
                                        <div class="profile-img">
                                            <input type="radio" name="profile_img" value="hairynigga.jpg">
                                            <img src="../immagini/mobs/icons/hairynigga.jpg" alt="" class="img_res">

                                        </div>
                                    </td>
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
                                if(isset($_POST["profile_img"])){
                                    $profile_img = $_POST["profile_img"];
                                }
                                else{
                                    $profile_img = "profile_user_account_icon_190938.png";
                                }

                                if (isset($_POST["user"]) and isset($_POST["pass"] )){
                                    if($_POST["pass"]!= $_POST["pass_confirm"]){
                                        echo "<p>Le due password non corrispondono</p>";
                                    }
                                    else{
                                        
                                        require("../data/connessione_db.php");
        
                                        if ($conn->connect_error){
                                            die("<p>Suca: ".$conn->connect_error."</p>");
                                        }
        
                                        $myquery = "SELECT username FROM utenti WHERE username='".$_POST['user']."'";
        
                                        $ris = $conn->query($myquery) or die("<p> mammt è fallita! ".$conn->connect_error."</p>");
        
                                        if($ris==False || $ris->num_rows > 0){
                                            echo "<p>Username già esistente</p>";
                                            $conn->close();
                                        } else{
                                            
                                            $myquery2 = "INSERT INTO utenti (username, password, nome, cognome, email, telefono, foto_profilo)
                                                        VALUES ('".$_POST["user"]."','".$_POST["pass"]."', '".$_POST["nome"]."', '".$_POST["cognome"]."', '".$_POST["email"]."', '".$_POST["telefono"]."', '$profile_img')";

                                            $ris2 = $conn->query($myquery2) or die("<p> mammt è fallita! ".$conn->connect_error."</p>");
                                            if($ris2==False){
                                                echo "<p>Impossibile registrarsi</p>";
                                                $conn->close();
                                            }
                                            else{

                                                echo "<p> Registrazione effettuata con successo! <a href='../index.php'>Continua qui</a><p>";
                                                $_SESSION["user"] = $user;
            
                                                $conn->close();
                                            }
                                        }
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