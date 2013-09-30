<?php
	/**
		@author	:thibault Martin
		@mail	:thibault.martin.utc@gmail.com
		@date	:27/02/2012
	*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Coinch'UTC</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Site de Coinche de l'utc" />
        <meta name="keywords" content="utc, coinche, coinch'utc, coinche utc,coinchutc"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <style>
			body{
				background:#000000;
			}
			span.reference{
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:12px;
			}
			span.reference a{
				color:#aaa;
				text-transform:uppercase;
				text-decoration:none;
				text-shadow:1px 1px 1px #000;
				margin-right:30px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			ul.sdt_menu{
				margin-top:150px;
			}
			h1.title{
				background:transparent url(./images/title.png) no-repeat;
				width:200px;
				height:80px;
				display:block;
				margin:0px 0px 0px 20px;
				
			}
			h1.titleright{
				background:transparent url(./images/title.png) no-repeat;
				width:100px;
				height:80px;
				float:right;
			}
			li.floatGauche{
				height:200px;
				float:left;
			}
			li.floatRight{
				height:200px;
				float:right;
			}
			ul.floatGauche{
				height:100px;
				list-style-type:none;
			}
			img.float{
				position:fixed;
				right:10px;
				bottom:10px;
				width:150px;
				height:45px;
			}
			img.floatCenter{
				position:fixed;
				right:10px;
				bottom:10px;
				width:150px;
				height:45px;
			}

			html, body, #bg, #bg table, #bg td {
				 height:100%;
				 overflow:hidden;
				 width:100%;
			}
			#bg {
				 height:200%;/*le div bg doit �tre deux fois plus grand que la taille de l'�cran*/
				 width:200%;
				 left:-50%;/*on le d�cale de la moiti� de la taille de l'�cran en haut et � gauche*/
				 top:-50%;
				 position:absolute;
				 z-index:-200;/* pour qu'il soit toujours en dessous du reste du site*/
			}
			#bg td {
				 text-align:center; /* permet de centrer horizontalement l'image */
				 vertical-align:middle; /* permet de centrer verticalement l'image */
			}
			#bg img {
				 min-height:50%; /* l'image fera 50% de 200% de la taille de l'�cran soit 100%   */
				 min-width:50%; /* l'image fera 50% de 200% de la taille de l'�cran soit 100%   */
			}
			div.midd{
				position:fixed;
				left:100px;
				top:400px;
			}
			
		</style>
    </head>

    <body>
	<div id="bg">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<img  src="images/banniere.png">
				</td>
			</tr>
		</table>
	</div>
	<div>
		<div>
			<ul class="floatGauche">
			</ul>
		</div>
		<div>
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="">
						<img src="./images/valet.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Accueil</span>
							<span class="sdt_descr"></span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="./images/neuf.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Pr&eacute;sentation des participants</span>
							<span class="sdt_descr"></span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="./images/as.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Classements & R&eacute;sultats</span>
							<span class="sdt_descr"></span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="#">Les poules</a>
							<a href="#">R&eacute;sultat barrages</a>
							<a href="#">Phase finale</a>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="./images/dix.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Trucs & Astuces</span>
							<span class="sdt_descr"></span>
						</span>
					</a>
				</li>
				<li>
					<a href="regles.php">
						<img src="./images/roi.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">R&egrave;gles officielles</span>
							<span class="sdt_descr"></span>
						</span>
					</a>
				</li>
                <li>
					<a href="staff.php">
						<img src="images/dame.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">L'&eacute;quipe coinch'UTC P12</span>
							<span class="sdt_descr"></span>
						</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
