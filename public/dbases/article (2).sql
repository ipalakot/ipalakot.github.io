-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 nov. 2023 à 12:48
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maboutik`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categorie_id` int NOT NULL,
  `auteur_id` int NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `contenu` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `disponibilite` int NOT NULL,
  `localite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `une` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23A0E66BCF5E72D` (`categorie_id`),
  KEY `IDX_23A0E6660BB6FE6` (`auteur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `categorie_id`, `auteur_id`, `titre`, `resume`, `created_at`, `contenu`, `prix`, `disponibilite`, `localite`, `une`) VALUES
(14, 8, 104, 'Rerumsintetrepellatdoloremautemquidemaspernaturoditsunt.', 'Odiosuntistebeataeconsectetursitevenietetutautveliteaquenumquametnullalaboresintminusearumquidemsit.', '2001-02-23 19:31:17', 'Molestiaesedofficiisreprehenderitmagnameosvoluptatemiurevoluptatemametnemoipsumestblanditiisquosexplicaboimpeditfacilisdolorametpraesentiumvoluptatumenimesteiusatqueteneturcumvoluptatumassumendautvoluptatefacilisquiinventoreofficiisetnonistecorruptivoluptatemfugitsapienteconsecteturipsumerrorutnisiutetmodi.', 8, 14, 'Meunierboeuf', 0),
(15, 8, 104, 'Velreiciendisetvoluptasporropariaturaliasvoluptatem.', 'Uttemporaomnisvoluptasoditetvoluptatesipsumomnisesteiusautiustodoloresvoluptatibusinquiasitvoluptasrerumrecusandaenonearumenimsequietaliquam.', '2005-12-31 21:32:49', 'Repudiandaehicasperioreslaboreconsequaturquioditsedeanihiltemporeblanditiisdoloribusquiaprovidentdictarepudiandaemaioresautetquiaspernaturtemporibusrepellendussolutacumqueenimquaseumimpeditveritatisrepudiandaeessequibusdamrerumcorporissolutadolorumquiaiustodistinctiomolestiaevoluptateexplicabosedquaeratmaioresnatuscupiditate.', 5, 41, 'Dubois', 1),
(16, 8, 104, 'Autsedfugitidullamesseomniscupiditatequi.', 'Temporibusrepudiandaeautcumnobisautautsitveritatisquidemsuntquisquasdeseruntevenietaspernaturveniamlaboriosamquisquamdeleniti.', '2005-07-05 01:45:06', 'Magnieligendiearumerrordolorumvelenimeaqueenimrepellatnobisinutpraesentiumlaborumcorporisinrerumhicnondolorumeiusquiasedrerumnostrumestaperiameiusblanditiisconsequaturquosetdelenitietquasiquisnostrumvelit.', 2, 95, 'Georges-sur-Mer', 1),
(17, 8, 104, 'Eumaccusantiumestquasivitaeautdistinctioconsequaturnulla.', 'Enimmagnisitexcepturiquasvelerrorremperferendissitmolestiasilloducimusistequonamconsequaturdistinctiononeteumeligendidolorumetquibusdameaque.', '2006-09-03 04:25:44', 'Omnisullamquiaomnisaccusamusnesciuntsednequeadsedrepellenduslaborequiaadictavoluptatemsitabsedofficiisilloullamistedelectusquaeundeexercitationemliberofacilissapienteetrecusandaenihilquianimimaioresarchitectoipsaexmodiearumsintlaborumautsequiidnonrerumcommodirepellenduseosdeseruntquodvitaedelectuscorruptipariatursapientesedsuntcorruptivoluptasnesciuntaspernaturundecorruptirerumvoluptatemeavoluptatemvoluptates.', 3, 16, 'Coulon', 1),
(18, 8, 104, 'Estutsedquiautemidplaceatexnobis.', 'Quassitdoloremqueabquoseaquerationealiquiddictaassumendaautomnisvoluptatemautquisnesciuntteneturrerumeumvoluptatesimpeditdignissimosoditsolutaquaerat.', '2004-11-26 15:39:17', 'Quosdolorsedrepellenduseossunthicdelenitiquiaminimautveritatisfugiataccusamuscommodifacerequosenimestnumquamsitminusevenietatautemillosapientequosuscipitetutetdoloremquelaboriosametvoluptatesvelfugacumfugaetcumexplicaboautquosinciduntvoluptatemutetlaboreexplicaboquodasperioresaliasetsedetvitaelaudantium.', 5, 47, 'Perrot', 0),
(19, 8, 104, 'Suntoditporroinventoreutadnatusveletetetdignissimos.', 'Quideminciduntnumquamestveritatisetducimushicnobisiustoundesitiuredoloremaut.', '2004-01-16 09:27:37', 'Accusantiumcorporisutsolutacorporisquaeratvelitutlaudantiumdoloribusremquidemducimusdistinctiodoloremaddoloresexconsequunturearumomnisaperiamnihilestsaepeoditautemautminimarepellendusquicommodiminimatemporequieligendivoluptas.', 3, 60, 'Ribeiro', 0),
(20, 9, 104, 'Undeoditutminimaetlaboriosamrerum.', 'Voluptatemnemodoloremqueaperiamvoluptatumautdoloresdoloresbeataeeaquerepellatdeseruntfacerehicdelenitiveritatisvoluptatemquibusdamamaioresdoloribusvoluptas.', '1991-06-10 13:21:54', 'Impeditetconsequaturnequeutreiciendissintquisestabdoloreerrornihilnihilitaquenequequaeratipsamvoluptatemeanesciuntrerummaximeabeosdolorumsuntfugitomnisperferendismolestiaeveniamatautemaliasfacerequaeratblanditiisreprehenderitquibusdamerrorlaborumeumconsecteturametnostruminducimuseaeaquedebitisillumaccusantiumexercitationemquianihilodioquiquiseaquequisquametvoluptatespossimuset.', 9, 39, 'Camus', 0),
(21, 9, 104, 'Molestiaequibusdamnametetsuntutomnisvitaeautvoluptatessedfacere.', 'Cumblanditiisautsitillumexercitationemsitrepellatvoluptatumautvoluptatemeligendifacilisvoluptatemoditrepudiandaererumoptio.', '1997-10-01 04:02:07', 'Natuslaboriosamenimteneturerrorincumquesinthicblanditiisauteiuseapariaturmolestiaemagnidelectusenimtotamcorruptivelharumnobisquossaepeexercitationemsednamconsequunturvelittotamestvoluptatemaperiamassumendaestporroestpossimusquidemlaborumculpadistinctio.', 6, 42, 'Dupuydan', 0),
(22, 9, 104, 'Praesentiumpariaturmagniplaceataspernatureumetmodimodiasperioresquismolestiasculpaquia.', 'Excepturieaquesedassumendautquibusdaminciduntomnisquoimpeditrerumporroutquoautemilloquinobispraesentiumidnondebitisquoconsequunturaccusamusquiveritatiscommodi.', '2011-08-22 12:36:35', 'Odioipsumdoloresaepeteneturdolormolestiaeminimaesseconsequaturdoloraperiamquiveroipsamfugiatautquiamaximeetcorruptiundeassumendaquaerateosarchitectotemporibusvoluptatemdelenitiexcepturiearumautcorporismollitiarepellatnatusrerumquibusdamutsitofficiaautaccusamusinciduntnatusexcepturiconsecteturnonnihilculpahicnamundeoditteneturvelminimaquisimiliqueenimanimiutaccusantiumsit.', 6, 4, 'Gosselin', 0),
(23, 9, 104, 'Eumnecessitatibusautnobisquiaidinciduntmodierrorharumutestadipisci.', 'Estminimaautreprehenderitaliquideumrerummolestiaeestquovoluptassintdistinctioetoditaliquideligendidoloremquesuntvoluptatemutsuntpariatureosconsequaturdoloribuslaboriosam.', '1991-07-29 04:30:24', 'Abvoluptasetundequiquiaprovidentaliquamimpeditetsitnostrumexplicabovelitreiciendisetatfugiatauteaqueidetofficiaenimmolestiaeasperioreseteaqueautemdolortemporibusducimusdoloremestquiquodeiusestvitaeinciduntestdolorumistecorporisquiaillovoluptatesveroquiaetquiassumendaexcepturiquas.', 1, 20, 'Techer-sur-Barre', 1),
(24, 9, 104, 'Blanditiisestillumautrerumtotamadipisci.', 'Placeatomnismagnammagnietquodfugiteumrecusandaequirecusandaenequesuntnonametiustoplaceatprovidentasperioresdolorrerum.', '1991-03-28 19:51:51', 'Veroesseautsintaliquamquasetvelconsequaturetquaeratvoluptatemmaximenobiscumquesinttotamtotametvoluptatemidlaudantiumesseofficianemomolestiasconsequaturmagniidfacereporroquocorporisminimadoloremdoloreexcepturiquisimiliquepossimusnumquamlaudantiumreiciendisesteosinvoluptatibusmolestiasquisfaceredoloremillumanimiconsequunturquiarecusandaeveniamconsequunturvoluptatemfugaquo.', 5, 50, 'Lamy-sur-Mer', 0),
(25, 9, 104, 'Recusandaeabvelquiadolorumconsequaturmagnammolestiasrerummagninequeundequiminimaet.', 'Expeditafacilisdolorumdoloremquiaetsaepeullamipsamoccaecatiimpeditofficiasintautemplaceatoptiovoluptatembeataeomnisconsequunturnisisequiprovidentnihilvelitullamseddicta.', '1999-02-25 21:47:59', 'Estautvelitevenietnequequiadistinctiovoluptatibusdoloresabeiusanimivoluptatemvoluptatumevenietvoluptasharumenimdoloremqueautsitveroquosquideseruntreiciendisautimpeditdoloresautemquoautquiamodiquilaboriosamnobisutblanditiisautemutrepudiandaeillumperspiciatisdoloremagnamaut.', 5, 56, 'Techernec', 1),
(26, 10, 105, 'Doloreetatporronisiquascommodimodiomnisdoloremveritatiseaquamut.', 'Nonearumvoluptatemquiatemporadoloresmaioresteneturnoneaeaquosdelectusdolornequeidquaerat.', '2008-09-25 11:29:39', 'Vitaefugithicadnullaipsamnumquameosipsamquivoluptatemnesciunttotamexplicaboofficiaoccaecatidoloresquiasequivoluptatibusreprehenderitutatquemolestiaedignissimoseosporroquianullaquasimaximeeaquevoluptatemutfugadignissimosassumendaomnisquietetautemaututexercitationemfacilisexblanditiisvoluptatemconsequuntur.', 6, 83, 'Roux', 0),
(27, 10, 105, 'Autquaeratnonetmolestiasetdolordeseruntcumsitanimiomnisautempraesentiumet.', 'Temporasapientenostrumliberoinillumplaceattemporibusconsequaturdolorumdolorumblanditiiscorruptisolutaveroeiusetcorporissedquieoslaboriosam.', '2012-02-11 13:16:08', 'Sapienteipsamremetsuntabvoluptatemcommodidolormagnametperspiciatisfugitquiautidnemoetpariaturaperiamquisevenietmaximeautassumendasimiliquevoluptaseiusrationeveniamautemquia.', 6, 9, 'Allardnec', 1),
(28, 10, 105, 'Voluptatecorporisvoluptatemimpeditabvoluptatemdolorcorruptiofficiavoluptasiustooccaecati.', 'Velitinveritatiscumquequiaperspiciatisatbeataeestautemmaximemolestiashicplaceatcommoditempore.', '2005-06-12 03:58:24', 'Earumeumofficiisetautemautaliquamautomnisutvelithicsedcorporissedpossimusautnonautemcupiditateutrepudiandaevoluptascorporisquisquaerathicautvoluptatemasperioresprovidentnamdistinctioidsintperspiciatisculpaquiavoluptatibusipsumadquosautsequimagnamrationetemporavoluptasbeataeadipisciinventoreautsitlaborecupiditateadofficiacorrupti.', 2, 81, 'Bouvier-sur-Bernard', 0),
(29, 10, 105, 'Eligendieumliberoimpeditomnisaab.', 'Doloremquelaudantiumtotamutvelitvoluptasdolorsimiliquequaeratiureautetatqueullamrationedelectusquametmolestias.', '2008-06-03 21:24:14', 'Repellatametsedimpeditrerumpossimusvoluptasatqueinsedutliberononquaeeligendiveliteiusautnequeminussequimolestiaecorruptiettemporibusnondictavoluptatesexplicabomagnamdolorumharumeligendiearumenimdeseruntquiaaautreprehenderiteteaassumendaadautnostrumsuntcumestaccusamusveritatisquosaepeautillumnequeveniam.', 9, 99, 'Didier', 0),
(30, 10, 105, 'Aliasestveniametnisirerumsintautdoloresquiamaximealiquidquieius.', 'Accusantiumveniameosquaeremetautemofficiavitaeillonostrumquisquamdelenitiquiscommodinonsitfugitporroducimusomnissequitempore.', '2004-12-11 19:04:05', 'Easedauteaqueatatqueillohicquosdoloredolorumidessearchitectoetfugiatiuredictaverooccaecatiabquiavoluptatemtemporaillumbeataenobisdolorabfacilisassumendasintquasteneturnonpariaturdictaisteomnisexplicabohicaetanimihicutcorruptiquasvoluptatesaccusamusidlaboriosamsedquosaconsequaturquasi.', 2, 35, 'Valette', 0),
(31, 10, 105, 'Dolorrerumillumporroofficiisdoloremnulla.', 'Illoadsedidetmolestiasevenietquiaautemnumquamillumfugitquivoluptatequisquamaliasteneturculpavelsitrerumnihilsuntetharumquasnam.', '2000-09-02 16:12:11', 'Recusandaeetoditaccusantiumestfugaatnecessitatibusinmolestiaenihilnequequiestoccaecatidoloremquemodidoloremqueoditautnemoaliquamsedaperiamvoluptasomnisautinvoluptatemipsaaliquamilloabeumconsequaturvoluptasquameiusomniset.', 1, 44, 'Bessonnec', 0),
(32, 11, 105, 'Etquisquambeataevoluptasestconsecteturminimaomnislaborevoluptatemiusto.', 'Nostrumquoconsequaturutquofugitaperiamducimusaccusantiumdelectustotamsuscipitcupiditatealiquamsintquaedictasitmaximequiadoloremmagniestdeserunt.', '1991-12-23 16:04:04', 'Nontotameaconsequaturutliberoutetvoluptasillumestvoluptatesetutinventoreidmagnamomnissuntarchitectoateneturconsequaturexcepturitemporeremutvoluptatibusdoloresmaximerepudiandaevoluptatescorruptifugitdoloremillosuntofficiaessenamatevenietvelithicverodeleniti.', 1, 0, 'Alvesboeuf', 0),
(33, 11, 105, 'Omnisnullaipsaundedebitisabadipiscimodiinventoremolestiaesedvero.', 'Consequatursedsedquasivoluptatibusconsecteturdebitisestvoluptastotamestdeseruntullamreiciendis.', '2011-04-20 00:04:00', 'Minusperspiciatisvelitquiaquiquaeillumquidemrerummaximequiadolorumadipiscieaquerepellatomnisrepudiandaequamrerumporrodoloresdoloripsumvoluptatemidautidnamquisquamcorporisnoneumsitreiciendisanonrerummollitiarem.', 3, 78, 'Durand', 1),
(34, 11, 105, 'Quiomnisametdoloredoloresquibusdamprovidentdelectusmolestiasaperiamtotamquasut.', 'Cumquealiquamconsequaturestrerumenimdolorumremaperiamrerumdeseruntpossimusoptioadipisciexpeditaquascorporisautquisquamsitetmolestiasconsecteturenimiustoiure.', '1994-10-28 23:43:56', 'Sequiperferendisquiaenimpraesentiumdeseruntetfacerererumperferendisnesciuntipsamlaboriosamadipiscitemporibusnostrumautemrerumprovidenteligendilaboreprovidentetaccusantiumconsequaturconsequaturcupiditateomnisdoloriustoeumperferendiscupiditate.', 1, 26, 'Vincent', 0),
(35, 11, 105, 'Estutnonutdoloresesseculpa.', 'Dictanobisidcorporisdictaquasiiustocupiditatenamdoloridvoluptatemerroranimietpossimusexcepturiatquemollitianihilofficiaexplicabo.', '1996-07-28 16:40:25', 'Autplaceatfacerererumquaeratmollitiaetveritatisvelitlaudantiumeumdoloremverosapienteilloquiexplicabonatussuntquaeratdoloremquevelvoluptatemetvoluptatelaudantiumestquamvitaedoloruteumliberoutdeseruntipsamnamminimaabsedanimiquasisintutetquiomnisminussaepeenimdictamagnamanimiexplicabo.', 5, 75, 'Faure', 1),
(36, 11, 105, 'Perspiciatisexplicaboillumnihilvoluptatemodioinciduntmolestias.', 'Suntveroexametquiarerumquasietmodiautemquaeautemutfacilisquifacilisexcepturiquoeligendierrorut.', '1997-12-24 00:44:29', 'Maioresaperiampariaturututaliquammodisuntinsitquaeratquasibeataenihildoloresnisinonquoconsequaturaliastemporaquaesolutaautnatusnostrumestveldignissimosutperferendistenetursequiitaquerecusandaeearumquasofficiisquissittotamsaepenobisexplicabocommodiarchitectoquamperspiciatistemporedelenitifugiatoptiorepudiandaesimilique.', 0, 26, 'Joseph', 0),
(37, 11, 105, 'Remeosinautevenietetrepellendus.', 'Eaqueautemipsumquiasequiquiaofficianemoipsumquisquamminimaquosetnihilveliteligendiquamdoloribusnihileosenimeaautitaqueevenietutoptioquoquibusdam.', '2011-02-07 15:46:59', 'Estquodestmaioresestvoluptatebeataeautvoluptasillumbeataeverosintsimiliqueearumeoscommodinobismollitiaetdictacorporisatquerationevelquasiesseperferendisnihileumlaborummollitiaestmagnamexperferendisatquefugatemporeeavoluptatemsit.', 8, 66, 'Normand-sur-Weiss', 0),
(38, 12, 106, 'Voluptatemsuscipitsapientequiquoetharumsuntut.', 'Quiamaximemolestiasrepudiandaebeataeofficiiscumqueipsamcumquecorruptieaquaeratitaqueinciduntquasidelectusetfugaetmollitiaconsecteturmolestiaedelenitiutreiciendis.', '1996-03-04 15:09:09', 'Autestdoloreseiusetestutilloinconsequaturquivoluptatesassumendarerumutautvelitnihilnonessesitreprehenderitetaspernaturnobisessearchitectoreiciendisvelfugitdictaquietrepudiandaesitfugalaudantiumharumvoluptasdoloribusquosremlaboreporroquoetcorruptioptiosimiliqueipsumatquesitmolestiaeharumprovident.', 7, 57, 'Faure', 1),
(39, 12, 106, 'Beataeeumsedlaudantiumconsequaturautvoluptasquiquiavoluptatesexpeditainciduntipsa.', 'Perferendisillumconsecteturnihilodioinetoccaecatirepellatrepellatrepellatrepellatmaioresdolorumarchitectoasperioresreprehenderit.', '2005-11-11 08:07:00', 'Omnisearumcupiditateetdolorumiurecorruptieosdolorumeanecessitatibusetestsequiquorationequieiusinventoredoloreslaborumpossimusaliasautlaborenequeeiusundeimpeditestanimiadipisciplaceatsaepeiustodignissimosiurereprehenderitestfacilissintetremeumvoluptateminventorenamutlaboriosamestvoluptatesadipisci.', 7, 36, 'Renaudboeuf', 1),
(40, 12, 106, 'Reprehenderitconsequaturearumrationequismolestiasveroquia.', 'Inventoreauttotameligendivelutnamremametsimiliquequianemoexercitationemetvoluptatemnobis.', '2008-03-04 14:55:50', 'Utquisquamestetetquisvoluptasexaautasperioressimiliqueasperioresomnisofficiaaccusantiumdoloremqueducimusquiaexplicabovoluptatibuspossimusnumquamautemverofugitquodmagniullamquinonistevoluptatemfugasiteaoditdignissimos.', 7, 21, 'Antoine', 1),
(41, 12, 106, 'Eosutlaborumanobisfugamolestiasarchitectonihildeleniti.', 'Dolorestquieumnatusvoluptatemearumeaquevelitdistinctioconsequaturfaciliseumsuscipitistequiaetidconsequaturassumendaperferendisvoluptates.', '2012-12-21 02:36:14', 'Ipsumetestvelitmolestiaesuscipitautrerumevenieteumetvitaeautquisedaquocorruptieiusmolestiaeconsequaturofficiisblanditiisautveritatisquiporroadmolestiasvelitinlaboreveritatisremharumconsecteturadvoluptatevelvoluptatemquoutestquiaducimussolutaquoaliquamnatusnisitemporaautperspiciatisimpeditsapientevitaeetsuntofficiisdoloribusearumcumquequiaccusamusaut.', 7, 77, 'Guillon', 1),
(42, 12, 106, 'Inciduntvoluptasprovidentestquisaliquidvelitexplicabositquasisunt.', 'Consequaturautemeiusautemteneturnatusnostrumrerumsitilloofficiisomnisnihil.', '1991-03-25 23:19:43', 'Dolorumautquasiomnisidetconsequaturrepellendusquiquaeratautquisquamaaccusantiumassumendaeaquealiquidrerumporroquisquiaaccusamusdoloresevenietnihilnihilexpeditasedquieosdoloremqueatqueerrordelenitiipsamsedtemporibuset.', 6, 30, 'Jacquot', 0),
(43, 12, 106, 'Doloribusaquisnemoestquiametvelitquiauttemporehicofficia.', 'Ipsaquidemestetquoreiciendisearumsitmolestiaeconsequaturtemporedolorumenimdoloremqueperferendisquidignissimosfugafugitullammodiquiadoloribus.', '1990-02-02 14:11:59', 'Sequibeataeomnissedvitaemaioresautvoluptasmagniaspernaturexcepturifugasequiquibusdamundeestdoloremqueerrorfugitharumassumendaetvelsedomnisaperiamdoloremistequasiautearummolestiaeetquiafuganonipsaeosrerumautipsumquiquietaut.', 6, 31, 'Pierre', 1),
(44, 13, 106, 'Consequaturquiadoloribusprovidentvitaevelitomnisanimierrorullam.', 'Officiarerumetexercitationemarchitectodoloresiustoetnonutvoluptatesconsequaturdoloreevenieterrorestsapienteiurequi.', '2005-03-05 14:10:56', 'Recusandaeeaquesimiliquedistinctioconsequaturrationeestetnequeetimpeditautofficiaperspiciatistemporavoluptasinharumminimapossimusvelitrerumlaborumitaquequidignissimosestofficianatusporrovoluptasquipraesentiumexercitationemexplicabonumquamenimrecusandaetemporequoessequooccaecatisuscipitdolorvitaenihilmolestiasdebitisexercitationem.', 1, 67, 'Legendre', 0),
(45, 13, 106, 'Perferendisconsequunturimpeditofficiaaperiamquisdolorem.', 'Sitbeataemaioresrepellatodiomolestiaeinvoluptasaliasquietabfugaetnisivoluptasodiononlaudantiumquamveroarchitectoconsequatur.', '2010-05-04 01:30:38', 'Exercitationemporropraesentiumnequedolorenesciuntetdoloremisterecusandaesedrerumipsadoloremdelectusvoluptasrepudiandaeutcupiditateveniamveritatisdistinctiovoluptatemeaetlaboreautemfugaenimdelectusestnamlaborumquisassumendasitestvoluptateadvoluptasautdoloremquiverosedaccusamusvoluptatemliberoeosmolestiasanimiquiremexlaboreipsamestetfugitullamdelenitiquiporroducimusdictanulla.', 7, 58, 'GimenezVille', 1),
(46, 13, 106, 'Utodiosuntrerumdoloremabullamasperioresaliassedquamlaboriosam.', 'Molestiasautquialiaseteaillumaccusamusiddolorquiaquosmodiullamomnisquibusdamexercitationemaliquidexpeditarepellendusomnisrepellataliquiddictalaborumeaque.', '1994-07-06 03:33:36', 'Istequasiomnisnumquamarchitectoearumrepellatremsitmaioresvoluptatemnonnullalaboriosamvelitassumendaetaliquamquissedvoluptatevitaenemoautexcepturieligendisintinetutverodolorquisullamevenietlaudantiumdictaconsequuntur.', 2, 68, 'Traore-sur-Rodriguez', 0),
(47, 13, 106, 'Autisteaperiampraesentiumetevenietdelectusetquaeexpedita.', 'Facereeaimpeditautexsuntsimiliqueutquiaexlaborequiquissintofficiisaperiamteneturetcupiditatequaspossimusaliquamevenietodittemporibusquia.', '2010-08-29 02:59:50', 'Quiiuretotamtemporaaliquamsuntconsequaturlaboreadipiscidolorarchitectoexplicaboetenimeosomnisullaminventorenecessitatibusautautexpeditanostrumquisexplicaborecusandaeporrositconsectetursuntaniminumquamsiteaquevelporroquiomnisdoloremquesintimpeditalias.', 9, 39, 'Alexandre', 1),
(48, 13, 106, 'Iuremodiquiipsafugitautin.', 'Fugiatilloilloinrepudiandaeessesuntcommodifacereblanditiisquiaomnisevenietnihilinciduntvoluptas.', '2006-11-09 01:59:38', 'Velducimusconsequaturimpeditasperioresutestquasirepellatporrosuscipitavelitiureminimapariaturmagnidelectusducimusquiaadquoslaboriosamquodrepellenduserrorillumametenimsimiliquedoloredoloresomnissuntestexpeditaconsequunturnihilquodomnisquiconsequaturnatusetsitvoluptatibusfugaaccusamusautisteeaofficiaaut.', 0, 91, 'Andre-sur-Mer', 1),
(49, 13, 106, 'Dignissimosquasinihilearumminimaquiaquivelitcumquiutdoloremqueeosnatus.', 'Repudiandaenecessitatibussedsuntinciduntnamnemooptioquiquiaistequaeratestquidolornisiporroesse.', '2007-07-05 04:25:38', 'Voluptatemdeseruntinanimiearumutrerummolestiaecorporislaboreseditaquevoluptatemsintautmaximeutoptioeumsuscipitconsecteturvoluptasrerumetquisidistedeseruntpraesentiumeanecessitatibusquialaudantiumcumvoluptasvoluptatibusbeataequamdeseruntiuresiteaofficiaprovidentiureexercitationemnamconsequaturautdebitisverotemporevelipsalaboriosam.', 2, 23, 'Blondel', 0),
(50, 14, 107, 'Dolorquiveromaximeeniminventoreducimus.', 'Etmagnamnihilquisrerumtemporaautemrerumsequieumpariaturvoluptatemmolestiaeitaqueveroquibusdamoptiovoluptassitvelaliasmagninamdoloremqueaut.', '1993-05-17 21:16:38', 'Officiaomniscumquepraesentiumimpeditoptiovoluptatemquiabeataetemporeminimanatusconsequaturinvoluptatumvoluptatevoluptasipsamconsecteturnequequodoloremquecupiditateconsequaturquiinvelmollitiavoluptasdignissimosexcepturivoluptasprovidentmolestiaetotamofficiisdolorblanditiisminusvoluptasexplicabocorruptinobiscorporisoptioconsequaturveritatisetdignissimosdolornisiestitaquequaeexercitationemutculpalaboreistehicquamlaboriosamenimsunt.', 5, 43, 'Nicolas-sur-Girard', 0),
(51, 14, 107, 'Cumcumquioptiodelenitietvoluptatematqueevenietvelitnihiletconsequaturrecusandae.', 'Quiaullamveritatishicvelitquiullamvoluptatemetnobisaspernatureumdoloremdelenitirepudiandaebeataeautsapienteveroculpa.', '2000-10-15 19:29:55', 'Autatfuganonsuscipitauteuminnihilnullautrerumearumharumducimusmaioresconsequaturnonmaioresnemovoluptatefugiatquisquameumadaliaspariaturveritatisvelitcorporisfugapariaturbeataeomnistemporaassumendatotamnesciuntvoluptatemducimusrepellendussitquiillodoloresrerumvelautimpeditistereiciendisiuredoloremetnemositsitfacereatrepellateumnam.', 3, 56, 'Gonzalez-les-Bains', 1),
(52, 14, 107, 'Quisvitaeeapariatureligendinonautemqui.', 'Repellatdoloresexcepturimagninostrumnonatvelmolestiaeeligendipariaturfacilisvoluptateestatrecusandae.', '1992-01-30 03:50:13', 'Officiistemporarepudiandaeveliureautemquoddoloresabquiadipisciharumoptiovoluptatemhicquonulladolorametquiquisquamsuscipitsuscipitrerumfacilisvelreiciendissaepetotameumcorporisnonsitsedquiaetoditdistinctioinventoreestetplaceatpariaturlaboriosamdistinctiomaioresevenietidilloconsequaturetauteaquequissitcommodimodiquiaarchitectoestveniam.', 1, 63, 'Leclercq', 0),
(53, 14, 107, 'Officiaquiaassumendaeaquodquiseiusquosdoloremaperiamquos.', 'Recusandaeautlaudantiumiureautdelectusminusteneturreiciendisnullaerrorvelitsaepedoloresodit.', '2001-08-09 20:13:28', 'Idnonconsecteturlaborumesteaaliquiddolorumquasirepudiandaeetquivoluptatemautemmolestiasofficiisutanimiexexercitationematqueatquequaeveniametmolestiaeundearchitectoquisliberoaspernaturarchitectoeoshicdeseruntipsumaccusantiumnihilpraesentiumomnisevenietipsamvelit.', 1, 44, 'Bodin', 1),
(54, 14, 107, 'Culpaevenieteiustemporarerumlaborealiquamvoluptatumblanditiissitutdolorum.', 'Eiuseiuseteossitearumsitoptioaccusamusnonquirepellatharumrerumfugafugiteligendietetinventoredebitiseiusdelectus.', '2011-01-11 11:58:17', 'Voluptatemeumullameaquenatusconsequaturrepellenduspraesentiumtemporibustemporafugiatdebitisharumilloaccusantiumvoluptatemdeseruntaspernaturnisidoloresaatqueautemdoloreporroveritatisarchitectopossimusinatqueinveltemporatotamsimiliquesedutaenimatqueinventorevelbeataeliberoaperiamdoloribusetbeataeconsequatureosconsequaturpraesentiumsedettotaministeabnonetlaboriosamquiaestveniametatvelitarchitectovoluptatesvoluptatenihil.', 3, 90, 'Dijoux-la-Forêt', 0),
(55, 14, 107, 'Quivoluptatesaccusamusvoluptatumsequioditexrerumquasiadipisciconsequatur.', 'Nemoutetquisquamestlaudantiumeoscupiditatequasmaioressuntmolestiasquidolorem.', '2009-04-22 02:56:03', 'Molestiaeutvoluptatemfacilisdoloremquequisutenimsedsitfugiatipsamvoluptasaspernaturconsecteturutetnatusvoluptateseumtotammolestiaererumlaboriosamvoluptasprovidentquosetaliquidfugiatsitnonveluthicaccusamusvelitdebitisearummagnioccaecatiatqueetquibusdamquisnihilliberoofficiiseosdolorsequicumqueipsumnatusmagnamvelitasperioresconsequaturid.', 0, 20, 'Denis', 0),
(56, 15, 107, 'Officiisfacereimpeditveroetnonaliquamvitae.', 'Etautarepellatnamquoautlaboriosamfugablanditiisassumendaquaeratfugiatliberovoluptateutblanditiisadullamtotamdictaveritatisminimanemo.', '2001-02-02 06:14:46', 'Undequinonodiobeataenonquiaminusnatuscumreprehenderitsuntquiexpeditanihilrepellendusblanditiisreprehenderitconsequunturpraesentiumnostrumpraesentiumrepudiandaetemporaoditoditomnisetrerumassumendaautinestrepellendusillumestetullamexpeditablanditiisipsamutautvoluptastemporaerrorcupiditateoptioquamquaeetestquamdictaquoreiciendisipsautconsequaturrerumassumendaaut.', 6, 89, 'Paris-sur-Lemoine', 1),
(57, 15, 107, 'Laborumnullanequeidipsamdistinctioateosetvoluptas.', 'Sintodioperferendismolestiaemolestiasquieaoccaecatimaioresnoniddoloreseosvelitexveniamhicvoluptatemquismolestiae.', '2006-10-27 18:29:25', 'Odioinutnatuscupiditatevoluptatumcorruptirepudiandaedolorvoluptatemdoloresaspernaturdolorvoluptasvoluptateconsecteturfacereaspernaturipsamollitiapariatureumrationeetquisomnisomnisearumametesteaquefacereofficiissintnecessitatibusrecusandaepariaturquiaquosvoluptatesdoloresharumlaborequodcupiditatenumquamautvoluptasquiconsequaturquoautminusnonsuscipitanimiutminimanoninciduntautemet.', 0, 84, 'Dumont', 1),
(58, 15, 107, 'Recusandaefacilisquisestvelitetaspernatur.', 'Doloremimpeditsedpraesentiumquiconsequaturquiaremminimadictasuscipitperferendisquisnon.', '2006-01-23 17:37:32', 'Quinonblanditiisnequererummodiplaceatvitaequiasitquialaboriosamestetundevoluptatesetomnistemporibusquisquamanimiadiureeaquiveniamautautlaboriosamsimiliquequiarerumnequesintsuntearumenimvoluptatibussitfugamolestiasdolormagniblanditiislaboreculpasaepeautmagnamodioestsapientefuganesciuntmaximesitnamcommodieumperferendisutnatusinciduntquas.', 7, 91, 'Lejeune', 0),
(59, 15, 107, 'Utevenietsuntexatquevoluptatemsitducimusinminimadoloribusincidunteum.', 'Praesentiumconsequaturatemporafacilisaperiamutcumoccaecativelvoluptatemconsequaturmollitiaetoccaecatiquosetexcepturivoluptatumdoloribussedtemporenamaspernatur.', '2006-05-15 13:47:10', 'Quibusdametutenimnonullamquasiearepudiandaedeseruntlaboreremaliquamautabexplicabodebitisvelitsitimpeditquasidoloripsaquisedteneturanimierrorenimquiinautemeossednonsedeumexplicabositvoluptatemaximeametdignissimosetaccusamusconsecteturexcepturiimpeditquasiquoqui.', 6, 84, 'Dubois-sur-Henry', 0),
(60, 15, 107, 'Molestiaepraesentiumnecessitatibussuscipitdoloremiustoreprehenderitperspiciatisminusisteblanditiislaborequismagni.', 'Quiaenimminimaetrepudiandaenamconsequaturplaceatdeseruntcorruptiiustoaperiamnullacumlibero.', '2001-02-27 23:31:30', 'Teneturearumquienimomnisesseatperspiciatisimpeditnoneaetabutrerumsapientedolorererumquidemvoluptassintdoloremconsequaturfacilisatquenulladoloresetblanditiisquodnammodi.', 5, 75, 'Barthelemy', 0),
(61, 15, 107, 'Molestiaeomniseteoserrorsedquiamagnamsintsuscipitnamfacere.', 'Voluptatumsedmollitiautoccaecatiavoluptasvoluptatemenimtemporeetcorruptiadpossimusabsuscipitatqueillo.', '2011-09-16 23:12:40', 'Enimvoluptatemquiullamadipiscireiciendisestmolestiaeutatdignissimosvoluptatemsimiliqueremseddolorumharumeteosmolestiaeinventoremaximevelaspernaturharumteneturporroexercitationemnumquamrecusandaequodquidemomnisnobismolestiaeaspernaturharumundeiustoinillumsedvoluptate.', 7, 61, 'Marques-sur-Vallee', 1),
(62, 16, 108, 'Oditmolestiasmolestiasmagnamsedsimiliquemodibeataeliberodoloresrepudiandaeharumquosoluta.', 'Autaccusamuslaudantiumsuntdoloribusconsecteturquiiureatqueeaquenonnisiaut.', '1998-03-15 14:18:58', 'Velitestautemcorporisidestoditvoluptatuminventorelaborefugalaudantiumquifugitquiaexercitationemquifugiatvoluptatemdoloresnequevelitaccusantiumeosomniscumqueautvoluptatesvoluptatemsedconsecteturnatusmolestiaedoloremrepellendusenimestdoloremautsaepeillumvoluptatibusminusinciduntaliasevenietestaperiametdolorem.', 2, 30, 'Gauthier', 0),
(63, 16, 108, 'Voluptatemveritatiscommodimaioresiureinciduntipsamrepellendusconsequaturremvoluptatemtotamasperioresat.', 'Omnisquisutetadsitinteneturfacerequaeodioexvoluptatemoccaecatiexercitationemdoloremnatus.', '2010-03-09 17:00:37', 'Fugitautquisminusaperiammaioresautnonlaborumrationeoptioexcepturitemporeautrerumadsitdoloremrerumdoloremquiavoluptatemconsequaturlaboreadipisciminimaundeetquiaremlaudantiumsaepeipsaatquisipsaitaquefugasunteiusrationeatrecusandaeautdignissimosimpeditaexpeditaconsectetursimiliquererumillumsit.', 5, 80, 'Jacques', 1),
(64, 16, 108, 'Isteetestsuntsaepetotamquostemporamolestiasadminusdelenitiveldebitis.', 'Asperioresvoluptaseiusfaciliscupiditateetutquodquasisequiexpeditaeosblanditiisperspiciatissuscipitmagnampraesentiumeaveniamasintipsafuga.', '2000-12-06 04:51:47', 'Consequaturtemporenobisnonealaboresitharumtemporadoloremmagnamvoluptasetminimafugitveroquibusdamdelectusmagnamanimivoluptatesfaceredignissimosquiaporroassumendaofficiisexplicabonumquammolestiaepossimusvoluptatemindolorinventoreetpariaturpariaturdoloremerrorvoluptateutsitoccaecatiatque.', 9, 41, 'Grenier-la-Forêt', 0),
(65, 16, 108, 'Oditenimineaquequiamolestiasrepellendus.', 'Veniamdolorumomnisquissuscipitculpahicaperiamipsanihilporrosaepeipsalaboriosamexpeditainventorereprehenderitrepellatenimetututnemonequelaboreautrerum.', '1995-06-13 18:12:46', 'Sitsequinisicumquosmagnivoluptatemquioditvoluptasetexcepturidolorumautmodietexercitationemsuntexpeditacupiditatenonnequeetsapienteasperioresautsitautperspiciatisconsequunturestodionisimaximeinquasexpeditaquinatusquiaetsaepeisteaut.', 7, 73, 'PetitVille', 0),
(66, 16, 108, 'Voluptateseiusconsecteturquidemullamdictareprehenderitdebitissintvelitconsequaturillumquinostrum.', 'Porronecessitatibussitperspiciatismaximenonquasinventoresapientesolutavoluptasverononconsequunturadaliquamvoluptatibus.', '2004-09-27 21:35:14', 'Aliquamvoluptasdignissimosnatusullamsedsimiliquedoloreetutatexcepturiofficiavoluptatemsequiquovelquasexercitationemofficiaeumrepellendusrepudiandaesuntiustoveniamveroverositeosquodnequeenimpraesentiumvoluptatemnesciuntcorruptiinventoredignissimosperferendistotamperferendisnatusexcepturiinquaerataliasrepudiandaeutaccusantiumexplicaboauteaetvelcorruptimollitiaaquisfacilisquamtemporaipsadoloribusaccusamusnihil.', 9, 19, 'DelattreBourg', 1),
(67, 16, 108, 'Consequunturdoloremsitcorporisundedignissimosdelectusutsitdoloreos.', 'Odiomagnimaximeetiureametvoluptatemquasnumquamutenimistequiaipsamfacilis.', '2001-12-01 15:50:39', 'Iddelectusconsecteturdistinctiovoluptatibuspariaturcumrerumsintvoluptatumeosquiperferendisametodititaqueestsapienteinquisomnisvoluptatesuscipitidipsumdoloremquibusdamvitaeundecupiditatecupiditatequasiquialiquam.', 8, 75, 'Peron', 0),
(68, 17, 108, 'Rerumnonoditautteneturinvoluptatemetofficiarepellenduscorporissedexcepturirerum.', 'Adminimaquiaautetofficiavelitlaborequasmaiorescommodietnatusenimutblanditiisbeataesequieumrerumrerum.', '2007-02-15 03:03:25', 'Estvoluptatetemporeeanontemporeabeosquoaliquamvelitdelenitidignissimosaccusamusarchitectoipsumdoloremlaboreinventoreaipsamcorruptivoluptatemquisquamrepellendusvitaeducimuseosadipiscivoluptasminimaadebitisliberodolorutconsequaturvitaeetsuscipitnamhicdebitisvoluptatemtemporepossimusmollitiaetquoiurequisquiseosvoluptasabtotamfugit.', 1, 43, 'Boutin', 0),
(69, 17, 108, 'Nequemolestiaemagnitemporibusrationenecessitatibusfugiatearumomnisautdolorfugiatsitminus.', 'Estanimiomnisnonminusdebitismolestiaequidoloremnullaquisaspernaturquiquieosmollitiamaiores.', '1993-12-06 06:13:50', 'Recusandaenemorepudiandaealiasidmagnamquodilloutestrepellataccusantiumhicautdoloribusetquoimpeditettemporaminussuntporrosedconsequaturessecumporrosedestsitmolestiasinciduntculpablanditiis.', 6, 30, 'Monnier', 0),
(70, 17, 108, 'Vellaudantiumnihilidillumsintsimilique.', 'Errorabquiainestestidrationetotamundeautmaioresveleosvoluptascommodidictautetadiustoaetrerumrerumassumendavoluptatum.', '2008-09-26 10:25:30', 'Quidemvoluptatemautquamquamveroillumofficiautsolutaeosfugamolestiaeevenietexercitationemdistinctioenimveniametsuscipitquianostrumnobismagnitotamquasidolorsolutaillumauteligendimaioresquasieaquefugiatetut.', 8, 43, 'Mendesboeuf', 1),
(71, 17, 108, 'Laboriosamquiestquisquameaaniminatusdelenitiet.', 'Nemoitaqueullamsitsequiquodrepellatadautidliberosuscipitautullammollitiabeataeadfugaaccusamuseum.', '2005-01-25 23:04:53', 'Temporibusplaceatadnihilnonautemassumendaidconsecteturaccusamusmagnifugitmaioresidnatusquiamaximeutetarchitectolaboreestquimodinullarepellatconsecteturetautprovidentsit.', 6, 72, 'Gilletnec', 0),
(72, 17, 108, 'Ametatqueetinventoreutfacilisiuresitofficiiseiusnonfugitut.', 'Minimaetsimiliquesedreprehenderitfugitvoluptatumveroaperiamrerumperferendisnihilperferendisminimaerrorrepellendusadconsequaturculpanonquoomnisadteneturculpadebitisvoluptasomnis.', '1994-08-31 04:21:26', 'Verodolorestanimiassumendavelitinipsamcorruptiiureminimarerumdolorumanimiducimusnisiuttemporeipsafaceredoloresarchitectoutvoluptatumetquodutexpeditafugaconsequaturlaborumestperspiciatisquaedeseruntdoloreminciduntvoluptatibusipsamnumquamnonodioomnisporrononfugitquoetquimolestiaemolestiaedoloremquiatadipiscifugitadipiscieiusdoloresquisquamfugiat.', 6, 87, 'Blondel-sur-Boucher', 1),
(73, 17, 108, 'Molestiaseosrerumquasieosquiablanditiisconsequaturisteabsapienteatqueipsamsint.', 'Errorfuganecessitatibusametinutassumendarepellendusoccaecatidelenitimolestiasmaximeetsolutauteaconsecteturmaiores.', '2010-09-25 07:33:36', 'Modiliberoauteumetabquodauteumsinteumillosaepeilloconsequunturhicearumomnisetestrepudiandaeconsequaturconsecteturlaborerepudiandaepraesentiumsitestiustositeligendirerumiddoloribusvoluptateutasperiorescorruptiidverositsintfugiat.', 3, 91, 'Bailly', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E6660BB6FE6` FOREIGN KEY (`auteur_id`) REFERENCES `auteur` (`id`),
  ADD CONSTRAINT `FK_23A0E66BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
