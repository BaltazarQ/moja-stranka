<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>MOJA STRANKA</title>
	<link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/sourcesans/fonts.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width">

</head>

<body>

	<header>
		<?php
			include 'header.php';
        ?>
	</header>
	
	
	<main>
		
		<aside>
			<?php
				include 'aside.php';
			?>
		</aside>
		
		<section class="main-section">

			
			<?php
				$events = [
					[
						'name' => 'Ema',
						'date' => '30.1.',
						'what' => 'Ženské meno Ema má nemecký pôvod a v preklade znamená "veľká, silná". Osobným číslom tohto mena je 1 - Vodca. Nositeľky tohto mena sú veľmi citlivé a nikdy sa nedávajú do rozporu. Emy bývajú vnímavé a obozretné, rady pomôžu druhým, keď to potrebujú, bez toho, aby hľadeli na seba. Tieto ženy sú ochotné pre svoju kariéru urobiť všetko.
						
						Nikdy sa vopred nezdajú. Najprv sa chcú zabezpečiť a uplatniť sa v práci a až potom si zaobstarajú rodinu. Vo všetkom, do čoho sa pustia, sú zodpovedné a presné. Emy majú zdravie uspokojivé, ale môžu ich trápiť ťažkosti spojené s nervovým systémom. Ich obľúbené farby sú zelená, červená, biela a modrá.
						
						Ochranné rastliny medovka a baza. Ochranné kamene smaragd, tyrkys a rastlinným totemom je upokojujúca a utišujúca lipa. Toto meno je vhodné pre znamenia Kozorožec, Panna, Býk alebo Ryby.',
					],
					
					[
						'name' => 'Marek',
						'date' => '25.4.',
						'what' => 'Mužské meno vytvorené zrejme na základe latinského "Marcus", pričom toto mena vychádza z mena rímskeho boha vojny a ohňa, ktorý bol pomenovaný Mars. Všestranné a tvorivé chlapča s týmto menom sa bude dožadovať prejavov lásky zo strany najbližších a stonásobne vám ju vráti. Marekovia vás dokážu často zaskočiť tým, čo urobia, povedia a ako sa zachovajú.

						Svoje zlé činy majú tendenciu zastierať maznaním a takto si vás omotajú okolo prsta. Neustále vás skúšajú a hľadajú slabé stránky, aby si vás podmanili. Milujú byť obklopený materiálnym bohatstvom.
						
						Dôležité je, aby vyrastali v zdravom prostredí, a to nielen z hľadiska životného prostredia, ale najmä z pohľadu úplnej rodiny so silnými morálnymi zásadami. Najviac im pristanú povolania v oblasti styku s ľuďmi a byť vodcami nových myšlienkových hnutí. Je vhodným menom pre slnečné znamenie Škorpión a posilňuje životné číslo 1.',
					],
					
					[
						'name' => 'Viktória',
						'date' => '10.5.',
						'what' => 'Ženské meno Viktória má latinský pôvod a v preklade znamená "víťaz", "víťazstvo". Ich obľúbené farby sú modrá, zelená a biela. Ochranné rastliny valeriána a čakanka, ochranné kamene citrín a zafír. Osobným číslom tohto mena je 8 - Peniaze. Nositeľky tohto mena sú veľmi objektívne. Dokážu byť rozhodné a rady fantazírujú.

						Viktórie majú vo svojom živote veľa šťastia. Svoje príležitosti vždy dobre využijú, vedia ako konať a neskôr sa z nich stávajú úspešne ženy. Vždy majú pri sebe niekoho, kto ich podporuje. No niekedy to môžu byť iba takí, ktorí ich využívajú. Ale tieto ženy to vždy vycítia a vedia, kto je k ním úprimný. Viktórie sú veľmi rýchle a šikovné ženy.
						
						Ak budú vo svojej kariére pracovať zodpovedne, dočkajú sa ocenenia. Tieto ženy majú vitalitu striedavú. Sú náchylné na lymfatické choroby. Toto meno je vhodné pre znamenia : Panna, Baran, škorpión, Vodnár, Strelec, Kozorožec.',
					],
					
					[
						'name' => 'Karolína',
						'date' => '30.6.',
						'what' => 'Ženské meno Karolína je odvodené od mužského mena Karol, ktoré je nemeckého pôvodu a znamená "muž" a vzniklo z neho aj slovo kráľ. Osobným číslom tohto mena je 2 - Dobrota. Ak majú Karolíny podporu od druhých, sú sebaisté. Sú to silné osobnosti a ťažko ich niekto ovplyvní. Väčšinou majú šťastie vo veciach, do ktorých sa pustia. Rady pomáhajú iným a nedokážu niekomu ublížiť.

						Toto meno je veľmi pozitívne. Karolíny sú úspešné a za to aj vhodne odmeňované. Pre štúdium neboli narodené, skôr študujú pretože musia. Naozaj ich to bude zaujímať, až keď sa bude jednať o ich zamestnanie a zameranie. Ich zdravie je zvyčajne vynikajúce. Majú veľa životných síl.
						
						Ich obľúbené farby sú svetlomodrá, fľaškovozelená, červená a biela. Ochranné rastliny fialka, mäta a prvosienka. Ochranné kamene achát, zafír a opál. Toto meno je vhodné pre Váhy, Škorpióna, Strelca a Blíženca.',
					],
					
					[
						'name' => 'Patrik',
						'date' => '6.7.',
						'what' => 'Mužské meno Patrik má latinský pôvod a jeho význam je "urodzený", "patricijský". Osobným číslom je 3 – Schopnosť. Ovplyvňuje ich planéta Venuša. Šťastné farby sú žltá, modrá. Ochranné rastliny podbeľ, mäta, ochranné kamene avanturín a ruženín. Hlboký pohľad, zmysel pre spravodlivosť a súbežne nerozhodnosť, plachosť vyvolávajú dojem u mamy, že toto chlapča potrebuje ochranné krídla.

						Títo muži sú priateľskí a uvážliví. Snažia sa všetko robiť dokonale a precízne. Nevedia odoprieť pomoc iným ľuďom. Na druhej strane sú veľmi tvrdohlaví a spoliehajú sa len na svoje schopnosti. Učia sa viac na chybách iných, ako na svojich, a tak nikomu nedôverujú. Obľubujú tvorivé hry, radi komunikujú a skrývajú v sebe obrovskú lásku k ľuďom.
						
						Patrikovia sa narodili aby naplnili vyššie poslanie. Nechajte im ich malý svet tajný svet, aby nadobudli pocit porozumenia. Kladú veľký dôraz na svoj vzhľad. Záleží im na tom, aby druhí ocenili ich výzor. Snažia sa zvážiť problémy zo všetkých uhlov pohľadu. Kvôli tomu sa vyhýbajú rôznym nepríjemnostiam.
						
						Patrikovia majú veľa priateľov, ale skutočne blízki sú im len rodinní príslušníci. Iba im dokážu plne dôverovať. Akákoľvek športová aktivita im dodá nevyhnutnú sebadôveru. Uplatnia sa v aktívnom zamestnaní, kde môžu pracovať aj manuálne. Svätý Patrik bol kresťanským misionárom pôsobiaci v Írsku, ktorého je i dnes patrónom. Deň svätého Patrika sa v Írsku a v USA dodnes oslavuje 17.
						
						marca s motívmi v zelenej farby. Počas sviatku sa navštevujú bohoslužby, nosí sa odev zelenej farby a ruší sa pôstne obdobie jedla, či pitia alkoholu. Toto meno je vhodné pre znamenia: Kozorožec, Býk, Rak, Panna.',
					],
					
					[
						'name' => 'Marta',
						'date' => '29.7.',
						'what' => 'Marta je novozákonné ženské meno. Má hebrejský pôvod s významom "pani domu, starostlivá gazdinka". 
						Osobným číslom je 8 – Peniaze. Ovplyvňuje ich planéta Jupiter. Šťastné farby sú fialová, žltá a modrá. 
						Ochranné rastliny žihľava, šalvia a skalica. Tieto ženy sú šarmantné a príjemné, keď niečo spravia, po chvíli im to prejde. 
						Sú dosť nepredvídateľné a vypočítavé.

						Vedia ako majú druhých zmanipulovať a ešte aj využiť vo svoj prospech. V práci sú veľmi výkonné. 
						Do roboty sa púšťajú s nasadením. Majú široké kontakty v spoločnosti. Dokážu bezmedzne dôverovať a preciťujú každý neúspech. 
						V oblasti zdravia sú odolné Prospieva im plávanie, lebo majú nedostatok jódu. 
						Toto meno je vhodné pre znamenia : Panna, Váhy, Strelec, Kozorožec, Baran.',
					],
					
					[
						'name' => 'Zuzana',
						'date' => '11.8.',
						'what' => 'Má hebrejský pôvod a v preklade znamená "ľalia", "lotos". Priťahuje k sebe veľa katastrof a situácií, kedy sa musí prejaviť ako silná a hrdinská žena. Nevyhovuje jej byť hrdinkou, je to pre ňu záťaž. Radšej by bola v ústraní, starala sa o seba a rodinu. Vie, že má v sebe silu, ale radšej všetko závažné necháva na iných.

						Až v poslednej chvíli sa rozhodne konať, no vtedy sa mení z pokojnej osobnosti na tigricu. Bojuje vášnivo a bez obmedzenia, alebo myšlienok na zadné vrátka. Každý, kto sa jej postaví do cesty, keď za niečo bojuje, stane sa obeťou, pretože ona necúvne ani pred sebazničením. Je zbytočné s ňou bojovať, pretože málokto je ochotný nechať sa zničiť. Je maximalistka, chce mať vždy všetko - lásku, vernosť, dôveru, šťastie, aj peniaze - je veľmi náročná.
						
						No ak jej to muž poskytne, nikdy ho nezradí a bude ho obhajovať za každých okolností. Ovplyvňuje ju planéta Venuša. Jej ochranné kamene sú záhneda a achát.',
					],
					
					[
						'name' => 'Martina',
						'date' => '9.9.',
						'what' => 'Ženské meno Martina má latinský pôvod a v preklade znamená "zasvätená rímskemu bohu vojny Martovi", "bojovná". Sympatická a pútavá osobnosť dievčiny s prchkým temperamentom má záľubu v tajomstvách. Na prvý pohľad má z nej každý pocit, že je to jemná a nežná osoba, pre ktorú je život priťažkým bremenom. Pri dlhšom pozorovaní, zistíme, že to vôbec tak nie je a že je to vlastne utajený "pracant", detailistka a veľmi zodpovedná žena, ktorá nič nenechá dlho na jednom mieste.

						Vždy sa snaží dostať až k jadru problému a nájsť zlepšenie. Vyjadruje sa viac skutkami ako slovami. Jej sila je "chytľavá", teda v jej blízkosti sa nedá žiť bez aktivity, všetci sa pri nej stávajú lepšími, výkonnejšími, majú radosť zo svojho života a zo svojej práce. Každý sa o ňu doslova bije a ľudia ju považujú za veľmi dobrú priateľku.
						
						Vyžaduje, aby jej najbližší prejavovali nielen dostatok lásky, ale usiťovali ju o tom, aká je skvelá. Za zdánlivým sebavedomím totiž ukrýva pocity neistoty, pod drsným čelom, strach z odmietnutia. Vynikajúco sa uplatní v obchode a umení. Ovplyvňujú ju planéty Jupiter a Neptún.
						
						Jej ochranné kamene sú akvamarín, ametyst a smaragd.',
					],
					
					[
						'name' => 'Mária',
						'date' => '12.9.',
						'what' => 'Ženské meno Mária má hebrejský pôvod a voľný preklad znie "milovaná bohom". 
						Rôzne zdrobneniny, či úpravy tomuto menu neprospievajú, ono je najlepšie práve v takomto kalendárnom tvare. 
						Také rozšírené a silné meno dáva nositeľke zmysel pre mravnosť a neskonalú vieru. 
						Rodí sa na úrovni duše už takmer ako dospelá. Máriu nikto nezastaví v ceste za úspechom. 
						Dokáže aj nerealizovateľné a dosiahne akýkoľvek cieľ.

						Má za sebou podporu hviezd, teda sa nemusí obávať žiadnych problémov. Ak si myslíte, že dievča s týmto menom 
						poľahky prečítate, ste na omyle. City a intuitívne vnuknutia si ponecháva hlboko ukryté pod spoločensky vhodným správaním. 
						Láska a rodina je pre ňu veľmi dôležitá, niekedy si však zmýli lásku so súcitom a potom trpí. 
						No zväčša si vyberie správne a dosiahne aj vo svojom citovom živote správnu rovnováhu. V škole sa jej darí fantasticky.
						
						Uplatňuje schopnosť analytickej inteligencie a mimoriadnej pamäti. Inklinuje k povolaniam, kde môže byť užitočná iným a 
						pomáhať im. Ovplyvňuje ju planéta Merkúr. Jej ochranné kamene sú jaspis a nefrit. Je vhodné meno pre Blížencov.',
					],

					[
						'name' => 'Daniela',
						'date' => '6.10.',
						'what' => 'Ženské meno Daniela má hebrejský pôvod, preložiť sa dá ako "boh je môj sudca". Osobným číslom tohto mena je 1 - Vodca. 
						Obľúbená farba Daniely je modrá, ochranná rastlina medovka a ochranný kameň ametyst. Ženy s menom Daniela sú veľmi premenlivé typy.

						Dokážu sa zmeniť veľmi rýchlo. Jeden deň sa prejavujú ako nežné, utiahnuté, zdržanlivé žienky, 
						ale pri ďalšom stretnutí môžu prekvapiť svojou rozhodnosťou a kritickosťou v snahe zviditeľniť sa. 
						Pri hľadní seba samej sa častokrát uzatvárajú samy do seba.  Ide o racionálny typ žien, preto sa veľmi páčia mužom.
						
						Idú si za svojim cieľom, väčšinou, pokiaľ je to možné, čo najkratšou cestou. Potrebujú zmenu, nejakú aktívnu činnosť, 
						aby sa cítili spokojné a vyrované. Sú to ženy plné energie a elánu, rady odpočívajú aktívne – športovo, najradšej majú plávanie. 
						Ich životaschopnosť ich chráni pred chorobami.',
					],

					[
						'name' => 'Martin',
						'date' => '11.11.',
						'what' => 'Mužské meno Martin má latinský pôvod „Martinus“ a v preklade znamená "zasvätený bohovi Marsovi", 
						v prenesenom význame "bojovný". Oslovujeme ich ako Maťo, Maťko, Martinko. Martinovia sú mimoriadne veselou kopou, 
						s ktorou sa nikdy nebudete nudiť. Všade pchajú nos a všetko ich zaujíma ako klebetnicu na trhu. Majú mnoho priateľov. 
						Napriek tomu, že radí rozprávajú dokážu udržať tajomstvo, preto si ich okolie váži.

						Nájdu si aj v tom najneprehľadnejšom svete svoju cestičku na vrchol a uspejú aj v tých najťažších podmienkach. 
						Nevidia v ničom závažný problém. Dokážu sa postarať o seba a svojich blízkych. Sú nepokojní, inteligentní, 
						citliví a miestami napätí. Nositeľov týchto mien lákajú prevažne povolania spájajúce intelektuálnu a manuálnu činnosť. 
						Spoločensky sú nestáli, niekedy sa potešia návšteve, inokedy by sa najradšej zatvorili do svojej izby.
						
						Mali by dostatočne odpočívať. Prospeje im vyvážená životospráva a potrebujú mať nejakého "koníčka". 
						Konajú rýchlo, s bystrým úsudkom a prehľadom o tom, čo je momentálne najdôležitejšie. Maťovia sú rodenými fatalistami. 
						Díva sa na svet s odstupom a v ničom nevidí neprekonateľnú prekážku. Nič si priveľmi nepripúšťajú a majú veľkú sebadôveru.
						
						Už v detstve mali jasné ciele a snažia sa ich dosiahnuť. No ak sa to nedá a oni vyčerpajú všetky možnosti, 
						potom sa svojich snov pokojne vzdajú a pustia sa do nových plánov. Platí to pre súkromie, aj pre prácu. 
						Ovplyvňuje ich planéta Saturn. Ich ochranné kamene sú zafír a opál. Šťastné farby sú žltá, čierna a tmavomodrá.
						
						Ochranné rastliny kostihoj, štiav. Ochranné kamene zafír a opál.',
					],

					[
						'name' => 'Stanislav',
						'date' => '13.11.',
						'what' => 'Mužské meno Stanislav má slovanský pôvod a vo voľnom preklade znamená "upevni slávu, staň sa slávnym". Je rodený optimista a jeho plány sú vždy veľkolepé. Vysníva si také nádherné vzdušné zámky, že keď sa mu zrútia, oplatí sa mu žiť hoci aj pre zrúcaniny svojich snov. Má veľa ideálov, vzorov a koná vždy so vznešeným cieľom. Je minimálne ziskuchtivý.

						Získa skoro všetko, o čom kedy sníval. Nemsie sa však nechať zviesť zo svojej cesty, pretože ak začne myslieť len na seba, potom mu jeho šťastie unikne. Ovplyvňuje ho planéta Mars. Jeho ochranné kamene sú diamant a ametyst.',
					],
					
					[
						'name' => 'Katarína',
						'date' => '25.11.',
						'what' => 'Krstné meno Katarína je gréckeho pôvodu a znamená "čistá", "mravná". Katarína je taká dobrá a dôverčivá, že ju už odmala ľudia len využívajú a klamú. U Katarín prevládajú prvky ako obratnosť, inteligencia, emócie a súcit. Dokáže sa poučiť z vlastných chýb a vie konať diplomaticky. Neplýtva svojou energiou a dokáže rozlíšiť dobré investície od zlých. Veľmi ľahko sa prispôsobí.

						Dobre znáša neúspechy, lebo vinu väčšinou zvalí na iných. Kataríny potrebujú hlavne dostatok odpočinku. Uplatnenie si nájdu v oblasti médií, umenia, politiky alebo v biznise. Ovplyvňuje ju planéta Slnko. Jej šťastné farby sú žltá a zlatá. Jej ochranné kamene sú jantár a olivín.',
					],
					
					[
						'name' => 'Milan',
						'date' => '27.11.',
						'what' => 'Mužské meno Milan má slovanský pôvod a v preklade znamená "milý". Ak sa vyhne alkoholu, nikdy nič nebude pre neho nedosiahnuteľné, či už láska, alebo kariéra. Stačí, ak si všetko premyslí a dokáže čo len bude chcieť. Jeho názory sú dobré a znalosti, ktoré potrebuje, si osvojí veľmi rýchlo. V jeho spoločnosti sa nikto nenudí, vždy sa mu darí a má veľa priateľov.

						V láske dlho trvá, kým nájde tú pravú. Je obeťou rôznych intríg a klebiet, kým si nájde tú pravú. Svoje rodinné šťastie si vždy žiarlivo strážiť a beda tomu, kto v ňom prebudí zúrivosť. Ovplyvňuje ho planéta Saturn. Jeho ochranné kamene sú zafír a achát.',
					],

				];
			?>
				<article>
					<?php foreach ($events as $event) : ?>
					<h1 class="name"><?php echo $event['name'] ?></h1>
					<h4 class="date"><?php echo $event['date'] ?></h4>
					<p class="what"><?php echo $event['what'] ?></p>
					<?php endforeach ?>
				</article>

				


		</section>

	</main>
	
	
	<footer>
		<?php
			include 'footer.php';
		?>
	</footer>
	
	
	<script src="js/jquery.js"></script>
	<script src="js/jquery.colors.min.js"></script>
	<script src="js/script.js"></script>
	
	
</body>

</html>