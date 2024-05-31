<?php
    session_start();
    if (isset($_POST["user"])) $user = $_POST["user"]; else $user = "";
    if (isset($_POST["pass"])) $pass = $_POST["pass"]; else $pass = "";
    if(isset($_POST["pass_confirm"])) $conferma = $_POST["pass_confirm"];  else $conferma = "";
    if(isset($_POST["nome"])) $nome = $_POST["nome"];  else $nome = "";
    if(isset($_POST["cognome"])) $cognome = $_POST["cognome"];  else $cognome = "";
    if(isset($_POST["email"])) $email = $_POST["email"];  else $email = "";
    if(isset($_POST["telefono"])) $telefono = $_POST["telefono"];  else $telefono = "";
    if(isset($_POST["comune"])) $comune = $_POST["comune"];  else $comune = "";
    if(isset($_POST["indirizzo"])) $indirizzo = $_POST["indirizzo"];  else $indirizzo = "";
    
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

                <main>
                    <div class="login">

                        <h1>Registrazione</h1>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloremque id pariatur praesentium, fugiat incidunt et minus quam obcaecati! Optio architecto officiis repudiandae aliquam id sint quae sit mollitia! Et.</p> -->
                        <form action="" method="post">
                        <table>
                                <tr>
                                    <td><label for="user" class="minecraft_text">Username:</label></td>
                                    <td><input type="text" name="user" id="user" value="<?php echo $user?>" required></td>
                                </tr>
                                <tr>
                                    <td><label for="nome" class="minecraft_text">Nome:</label></td>
                                    <td><input type="text" name="nome" id="nome" value=""></td>
                                    
                                </tr>
                                <tr>
                                    <td><label for="cognome" class="minecraft_text">Cognome:</label></td>
                                    <td><input type="text" name="cognome" id="cognome" value=""></td>
                                </tr>
                                <tr>
                                    <td><label for="email" class="minecraft_text">Email:</label></td>
                                    <td><input type="text" name="email" id="email" value=""></td>
                                </tr>
                                <tr>
                                    <td><label for="telefono" class="minecraft_text">Telefono:</label></td>
                                    <td><input type="text" name="telefono" id="telefono" value=""></td>
                                </tr>
                                <tr>
                                    <td><label for="comune" class="minecraft_text">Comune:</label></td>
                                    <td><input type="text" name="comune" id="comune" value=""></td>
                                </tr>
                                <tr>
                                    <td><label for="indirizzo" class="minecraft_text">Indirizzo:</label></td>
                                    <td><input type="text" name="indirizzo" id="indirizzo" value=""></td>
                                </tr>
                                <tr>
                                    <td><label for="pass" class="minecraft_text">Password:</label></td>
                                    <td><input type="password" name="pass" id="pass" required></td>
                                </tr>
                                <tr>
                                    <td><label for="pass_confirm" class="minecraft_text">Conferma password:</label></td>
                                    <td><input type="password" name="pass_confirm" id="pass_confirm" required></td>
                                    
                                </tr>
                            </table>
    
                            <input type="submit" value="Accedi" id="accedi">
                        </form>
                        <?php
                            if (isset($_POST["user"]) and isset($_POST["pass"])){
                                if($pass!=$conferma){
                                    echo "<p>Le due password non corrispondono, assicurati che siano uguali.";
                                    
                                }else{

                                    require("../data/connessione_db.php");
    
                                    $conn = new mysqli($db_servername, $db_user, $db_pass, $db_nome);
                                    if ($conn->connect_error){
                                        die("<p>Suca: ".$conn->connect_error."</p>");
                                    }
    
                                    $myquery = "INSERT INTO utenti (username, password, nome, cognome, email, telefono, comune, indirizzo) 
                                                VALUE ('$user', '$pass', '$nome', '$cognome', '$email', '$telefono', '$email', '$indirizzo')";
    
                                    $ris = $conn->query($myquery) or die("<p> mammt è fallita! ".$conn->connect_error."</p>");
    
                                    if($ris->num_rows == 0){
                                        echo "<p>Utente o password non trovati :(</p>";
                                        $conn->close();
                                    } else{
                                        // session_start();
                                        $_SESSION["user"] = $user;
    
                                        $conn->close();
                                        header("location: ../index.php");
                                    }

                                }
                                
                            };

                            
                        ?>

                        <h2>Hai già un account?</h2>
                        <p style="text-align:center">Allora <a href="login.php">accedi</a></p>

                    </div>


                </main>
            </div>
        </div>
    </body>
</html>