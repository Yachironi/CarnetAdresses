/*function enregistrer() {
 var OAjax;
 if (window.XMLHttpRequest)
 OAjax = new XMLHttpRequest();
 else if (window.ActiveXObject)
 OAjax = new ActiveXObject('Microsoft.XMLHTTP');
 OAjax.open('POST', "src/enregistrer.php", true);
 OAjax.onreadystatechange = function() {
 if (OAjax.readyState == 4 && OAjax.status == 200) {
 if (document.getElementById) {
 if (OAjax.responseText == 'true') {// OK
 document.getElementById('error_nom').innerHTML = '<font color=GREEN> True </font>';
 } else { //  PAS OK
 document.getElementById('error_nom').innerHTML = '<font color=RED>' + OAjax.responseText + '</font>';
 document.getElementById('error_mail').innerHTML = '<font color=RED>' + OAjax.responseText + '</font>';
 }
 }
 }
 }
 OAjax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
 OAjax.send($("#adresse_form").serialize());
 //OAjax.send('lat=' + lat + '&lng=' + lng + '&desc=' + desc + '&icon=' + icon + '&titre=' + titre);
 }*/

$(document).ready(function() {
	$("#adresseform").submit(function(event) {

		//stop form from submitting normally
		event.preventDefault();

		var datastring = $("#adresseform").serialize();
		//	alert(datastring);

		$.ajax({
			type: "post",
			url: "./src/enregistrer.php",
			data: datastring,
			dataType: "json",
			contentType: "application/x-www-form-urlencoded",
			success: function(responseData, textStatus, jqXHR) {
				/*	if(responseData=="true"){
				 alert("Sucess !!");
				 }else{
				 alert(responseData);
				 }*/
				console.info(responseData);
				if (responseData.nom != "true" || responseData.email != "true") {
					if (responseData.nom != "true") {
						//alert(responseData.nom);
						$('#fail').fadeIn("fast", function() {
							$(this).delay(2000).fadeOut("slow");
						});
						$("#error_nom").attr("class", "error_label");
						$("#error_nom").html(responseData.nom);
					}
					else {
						$("#error_nom").attr("class", "non_error_label");
						$("#error_nom").html();
					}
					if (responseData.email != "true") {
						//alert(responseData.email);
						$('#fail').fadeIn("fast", function() {
							$(this).delay(2000).fadeOut("slow");
						});
						$("#error_mail").attr("class", "error_label");
						$("#error_mail").html(responseData.email);
					}
					else {
						$("#error_mail").attr("class", "non_error_label");
						$("#error_mail").html();
					}
				}
				else {
					$("#error_mail").attr("class", "non_error_label");
					$("#error_nom").attr("class", "non_error_label");
					$("#error_nom").html();
					$("#error_mail").html();
					$('#sucess').fadeIn("fast", function() {
						$(this).delay(1000).fadeOut("slow");
					});
					$('#adresseform')[0].reset();

				}

			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(errorThrown);
			}
		})
	});

});
