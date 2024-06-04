<?php 

    session_start();

    if(isset($_POST['user'])){$user = $_POST['user'];} else{$user = ""; }
    if(isset($_POST['pass'])){$pass = $_POST['pass'];} else{$pass = ""; }
    $nomepagina = __FILE__;
    $nomepagina = substr($nomepagina, -4,5)
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Craft
        </title>

        <link rel="icon" type="image/x-icon" href="../immagini/MinecraftCraftingTablePNGImage.png">
        <link rel="stylesheet" href="../style.css">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    </head>

    <body>
        <img src="../immagini/background_image5.jpg" alt="immagine non disponibile" class="img_res" id="back-ground">
        <div class="cover">
            <div class="cover__content">
                
                <header> 
                    <?php 
                        require("nav.php")
                    ?>
                </header>
                
                <main>
                    <div class="container" id="craft">  
                        <?php
                            require("../data/connessione_db.php");
                            
                            $myquery = "SELECT cod_craft, categoria
                                        FROM craft";
                            
                            $ris = $conn->query($myquery) or die("<p>Query fallita:".$conn->connect_error."</p>");
                            
                            echo "<div class='copertura'><h2 class='Grande_Titolo' id='Foreste'>Crafting</h2><div class='container__container' >";
                                foreach($ris as $riga){
                                    $cod_craft = $riga["cod_craft"];
                                    $categoria = $riga["categoria"];
                                    // $background = $riga["background"];
                                    echo '<a href="crafts.php?cod_craft='.$cod_craft.'" class="craft__card" id="craft_page">
                                        
                                        <h2>'.$categoria.'</h2>
                                    
                                        </a>';
                                }
                            echo "</div></div>";
                        ?>
                    </div>
                    
                    <!-- <div class="crafting__container">
                        
                        <h1 class="reveal" id="Strumenti">Strumenti</h1>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting_spada.jpg" alt=""  class="crafting__card__img">
                            
                            <h2>Spada</h2>
                            <div class="crafting__card__content">
                            <ul>
                                <li>1 Bastoncino di Legno</li>
                                <li>2 Assi di legno/ /Lingotti di ferro/Lingotti d'oro/Diamanti</li>
                            </ul>
                            </div>
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting_piccone.jpeg" alt="" class="crafting__card__img">
                            
                            <h2>Piccone</h2>  
                            <div class="crafting__card__content">
                                <ul>
                                    <li>2 Bastoncini di Legno</li>
                                    <li>3 Assi di legno/Pietrisco /Lingotti di ferro/Lingotti d'oro/Diamanti</li>
                                </ul>
                            </div>
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-axe.gif" alt="" class="crafting__card__img">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            <h2>Ascia</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>2 Bastoncini di Legno</li>
                                    <li>3 Assi di legno/Pietrisco /Lingotti di ferro/Lingotti d'oro/Diamanti</li>
                                </ul>
                            </div>  
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-pala.gif" alt="" class="crafting__card__img">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            <h2>Pala</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>2 Bastoncini di Legno</li>
                                    <li>1 Asse di legno/Pietrisco /Lingotto di ferro/Lingotto d'oro/Diamante</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="crafting__container">
                        <h1 class="reveal" id="Armature">Armature</h1>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-elmo.gif" alt=""  class="crafting__card__img">
                            
                            <h2>Elmo</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>4 Pezzi di cuoio/Lingotti di ferro/Lingotti d'oro/Diamanti</li>
                                </ul>
                            </div>
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-corpetto.gif" alt="" class="crafting__card__img">
                            
                            <h2>Corazza</h2>  
                            <div class="crafting__card__content">
                                <ul>
                                    <li>8 Pezzi di cuoio/Lingotti di ferro/Lingotti d'oro/Diamanti</li>
                                </ul>
                            </div>
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-leggins.gif" alt="" class="crafting__card__img">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            <h2>Gambali</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>7 Pezzi di cuoio/Lingotti di ferro/Lingotti d'oro/Diamanti</li>
                                </ul>
                            </div>  
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-stivali.gif" alt="" class="crafting__card__img">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            <h2>Stivali</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>4 Pezzi di Cuoio/Lingotti di ferro/Lingotti d'oro/Diamanti</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="crafting__container">
                        <h1 class="reveal" id="BlocchiCostruzione">Blocchi da costruzione</h1>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-door.gif" alt=""  class="crafting__card__img">
                            
                            <h2>Porte</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>6 Assi di Legno/Lingotti di ferro</li>
                                </ul>
                                <p>Le porte di legno possono essere aperte facendo click o utilizzando il potere della pietra rossa. Le porte di ferro possono essere aperte solo dal potere della pietrarossa.</p>
                            </div>
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-concrete_powder.png" alt=""  class="crafting__card__img">
                            
                            <h2>Polvere di Calcestruzzo</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>4 Blocchi di ghiaia</li>
                                    <li>4 Blocchi di sabbia</li>
                                    <li>1 Colorante</li>
                                </ul>
                                <p>Si trasforma in calcestruzzo a contatto con acqua.</p>
                            </div>
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-trapdoor.png" alt="" class="crafting__card__img">
                            
                            <h2>Botole</h2>  
                            <div class="crafting__card__content">
                                <ul>
                                    <li>6 Assi di legno/Lingotti di Ferro</li>
                                </ul>
                                <p>Le botole di legno possono essere aperte facendo click o utilizzando il potere della pietra rossa. Le botole di ferro possono essere aperte solo dal potere della pietrarossa.</p>
                            </div>
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-fence.png" alt="" class="crafting__card__img">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            <h2>Recinto</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>2 Bastoncini di legno</li>
                                    <li>4 Assi di legno</li>
                                </ul>
                                <p>Blocco che non può essere scavalcato.</p>
                            </div>  
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-gate.png" alt="" class="crafting__card__img">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            <h2>Cancello</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>4 Bastoncini di legno</li>
                                    <li>2 Assi di legno</li>
                                </ul>
                                <p>I cancelli possono essere aperti facendo click o utilizzando il potere della pietra rossa.</p>
                            </div>
                        </div>
                    </div>

                    <div class="crafting__container">
                        <h1 class="reveal" id="Lavoro">Lavoro</h1>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-crafting_table.png" alt=""  class="crafting__card__img">
                            
                            <h2>Crafting Table</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>4 Assi di legno</li>
                                </ul>
                                <p>Apre una griglia di creazione 3x3 quando si fa click con il pulsante destro del mouse su di essa.</p>
                            </div>
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-fornace.gif" alt="" class="crafting__card__img">
                            
                            <h2>Fornace</h2>  
                            <div class="crafting__card__content">
                                <ul>
                                    <li>8 Blocchi di pietrisco</li>
                                </ul>
                                <p>Permette al giocatore di cucinare il cibo e fondere i minerali.</p>
                            </div>
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-chest.webp" alt="" class="crafting__card__img">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            <h2>Cassa</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>8 Assi di legno</li>
                                </ul>
                                <p>Quando fai click col tasto destro si apre uno storage 9x3.</p>
                            </div>  
                        </div>
                        <div class="crafting__card reveal">
                            <img src="../immagini/crafting/crafting-enchanting_table.webp" alt="" class="crafting__card__img">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            <h2>Enchanting Table</h2>
                            <div class="crafting__card__content">
                                <ul>
                                    <li>4 Blocchi di ossidiana</li>
                                    <li>2 Libri</li>
                                    <li>1 Diamante</li>
                                </ul>
                                <p>Utilizzato per incantare strumenti, armi e armature.</p>
                            </div>
                        </div>
                    </div> -->

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
                        <div class="footer__column">
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