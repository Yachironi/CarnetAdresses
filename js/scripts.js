/*
 * Ce fichier contient toute les méthodes qui traite l'enregistrement
 * et la mise à jour des adresse après l'ajout à la base des donnèes
 */

$(document).ready(function() {
	// Affichage des adresses à partir de la base de donnèes
	update_adresses();

	// Déclancheur d'action sur la soumission du formulaire d'ajout d'adresse
	$("#adresseform").submit(function(event) {
		//stop form from submitting normally
		event.preventDefault();

		// Conversion de toutes les champs du formulaire sous format :  key=value&key=value
		var datastring = $("#adresseform").serialize();

		// Appel de asynchrone de la page enregistrer.php
		$.ajax({
			type: "post",
			url: "./src/enregistrer.php",
			data: datastring,
			dataType: "json",
			contentType: "application/x-www-form-urlencoded",
			success: function(responseData, textStatus, jqXHR) {

				console.info(responseData);

				if (responseData.nom != "true" || responseData.email != "true") {
					if (responseData.nom != "true") {
						// Affichage de la banière informative
						$('#fail').fadeIn("fast", function() {
							$(this).delay(2000).fadeOut("slow");
						});
						// Affichage du message d'erreur sous les champs du formulaire
						$("#error_nom").attr("class", "error_label");
						$("#error_nom").html(responseData.nom);
					}
					else {
						// Remise à zèro des erreurs
						$("#error_nom").attr("class", "non_error_label");
						$("#error_nom").html();
					}
					if (responseData.email != "true") {
						// Affichage de la banière informative
						$('#fail').fadeIn("fast", function() {
							$(this).delay(2000).fadeOut("slow");
						});
						// Affichage du message d'erreur sous les champs du formulaire
						$("#error_mail").attr("class", "error_label");
						$("#error_mail").html(responseData.email);
					}
					else {
						// Remise à zèro des erreurs
						$("#error_mail").attr("class", "non_error_label");
						$("#error_mail").html();
					}
				}
				else {

					// Remise à zèro des erreurs
					$("#error_mail").attr("class", "non_error_label");
					$("#error_nom").attr("class", "non_error_label");
					$("#error_nom").html();
					$("#error_mail").html();

					// Affichage de la banière informative
					$('#sucess').fadeIn("fast", function() {
						$(this).delay(1000).fadeOut("slow");
					});

					// Réinisialisation du formulaire
					$('#adresseform')[0].reset();

					// Mise à jour de la page qui affiche les adresses
					update_adresses();
				}

			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(errorThrown);
			}
		})
	});

});


/*
 * Fonction qui mis à jour la page qui affiche les adresses
 */
function update_adresses() {

	$("#adresses").html("");
	$.getJSON("./src/update.php", function(data) {
		$.each(data.adresses, function(i, adresse) {
			var newRow =
				"<table class=\"table table-bordered\">" + "<tr>" + "<td class=\"active col-sm-3\">Nom</td>" + "<td class=\"col-sm-9\">" + adresse.nom + "</td>" + "</tr>" + "<tr>" + "<td class=\"active col-sm-3\">Adresse mail</td>" + "<td class=\"col-sm-9\">" + adresse.email + "</td>" + "</tr>";

			if (adresse.notes != "") {
				newRow = newRow + "<tr>" + "<td class=\"active col-sm-3\">Notes</td>" + "<td class=\"col-sm-9\">" + adresse.notes + "</td>" + "</tr>" + "</table>";
			}
			else {
				newRow = newRow + +"</table>";
			}


			$(newRow).appendTo("#adresses");
		});
	});
}