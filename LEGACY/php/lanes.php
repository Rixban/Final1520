<?php 

$mid = array("Ahri", "Akali", "Anivia", "Annie", "Azir", "Brand", "Cassiopeia", "Cho'Gath", "Corki", "Diana", "Ekko", "Ezreal", "Fizz", "Galio", "Heimerdinger", "Jayce", "Karma", "Karthus", "Kassadin", "Katarina", "Kog'Maw", "LeBlanc", "Lissandra", "Lulu",  "Lux", "Malzahar", "Morgana","Nidalee", "Orianna", "Ryze", "Swain",  "Syndra", "Talon", "Twisted Fate", "Varus", "Veigar", "Vel'koz", "Viktor", "Vladimir", "Xerath", "Yasuo", "Zed", "Ziggs", "Zilean");

$top = array("Aatrox", "Akali", "Cho'Gath", "Darius", "Diana", "Dr. Mundo", "Ekko","Fiora",  "Fizz", "Galio", "Gangplank", "Garen", "Gnar", "Graves", "Hecarim","Heimerdinger", "Illaoi", "Irelia", "Jarvin IV", "Jax", "Jayce", "Kennen", "Lee Sin", "Lissandra", "Lulu", "Malphite", "Maokai", "Nasus", "Nautilus", "Olaf", "Pantheon", "Poppy", "Quinn", "Rammus", "Renekton", "Rengar", "Riven", "Rumble", "Ryze",  "Shen", "Shyvana", "Singed", "Sion", "Swain", "Tahm Kench", "Teemo", "Trundle", "Tryndamere", "Vayne", "Vladimir", "Volibear", "Wukong", "Xin Zhao","Yasuo", "Yorick", "Zed");

$jungle = array("Aatrox","Amumu", "Cho'Gath", "Dr. Mundo", "Ekko", "Elise", "Evelyn", "Fiddlesticks", "Fizz",  "Gragas", "Graves", "Hecarim", "Jarvin IV", "Jax", "Karthus", "Kayle", "Kha'Zix", "Kindred", "Lee Sin", "Malphite", "Master Yi","Nautilus", "Nidalee", "Nocturne", "Nunu", "Olaf", "Pantheon", "Poppy", "Quinn", "Rammus", "Rek'Sai", "Rengar", "Rumble", "Sejuani", "Shaco", "Shen", "Shyvana", "Skarner", "Tahm Kench", "Trundle", "Udyr", "Vi", "Volibear", "Warwick", "Wukong", "Xin Zhao", "Zac");

$support = array("Alistar", "Annie", "Bard", "Blitzcrank", "Brand", "Braum", "Galio", "Janna", "Karma", "Leona", "Lulu", "Lux", "Morgana","Nami", "Nautilus", "Poppy", "Shen", "Sona", "Soraka", "Tahm Kench", "Taric", "Thresh", "Trundle","Vel'koz", "Zilean", "Zyra" );

$adc = array("Ashe", "Caitlyn", "Corki", "Draven", "Ezreal", "Graves", "Jhin", "Jinx", "Kalista", "Kog'Maw", "Lucian", "Miss Fortune", "Mordekaiser", "Quinn", "Sivir", "Tristana", "Twitch", "Urgot", "Varus", "Vayne" );

$title = "<h1>Lanes and Champion Selection</h1>";
	
$intro = "<p>This is going to be a short section, we are going to just cover each of the lanes, the roles they provide, and the champions that <i>GENERALLY</i> play those roles. Some people play off-meta lane champions, and play things you normally would never see them play, and those match-ups can be difficult. (i.e. Nasus vs Bard top lane. Bard wins bad early, but outscaled greatly by Nasus.)</p>";
	
$season = "<p>Also, with the introduction of season 6, the ranked queue changed a lot, and at least you only need to know 2 roles (unless you pick fill as an option) instead of knowing all 5 before. This makes it easier to specialize and get what lane you want, and focus on your game more than before.</p>";
	
$pool = "<p>Your champion pool when learning the game, should only be about 3 champions PER role. Have one MAIN champion you play in that role, but be proficient with at least two other champions in that role. Write out a diagram for each role, and make your life easier by learning champs that can play multiple roles.</p>";
	
$ex = "<p>For example. If you learn Lulu mid, you can play her top, and support as well. It makes it easier for you because you understand her as a champion, and know what you can do with her. It saves you from having to learn two additional champions.</p>";
	
$warning = "<p><b>NEVER PLAY A CHAMPION IN RANKED YOU'RE NOT GOOD WITH... YOU WILL LOSE.</b></p>";
$mapa = "<b><p>KEYNOTE: WORK ON MAP AWARENESS, KNOW WHERE THE ENEMY TEAM IS, WHEN THEY'RE MISSING, AND WHERE THEY WENT MISSING FROM. This will tell you a lot about where they may be, and if it's safe to stay in lane or if you should back off. WARD. It's important and gives your team information and prevents ganks, as well as objective taking. You have free wards, use them when they're up.</p></b>";

$topTitle = "<h2>Top:</h2>";

$tlane = "<p>As a top laner, you have the largest champion pool to pick from, and chances are you're filling in the gaps for your team. Top lane generally contains strong tanks or great duelists, but sometimes may have a hard carry champion like Graves or Quinn, or support mages like Lissandra or Lulu if your team lacks AP. As a top laner, you most likely will carry Teleport and must be ready to teleport to your team to support them when your teleport is up. Your playstyle changes depending on the champion you play. If you're a tanky champion, the amount of splitting you do is less than if you're gonna play a strong duelist like Fiora. As the game goes on though, if your teleport is up and your team doesn't need you for the immediate moment, you're going to want to look to split push and put pressure on the map to force people to come to you before you safely disengage and back and regroup with your team. However if your team gets engaged on, if it's winnable, you wanna teleport to help them, but if it's something they have then keep splitting. However your decision can decide the difference between a win or a loss in late game as the timers go up.</p>";
		
		$topRole = array("Tank: You're looking to scale, play somewhat safer in the early game unless it is against a champ you can trade with and set up ganks for your jungler and kill them. As the game progresses, you're going to be the frontline for your team in teamfights, and most likely stick with them for important objectives like Dragon, Baron, and taking towers. When teleport is up, try to split as best you can, but if there's a teamfight that's about to happen, teleport in to help your team. You'll spend more time around your team than some other top laners.",
		"Duelists: You're also looking to scale, but you can fight in lane a lot better than tanks. You snowball harder early than most other champions, and getting fed and often spell GG for the enemy team as you become harder and harder to deal with. As the game progresses, and your TP is up, you're often splitting, putting as much pressure on the map as possible. PAY ATTENTION TO THE MAP, if the enemy team isn't on the map, chances are they're coming for you. Back off or base so you don't die. Teleport in when the team needs you, and wreck face.",
		"AP Champs: Generally, there's not many AP tops, and they're not often picked unless your mid laner is AD and your team lacks AP. If you're an AP top, you should win vs almost any melee AD top (unless you're Vladimir, then you just outscale). You have great teamfight, and are looking to join your team anytime there is a fight coming. Split when teleport is up, back off and ward when people are not on the map.",
		"Ranged AD: You should beat almost any melee top, and your damage output is decent, however you're squishy so play careful. You scale well, look to split later or help with teamfights and objectives. If Teleport isn't up, make sure you ward and there are no major objectives your team is going for. Might want to stick with your team.");
		
$tpick = "<p>The lower the division you play in, the less the champion you pick matters as you can win with any champion rather easily. The higher your rank gets, the harder it becomes to win with certain champions because team compisitions begin to matter more.</p>";
		
$tstart = "<p>Starting champions to learn for top lane: Tryndamere, Nasus, Malphite, Dr. Mundo</p>";
$tavoid = "<p>Champions to avoid when starting: Riven, Lee Sin, Rumble</p>";
	
$midTitle = "<h2>Middle:</h2>";

$midinfo = "<p>Ah, middle lane... you have the most important lane in terms of objectives. Keeping your middle lane towers up is important, as when they're down, it really opens up the map for the enemy team to roam and set up gank paths on other people, and makes the jungle extremely dangerous for your team. In mid lane, there's really only a few options of types of champions to play: Assassins, Mages, Support Mages, and AP Tanks.</p>";
		
$midtype = array("Assassin: You're looking to either kill your enemy laner, or to roam to other lanes AFTER YOU PUSH YOUR WAVE, that is the most important thing to remember, you cannot roam unless you push your wave or are just leaving your base. MID TOWERS ARE THE MOST IMPORTANT TOWERS, DO NOT LOSE THEM BECAUSE YOU ROAMED. As an assassin, you're looking to snowball off of easy kills on top lane, and bottom lane. Avoid trying to assassinate tanks, unless there is a lot of hard crowd control. If your lane opponent roams, look to either follow them if you can kill them, ping they're missing and ping danger to the lane they're roaming to and then shove lane and either take their tower or make them miss CS, or roam to the opposite lane while still pinging.",
		
		"Mage: You have great wave clear, good poke, and a decent teamfight as long as you stay in the back. You're looking to farm, push hard and roam to other lanes for easy kills, chances are your damage is lower than that of an assassin in terms of burst, but your prolonged fight is stronger. Your main summoner spells will generally be flash and barrier/ghost/exhaust/teleport/ignite depending. Shove lane, look to roam for easy kills or follow your lane opponent if they're roaming, but be careful when doing so.",
		
		"Support Mage: You have decent wave clear, good support abilities, and a great teamfight. You're looking to farm, and scale well. Roaming to help other lanes secure kills. Look to do the same as Mage when it comes to roaming. Support your carries in teamfights, or save your frontline if they're in danger.",
		
		"Tanky Mid: Chances are you're Cho'Gath. Push waves, farm safely. It's hard for mages and assassins to kill you if you play correctly. Look for easy harass and outsustain them in lane. Shove hard in good match-ups, and look to roam when your lane is shoved.");
		
		$mstart = "<p>Starting champions to learn for middle: Cho'Gath, Annie, Veigar, Heimerdinger, Malzahar</p>";
		$mavoid = "<p>Champions to avoid when starting: LeBlanc, Azir, Zed</p>";
		
$jTitle = "<h2>Jungle:</h2>";
$jrole = "<p>Jungle, you have the most unique role, and chances are your laning capabilities are not gonna be the best compared to others minus Support mains. You're looking to pick a champ that either scales really well, or an early game champion to gank lanes and put your team ahead. You will take smite, and will look to gank lanes when they're shoved or the enemy team laner is really low and is overextended. Your first clear is always the hardest, and take note of where the enemy jungler starts. If bot lane is late to lane, then their jungler started bottom, and if they started top, their top laner will be late. It's generally better low elo to start bottom lane, as you'll get the best leash and your micromange game is probably not the best. Keep in mind of where the enemy jungler is, and look to either gank or countergank lanes.</p>";
		
$jPick = "<p>The jungle you pick will decide whether you farm early, or look to snowball lanes. The enemy jungle pick will decide if they will attempt an invade or gank early/farm. This is the most dynamic role, as you have a major impact on the game. If you can get away with farming, farm. But always help lanes that are in trouble or are in danger of being ganked. You're looking to take objectives when you know where the enemy jungler is, and where the enemy team is. Objectives win games, CS is King, Objectives are Queen, and kills are Jacks. </p>";
		
$jVague = "<p>This is the most vague of the descriptions because the way you play will change almost EVERY single game because of players skill levels, and always different sitautions than last game. It's not as solid and concrete as lane match-ups.</p>";
		
$jstart = "<p>Starting champions to learn for jungle: Warwick, Udyr, Amumu, Volibear</p>";
$javoid = "<p>Champions to avoid when starting: Lee Sin, Lee Sin, Lee Sin... and... Lee Sin... oh and Nidalee.</p>";

$sTitle = "<h2>Support:</h2>";
$sRole = "<p>Supports job is to ward the map where your team has control and slowly push vision into the enemy teams jungle, and to help the ADC farm safely in lane, or help secure kills for the ADC. You're looking to peel, poke, intimidate, and zone the enemy bot lane. I highly, HIGHLY suggest you play tank support, OR JANNA. TANK SUPPORT OR JANNA. It's generally the best way to climb, and you offer your team great peeling, engage, and front line (not Janna... too squishy). You will likely build to support your team, buying items like Aegis of the Legion or Banner of Command, Frozen Heart, maxing out your starting item, SIGHTSTONE. Always rush sightstone. Vision is important. Buying pink wards and placing them in areas where your team has control or deep in the enemy jungle. When you buy sightstone, swap out your yellow trinket for a red trinket so you can clear enemy wards. Using the red trinket to sweep where you know the enemy team placed wards and sweeping objectives denies information for the enemy team, and gives your team advantages on the map.</p>";
		
$sLearn = "<p>Learn your lane match-ups, what supports you're good against, what adc's you're good against, what adc's you support well, and what adc's you don't support well. Knowing if you're lane is a kill lane, or a farm lane/defensive lane is important. It'll dictate how aggressive you can play in lane, and if you can go for kills without the help of your jungler. If your ADC is ahead and you're reaching mid-game, look to roam and help other lanes. Tell your ADC to play safe, but note if it's a bot lane that can dive or set up easy kills, you shouldn't roam as much.</p>";
		
$sstart = "<p>Starting champions to learn for support: Blitzcrank, Morgana, Alistar, Trundle</p>";
$savoid = "<p>Champions to avoid when starting: Thresh, Vel'koz</p>";
		
$aTitle = "<h2>ADC:</b>";
$aRole = "<p>ADC, you're arguably the carry of your team. You're a glass cannon that looks to melt the enemy team in teamfights while your team protects you. Your job is to farm, get items as fast as possible, and deal as much possible damage as you can in a teamfight. Your team relies on your damage to win the game, so position correctly and don't play too dangerous. As they said in Zelda... 'It's Dangerous to go alone!'. That's especially the case. Try to stick with at least one teammate at all times. Likely this will be your support. Look to harass in lane when the enemy adc goes to farm CS, ONLY if it's safe to harass. Try to gain lane advantage early, and pressure that advantage. Know what fights you can, and cannot take.</p>";
		
$astart = "<p>Starting champons to learn for adc: Tristana, Jinx, Lucian</p>";
$aavoid = "<p>Champions to avoid when starting: Vayne, Draven, Kalista</p>";

echo $title;
echo "<br /><br />";
echo $intro . $season . $pool . $ex . $warning . $mapa;
echo "<br />";
echo $topTitle;
echo "<br /><ul><top>";

for($t = 0; $t < count($top); $t++ ){
	echo "<li>$top[$t]</li>";
}
echo '</top><button id="tophide">Hide</button>
<button id="topshow">Show</button> </ul>';
echo "<br />";
echo $tlane . "<ul>";
for ($tl = 0; $t < count($topRole); $tl++){
	echo "<li>$topRole[$tl]</li>";
	
}
echo "</ul><br />";
echo $tpick . $tstart . $tavoid;
echo "<br />";


echo $midTitle;
echo "<br /><ul><mid>";

for($m = 0; $m < count($mid); $m++){
	echo "<li>$mid[$m]</li>";
}
echo '</mid>;<button id="midhide">Hide</button>
<button id="midshow">Show</button></ul>';
echo "<br />";
echo $midinfo . "<ul>";
for($ml = 0; $ml < count($midtype); $ml++){
	echo "<li>$midtype[$ml]</li>";
}
echo "</ul><br />";
echo $mstart . $mavoid;
echo "<br />";

echo $jTitle;
echo "<br /><ul><jg>";
for($j = 0; $j < count($jungle); $j++){
	echo "<li>$jungle[$j]</li>";
}
echo '</jg>
<button id="jghide">Hide</button>
<button id="jgshow">Show</button></ul>';
echo "<br />";
echo $jrole . $jPick . $jVague . $jstart . $javoid;
echo "<br />";


echo $sTitle;
echo "<br /><ul><supp>";
for($s = 0; $s < count($support); $s++){
	echo "<li>$support[$s]</li>";
}
echo '</supp>
<button id="supphide">Hide</button>
<button id="suppshow">Show</button></ul>';
echo "<br />";
echo $sRole . $sLearn . $sstart . $savoid;
echo "<br />";
echo $aTitle;
echo "<br /><ul><adc>";
for($a=0; $a<count($adc); $a++){
	echo "<li>$adc[$a]</li>";
}
echo '</adc><button id="adchide">Hide</button>
<button id="adcshow">Show</button></ul>';
echo "<br />";
echo $aRole . $astart . $aavoid;
echo "<br />";