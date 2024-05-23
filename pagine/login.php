<?php
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
                    <h1>Login</h1>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloremque id pariatur praesentium, fugiat incidunt et minus quam obcaecati! Optio architecto officiis repudiandae aliquam id sint quae sit mollitia! Et.</p> -->
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td><label for="user" >Username:</label></td>
                                <td><input type="text" name="user" id="user" value="<?php echo $user?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="pass">Password:</label></td>
                                <td><input type="password" name="pass" id="pass" value="<?php echo $pass?>" required></td>
                                <td></td>
                            </tr>
                        </table>

                        <input type="submit" value="Accedi">
                    </form>

                    
                </main>
            </div>
        </div>
    </body>
</html>