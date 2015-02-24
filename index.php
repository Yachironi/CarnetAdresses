<!DOCTYPE html>
<html lang="en">
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
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="img/favicon.png">

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
	</head>

	<body>
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
						<ul class="nav nav-tabs right-tabs">

							<li class="active " >
								<a href="#panel-935833" data-toggle="tab">Ajouter un contact</a>
							</li>
							<li >
								<a href="#panel-294850" data-toggle="tab">Mes contacts</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="panel-294850">
								<table class="table">
									<thead>
										<tr>
											<th> # </th>
											<th> Product </th>
											<th> Payment Taken </th>
											<th> Status </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td> 1 </td>
											<td> TB - Monthly </td>
											<td> 01/04/2012 </td>
											<td> Default </td>
										</tr>
										<tr class="active">
											<td> 1 </td>
											<td> TB - Monthly </td>
											<td> 01/04/2012 </td>
											<td> Approved </td>
										</tr>
										<tr class="success">
											<td> 2 </td>
											<td> TB - Monthly </td>
											<td> 02/04/2012 </td>
											<td> Declined </td>
										</tr>
										<tr class="warning">
											<td> 3 </td>
											<td> TB - Monthly </td>
											<td> 03/04/2012 </td>
											<td> Pending </td>
										</tr>
										<tr class="danger">
											<td> 4 </td>
											<td> TB - Monthly </td>
											<td> 04/04/2012 </td>
											<td> Call in to confirm </td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane active" id="panel-935833">
								<div id="form-container" style="max-width: 550px; margin-top: 20px;">

									<form id="adresseform" class="form-horizontal" >
										<div class="form-group required">
											<label for="nom" class="col-sm-3 control-label">Nom</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" >
											</div>
											<label class="non_error_label" id="error_nom" for="nom" >Veuillez compléter ce champ</label>
										</div>
										<div class="form-group required">
											<label for="email" class="col-sm-3 control-label">Adresse mail</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="email" name="email" placeholder="Adresse mail" >
											</div>
											<label class="non_error_label" id="error_mail" for="nom" >Adresse mail invalide</label>

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
							
												    <!-- <input type="submit" value="enregistrer" id="enregistrer" />-->
											</div>
										</div>
									</form>
								
								<!--
								================

								<div class="first">
								<label for="name">Nom:</label>
								</div>
								<div class="second">
								<input type="text" class="form-control" id="name">
								</div>
								<div class="first">
								<label for="mail">Adresse mail:</label>
								</div>
								<div class="second">
								<input type="text" class="form-control" id="mail">
								</div>
								<div class="first" >
								<label for="notes">Notes :</label>
								</div>
								<div class="second">
								<textarea class="form-control" rows="3" id="notes" style="margin-bottom: -65px;"></textarea>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>
