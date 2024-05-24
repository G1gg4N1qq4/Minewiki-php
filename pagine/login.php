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

                <main>
                    <div class="login">

                        <h1>Login</h1>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloremque id pariatur praesentium, fugiat incidunt et minus quam obcaecati! Optio architecto officiis repudiandae aliquam id sint quae sit mollitia! Et.</p> -->
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td><label for="user" class="minecraft_text">Username:</label></td>
                                    <td><input type="text" name="user" id="user" value="<?php echo $user?>" required></td>
                                </tr>
                                <tr>
                                    <td><label for="pass" class="minecraft_text">Password:</label></td>
                                    <td><input type="password" name="pass" id="pass" required></td>
                                </tr>
                            </table>
    
                            <input type="submit" value="Accedi" id="accedi">
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
                    </div>


                </main>
            </div>
        </div>
    </body>
</html>