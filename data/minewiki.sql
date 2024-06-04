-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.28-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database minewiki
CREATE DATABASE IF NOT EXISTS `minewiki` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `minewiki`;

-- Dump della struttura di tabella minewiki.bioma
CREATE TABLE IF NOT EXISTS `bioma` (
  `cod_categoria` int(11) DEFAULT NULL,
  `bioma` char(50) DEFAULT NULL,
  `descrizione` longtext DEFAULT NULL,
  `immagine` char(50) DEFAULT NULL,
  `style` char(50) DEFAULT NULL,
  KEY `cod_categoria` (`cod_categoria`) USING BTREE,
  CONSTRAINT `FK_biomi` FOREIGN KEY (`cod_categoria`) REFERENCES `biomi` (`cod_bioma`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dump dei dati della tabella minewiki.bioma: ~20 rows (circa)
DELETE FROM `bioma`;
INSERT INTO `bioma` (`cod_categoria`, `bioma`, `descrizione`, `immagine`, `style`) VALUES
	(1, 'Foresta  di Querce', 'Il bioma della foresta può aiutarti a ottenere una spinta iniziale nel gioco, poiché puoi raccogliere molto legno e fiori. L\'unico aspetto negativo di questo bioma e\' che gli alberi rendono difficile individuare eventuali mob ostili.', 'oak_forest.jfif', 'oak_forest'),
	(1, 'Foresta di Betulle', 'I biomi della foresta di betulle sono quasi esattamente gli stessi del bioma forestale normale. La differenza più ovvia e\' che gli alberi generati sono diversi. I biomi della foresta di betulle presentano betulle su tutto il paesaggio. Si generano densamente come gli alberi nel bioma forestale normale. E a differenza del bioma forestale normale, i lupi non generano qui.', 'birch-forest.jfif', 'birch_forest'),
	(1, 'Taiga', 'La superficie delle taighe e\' costituita da praterie con numerose felci, felci alte e abeti, che formano una foresta. La vegetazione comprende anche erba, denti di leone, papaveri [solo Java Edition] e cespugli di bacche dolci, e assume una tonalità acqua. L\'acqua ha un tono turchese scuro unico in Bedrock Edition. Gli unici alberi naturali nelle taighe sono gli abeti, rispetto a querce e betulle nelle foreste normali.', 'taiga.jfif', 'taiga'),
	(1, 'Foresta di Querce Scure', 'In questo bioma puoi trovare querce scure. Inoltre, qui potrai trovare anche i funghi. Dovrai stare sempre attento, i mob ostili si generano molto frequentemente qui dato il folto tetto formato dal fogliame degli alberi.', 'darkoak-forest.jpg', 'darkoak-forest'),
	(1, 'Giungla', 'Una giungla e\' un bioma pieno di una fitta vegetazione che si genera in aree con elevati valori di umidità, spesso vicino alle foreste. Ci sono tre varietà di giungle. Qui crescono grandi querce e alberi della giungla piccoli o alti. Nel pavimento della giungla crescono cespugli di giungla fatti di foglie di quercia [solo Edizione Java] o foglie di giungla [solo Edizione Bedrock] e un singolo tronco.', 'jungle.png', 'giungla'),
	(1, 'Savana', 'Questo bioma e\' pieno di risorse come alberi di acacia, querce e creature come cavalli e lama. Il paesaggio di questo bioma e\' secco con erba gialla e assenza di precipitazioni. Occasionalmente, qui si genereranno dei villaggi.', 'savana.jpg', 'savana'),
	(1, 'Foresta di Fiori', 'Questa zona e\' nota per le diverse specie di fiori disponibili. Troverai anche alcune querce sparse qui intorno. In questo bioma sarà anche più frequente la generazione di api e alveari.', 'flower-forest.webp', 'flower_forest'),
	(1, 'Foresta di Ciliegi', 'Questo bioma e\' una delle aggiunte più recenti a questo gioco. Il boschetto dei ciliegi e\' costituito da bellissimi alberi di ciliegio in fiore. I fiori rosa sugli alberi e i petali sul terreno aggiungono valore estetico al gioco. e\' anche un luogo pieno di risorse, poiché i giocatori possono utilizzare il legno di ciliegio per decorare.', 'cherryblossom.jpg', 'cherry_blossom'),
	(2, 'Pianura', 'Le pianure sono biomi di praterie piatte. Sono tra i primi biomi aggiunti al gioco. Le pianure sono erbose e per lo più piatte. Molti blocchi d\'erba sono coperti d\'erba o erba alta. A volte vengono generate querce; Il 33% sono grandi. Raramente (5%), questi alberi hanno api e nidi di api.', 'plains.jpg', 'plains'),
	(2, 'Pianura di Girasoli', 'Come suggerisce il nome, qui puoi trovare un’ampia quantità di girasoli. Può essere utilizzato anche per ottenere colorante giallo. Le altre caratteristiche di questo luogo sono abbastanza simili a quelle delle Pianure.', 'sunflower_plains.png', 'sunflower_plains'),
	(3, 'Montagna', 'La montagna si suddivide in sette sottobiomi correlati che si generano in territori montuosi. Nei prati c\'e\' la possibilità di generare anche villaggi e nelle pendici innevate gli igloo. Alcuni di questi biomi sono gli unici luoghi in cui le capre possono generarsi nel gioco. I minerali di smeraldo possono essere trovati nei biomi di montagna.', 'montagna.png', 'mountains'),
	(4, 'Palude', 'Le paludi si trovano di solito in terreni pianeggianti vicino al livello del mare. Le paludi possono essere trovate in molte fasce di temperatura, con l\'eccezione delle regioni innevate. Le paludi non confinano mai direttamente con l\'oceano ma i loro corpi idrici sono spesso collegati all\'oceano.', 'swamp.png', 'swamp'),
	(4, 'Palude di Mangrovie', 'La palude di mangrovie e\' una variante del bioma palude che si genera nelle regioni più calde, di solito accanto a giungle e deserti. Il terreno e\' composto principalmente da blocchi di fango. In questa variante possono generarsi anche le rane.', 'mangrove.png', 'mangrove'),
	(5, 'Deserto', 'La superficie e\' interamente fatta di sabbia, con arenaria che si genera sotto la sabbia. I deserti hanno maggiori probabilità di generarsi in aree con alti valori di erosione, il che significa che il terreno in cui si generano e\' generalmente piatto ma con occasionali colline. Nel deserto possono generarsi templi, villaggi e pozzi d\'acqua.', 'deserti.png', 'desert'),
	(5, 'Badlands', 'I biomi badlands presentano grandi montagne di strati di terracotta, in strati di vari colori; più precisamente, possono generarsi in modo naturale il rosso, l\'arancione, il giallo, il bianco, il grigio chiaro, il marrone e la normale terracotta. Ad alte altitudini, lo strato più esterno di terracotta colorata e\' spesso corroso nella normale terracotta, più spesso sulle cime di altopiani. A basse altitudini, la superficie del terreno e\' corrosa in uno strato di sabbia rossa.', 'badlands.jpg', 'badlands'),
	(6, 'Oceano Ghiacciato', 'Questo bioma e\' pieno di pezzi di ghiaccio rotti e sparsi ed il colore dell\'acqua e\' di colore indaco scuro. Qui troverai gli orsi polari.', 'oceano-ghiacciato.png', 'frozen_ocean'),
	(6, 'Oceano Freddo', 'Questa variante presenta un\'acqua di colore blu scuro e affronta le basse temperature. Negli oceani freddi troverai solamente calamari, merluzzi e salmoni.', 'coldocean.webp', 'cold_ocean'),
	(6, 'Oceano Tiepido', 'La base di questo oceano e\' fatta di ghiaia e argilla. Qui puoi trovare l\'erba marina e il colore che caratterizza l\'acqua di questa variante di oceano e\' azzurro chiaro.', 'lukewarm-ocean.webp', 'lukewarm_ocean'),
	(6, 'Oceano Caldo', 'Il bioma dell\'oceano caldo presenta un\'acqua di color verde-azzurro e turchese in superficie. La particolarità di questo bioma si trova sul fondale marino che e\' ricoperto da coralli di diveri colori (rosso, giallo, blu, rosa)', 'warmocean.png', 'warm_ocean');

-- Dump della struttura di tabella minewiki.biomi
CREATE TABLE IF NOT EXISTS `biomi` (
  `cod_bioma` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` char(50) NOT NULL,
  `background` char(50) NOT NULL,
  PRIMARY KEY (`cod_bioma`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dump dei dati della tabella minewiki.biomi: ~6 rows (circa)
DELETE FROM `biomi`;
INSERT INTO `biomi` (`cod_bioma`, `categoria`, `background`) VALUES
	(1, 'Foreste', 'background_forest.png'),
	(2, 'Pianure', 'background_plains.png'),
	(3, 'Montagne', 'background_mountain.png'),
	(4, 'Paludi', 'background_swamp.png'),
	(5, 'Deserti', 'background_desert.png'),
	(6, 'Oceani/Fiumi', 'background_ocean.png');

-- Dump della struttura di tabella minewiki.craft
CREATE TABLE IF NOT EXISTS `craft` (
  `cod_craft` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` char(50) NOT NULL,
  PRIMARY KEY (`cod_craft`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dump dei dati della tabella minewiki.craft: ~4 rows (circa)
DELETE FROM `craft`;
INSERT INTO `craft` (`cod_craft`, `categoria`) VALUES
	(1, 'Strumenti'),
	(2, 'Armature'),
	(3, 'Blocchi da costruzione'),
	(4, 'Lavoro');

-- Dump della struttura di tabella minewiki.crafting
CREATE TABLE IF NOT EXISTS `crafting` (
  `cod_crafting` int(11) DEFAULT NULL,
  `craft` char(50) DEFAULT NULL,
  `materiali` longtext DEFAULT NULL,
  `immagini` char(50) DEFAULT NULL,
  KEY `cod_crafting` (`cod_crafting`),
  CONSTRAINT `FK_craft` FOREIGN KEY (`cod_crafting`) REFERENCES `craft` (`cod_craft`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dump dei dati della tabella minewiki.crafting: ~17 rows (circa)
DELETE FROM `crafting`;
INSERT INTO `crafting` (`cod_crafting`, `craft`, `materiali`, `immagini`) VALUES
	(1, 'Spada', '1 Bastoncino di Legno e 2 Assi di legno/Pietrisco /Lingotti di ferro/Lingotti d\'oro/Diamanti', 'crafting_spada.jpg'),
	(1, 'Piccone', '2 Bastoncini di Legno e 3 Assi di legno/Pietrisco /Lingotti di ferro/Lingotti d\'oro/Diamanti', 'crafting_piccone.jpeg'),
	(1, 'Ascia', '2 Bastoncini di Legno e 3 Assi di legno/Pietrisco /Lingotti di ferro/Lingotti d\'oro/Diamanti', 'crafting-axe.gif'),
	(1, 'Pala', '2 Bastoncini di Legno e 1 Asse di legno/Pietrisco/Lingotto di ferro/Lingotto d\'oro/Diamante', 'crafting-pala.gif'),
	(2, 'Elmo', '5 Pezzi di cuoio/Lingotti di ferro/Lingotti d\'oro/Diamanti', 'crafting-elmo.gif'),
	(2, 'Corazza', '8 Pezzi di cuoio/Lingotti di ferro/Lingotti d\'oro/Diamanti', 'crafting-corpetto.gif'),
	(2, 'Gambali', '7 Pezzi di cuoio/Lingotti di ferro/Lingotti d\'oro/Diamanti', 'crafting-leggins.gif'),
	(2, 'Stivali', '4 Pezzi di cuoio/Lingotti di ferro/Lingotti d\'oro/Diamanti', 'crafting-stivali.gif'),
	(3, 'Porte', '6 Assi di Legno/Lingotti di ferro', 'crafting-door.gif'),
	(3, 'Polvere di Calcestruzzo', '4 Blocchi di ghiaia, 4 Blocchi di sabbia e 1 Colorante', 'crafting-concrete_powder.png'),
	(3, 'Botole', '6 Assi di legno/Lingotti di Ferro', 'crafting-trapdoor.png'),
	(3, 'Recinto', '2 Bastoncini di legno e 4 Assi di legno', 'crafting-fence.png'),
	(3, 'Cancello', '4 Bastoncini di legno e 2 Assi di legno', 'crafting-gate.png'),
	(4, 'Crafting Table', '4 Assi di legno', 'crafting-crafting_table.png'),
	(4, 'Fornace', '8 Blocchi di pietrisco', 'crafting-fornace.gif'),
	(4, 'Cassa', '8 Assi di legno', 'crafting-chest.webp'),
	(4, 'Enchanting Table', '4 Blocchi di ossidiana, 2 Diamanti e 1 Libro', 'crafting-enchanting_table.webp');

-- Dump della struttura di tabella minewiki.mob
CREATE TABLE IF NOT EXISTS `mob` (
  `cod_mostro` int(11) NOT NULL AUTO_INCREMENT,
  `cod_mobs` int(11) DEFAULT NULL,
  `nome` char(50) DEFAULT NULL,
  `descrizione` longtext DEFAULT NULL,
  `immagine` char(50) DEFAULT NULL,
  `copertina` char(50) DEFAULT NULL,
  `style` char(50) DEFAULT NULL,
  PRIMARY KEY (`cod_mostro`),
  KEY `cod_mobs` (`cod_mobs`),
  CONSTRAINT `FK_mobs` FOREIGN KEY (`cod_mobs`) REFERENCES `mobs` (`cod_mob`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dump dei dati della tabella minewiki.mob: ~15 rows (circa)
DELETE FROM `mob`;
INSERT INTO `mob` (`cod_mostro`, `cod_mobs`, `nome`, `descrizione`, `immagine`, `copertina`, `style`) VALUES
	(1, 1, 'Mucca', 'La mucca e\' un animale che può essere trovato in quasi tutti i biomi (quelli più comuni sono le foreste e le pianure). Le mucche forniscono risorse importanti per il giocatore, come carne e pelle, utilizzabile per creare libri e cornici. Dalla mucca si può ottenere il latte. Questo può essere utilizzato per craftare torte e per rimuovere tutti gli effetti al giocatore. Per far accoppiare le mucche bisogna utilizzare il grano.', 'mucca.avif', 'cow.png', 'cow'),
	(2, 1, 'Tartaruga', 'La tartaruga e\' un mob passivo in Minecraft. E\' l\'unica fonte per creare una pozione specifica. Le tartarughe vengono utilizzate principalmente per creare pozioni. Quando muoiono lasciano cadere i loro gusci che possono essere usati per creare la pozione del Signore delle Tartarughe .', 'tartaruga.webp', 'turtle.png', 'turtle'),
	(3, 1, 'Gatto', 'I gatti sono un mob utile da avere in giro, sono noti per tenere lontani i creeper. I gatti possono anche essere addomesticati e, come i lupi addomesticati, puoi comandare loro di seguirti o di restare fermi. Ma a differenza dei lupi, i gatti possono essere di vari colori.', 'gatto.avif', 'cat.jpg', 'cat'),
	(4, 1, 'Volpe', 'Le volpi sono un ottimo mob da avere se vuoi essere sorpreso dagli oggetti. La volpe lascerà cadere qualunque oggetto abbia in mano se ci sono tre o quattro cespugli di bacche entro un raggio di sedici isolati da essi. Le volpi sono una delle poche creature notturne e sono note per andare nei villaggi di notte e uccidere i polli. Puoi guadagnare la loro fiducia e, così facendo, attaccheranno alcuni mob che ti feriscono.', 'volpe.jpg', 'fox.jpg', 'fox'),
	(5, 1, 'Zombie', 'Lo zombie e\' un mostro ostile che si genera di notte o in aree non illuminate e brucia fino alla morte alla luce del sole. Gli zombie sono i mob più facili da affrontare poiche\' non hanno abilità speciali e si muovono abbastanza lentamente. Sembrano simili al modello di giocatore predefinito.', 'zombi.jpg', 'zombie.png', 'zombie'),
	(6, 2, 'Zombie Pigman', 'I pigman sono una variante non-morta dei piglin e dei piglin bruti che abitano nel Nether. Un pigman diventa ostile quando lui, o un altro pigman nelle vicinanze viene colpito. I pigman possono generarsi nel Nether, nei portali del Nether o dai maiali colpiti da un fulmine.', 'pigman_mobs.png', 'pigman.png', 'pigman'),
	(8, 2, 'Blaze', 'I Blaze sono mob volanti che si trovano solo nel Nether. Sono essenziali perche\' sono l\'unica fonte di Blaze Rods che servono per trovare il portale dell\'end. Non appena un Blaze ti vedrà, inizierà ad attaccarti e lancerà tre palle di fuoco verso di te.', 'blaze.png', 'blaze.png', 'blaze'),
	(9, 2, 'Scheletro Wither', 'Lo scheletro wither attacca con la spada e può forse essere scambiato per uno scheletro più standard che scivola e cade in una pozza di inchiostro. Gli scheletri wither sono anche leggermente più alti di te o di uno scheletro normale. Se vieni colpito da uno di loro, perderai lentamente la tua salute a causa dell\'effetto "wither". Gli scheletri wither, quando muoiono, hanno una piccola probabilità di lasciar cadere la loro testa, utile per far generare il Wither.', 'witherskeleton.png', 'wither-skeleton.png', 'wither_skeleton'),
	(10, 2, 'Cubo di Magma', 'I Cubi di Magma sono essenziali perche\' sono gli unici mob che rilasciano Magma Cream nel gioco (la Magma Cream serve per fare le pozioni di resistenza al fuoco). E se un cubo di magma più piccolo viene mangiato da una rana, verrà trasformato in una Froglight . Quando i cubi di magma vengono inizialmente generati, hanno una forma grande, poi dopo alcuni attacchi, saranno di forma media e, se continui ad attaccare, si trasformeranno in una forma più piccola fino a morire definitivamente.', 'magmacube.png', 'magma-cube.png', 'magma_cube'),
	(11, 3, 'Enderman', 'Gli Enderman sono mob che possono sopravvivere al sole, sono noti per teletrasportarsi in giro. Puoi provocare un Enderman guardandolo direttamente negli occhi che verrà ad attaccarti. Gli Enderman fanno molto danno ma non possono toccare l\'acqua, altrimenti prendono danno.', 'enderman_mobs.png', 'enderman.png', 'enderman'),
	(12, 3, 'Endermite', 'Endermite e\' un piccolo mob ostile senza alcuno scopo significativo nel gioco se non quello di cercare di ucciderti.\r\nGli Endermite hanno una piccola possibilità di generarsi ogni qualvolta che un giocatore lancia una Perla di Ender.', 'endermite.png', 'endermite.png', 'endermite'),
	(13, 3, 'Shulker', 'Gli shulker sono un mob ostile che si genera in una scatola. Gli Shulker sono l\'unica fonte di Conchiglie Shulker, che possono essere utilizzate per creare Scatole Shulker. Gli shulker non infliggono troppi danni, ma i loro proiettili seguono i giocatori e, quando colpiti, subiscono la levitazione per 10 secondi. I giocatori possono distruggere i proiettili sparandogli con una freccia o bloccandoli con uno scudo. Gli Shulker si generano solamente nelle città dell\'End.', 'shulker.png', 'shulker.png', 'shulker'),
	(14, 4, 'Wither', 'Per generare il Wither, dovrai fare un viaggio nel Nether. Mentre sei lì, raccogli 4 Soul Sand per costruire il corpo del boss. Questi materiale dovrebbe essere abbondante in tutto il Nether e quindi non difficile da trovare. Il materiale più difficile da raccogliere sono le teste di Wither Skeleton, di cui te ne serviranno 3. Per ottenere i teschi, dovrai sconfiggere i Wither Skeletons, che si generano esclusivamente nelle Fortezze del Nether.', 'wither.jpg', 'wither.png', 'wither'),
	(15, 4, 'Warden', 'Il Warden e\' uno dei mob più recenti del gioco. Apparendo come una mucca eretta e dai colori strani, il Warden e\' in realtà un mob ostile che e\' cieco e cerca il giocatore rilevando rumori e vibrazioni dal giocatore che si muove o esegue azioni. Il Warden può essere trovato nelle Grotte Oscure Profonde, facili da individuare grazie all\'abbondanza del nuovo blocco, Sculk. Le Grotte Oscure e Profonde appaiono ai livelli più bassi della generazione del mondo, appena pochi livelli sopra Bedrock.', 'warden_mobs.jpg', 'enderdragon.png', 'ender_dragon'),
	(16, 4, 'Drago dell\'End', 'Lo scontro con il Drago dell\'End e\' considerata la fase finale del gioco perche\' dopo aver ucciso il drago, verrai accolto con un testo speciale sullo schermo. Il drago dell\'End e\' un mob che può generarsi solo in un bioma di Minecraft. La dimensione dell\'End.', 'enderdragon.png', 'warden.png', 'warden');

-- Dump della struttura di tabella minewiki.mobs
CREATE TABLE IF NOT EXISTS `mobs` (
  `cod_mob` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` char(50) NOT NULL,
  `background` char(50) NOT NULL,
  PRIMARY KEY (`cod_mob`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dump dei dati della tabella minewiki.mobs: ~4 rows (circa)
DELETE FROM `mobs`;
INSERT INTO `mobs` (`cod_mob`, `categoria`, `background`) VALUES
	(1, 'Overworld', 'background_overworld.png'),
	(2, 'Nether', 'background_nether.png'),
	(3, 'End', 'background_end.png'),
	(4, 'Boss', 'background_boss.png');

-- Dump della struttura di tabella minewiki.mods
CREATE TABLE IF NOT EXISTS `mods` (
  `cod_mod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(50) DEFAULT NULL,
  `username_utente` char(20) DEFAULT NULL,
  `descrizione_txt` longtext NOT NULL DEFAULT '',
  `immagine` char(50) DEFAULT NULL,
  `link` char(50) DEFAULT NULL,
  PRIMARY KEY (`cod_mod`) USING BTREE,
  KEY `FK_libri_utenti` (`username_utente`),
  CONSTRAINT `FK_libri_utenti` FOREIGN KEY (`username_utente`) REFERENCES `utenti` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dump dei dati della tabella minewiki.mods: ~4 rows (circa)
DELETE FROM `mods`;
INSERT INTO `mods` (`cod_mod`, `nome`, `username_utente`, `descrizione_txt`, `immagine`, `link`) VALUES
	(1, 'OptiFine', 'luigi', 'OptiFine è una mod di Minecraft che fornisce un notevole incremento agli FPS, supporta texture HD, aggiunge numerose opzioni di configurazione e consente ottimizzazioni avanzate. Non si tratta quindi di una mod che aggiunge oggetti, mob o biomi ma cambia l\'aspetto della versione vanilla.', 'optifine.jpg', 'https://optifine.net/adloadx?f=OptiFine_1.20.4_HD_'),
	(2, 'Furniture Mod', 'asd', 'La Furniture Mod consiste nell\'aggiungere mobili e decorazioni funzionali e utili. Sarai in grado di trovare mobili per ogni parte della tua casa, compresa la cucina, la camera da letto, la sala da pranzo, gli esterni e altro ancora! Attualmente aggiungendo oltre ottanta blocchi unici, la mod è in continua crescita con nuovi aggiornamenti.', 'furniture-mod.jpg', 'https://www.9minecraft.net/mrcrayfishs-furniture-m'),
	(3, 'DivineRPG', 'Achi11e', 'La Divine RPG è una mod che trasforma Minecraft nell\'esperienza RPG definitiva. Presenta 8 nuove dimensioni da esplorare, tonnellate di boss, mob, armi e armature. È estremamente difficile. Se stai cercando avventure e sfide, questa mod ti piacerà davvero! Non solo, ma è ottima anche a chi piace costruire, grazie alla grande varietà di blocchi decorativi coinvolti.', 'divinerpg.jpg', 'https://www.curseforge.com/minecraft/mc-mods/offic'),
	(10, 'Cloth config', 'Jerrythehairynigga89', 'Cloth Config API (Fabric/Forge/NeoForge)', 'alternative_image.jpg', 'https://www.curseforge.com/minecraft/mc-mods/cloth'),
	(11, 'ci', 'Jerrythehairynigga89', 'asdsfdgf', 'alternative_image.jpg', 'https://www.curseforge.com/minecraft/mc-mods/cloth'),
	(12, 'Jerome', 'Jerrythehairynigga89', 'Cloth Config API (Fabric/Forge/NeoForge)', 'alternative_image.jpg', 'https://www.curseforge.com/minecraft/mc-mods/cloth'),
	(13, 'Abry', 'Jerrythehairynigga89', 'asdsfdgf', 'alternative_image.jpg', 'https://www.curseforge.com/minecraft/mc-mods/cloth');

-- Dump della struttura di tabella minewiki.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `username` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `nome` char(20) DEFAULT NULL,
  `cognome` char(20) DEFAULT NULL,
  `email` char(20) DEFAULT NULL,
  `telefono` char(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='tabella contenente gli username e le rispettive password';

-- Dump dei dati della tabella minewiki.utenti: ~4 rows (circa)
DELETE FROM `utenti`;
INSERT INTO `utenti` (`username`, `password`, `nome`, `cognome`, `email`, `telefono`) VALUES
	('Achi11e', '<br /><b>Warning</b>', '<br /><b>Warning</b>', '<br /><b>Warning</b>', '<br /><b>Warning</b>', '<br /><b>Warning</b>'),
	('asd', 'asd', 'Abry', 'Rossi', 'mario.rossi@gmail.co', '123456789'),
	('Jerrythehairynigga89', '1234', 'Jerome', 'La Rosa', 'jerome.larosa12@lstu', '3519070717'),
	('luigi', 'luigi', '', '', '', '');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
