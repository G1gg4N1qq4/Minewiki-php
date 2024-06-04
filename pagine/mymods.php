<?php
    session_start();
    if(isset($_SESSION["user"])){$user=$_SESSION["user"];}else{header("location: login.php");}

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            MyMods
        </title>

        <link rel="icon" type="image/icon" href="../immagini/icona_mymods.png">
        <link rel="stylesheet" href="../style.css">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    </head>

    <body class="loading">
        <!-- <img src="../immagini/background_image5.jpg" alt="immagine non disponibile" class="img_res" id="back-ground"> -->
        <div class="cover">
            <div class="cover__content">
                
                <header> 
                    <?php 
                        require("nav.php")
                    ?>
                </header>


                
                
                <main>
                    <div class="container" id="mods">     
                        <?php
                            require("../data/connessione_db.php");
                            echo $user;
                            $myquery = "SELECT cod_mod, nome, immagine
                                        FROM mods
                                        WHERE username_utente = '$user'";
                            
                            $ris = $conn->query($myquery) or die("<p>Query fallita:".$conn->connect_error."</p>");
                            if($ris->num_rows >0){

                                echo "<div class='copertura'><h2 class='Grande_Titolo' id='Foreste' style='font-size:50px; margin-top:30px; border-bottom:0px'>MyMods</h2><div class='container__container' >";
                                $riga = $ris->fetch_assoc();
                                // echo "ciaooooooooooo";
                                $cod_mod = $riga["cod_mod"];
                                $nome = $riga["nome"];
                                // $descrizione = $riga["descrizione_txt"];
                                $immagine = $riga["immagine"];
                                // $link = $riga["link"];
                                echo "<div class='cover2 reveal'>
                                        <h2 class='Titolo_mod' style='font-size: 30px; padding-bottom:0px   '>$nome</h2>
                                        <div class='card' style='width:300px'>
    
                                            <div class='card__img' style='width:100%'>
                                                <img src='../immagini/mods/$immagine' alt='L'immagine non e' disponibile :/' class='img_res'>
                                            </div>
    
                                            
                                        </div>
                                    </div>";
                            
                                echo "</div></div>";
                            }
                            else{
                                echo '<p style="padding: 300px 10px">Non hai caricato nessuna mod</p>';
                            }

                            echo "<div class='copertura'><h2 class='Grande_Titolo' id='Foreste' style='font-size:30px; margin-top:30px; border-bottom:0px'>Carica Mods</h2><div class='container__container' >";
                            
                        ?>

                        <div class="login__content">

                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloremque id pariatur praesentium, fugiat incidunt et minus quam obcaecati! Optio architecto officiis repudiandae aliquam id sint quae sit mollitia! Et.</p> -->
                            <form action="" method="post">
                            <table>
                                <tr>
                                    <td><label for="nome" class="minecraft_text">Nome mod:</label></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="nome" id="nome" value="" required></td>
                                </tr> 
                                <tr>
                                    <td><label for="descrizione" class="minecraft_text">Descrizione:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="text" name="descrizione" id="descrizione" value="" required></td>   
                                </tr>
                                <tr>
                                    <td><label for="link" class="minecraft_text">Link:</label></td>
                                </tr> 
                                <tr>   
                                    <td><input type="text" name="link" id="link" value="" required></td>   
                                </tr>
                                <tr>
                                    <td>
                                        <p>Non preoccuparti per l'immagine, la sceglieremo noi! :)</p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <br>
                            <table>
                                    <tr>
                                        <td>
                                            <input type="submit" value="Carica" id="accedi" class="minecraft_text"> 
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <?php
                                if (isset($_POST["nome"]) and isset($_POST["link"] )){
                                    $myquery = "SELECT nome from mods
                                                WHERE nome = '".$_POST["nome"]."'";
                                    
                                    $ris = $conn->query($myquery) or die("<p> mammt è fallita! ".$conn->connect_error."</p>");

                                    if($ris->num_rows >0){
                                        echo "<p>Nome mod già esistente</p>";
                                        $conn->close();
                                    }
                                    else{

                                        require("../data/connessione_db.php");
    
    
                                        $myquery2 = "INSERT INTO mods (nome, username_utente, descrizione_txt, immagine, link)
                                                    VALUES ('".$_POST["nome"]."', '$user','".$_POST["descrizione"]."', 'alternative_image.jpg', '".$_POST["link"]."')";
    
                                        $ris = $conn->query($myquery2) or die("<p> mammt è fallita! ".$conn->connect_error."</p>");
                                        if($ris == True || $ris->num_rows > 0){
                                                
                                            echo "<p> Mod caricata con successo! <a href='mods.php'>Vedila qui!</a><p>";
    
                                            $conn->close();
                                        }
                                        else{
                                            echo "<p>Impossibile caricare</p>";
                                            $conn->close();

                                        }
                                    }
                                        
                                    
                                    
                                };

                                
                            ?>

                            <!-- <p>Se non hai un account <a href="registrazione.php">registrati</a> </p> -->
                        </div>
                        
                    </div>
                    

                    <div class="boxsu">
                        <a href=#cover>
                            <img src="../immagini/frecciasu.png" alt="immagine non disponibile" class="img_res">
                        </a>
                    </div>
                </main>    
                <footer class="footer">
                    <div class="grid" id="contatti">
                        <div class="footer__column">
                            <h3>Chi siamo</h3>

                            <p >Riccardo Germanò - Abraham La Rosa.
                                Studenti del Liceo A. Banfi di Vimercate.
                            </p>
                            <p >
                                Questo è un sito che è stato creato per un progetto, il percorso di costruzione è stato molto divertente.
                            </p>
                        </div>
                        <div class="footer__column ">
                            <h3 >Email 1</h3>
                            <p >riccardo.germano@liceobanfi.eu</p>
                            <p >
                                - Non scrivere, tanto non ti rispondo
                            </p>
                            <a href="https://github.com/Furoooo">
                                <img src="../immagini/thecock.jfif" alt="">
                            </a>
                        </div>
                        <div class="footer__column">
                            
                            <h3 >
                                Email 2
                            </h3>
                            <p >abraham.larosa@liceobanfi.eu</p>
                            <p>
                                - Prof la prego ci metta 10. 🗿🍷
                            </p>
                            <a href="https://github.com/G1gg4N1qq4">
                                <img src="../immagini/giganigga.jfif" alt="">
                            </a>
                        </div>

                    </div>
                </footer>
            </div>
        </div>
    </body>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <script>
            $(document).ready(function(){
                $(".loading-image").toggleClass("loading-image--deactive")
                $(".loading").toggleClass("deactive")
                $(".boxsu").hide(400);

                $(".Global__header__line-menu").width = 100
                $(".Global__header__line-menu").position().left=100

                $(".Global__header__icon-bar").on("click", function() {
                    $(".Global__header__menu").toggleClass("Global__header__menu--open");
                    console.log("ciao")
                });

                
                $(window).scroll(function() {
                    
                    if ($(window).scrollTop() >($(".Global__header").offset().top)){
                        $(".Global__header").addClass("Global__header--fixed");
                        console.log("edge+cum")
                    };
                    
                    if($(window).scrollTop() < 60){
                        $(".Global__header").removeClass("Global__header--fixed");
                        console.log("edge+cum")
                    }
                    
                    if($(window).scrollTop() <= 1980){
                        $(".boxsu").hide(600);
                        console.log("edge+cum")
                    }

                    if($(window).scrollTop() > 1980){
                        $(".boxsu").show(600);
                        console.log("edge+cum")
                    }

                
                });

                var nav = $(".Global__header__menu")
                var pos = 0
                var wid = ""
                var line = $(".Global__header__line-menu")
                
                
                nav.find(".Global__header__menu__item").hover( function(){
                    
                    var this_nav = $(this)
                    line.animate({
                        left: this_nav.position().left,
                        width: this_nav.width() + 10
                    }, 50)
                });
                
                $(".boxsu").on("click", function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 1000)

                });

                // $('.cta').click(function(event) {
                //     // Preventing default action of the event
                //     event.preventDefault();
                //     // Getting the height of the document
                //     var n = $(document).height();
                //     $('html, body').animate({ scrollTop: n }, 1000);
                // });
                
                if($(window).width() > 0){
                    ScrollReveal().reveal('.reveal', {distance: '50px', duration: '1500', origin: 'bottom', easing: 'cubic-bezier(0.215, .61, .355, 1)', interval: '50'});
                };
                ScrollReveal().reveal('.zoom', {duration: '1500', easing: 'cubic-bezier(0.215, .61, .355, 1)', interval: '200', scale: 0.65, mobile: false})

                if($(window).width() > 1366){
                    $('.Tendina').hover(function(){
                        $(this).toggleClass('menubiomi--open')
                    });
                    $('.menubiomi a').hover(function(){
                        $(this).toggleClass('menubiomi__a--open')
                    });
                    
                };

                if(($(window).width() <= 1366)){ 
                    if(($(window).width() > 767)){
                        $('.main_page_link').click(function (e) {
                            e.preventDefault();
                        });
                        $('.Tendina').off('hover')
                        $('.Tendina').on('click', function(){
                            $('.Tendina').not(this).removeClass('menubiomi--open')
                            $(this).toggleClass('menubiomi--open')
                        });
    
                        var width = $(window).width();
                        var height = $(window).height() - $('.Global__header').height();
                        $('.menubiomi').width(width);
                        $('.menubiomi').height(height);
    
                    };      
                }

                
                if($(window).width() <= 767){
                    $('.main_page_link').click(function (e) {
                        e.preventDefault();
                    });
                }
            });
        </script>
</html>