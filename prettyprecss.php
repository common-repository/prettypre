<? header("Content-type: text/css");

if (($_GET['style']=='1') || ($_GET['admin']=='1')) { ?>

pre, .standard { /* Standard pre style */
	background: #f3f3f7 !important;
	border: 1px solid #dedee3  !important;
	padding: 11px !important;
	font-size: 12px !important;
	line-height: 1.3em !important;
	overflow: auto !important;
	font-size: <?php echo $_GET['ts']; ?>px !important;
}

<? } if (($_GET['style']=='3') || ($_GET['admin']=='1')) { ?>

pre, .linux { /* Linux Terminal */
	background:#000000 !important;
	color:#ffffff !important;
	padding: 11px !important;
	font-size: <?php echo $_GET['ts']; ?>px !important;
}

<? } if (($_GET['style']=='2') || ($_GET['admin']=='1')) { ?>

@font-face { /* Import Press Start 2P Font from Google */
  font-family: 'Press Start 2P';
  font-style: normal;
  font-weight: 400;
  src: local('Press Start 2P'), local('PressStart2P-Regular'), url(//fonts.gstatic.com/s/pressstart2p/v3/8Lg6LX8-ntOHUQnvQ0E7o3dD2UuwsmbX3BOp4SL_VwM.woff) format('woff');
}

pre, .apple { /* Apple IIe */
	background:#000000 !important;
	color:#67e744 !important;
	font-size: <?php echo $_GET['ts']-2; ?>px !important;
	font-family: 'Press Start 2P', Arial, serif !important; 
	font-weight: 50 !important;
	padding: 11px !important;
}

<? } if (($_GET['style']=='4') || ($_GET['admin']=='1')) { ?>

@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 400;
  src: local('Oswald Regular'), local('Oswald-Regular'), url(//themes.googleusercontent.com/static/fonts/oswald/v8/-g5pDUSRgvxvOl5u-a_WHw.woff) format('woff');
}

pre, .suzette { /* Suzette Terminal */
	font-family: 'Oswald', Arial, serif !important;
	background:#4b0082 !important;
	color:#FF0080 !important;
	padding: 11px !important;
	font-size: <?php echo $_GET['ts']; ?>px !important;
}


<? } if (($_GET['style']=='5') || ($_GET['admin']=='1')) { ?>

@font-face {
  font-family: 'VT323';
  font-style: normal;
  font-weight: 400;
  src: local('VT323'), local('VT323-Regular'), url(//fonts.gstatic.com/s/vt323/v6/LfMzj2MWAZU6qzlnp1MNbg.woff) format('woff');
}

pre, .dos { /* DOS Terminal */
	font-family: 'VT323', Arial, serif !important;
	background:#000000 !important;
	color:#ffffff !important;
	padding: 11px !important;
	font-size: <?php echo $_GET['ts']+2; ?>px !important;
}

<? } if (($_GET['style']=='6') || ($_GET['admin']=='1')) { ?>

@font-face {
  font-family: 'CSIXFOUR';
  src: url(//prettypre.com/assets/fonts/c64.woff);
}

pre, .commodore { /* Commodore64 Terminal */
	font-family: 'CSIXFOUR', Arial, serif !important;
	background:#5048b2 !important;
	color:#8bcad1 !important;
	padding: 11px !important;
	font-size: <?php echo $_GET['ts']; ?>px !important;
}

<? } if (($_GET['style']=='7') || ($_GET['admin']=='1')) { ?>

@font-face {
  font-family: 'handwritten';
  src: url(//prettypre.com/assets/fonts/VAG-HandWritten-webfont.woff);
}

pre, .hand { /* handwritten */
	font-family: 'handwritten', Arial, serif !important;
	background:#FFFFFF !important;
	color:#333333 !important;
	padding: 11px !important;
	font-size: <?php echo $_GET['ts']+6; ?>px !important;
}

<? } if (($_GET['style']=='8') || ($_GET['admin']=='1')) { ?>

@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(//themes.googleusercontent.com/static/fonts/opensans/v8/DXI1ORHCpsQm3Vp6mXoaTXhCUOGz7vYGh680lGh-uXM.woff) format('woff');
}

pre, .schulp { /* @markitmedia */
	font-family: 'Open Sans', Arial, serif !important;
	background:#de1e7e !important;
	color:#ffffff !important;
	padding: 11px !important;
	font-size: <?php echo $_GET['ts']; ?>px !important;
}
<? } ?>
