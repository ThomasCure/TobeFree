<?php
/* Smarty version 3.1.30, created on 2018-02-27 16:52:17
  from "/var/www/html/projet/sources/critere/critere.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a957eb16a8e58_16565699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5789e987724bb86dc1aa287dea503b1fc35bfc53' => 
    array (
      0 => '/var/www/html/projet/sources/critere/critere.html',
      1 => 1519746712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a957eb16a8e58_16565699 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="2beefree" />
		<title>Recherche critère</title>
		<link href="sources/styleMain.css" rel="stylesheet" type="text/css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="sources/scriptMain.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div>
			<a href="./accueil">
				<img src="sources/images/logo.jpg"><h1>Nom site</h1>
			</a>
		</div>
		<div class="menu">
			<nav>
				<ul>
					<li><a href="./inscription">inscription</a></li>
					<li><a href="./critere">Recherche de pathologie par critère</a></li>
					<li><a href="./symptome">Recherche de pathologie par symptome</a></li>
					<li><a href="./information">Informations</a></li>
				</ul>
			</nav>
		</div>
		<div class="corps">
			<h2>Recherche de pathologie par critère</h2>
			<form method="post" action="">
				<span class="deroule" onclick="javascript:toggleDisplay('meridien')">Selection du méridien</span>
				<fieldset id="meridien">
					<label><input type="checkbox" name="meridien">Coeur</label>
					<label><input type="checkbox" name="meridien">Poumon</label>
					<label><input type="checkbox" name="meridien">Yin Wei Mai</label>
				</fieldset>
				<span class="deroule" onclick="javascript:toggleDisplay('type')">Selection du type de pathologie</span>
				<fieldset id="type">
					<label><input type="checkbox" name="type">Meridien</label>
					<label><input type="checkbox" name="type">Voie luo</label>
					<label><input type="checkbox" name="type">Zang</label>
				</fieldset>
				<span class="deroule" onclick="javascript:toggleDisplay('caract')">Selection des caractéristiques</span>
				<fieldset id="caract">
					<label><input type="checkbox" name="caract">Plein</label>
					<label><input type="checkbox" name="caract">Chaud</label>
					<label><input type="checkbox" name="caract">Interne</label>
				</fieldset>
				<input type="submit" name="valider" class="valider">
			</form>
			<div>
				<h3>Résultat de la recherche</h3>
				<ul>
					<li><a href="./pathologie" target="blank">Pathologie1</a></li>
					<li><a href="./pathologie" target="blank">Pathologie2</a></li>
					<li><a href="./pathologie" target="blank">Pathologie3</a></li>
				</ul>
			</div>
		</div>
	</body>
</html><?php }
}
