

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
                    <a href="bioma.php?cod_bioma=1" style="--i:1;"><span></span><img src="../immagini/foresta.webp" alt="" class="img_res img__lista" style="--i:6;">Foreste</a>
                    <a href="bioma.php?cod_bioma=2" style="--i:2;"><span></span><img src="../immagini/pianura.png" alt="" class="img_res img__lista" style="--i:6;">Pianure</a>
                    <a href="bioma.php?cod_bioma=3" style="--i:3;"><span></span><img src="../immagini/mountain.png" alt="" class="img_res img__lista" style="--i:6;">Montagne</a>
                    <a href="bioma.php?cod_bioma=4" style="--i:4;"><span></span><img src="../immagini/palude.webp" alt="" class="img_res img__lista" style="--i:6;">Paludi</a>
                    <a href="bioma.php?cod_bioma=5" style="--i:5;"><span></span><img src="../immagini/deserto.png" alt="" class="img_res img__lista" style="--i:6;">Deserti</a>
                    <a href="bioma.php?cod_bioma=6" style="--i:6;"><span></span><img src="../immagini/oceani.jpg" alt="" class="img_res img__lista" style="--i:6;">Oceani/Fiumi</a>
                </div>
            </li>
            
            <li class="Global__header__menu__item Tendina">
                <a href="../pagine/craft.php" class="main_page_link"> Craft<img src="../immagini/freccia sborbus.png" alt="" class="freccia_tendina" style="--i:6;">
                </a>
                <div class="menubiomi">
                    <a href="crafts.php?cod_craft=1" style="--i:1;"><span></span><img src="../immagini/spada_diamante.png" alt="" class="img_res img__lista" style="--i:6;">Strumenti</a>
                    <a href="crafts.php?cod_craft=2" style="--i:2;"><span></span><img src="../immagini/elmo_oro.png" alt="" class="img_res img__lista" style="--i:6;">Armature</a>
                    <a href="crafts.php?cod_craft=3" style="--i:3;"><span></span><img src="../immagini/gate.png" alt="" class="img_res img__lista" style="--i:6;">Blocchi</a>
                    <a href="crafts.php?cod_craft=4" style="--i:4;"><span></span><img src="../immagini/chest.png" alt="" class="img_res img__lista" style="--i:6;">Lavoro</a>
                </div>
            </li>

            <li class="Global__header__menu__item" >
                <a href="../pagine/mobs.php" class="main_page_link">Mobs</a>
                <!-- <div class="menubiomi">
                    <a href="mob.php?cod_mostro=1" style="--i:1;"><span></span><img src="../immagini/sheep.png" alt="" class="img_res img__lista" style="--i:6;">Overworld</a>
                    <a href="mob.php?cod_mostro=2" style="--i:2;"><span></span><img src="../immagini/pigman.jpg" alt="" class="img_res img__lista" style="--i:6;">Nether</a>                                  
                    <a href="mob.php?cod_mostro=3" style="--i:4;"><span></span><img src="../immagini/enderman.png" alt="" class="img_res img__lista" style="--i:6;">End</a>
                    <a href="mob.php?cod_mostro=4" style="--i:5;"><span></span><img src="../immagini/warden.png" alt="" class="img_res img__lista" style="--i:6;">Boss</a>
                </div> -->
            </li>
            <?php
                if(isset($_SESSION["user"])){
                        echo '<li class="Global__header__menu__item">
                        <a href="mods.php"> Mods </a> 
                    </li>';
                }
            ?>
        </ul>

        <div class="Global__header__line-menu"></div>
        <?php
            if(basename($_SERVER['PHP_SELF']) == "mobs.php"){

                echo '<h1 id="Global__header__logo">
                        <form action="" method="get">
                            <input type="search" name="Search" id="" value placeholder="Cerca su mobs">
                        </form>
                </h1>';
                if(isset($_GET["Search"])){

                    $ricerca = $_GET["Search"];
                }
            }
            elseif(basename($_SERVER['PHP_SELF']) == "mods.php"){
                echo '<h1 id="Global__header__logo">
                        <form action="" method="get">
                            <input type="search" name="Search" id="" value placeholder="Cerca su mods">
                        </form>
                </h1>';
                if(isset($_GET["Search"])){

                    $ricerca = $_GET["Search"];
                }
            }
            else{
                echo'
                <h1 id="Global__header__logo">
                            MINEWIKI
                        </h1>';
            }
        ?>
        <!-- <h1 id="Global__header__logo">
            <form action="" method="get">
                <input type="search" name="Search" id="" value=''>
            </form>
        </h1> -->
        <?php
                            
            // echo "<p>ciaooooo".$_SESSION["user"]."</p>";
            if(isset($_SESSION["user"])){
                echo "<ul class='UserInterface'>
                <li class='UserInterface__menu__item' id='home'>
                    <a href='mymods.php'> MyMods </a> 
                </li>
                <li class='UserInterface__menu__item' id='home'>
                    <a href='mydata.php' class='profile_img'><img src='../immagini/profile_user_account_icon_190938.png' alt=''></a>
                </li>
                <div class='cta'>
                    <div class='small_text'>
                        <a href='logout.php' class='button'>Logout</a>
                    </div>
                </div></ul>";

            }
            else{
                echo 
                '<ul class="UserInterface">
                <div class="cta">
                        <div class="small_text">
                            <a href="login.php" class="button" >Login</a>
                        </div>
                    </div></ul>';
            }
            
        ?>

    </div>    

    <div class="Global__header__icon-bar animate">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>