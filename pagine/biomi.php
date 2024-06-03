

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Biomi
        </title>

        <link rel="icon" type="image/x-icon" href="../immagini/mappa-icona.png">
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
                     <div class="container" id="biomi">      
                        <div class="copertura">
                            <h2 class="Grande_Titolo" id="Foreste">Biomi</h2>
                            <div class="container__container" >
                                <div class="biomi__card">
                                    <img src="../immagini/background_forest.png" alt=""  class="biomi__card__img">
                                    
                                    <h2>Foreste</h2>
                                </div>
                                <div class="biomi__card">
                                    <img src="../immagini/background_forest.png" alt=""  class="biomi__card__img">
                                    
                                    <h2>Foreste</h2>
                                </div>
                                <div class="biomi__card">
                                    <img src="../immagini/background_forest.png" alt=""  class="biomi__card__img">
                                    
                                    <h2>Foreste</h2>
                                </div>
                                <div class="biomi__card">
                                    <img src="../immagini/background_forest.png" alt=""  class="biomi__card__img">
                                    
                                    <h2>Foreste</h2>
                                </div>
                                <div class="biomi__card">
                                    <img src="../immagini/background_forest.png" alt=""  class="biomi__card__img">
                                    
                                    <h2>Foreste</h2>
                                </div>
                                <div class="biomi__card">
                                    <img src="../immagini/background_forest.png" alt=""  class="biomi__card__img">
                                    
                                    <h2>Foreste</h2>
                                </div>
                            </div>

                        </div>


                    </div>

                    <!-- <div class="container" id="Titolo1">      
                        <div class="container__container" >
                            <h2 class="Grande_Titolo" id="Foreste">Foreste</h2>
                            <div class="cover2 reveal">
                                <h2>Foresta di Querce</h2>
                                <div class="card2" id="oak_forest">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/oak_forest.jfif" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>Il bioma della foresta può aiutarti a ottenere una spinta iniziale nel gioco, poiché puoi raccogliere molto legno e fiori. L'unico aspetto negativo di questo bioma e' che gli alberi rendono difficile individuare eventuali mob ostili.</p>
                                    </div>
                                </div>  
                            </div>
                            <div class="cover2 reveal">
                                <h2>Foresta di Betulle</h2>  
                                <div class="card2" id="birch_forest">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/birch-forest.jfif" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>I biomi della foresta di betulle sono quasi esattamente gli stessi del bioma forestale normale. La differenza più ovvia e' che gli alberi generati sono diversi. I biomi della foresta di betulle presentano betulle su tutto il paesaggio. Si generano densamente come gli alberi nel bioma forestale normale. E a differenza del bioma forestale normale, i lupi non generano qui. </p>
                                        <p>I biomi della foresta di betulle sono più rari del bioma forestale normale e di solito sono circondati da foreste normali o foreste scure. </p> 
                                    </div>
                                </div>
                            </div>
                            <div class="cover2 reveal">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                <h2>Taiga</h2>
                                <div class="card2" id="taiga">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/taiga.jfif" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>La superficie delle taighe e' costituita da praterie con numerose felci, felci alte e abeti, che formano una foresta. La vegetazione comprende anche erba, denti di leone, papaveri [solo Java Edition] e cespugli di bacche dolci, e assume una tonalità acqua. L'acqua ha un tono turchese scuro unico in Bedrock Edition.
                                            Gli unici alberi naturali nelle taighe sono gli abeti, rispetto a querce e betulle nelle foreste normali.</p>
                                    </div>
                                </div>  
                            </div>
                            <div class="cover2 reveal">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                <h2>Foresta di Querce Scure</h2>
                                <div class="card2" id="darkoak-forest">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/darkoak-forest.jpg" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>In questo bioma puoi trovare querce scure. Inoltre, qui potrai trovare anche i funghi. Dovrai stare sempre attento, i mob ostili si generano molto frequentemente qui dato il folto tetto formato dal fogliame degli alberi.</p>
                                    </div>
                                </div>  
                            </div>
                            <div class="cover2 reveal">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                <h2>Giungla</h2>
                                <div class="card2" id="giungla">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/jungle.png" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>Una giungla e' un bioma pieno di una fitta vegetazione che si genera in aree con elevati valori di umidità, spesso vicino alle foreste. Ci sono tre varietà di giungle.
                                            Qui crescono grandi querce e alberi della giungla piccoli o alti. Nel pavimento della giungla crescono cespugli di giungla fatti di foglie di quercia [solo Edizione Java] o foglie di giungla [solo Edizione Bedrock] e un singolo tronco.</p>
                                    </div>
                                </div>  
                            </div>
                            <div class="cover2 reveal">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                <h2>Savana</h2>
                                <div class="card2" id="savana">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/savana.jpg" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>Questo bioma e' pieno di risorse come alberi di acacia, querce e creature come cavalli e lama. Il paesaggio di questo bioma e' secco con erba gialla e assenza di precipitazioni. Occasionalmente, qui si genereranno dei villaggi.</p>
                                    </div>
                                </div>  
                            </div>
                            <div class="cover2 reveal">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                <h2>Foresta di Fiori</h2>
                                <div class="card2" id="flower_forest">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/flower-forest.webp" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>Questa zona e' nota per le diverse specie di fiori disponibili. Troverai anche alcune querce sparse qui intorno. In questo bioma sarà anche più frequente la generazione di api e alveari.</p>
                                    </div>
                                </div>  
                            </div>
                            <div class="cover2 reveal">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                <h2>Foresta di Ciliegi</h2>
                                <div class="card2" id="cherry_blossom">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/cherryblossom.jpg" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>Questo bioma e' una delle aggiunte più recenti a questo gioco. Il boschetto dei ciliegi e' costituito da bellissimi alberi di ciliegio in fiore. I fiori rosa sugli alberi e i petali sul terreno aggiungono valore estetico al gioco. e' anche un luogo pieno di risorse, poiché i giocatori possono utilizzare il legno di ciliegio per decorare.</p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    
                    <div class="container" id="Titolo2">    
                        
                        <div class="container__container">
                            <h2 class="Grande_Titolo" id="Pianure">Pianure</h2>
                            <div class="cover2 reveal">
                                <h2>Pianura</h2>  
                                <div class="card2" id="plains">
                                    <div class="card2__copy">
                                        <p>Le pianure sono biomi di praterie piatte. Sono tra i primi biomi aggiunti al gioco. Le pianure sono erbose e per lo più piatte. Molti blocchi d'erba sono coperti d'erba o erba alta. A volte vengono generate querce; Il 33% sono grandi. Raramente (5%), questi alberi hanno api e nidi di api.</p>
                                    </div>
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/plains.jpg" alt="" class="img_res">
                                    </div>
                                </div>
                            </div>
                            <div class="cover2 reveal">
                                <h2>Pianura di Girasoli</h2>  
                                <div class="card2" id="sunflower_plains">
                                    <div class="card2__copy">
                                        <p>Come suggerisce il nome, qui puoi trovare un’ampia quantità di girasoli. Può essere utilizzato anche per ottenere colorante giallo. Le altre caratteristiche di questo luogo sono abbastanza simili a quelle delle Pianure.</p>
                                    </div>
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/sunflower_plains.png" alt="" class="img_res">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container" id="Titolo3"> 
                        <div class="container__container">
                            <h2 class="Grande_Titolo" id="Montagne">Montagne</h2>
                            <div class="cover2 reveal">
                                <h2>Montagna</h2>  
                                <div class="card2" id="mountains">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/montagna.png" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>La montagna si suddivide in sette sottobiomi correlati che si generano in territori montuosi. Nei prati c'e' la possibilità di generare anche villaggi e nelle pendici innevate gli igloo. Alcuni di questi biomi sono gli unici luoghi in cui le capre possono generarsi nel gioco. I minerali di smeraldo possono essere trovati nei biomi di montagna.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container" id="Titolo4"> 
                        <div class="container__container">
                            <h2 class="Grande_Titolo" id="Paludi">Paludi</h2>
                            <div class="cover2 reveal">
                                <h2>Palude</h2>  
                                <div class="card2" id="swamp">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/swamp.png" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>Le paludi si trovano di solito in terreni pianeggianti vicino al livello del mare. Le paludi possono essere trovate in molte fasce di temperatura, con l'eccezione delle regioni innevate. Le paludi non confinano mai direttamente con l'oceano ma i loro corpi idrici sono spesso collegati all'oceano.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cover2 reveal">
                                <h2>Palude di Mangrovie</h2>  
                                <div class="card2" id="mangrove">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/mangrove.png" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>La palude di mangrovie e' una variante del bioma palude che si genera nelle regioni più calde, di solito accanto a giungle e deserti. Il terreno e' composto principalmente da blocchi di fango. In questa variante possono generarsi anche le rane.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container" id="Titolo5"> 
                        
                        <div class="container__container">
                            <h2 class="Grande_Titolo" id="Deserti">Deserti</h2>
                            <div class="cover2 reveal">
                                <h2>Deserto</h2>  
                                <div class="card2" id="desert">
                                    <div class="card2__copy">
                                        <p>La superficie e' interamente fatta di sabbia, con arenaria che si genera sotto la sabbia. I deserti hanno maggiori probabilità di generarsi in aree con alti valori di erosione, il che significa che il terreno in cui si generano e' generalmente piatto ma con occasionali colline. Nel deserto possono generarsi templi, villaggi e pozzi d'acqua.</p>
                                    </div>
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/deserti.png" alt="" class="img_res">
                                    </div>
                                </div>
                            </div>
                            <div class="cover2 reveal">
                                <h2>Badlands</h2>  
                                <div class="card2" id="badlands">
                                    <div class="card2__copy">
                                        <p>I biomi badlands presentano grandi montagne di strati di terracotta, in strati di vari colori; più precisamente, possono generarsi in modo naturale il rosso, l'arancione, il giallo, il bianco, il grigio chiaro, il marrone e la normale terracotta. Ad alte altitudini, lo strato più esterno di terracotta colorata e' spesso corroso nella normale terracotta, più spesso sulle cime di altopiani. A basse altitudini, la superficie del terreno e' corrosa in uno strato di sabbia rossa.</p>
                                    </div>
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/badlands.jpg" alt="" class="img_res">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container" id="Titolo6">

                        <div class="container__container">
                            <h2 class="Grande_Titolo" id="Oceani">Oceani/Fiumi</h2>
                            <div class="cover2 reveal">
                                <h2>Oceano Ghiacciato</h2>  
                                <div class="card2" id="frozen_ocean">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/oceano-ghiacciato.png" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>Questo bioma e' pieno di pezzi di ghiaccio rotti e sparsi ed il colore dell'acqua e' di colore indaco scuro. Qui troverai gli orsi polari.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cover2 reveal">
                                <h2>Oceano Freddo</h2>  
                                <div class="card2" id="cold_ocean">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/coldocean.webp" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>Questa variante presenta un'acqua di colore blu scuro e affronta le basse temperature. Negli oceani freddi troverai solamente calamari, merluzzi e salmoni.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cover2 reveal">
                                <h2>Oceano Tiepido</h2>  
                                <div class="card2" id="lukewarm_ocean">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/lukewarm-ocean.webp" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>La base di questo oceano e' fatta di ghiaia e argilla. Qui puoi trovare l'erba marina e il colore che caratterizza l'acqua di questa variante di oceano e' azzurro chiaro.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cover2 reveal">
                                <h2>Oceano Caldo</h2>  
                                <div class="card2" id="warm_ocean">
                                    <div class="card2__img">
                                        <img src="../immagini/biomi/warmocean.png" alt="" class="img_res">
                                    </div>
                                    <div class="card2__copy">
                                        <p>Il bioma dell'oceano caldo presenta un'acqua di color verde-azzurro e turchese in superficie. La particolarità di questo bioma si trova sul fondale marino che e' ricoperto da coralli di diveri colori (rosso, giallo, blu, rosa)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

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