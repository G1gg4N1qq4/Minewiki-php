<?php 

    session_start();

    if(isset($_POST['user'])){$user = $_POST['user'];} else{$user = ""; }
    if(isset($_POST['pass'])){$pass = $_POST['pass'];} else{$pass = ""; }
    $nomepagina = __FILE__;
    $nomepagina = substr($nomepagina, -4,5)
?>

<div class="group">
                
    <div class="small_header">
        <p>
            ㅤ
        </p>
    </div>
    <div class="Global__header">
        <ul class="Global__header__menu">
            <li class="Global__header__menu__item">
                <a href="../index.php"> Home </a> 
            </li>
            <li class="Global__header__menu__item Tendina">
                <a href="../pagine/biomi.php" class="main_page_link"> 
                    Biomi<img src="../immagini/freccia sborbus.png" alt="" class="freccia_tendina" style="--i:6;">
                </a>
                <div class="menubiomi">
                    <!-- <a href="../pagine/biomi.php#container" style="--i:1;"><span></span><img src="../immagini/foresta.webp" alt="" class="img_res img__lista" style="--i:6;">Foreste</a> -->
                    <a href="../pagine/biomi.php#Foreste" style="--i:1;"><span></span><img src="../immagini/foresta.webp" alt="" class="img_res img__lista" style="--i:6;">Foreste</a>
                    <a href="../pagine/biomi.php#Pianure" style="--i:2;"><span></span><img src="../immagini/pianura.png" alt="" class="img_res img__lista" style="--i:6;">Pianure</a>
                    <a href="../pagine/biomi.php#Montagne" style="--i:3;"><span></span><img src="../immagini/mountain.png" alt="" class="img_res img__lista" style="--i:6;">Montagne</a>
                    <a href="../pagine/biomi.php#Paludi" style="--i:4;"><span></span><img src="../immagini/palude.webp" alt="" class="img_res img__lista" style="--i:6;">Paludi</a>
                    <a href="../pagine/biomi.php#Deserti" style="--i:5;"><span></span><img src="../immagini/deserto.png" alt="" class="img_res img__lista" style="--i:6;">Deserti</a>
                    <a href="../pagine/biomi.php#Oceani" style="--i:6;"><span></span><img src="../immagini/oceani.jpg" alt="" class="img_res img__lista" style="--i:6;">Oceani/Fiumi</a>
                </div>
            </li>
            
            <li class="Global__header__menu__item Tendina">
                <a href="../pagine/craft.php" class="main_page_link"> Craft<img src="../immagini/freccia sborbus.png" alt="" class="freccia_tendina" style="--i:6;">
                </a>
                <div class="menubiomi">
                    <a href="../pagine/craft.php#Strumenti" style="--i:1;"><span></span>
                        <img src="../immagini/spada_diamante.png" alt="" class="img_res img__lista" style="--i:6;">
                        Strumenti</a>
                    <a href="../pagine/craft.php#Armature" style="--i:2;"><span></span>
                        <img src="../immagini/elmo_oro.png" alt="" class="img_res img__lista" style="--i:6;">
                        Armature</a>
                    <a href="../pagine/craft.php#BlocchiCostruzione" style="--i:3;"><span></span>
                        <img src="../immagini/gate.png" alt="" class="img_res img__lista" style="--i:6;">
                        Blocchi</a>
                    <a href="../pagine/craft.php#Lavoro" style="--i:4;"><span></span>
                        <img src="../immagini/chest.png" alt="" class="img_res img__lista" style="--i:6;">
                        Lavoro</a>
                </div>
            </li>

            <li class="Global__header__menu__item Tendina" >
                <a href="../pagine/mobs.php" class="main_page_link">Mobs<img src="../immagini/freccia sborbus.png" alt="" class="freccia_tendina" style="--i:6;">
                </a>
                <div class="menubiomi">
                    <a href="../pagine/mobs.php#Overworld" style="--i:1;"><span></span><img src="../immagini/sheep.png" alt="" class="img_res img__lista" style="--i:6;">Overworld</a>
                    <a href="../pagine/mobs.php#Nether" style="--i:2;"><span></span>
                        <img src="../immagini/pigman.jpg" alt="" class="img_res img__lista" style="--i:6;">
                        Nether
                    </a>                                  
                    <a href="../pagine/mobs.php#End" style="--i:4;"><span></span><img src="../immagini/enderman.png" alt="" class="img_res img__lista" style="--i:6;">End</a>
                    <a href="../pagine/mobs.php#Boss" style="--i:5;"><span></span><img src="../immagini/warden.png" alt="" class="img_res img__lista" style="--i:6;">Boss</a>
                </div>
            </li>
            <?php
                if(isset($_SESSION["user"])){
                        echo '<li class="Global__header__menu__item">
                        <a href="../index.php"> Mods </a> 
                    </li>';
                }
            ?>
        </ul>

        <div class="Global__header__line-menu"></div>
        <h1 id="Global__header__logo">
            <form action="" method="get">
                <input type="search" name="Seaarch" id="" value='<?php echo "<p>Cerca su ".$nomepagina." </p>"?>'>
            </form>
        </h1>
        <?php
                            
            // echo "<p>ciaooooo".$_SESSION["user"]."</p>";
            if(isset($_SESSION["user"])){
                echo "<ul class='UserInterface'>
                <li class='UserInterface__menu__item' id='home'>
                    <a href='../index.php'> MyMods </a> 
                </li>
                <li class='UserInterface__menu__item' id='home'>
                    <a href='../index.php'> MyData </a> 
                </li>
                <div class='cta'>
                    <div class='small_text'>
                        <a href='logout.php' class='button'>Logout</a>
                    </div>
                </div></ul>";

            }
            else{
                echo '<div class="cta">
                        <div class="small_text">
                            <a href="login.php" class="button">Login</a>
                        </div>
                    </div>';
            }
                    
        ?>
    </div>    

    <div class="Global__header__icon-bar animate">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>