<?php /*
---------------------------------
HOME TEMPLATE
--------DEFAULTNI DIV--------
div l_table = leva cast webu 
div m_table = stredni cast webu
div r_table = prava cast webu
--------DOSTUPNE MODULY--------
viz jak zapojit dostupne moduly root/manual/dostupne_moduly.html
--------PHP FUNKCE--------
zadne
---------------------------------
*/?>
<div id="l_table">
	<div class="l_table2">
    <div class="l_table_in">
	<?php include "rubicon/modules/category/filtrace.php"; ?>
    <?php include "rubicon/modules/category/menu.php";?>
    </div>
    </div>
    <?php include TML_URL."/category/banners_left.php";?>
</div>

<div class="fr">
<div id="m_home">
<div class="h_obsah"><div class="h_obsah_in">
<?php if ($DOMAIN_ID == 5) { ?>
    <h1>Vítejte na oficiálních stránkách výhradního dovozce značky <strong class="red">Blizzard</strong></h1>
<?php } elseif ($DOMAIN_ID == 6) { ?>
    <h1>Vítejte na oficiálních stránkách výhradního dovozce značky <strong class="red">Tecnica</strong></h1>
<?php } elseif ($DOMAIN_ID == 7) { ?>
    <h1>Vítejte na oficiálních stránkách výhradního dovozce značky <strong class="red">Kross</strong></h1>
<?php } elseif ($DOMAIN_ID == 8) { ?>
    <h1>Vítejte na oficiálních stránkách výhradního dovozce značky <strong class="red">BOOT DOC</strong></h1>
<?php } elseif ($DOMAIN_ID == 9) { ?>
    <h1>Vítejte na oficiálních stránkách výhradního dovozce značky <strong class="red">Hotronic</strong></h1>    
<?php } ?>
	<div class="h_producer">
	  <?php /*<a href="http://www.blizzardski.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5t','','<?php echo $ROOT; ?>/images/weby/blizzard_a.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/blizzard<?php if ($DOMAIN_ID == 5) { echo "_a"; } ?>.png" alt="Blizzard" name="Image5t"  border="0" id="Image5t" /></a><br />
	  <a href="http://www.tecnicacz.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6t','','<?php echo $ROOT; ?>/images/weby/tecnica_a.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/tecnica<?php if ($DOMAIN_ID == 6) { echo "_a"; } ?>.png" alt="Tecnica" name="Image6t" border="0" id="Image6t" /></a><br />
	  <a href="http://www.wintersteiger.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7t','','<?php echo $ROOT; ?>/images/weby/wintersteiger_a.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/wintersteiger.png" alt="Wintersteiger" name="Image7t" border="0" id="Image7t" /></a><br />
	  <a href="http://www.waxfuture.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8t','','<?php echo $ROOT; ?>/images/weby/wax_future_a.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/wax_future.png" alt="Wax Future" name="Image8t" border="0" id="Image8t" /></a><br />
	  <a href="http://www.krossbike.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9k','','<?php echo $ROOT; ?>/images/weby/kross_bike_a.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/kross_bike<?php if ($DOMAIN_ID == 7) { echo "_a"; } ?>.png" alt="Kross bike" name="Image9k" border="0" id="Image9k" /></a><br />
	  <a href="http://www.bootdoc.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10k','','<?php echo $ROOT; ?>/images/weby/boot-doc_a.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/boot-doc<?php if ($DOMAIN_ID == 8) { echo "_a"; } ?>.png" alt="BOOT DOC" name="Image10k" border="0" id="Image10k" /></a><br />
	  <a href="http://www.hotronic.eu/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11k','','<?php echo $ROOT; ?>/images/weby/hotronic_a.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/hotronic<?php if ($DOMAIN_ID == 9) { echo "_a"; } ?>.png" alt="FERRINI BIKE" name="Image11k" border="0" id="Image11k" /></a><br />      
    */ ?>
	  <a href="http://www.blizzardski.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5t','','<?php echo $ROOT; ?>/images/weby/blizzard_a.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/blizzard<?php if ($DOMAIN_ID == 5) { echo "_a"; } ?>.png" alt="Blizzard" name="Image5t"  border="0" id="Image5" /></a><br />
	  <a href="http://www.tecnicacz.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6t','','<?php echo $ROOT; ?>/images/weby/tecnica_a.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/tecnica<?php if ($DOMAIN_ID == 6) { echo "_a"; } ?>.png" alt="Tecnica" name="Image6t" border="0" id="Image6" /></a><br />
	  <a href="http://www.wintersteiger.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7t','','<?php echo $ROOT; ?>/images/weby/wintersteiger_a.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/wintersteiger.png" alt="Wintersteiger" name="Image7t" border="0" id="Image7" /></a><br />
	  <a href="http://www.waxfuture.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8t','','<?php echo $ROOT; ?>/images/weby/wax_future_a.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/wax_future.png" alt="Wax Future" name="Image8t" border="0" id="Image8" /></a><br />
	  <a href="http://www.krossbike.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9k','','<?php echo $ROOT; ?>/images/weby/kross_bike_a_1.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/kross_bike<?php if ($DOMAIN_ID == 7) { echo "_a"; } ?>_1.png" alt="Kross bike" name="Image9k" border="0" id="Image9k" /></a><br />
    <a href="http://www.bootdoc.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10k','','<?php echo $ROOT; ?>/images/weby/bootdoc-on.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/bootdoc<?php if ($DOMAIN_ID == 8) { echo "-on"; } else { echo "-off" ;} ?>.png" alt="BOOT DOC" name="Image10k" border="0" id="Image10k" style="margin-top: 10px;" /></a><br />
    <img src="<?php echo $ROOT; ?>/images/weby/BMC-logo-off.jpg" alt="BMC" name="" border="0" id="" style="margin-top: 10px;" /><br />
    <a href="http://www.hotronic.eu/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11k','','<?php echo $ROOT; ?>/images/weby/hotronic_a_1.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/hotronic<?php if ($DOMAIN_ID == 9) { echo "_a"; } ?>_1.png" alt="FERRINI BIKE" name="Image11k" border="0" id="Image11k" style="margin-top: 10px;" /></a><br />      
    <a href="http://eyewear4you.cz/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12k','','<?php echo $ROOT; ?>/images/weby/redbull-on_1.png',1)"><img src="<?php echo $ROOT; ?>/images/weby/redbull-off_1.png" alt="Red Bull" name="Image12k" border="0" id="Image12k" style="margin-top: 10px;" /></a><br />

<br /><br /><br />
<?php 
if ($DOMAIN_ID == 5) { $i_web_skupina = 9; }
elseif ($DOMAIN_ID == 6) { $i_web_skupina = 14; }
elseif ($DOMAIN_ID == 7) { $i_web_skupina = 22; }
elseif ($DOMAIN_ID == 8) { $i_web_skupina = 26; }
elseif ($DOMAIN_ID == 9) { $i_web_skupina = 32; }	
if ($i_web_skupina!=NULL) {
	$query_data_banner = "SELECT * FROM banners where skupina = '".$i_web_skupina."' order by web,skupina,pozice ASC";
	$data_banner = pg_query($query_data_banner);
	$row_data_banner = pg_fetch_assoc($data_banner);
	$totalRows_data_banner = pg_num_rows($data_banner);
	do {
		if ($row_data_banner['url']<>"") { ?>
			<a href="<?php echo $row_data_banner['url']; ?>"><?php
		} 
		$swf_banner = explode('.',$row_data_banner['soubor']);
		$swf_banner = $swf_banner[1];
		if ($swf_banner=="swf") { ?>
			<object class="home_b" width="184" height="260" data="<?php echo ROOT_URL.'/'.$row_data_banner['soubor']; ?>" type="application/x-shockwave-flash" class="fl"><param value="<?php echo ROOT_URL.'/'.$row_data_banner['soubor']; ?>" name="movie"/></object><?php 
		} else { ?>
			<img class="home_b" src="<?php echo ROOT_URL.'/'.$row_data_banner['soubor']; ?>" data-thumb="<?php echo ROOT_URL.'/'.$row_data_banner['soubor']; ?>" border="0" />
			<br /><br /><?php
		}
		if ($row_data_banner['url']<>"") { ?>
			</a><?php
		}
	} while ($row_data_banner = pg_fetch_assoc($data_banner));
}
?>

	</div>
	<div class="h_text">
    	<br />
        <?php include TML_URL."/category/banners_center.php";?>
        <img src="<?php echo $ROOT; ?>/images/weby/down_news_5.jpg" alt="" />

		<div class="h_download">
		<?php 
        if ($DOMAIN_ID == 5) { $i_web_skupina = 8; }
        elseif ($DOMAIN_ID == 6) { $i_web_skupina = 13; }
        elseif ($DOMAIN_ID == 7) { $i_web_skupina = 19; }
        elseif ($DOMAIN_ID == 8) { $i_web_skupina = 25; }
        elseif ($DOMAIN_ID == 9) { $i_web_skupina = 30; }	
        if ($i_web_skupina!=NULL) {
            $query_data_banner = "SELECT * FROM banners where skupina = '".$i_web_skupina."' order by web,skupina,pozice ASC";
            $data_banner = pg_query($query_data_banner);
            $row_data_banner = pg_fetch_assoc($data_banner);
            $totalRows_data_banner = pg_num_rows($data_banner);
            do {
                if ($row_data_banner['url']<>"") { ?>
                    <a href="<?php echo $row_data_banner['url']; ?>"><?php
                } 
                $swf_banner = explode('.',$row_data_banner['soubor']);
                $swf_banner = $swf_banner[1];
                if ($swf_banner=="swf") { ?>
                    <object class="garance_bliz" width="184" height="260" data="<?php echo ROOT_URL.'/'.$row_data_banner['soubor']; ?>" type="application/x-shockwave-flash" class="fl"><param value="<?php echo ROOT_URL.'/'.$row_data_banner['soubor']; ?>" name="movie"/></object><?php 
                } else { ?>
                    <img class="garance_bliz" src="<?php echo ROOT_URL.'/'.$row_data_banner['soubor']; ?>" data-thumb="<?php echo ROOT_URL.'/'.$row_data_banner['soubor']; ?>" border="0" />
                    <br /><br /><?php
                }
                if ($row_data_banner['url']<>"") { ?>
                    </a><?php
                }
            } while ($row_data_banner = pg_fetch_assoc($data_banner));
        }
        ?>        
        
        <div class="spacer"></div>
		</div>
		<?php if ($DOMAIN_ID != 8) { ?><img src="<?php echo $ROOT; ?>/images/weby/oddel.jpg" class="fl" alt="" /><?php } ?>
		<div class="h_news">
			<?php
			$cislo_menu = 2;
			if ($DOMAIN_ID == 5) { 
				$cislo_sloupce = 1;
			} elseif ($DOMAIN_ID == 6) {
				$cislo_sloupce = 4;			
			} elseif ($DOMAIN_ID == 7) {
				$cislo_sloupce = 2;
			} elseif ($DOMAIN_ID == 8) {
				$cislo_sloupce = 2;
			} elseif ($DOMAIN_ID == 9) {
				$cislo_sloupce = 2;				
			}
			$select_rmona = "select * from rmona.table_".$DOMAIN_ID_TABLE."_in where table_id = '".$cislo_sloupce."' and zobrazit = 1 order by poradi asc LIMIT 1";
			$rmona_menu = pg_query($select_rmona);
			$row_rmona = pg_fetch_assoc($rmona_menu);
			if (($row_rmona["id"] == 383) and ($DOMAIN_ID == 5)) {
				$row_rmona["url"] = "http://www.blizzardski.cz/rakousko/";
			} elseif (($row_rmona["id"] == 379) and ($DOMAIN_ID == 6)) {
				$row_rmona["url"] = "http://www.tecnicacz.cz/rakousko/";
			} 
			?>
		<?php if(file_exists("data_".$DOMAIN_ID_TABLE."/".$row_rmona["id"]."mini.jpg")) { // overeni obrazku - SECURE MONA! ?>
				<p><a href="<?php echo $row_rmona["url"]; ?>"><img src="<?php echo "../".$cesta_vystup."data_".$DOMAIN_ID_TABLE."/".$row_rmona["id"]."mini.jpg";?>" alt="<?php echo $row_rmona["nazev1"];?>" title="<?php echo $row_rmona["nazev1"];?>" border="0" height="60" /></a></p>
			<?php } // END - overeni obrazku - SECURE MONA! ?>
				<h1 class="red"><a href="<?php echo $row_rmona["url"]; ?>"><?php echo $row_rmona["nazev1"];?></a></h1>	
				<?php if ($row_rmona["nazev2"]<>"") { ?><h2><?php echo $row_rmona["nazev2"];?></h2><?php } ?>
			<?php
				$row_rmona["zkraceny_vypis"] = str_replace("../../tiny/", $cesta_vystup."tiny/", $row_rmona["zkraceny_vypis"]);
				echo $row_rmona["zkraceny_vypis"]; ?> <br />
		</div>
	</div>
	<div class="spacer"></div>
</div></div>
</div>

<div id="down_table"><?php include "rubicon/body/down.php";?></div>

</div>


zmenaaa

