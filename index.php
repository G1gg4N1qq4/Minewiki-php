

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>            
            MineWiki
        </title>

        <link rel="icon" type="image/x-icon" href="immagini/piccone.webp">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <!-- <script>
            document.
            function changeClass(x){

            }
        </script> -->
    </head>
    
    <body>
        <img src="immagini/background_image5.jpg" alt="immagine non disponibile" class="img_res" id="back-ground">
        
        <div class="cover">
            <div class="cover__content">


                <header class="group">
                    
                    <div class="small_header">
                        <p>
                            ㅤ
                        </p>
                    </div>
                    <div class="Global__header">
                        <ul class="Global__header__menu">
                            <li class="Global__header__menu__item" id="home">
                                <a href="index.html"> Home </a> 
                            </li>
                            <li class="Global__header__menu__item Tendina">
                                <a href="pagine/biomi.html" class="main_page_link"> 
                                    Biomi<img src="immagini/freccia sborbus.png" alt="" class="freccia_tendina" style="--i:6;">
                                </a>
                                <div class="menubiomi">
                                    <a href="pagine/biomi.html#Foreste" style="--i:1;"><span></span><img src="immagini/foresta.webp" alt="" class="img_res img__lista" style="--i:6;">Foreste</a>
                                    <a href="pagine/biomi.html#Pianure" style="--i:2;"><span></span><img src="immagini/pianura.png" alt="" class="img_res img__lista" style="--i:6;">Pianure</a>
                                    <a href="pagine/biomi.html#Montagne" style="--i:3;"><span></span><img src="immagini/mountain.png" alt="" class="img_res img__lista" style="--i:6;">Montagne</a>
                                    <a href="pagine/biomi.html#Paludi" style="--i:4;"><span></span><img src="immagini/palude.webp" alt="" class="img_res img__lista" style="--i:6;">Paludi</a>
                                    <a href="pagine/biomi.html#Deserti" style="--i:5;"><span></span><img src="immagini/deserto.png" alt="" class="img_res img__lista" style="--i:6;">Deserti</a>
                                    <a href="pagine/biomi.html#Oceani" style="--i:6;"><span></span><img src="immagini/oceani.jpg" alt="" class="img_res img__lista" style="--i:6;">Oceani/Fiumi</a>
                                </div>
                            </li>
                            
                            <li class="Global__header__menu__item Tendina">
                                <a href="pagine/craft.html" class="main_page_link"> Craft<img src="immagini/freccia sborbus.png" alt="" class="freccia_tendina" style="--i:6;">
                                </a>
                                <div class="menubiomi">
                                    <a href="pagine/craft.html#Strumenti" style="--i:1;"><span></span>
                                        <img src="immagini/spada_diamante.png" alt="" class="img_res img__lista" style="--i:6;">
                                        Strumenti</a>
                                    <a href="pagine/craft.html#Armature" style="--i:2;"><span></span>
                                        <img src="immagini/elmo_oro.png" alt="" class="img_res img__lista" style="--i:6;">
                                        Armature</a>
                                    <a href="pagine/craft.html#BlocchiCostruzione" style="--i:3;"><span></span>
                                        <img src="immagini/gate.png" alt="" class="img_res img__lista" style="--i:6;">
                                        Blocchi</a>
                                    <a href="pagine/craft.html#Lavoro" style="--i:4;"><span></span>
                                        <img src="immagini/chest.png" alt="" class="img_res img__lista" style="--i:6;">
                                        Lavoro</a>
                                </div>
                            </li>

                            <li class="Global__header__menu__item Tendina" >
                                <a href="pagine/mobs.html" class="main_page_link">Mobs<img src="immagini/freccia sborbus.png" alt="" class="freccia_tendina" style="--i:6;">
                                </a>
                                <div class="menubiomi">
                                    <a href="pagine/mobs.html#Overworld" style="--i:1;"><span></span>
                                        <img src="immagini/sheep.png" alt="" class="img_res img__lista" style="--i:6;">
                                        Overworld</a>
                                    <a href="pagine/mobs.html#Nether" style="--i:2;"><span></span>
                                        <img src="immagini/pigman.jpg" alt="" class="img_res img__lista" style="--i:6;">
                                        Nether
                                    </a>
                                    <a href="pagine/mobs.html#End" style="--i:4;"><span></span>
                                        <img src="immagini/enderman.png" alt="" class="img_res img__lista" style="--i:6;">
                                        End</a>
                                    <a href="pagine/mobs.html#Boss" style="--i:5;"><span></span>
                                        <img src="immagini/warden.png" alt="" class="img_res img__lista" style="--i:6;">
                                        Boss</a>
                                    <!-- <a href="#" style="--i:6;"><span></span><img src="immagini/creeper.png" alt="" class="img_res img__lista" style="--i:6;">Creeper</a> -->
                                </div>
                            </li>
                        </ul>

                        <div class="Global__header__line-menu"></div>
                        <h1 id="Global__header__logo">
                            MINEWIKI
                        </h1>
                        <div class="cta">
                            <div class="small_text">
                                <a href="pagine/login.php" class="button">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>    
                    
                    <div class="Global__header__icon-bar animate">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </header>

                <main>
                    <div class="hero">
                        <video autoplay muted loop class="myVideo">
                            <source src="video/video-background(1080p).mp4" type="video/mp4">
                        </video>
                        <div class="hero__container">
                            <div class="hero__content reveal">
                                <p class="intro_text">Eccoti qui!</p>
                                <p class="big_text"> Tutte le informazioni</p>
                                <p class="big_text"> su minecraft</p>
                                <p class="normal_text" id="final-text"> Nei limiti delle nostre possibilità...</p>
                                <div class="small_text"><a href="https://www.minecraft.net/it-it" class="button" id="discover_button">Discover More</a></div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="poster">
                        <div class="poster__img reveal">
                            <img src="immagini/diamante.jpg" alt="" class="img_res">
                        </div>
                        <div class="poster__content reveal">
                            <h3>MineWiki</h3>
                            <p>Una wiki semi-completa su minecraft, con testi user-friendly e contemporaneamente minecraft-like. Se vuoi delle informazioni sui Biomi, c'e' la pagina web con i principali biomi, se invece ti interessano i mobs o i crafting, abbiamo delle pagine anche per quelli!</p>
                            <a href="index.html#text_before_carousel" class="button">Altri contenuti</a>
                        </div>
                    </div>

                    <div class="bg-cover">
                        <video autoplay muted loop class="myVideo">
                            <source src="video/video_bs(1080p).mp4" type="video/mp4">
                        </video>
                        <div class="contenitore">

                            <div class="bg-cover__title reveal">
                                <h3 class="big_text">
                                    Un'avventura
                                </h3>
                            </div>
                            <div class="bg-cover__text reveal">
                                <h4 class="medium_text">Gioca in coop</h4>
                                <p> Minecraft e' una piattafroma che fa utilizzo anche di server locali e online, quindi non perdere l'occasione per andare all'avventura con i tuoi amici!</p>
                                
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="cover2 reveal">
                            <h2 class="Grande_Titolo">Home</h2>
                            <div class="card">
                                <div class="card__img">
                                    <img src="immagini/H2x1_NSwitch_Minecraft.jpg" alt="L'immagine non e' disponibile :/" class="img_res">
                                </div>
                                <div class="card__copy">  
                                    <p>
                                        Hai sentito parlare di Minecraft oppure sei un fan talmente incallito da essere arrivato fino a qui?

                                    </p>
                                    <p>
                                        Bene! questo sito e' fatto sicuramente per te. Da come avrai capito e' una pagina web informativa su tutto il mondo di minecraft.
                                    </p>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="cover2 reveal">

                                <h2>
                                    Il Gioco
                                </h2>
                                <div class="card">
                                    <div class="card__copy">
                                        <p>
                                            Minecraft e' un gioco di avventura e creatività, dove puoi esplorare, 
                                            costruire e sopravvivere in un mondo generato casualmente. Puoi giocare in 
                                            modalità sopravvivenza, dove devi procurarti le risorse, combattere i nemici e 
                                            affrontare la fame e la notte, o in modalità creativa, dove hai accesso illimitato 
                                            a tutti i materiali e puoi creare qualsiasi cosa tu possa immaginare. Puoi anche 
                                            giocare in modalità multigiocatore, dove puoi collaborare o competere con altri 
                                            giocatori online. Minecraft e' un gioco che stimola la tua fantasia, la tua 
                                            inventiva e la tua curiosità.
                                        </p>
                                    </div>

                                    <div class="card__img" id="card__img-border_left">
                                        <img src="immagini/minecraft-mod.png" alt="L'immagine non e' disponibile :(" class="img_res">
                                    </div>
                                </div>
                        </div>

                        <div class="cover2 reveal">
                            <h2>
                                La Storia
                            </h2>
                            <div class="card">
                                <div class="card__img">
                                    <img src="immagini/wallpaper_storia.jpg" alt="L'immagine non e' disponibile :(" class="img_res">
                                </div>
                                <div class="card__copy">   
                                    <p>
                                        Minecraft e' nato nel 2009, dalla mente geniale di un programmatore svedese chiamato Markus "Notch" Persson. 
                                        Inizialmente, era solo un semplice progetto personale, ma presto divenne un fenomeno globale, 
                                        grazie al passaparola e alla diffusione su internet. Il gioco si basava sul concetto di "sandbox", 
                                        ovvero un ambiente virtuale dove il giocatore ha la libertà di fare ciò che vuole, senza obiettivi o limiti prefissati. 
                                    </p> 
                                    <p>Notch aggiunse gradualmente nuove funzionalità, come i mostri, i biomi, i portali, i villaggi e i boss. Nel 2011, 
                                        il gioco fu ufficialmente rilasciato, e nel 2014, fu acquistato da Microsoft per 2,5 miliardi di dollari. Da allora, 
                                        Minecraft ha continuato a crescere e a evolversi, con nuovi aggiornamenti, modalità, piattaforme e collaborazioni. 
                                        Oggi, Minecraft e' uno dei giochi più popolari e influenti di tutti i tempi, con oltre 200 milioni di copie vendute 
                                        e 126 milioni di giocatori attivi al mese. Minecraft e' una storia di successo, di innovazione e di creatività.
                                    </p>
                                    <p>E' una storia epica, pazza e leggendaria.</p>
                                </div> 
                            </div>
                        </div>

                        <div class="cover2 reveal">
                            <h2>
                                L'obiettivo
                            </h2>
                            <div class="card">
                                <div class="card__copy">
                                    <p>
                                        Minecraft e' un gioco di creatività e sopravvivenza, in cui il giocatore può esplorare, costruire e combattere in un mondo generato casualmente. 
                                        L'obbiettivo di minecraft e' lasciato alla libera interpretazione del giocatore, che può scegliere tra diverse modalità di gioco e impostazioni di difficoltà. Tuttavia, esistono alcuni obiettivi comuni che molti giocatori si prefiggono, come:
                                        Raggiungere e sconfiggere il drago dell'End, il boss finale del gioco, che si trova in una dimensione alternativa chiamata End. Per accedere all'End, 
                                        il giocatore deve trovare e attivare un portale nascosto in una fortezza sotterranea, usando delle perle dell'End e degli occhi dell'End.
                                    </p>
                                </div>
                                <div class="card__img" id="card__img-border_left">
                                    <img src="immagini/end poster.png" alt="L'immagine non e' disponibile :(" class="img_res">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card__img">
                                    <img src="immagini/Achivement.png" alt="L'immagine non e' disponibile :(" class="img_res">
                                </div>    
                                <div class="card__copy">
                                    <p>Completare tutti i progressi, delle sfide che guidano il giocatore attraverso le varie fasi del gioco, come ottenere i primi strumenti, 
                                        fabbricare una torta, allevare degli animali, distillare delle pozioni, incantare degli oggetti e così via. I progressi sono visibili in una 
                                        schermata che mostra un albero di obiettivi collegati tra loro.
                                        Esprimere la propria creatività, costruendo delle strutture, dei meccanismi, dei mondi o delle opere d'arte personalizzate, usando i vari 
                                        blocchi, oggetti e creature che il gioco offre.
                                    </p>
                                    <p>ㅤ</p>
                                    <p>
                                        Questi sono solo alcuni esempi di obiettivi che il giocatore può avere in minecraft, ma non sono gli unici né i più importanti. Il vero 
                                        obiettivo di minecraft e' divertirsi e scoprire le infinite possibilità che il gioco offre. 
                                    </p>
                                </div>
                            </div>    
                        </div>
                        <h1 class="big_text reveal" id="text_before_carousel">Guarda altri contenuti!</h1>

                        <div class="boxsu">
                            <a href=#boxsu>
                                <img src="immagini/frecciasu.png" alt="immagine non disponibile" class="img_res">
                            </a>
                        </div>
                    </div>

                    <div class="main-carousel medium_text" data-flickity='{ "cellAlign": "center", "contain": false, "wrapAround": true, "freeScroll": false, "autoPlay": 3000, "pageDots": false, "prevNextButtons": false}'>


                        <div class="carousel-cell normal_text">
                            <div class="carousel-cell__content c1 zoom">
                                <div class="carousel-cell__content__text">
                                    <a href="https://www.minecraft.net/it-it/updates/the-wild-update"><p>Minecraft - The wild update</p></a>
                                </div>
                                <video autoplay controls muted loop class="carousel-myVideo">
                                    <source src="video/carousel-video/video-background(1080p).mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="carousel-cell normal_text">
                            <div class="carousel-cell__content c2 zoom">
                                <div class="carousel-cell__content__text">
                                    <a href="https://www.minecraft.net/it-it/updates/caves-and-cliffs"><p>Minecraft - Caves & Cliffs</p></a>
                                </div>
                                <video autoplay controls muted loop class="carousel-myVideo">
                                    <source src="video/carousel-video/Y2meta.app-Caves & Cliffs Update_ Part I – Official Trailer-(1080p).mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="carousel-cell normal_text">
                            <div class="carousel-cell__content c3 zoom">
                                <div class="carousel-cell__content__text">
                                    <a href="https://www.minecraft.net/en-us/article/introducing-new-default-skins"><p>Minecraft - Introducing New Default Skins!</p></a>
                                </div>
                                <video autoplay controls muted loop class="carousel-myVideo">
                                    <source src="video/carousel-video/Y2meta.app-Introducing New Default Skins!-(1080p).mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="carousel-cell normal_text">
                            <div class="carousel-cell__content c4 zoom">
                                <div class="carousel-cell__content__text">
                                    <a href="https://www.youtube.com/watch?v=iM9KtHaDcUg"><p>Minecraft Live 2022 - A Warden’s Song</p></a>
                                </div>
                                <video autoplay controls muted loop class="carousel-myVideo">
                                    <source src="video/carousel-video/Y2meta.app-Minecraft Live 2022_ A Warden’s Song-(1080p).mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="carousel-cell normal_text">
                            <div class="carousel-cell__content c5 zoom">
                                <div class="carousel-cell__content__text">
                                    <a href="https://www.youtube.com/watch?v=iM9KtHaDcUg"><p>Minecraft Live 2022 - Announcement Trailer</p></a>
                                </div>
                                <video autoplay controls muted loop class="carousel-myVideo">
                                    <source src="video/carousel-video/Y2meta.app-Minecraft Live 2022_ Announcement Trailer-(1080p).mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="carousel-cell normal_text">
                            <div class="carousel-cell__content c6 zoom">
                                <div class="carousel-cell__content__text">
                                    <a href="https://www.youtube.com/watch?v=DnY5xz11lR0"><p>Minecraft Live is back for 2023!</p></a>
                                </div>
                                <video autoplay controls muted loop class="carousel-myVideo">
                                    <source src="video/carousel-video/Y2meta.app-Minecraft Live is back for 2023!-(1080p).mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="carousel-cell normal_text">
                            <div class="carousel-cell__content c7 zoom">
                                <div class="carousel-cell__content__text">
                                    <a href="https://www.minecraft.net/en-us/updates/trails-and-tales"><p>Minecraft Nintendo - Trails & Tales Update</p></a>
                                </div>
                                <video autoplay controls muted loop class="carousel-myVideo">
                                    <source src="video/carousel-video/Y2meta.app-Minecraft Trails & Tales Update - Launch Trailer - Nintendo Switch-(1080p).mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="carousel-cell normal_text">
                            <div class="carousel-cell__content c8 zoom">
                                <div class="carousel-cell__content__text">
                                    <a href="https://www.minecraft.net/it-it/updates/nether"><p>Minecraft Nintendo - Nether Update Trailer</p></a>
                                </div>
                                <video autoplay controls muted loop class="carousel-myVideo">
                                    <source src="video/carousel-video/Y2meta.app-Minecraft_ Nether Update Trailer - Nintendo Switch-(1080p).mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
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
                                <img src="immagini/thecock.jfif" alt="">
                            </a>
                        </div>
                        <div class="footer__column ">
                            
                            <h3 >
                                Email 2
                            </h3>
                            <p >abraham.larosa@liceobanfi.eu</p>
                            <p>
                                - Prof la prego ci metta 10. 🗿🍷
                            </p>
                            <a href="https://github.com/G1gg4N1qq4">
                                <img src="immagini/giganigga.jfif" alt="">
                            </a>
                        </div>

                    </div>
                </footer>
            </div>
            
        </div>
 
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

                // tasto "contatti scrolldown"
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
    </body>
</html>