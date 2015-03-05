<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Mon carnet d'adresse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" href="img/favicon.png">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<a href="https://github.com/Yachironi/CarnetAdresses"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-12 column">
				<div class="page-header">
					<h1> Mon carnet d'adresse <small>Projet de Yasser RABI</small></h1>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<div class="tabbable" id="tabs-802249">
							<!-- ###### Bootsrap nav tab element ###### -->
					<ul class="nav nav-tabs right-tabs">

						<li>
							<a href="#ajoutAdresse" data-toggle="tab">Ajouter un contact</a>
						</li>
						<li class="active ">
							<a href="#consultAdresse" data-toggle="tab">Mes contacts</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="consultAdresse">
							<div style="max-width: 550px; margin-top: 20px;" id="adresses">

							</div>
						</div>
						<div class="tab-pane" id="ajoutAdresse">
							<div id="form-container" style="max-width: 550px; margin-top: 20px;">

								<form id="adresseform" class="form-horizontal">
									<div class="form-group required">
										<label for="nom" class="col-sm-3 control-label">Nom</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
										</div>
									<!-- ###### L'affichage des erreurs est ici ###### -->
										<label class="non_error_label" id="error_nom" for="nom">Veuillez compléter ce champ</label>
									</div>
									<div class="form-group required">
										<label for="email" class="col-sm-3 control-label">Adresse mail</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="email" name="email" placeholder="Adresse mail">
										</div>
																			<!-- ###### L'affichage des erreurs est ici ###### -->

										<label class="non_error_label" id="error_mail" for="nom">Adresse mail invalide</label>

									</div>
									<div class="form-group">
										<label for="notes" class="col-sm-3 control-label">Notes</label>
										<div class="col-sm-9">
											<textarea class="form-control" rows="3" id="notes" name="notes" placeholder="Notes"></textarea>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button class="btn btn-default" id="enregistrer">
												Enregistrer
											</button>
										</div>
									</div>
								</form>
								<!-- ###### L'affichage de réponse du serveur est ici ###### -->
								<div id="sucess" style="display:none;" class="alert alert-success" role="alert">Ajout d'adresse fait avec succès</div>
								<div id="fail" style="display:none;" class="alert alert-danger" role="alert">Oups...Une faute à quelque part</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ###### Bannière d'auteur ###### -->
		<div class="row clearfix ">
		 <div class="col-md-4 col-md-offset-5">Copyleft Yasser RABI - ET4 Info - Polytech Paris-Sud</div>
		</div>
	</div>
</body>

</html>
