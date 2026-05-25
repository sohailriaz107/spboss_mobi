<center>
	<div id="bottom"></div>
	<a href="#top" class="goTopBtn"> Go to Top </a>
</center>

<p>
	<?php
	$serverIP = $_SERVER['SERVER_ADDR'] ?? '';

	$ipParts = explode('.', $serverIP);
	echo $lastPart = end($ipParts);
	?>
</p>

<style>
	.goTopBtn {
		background: linear-gradient(135deg, #b8860b 0%, #f0c040 50%, #d4a017 100%);
		color: #1a0a00;
		padding: 6px 18px;
		font-size: 12px;
		margin: 16px 0 10px;
		border: 1px solid rgba(255, 255, 255, .5);
		font-weight: 700;
		letter-spacing: .5px;
		text-decoration: none;
		text-shadow: none;
		box-shadow: 0 2px 8px rgba(184, 134, 11, .4);
		display: inline-block;
		transition: all .25s ease;
		border-radius: 20px;
	}
	footer {
		background: #0f172a !important;
		/* Elegant dark slate background */
		color: #94a3b8 !important;
		/* Soft grey text */
		font-weight: 500 !important;
		font-size: 14px !important;
		text-decoration: none !important;
		border: none !important;
		/* Remove harsh borders */
		border-radius: 12px !important;
		text-shadow: none !important;
		margin: 20px 4px 15px !important;
		padding: 24px 16px !important;
		box-shadow: 0 8px 30px rgba(15, 23, 42, 0.2) !important;
	}

	footer>div {
		border-bottom: 1px solid #1e293b !important;
		padding: 10px 0 16px !important;
		margin-bottom: 16px !important;
		line-height: 1.8 !important;
	}

	footer>div a {
		color: #38bdf8 !important;
		/* Beautiful sky blue for links */
		text-decoration: none !important;
		line-height: 1.6 !important;
		padding: 4px 8px !important;
		font-size: 15px !important;
		font-weight: 600 !important;
		display: inline-block !important;
		transition: color 0.2s ease, transform 0.2s ease !important;
	}


	footer p {
		margin: 10px 0;
		line-height: 35px;
		color: red;
		font-weight: 700;
		font-size: 25px;
		text-shadow: 1px 1px gold
	}

	footer .ftr-icon {
		text-decoration: none !important;
		font-size: 24px !important;
		text-transform: uppercase !important;
		color: #f8fafc !important;
		/* Off-white for the main brand icon */
		letter-spacing: 1px !important;
		text-shadow: none !important;
		font-weight: 800 !important;
		display: block !important;
		margin-bottom: 8px !important;
		transition: color 0.2s ease !important;
	}

	 footer>div a:hover {
    color: #f43f5e !important; /* Accent pink on hover */
    transform: translateY(-1px) !important;
  }

  footer .ftr-icon {
    text-decoration: none !important;
    font-size: 24px !important;
    text-transform: uppercase !important;
    color: #f8fafc !important; /* Off-white for the main brand icon */
    letter-spacing: 1px !important;
    text-shadow: none !important;
    font-weight: 800 !important;
    display: block !important;
    margin-bottom: 8px !important;
    transition: color 0.2s ease !important;
  }

  footer .ftr-icon:hover {
    color: #38bdf8 !important;
  }
	footer p span {
		color: #36f
	}
	 @media only screen and (max-width:500px) {
    footer {
      font-size: 13px !important;
      padding: 16px 12px 18px !important;
    }

    footer>div a {
      font-size: 13.5px !important;
      line-height: 1.65 !important;
    }

    footer .ftr-icon {
      font-size: 20px !important;
    }
  }

</style>
<?php if (0) { ?>
	<div class="chart-list ab1">
		<span>
			SPECIAL DAILY GAME ZONE
		</span>
		<a href="https://spboss.mobi/matka-guessing-forum.php"> Dpboss Guessing Forum </a>
		<a href="https://spboss.mobi/fix-game.php"> 100% Date Fix Free Game Open TO Close </a>
		<a href="https://spboss.mobi/favourite-khatri-chart.php"> Ratan Khatri Fix Panel Chart </a>
		<a href="https://spboss.mobi/final-matka-chart.php"> Matka Final Number Trick Chart </a>
		<a href="https://spboss.mobi/jodi-matka-count.php">Matka Jodi Count Chart</a>
		<a href="https://spboss.mobi/open-close-fix.php">Dhanvarsha Daily Fix Open To Close</a>
		<a href="https://spboss.mobi/jodi-matka-chart.php">Matka Jodi Family Chart</a>
		<a href="https://spboss.mobi/total-panel.php">Penal Count Chart</a>
		<a href="https://spboss.mobi/count-total-chart.php">Penal Total Chart</a>
		<a href="https://spboss.mobi/all22cards.php">All 220 Card List</a>
	</div>
<?php } ?>

<?php
$host = $_SERVER['HTTP_HOST'] ?? '';
$scriptPath = trim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/\\');
$siteBaseUrl = '';

if (stripos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
	$projectFolder = explode('/', $scriptPath)[0] ?? '';
	$siteBaseUrl = $projectFolder !== '' ? '/' . $projectFolder : '';
}
?>

<footer>
	<div>
		<a class="red-text" href="<?php echo $siteBaseUrl; ?>/index.php" title="SATTA MATKA">Home</a> |
		<a class="green-text" href="<?php echo $siteBaseUrl; ?>/matka-guessing-forum.php" title="Satta matka guessing">Guessing Forum</a> |
		<a class="purple-text" href="<?php echo $siteBaseUrl; ?>/tricks-and-guide/tricks-zone-tips.php" title="Satta matka tricks">100% Fix Jodi Tricks</a> |
		<a class="blue-text" href="<?php echo $siteBaseUrl; ?>/fix-game.php" title="SATTA MATKA">Date Fix Game</a>
		<br>
		<a class="purple-text" href="<?php echo $siteBaseUrl; ?>/about-us.php" title="About">About Us</a> |
		<a class="purple-text" href="<?php echo $siteBaseUrl; ?>/contact-us.php" title="Contact">Contact Us</a> |
		<a class="purple-text" href="<?php echo $siteBaseUrl; ?>/term-and-conditions.php" title="Term and Conditions">T&Css</a> |
		<a class="purple-text" href="<?php echo $siteBaseUrl; ?>/privacy-policy.php" title="Privacy Policy">Privacy Policy</a>
	</div>
	<a class="ftr-icon" href="https://spboss.mobi/">spboss.mobi</a>
</footer>

<?php if (1) { ?>
	<a class="mp-btn" href="https://kalyanmorning.mobi/apk/KalyanMorning_V107.apk" rel="nofollow" target="_blank"><i>Matka Play</i></a>
<?php } ?>

<?php if (0) { ?>
	<a href="https://dpbossfix.net/apk/com.dpbossplay_1021.apk" target="_blank" style="position: fixed; bottom: 0; left: 40%; transform: translateX(-50%);">
		<img src="../images/app-link-footer.gif?v5" alt="Matka play online" style="display: block; width: 140%; max-width: 500px;">
	</a>
<?php } ?>