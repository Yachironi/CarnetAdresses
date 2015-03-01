$(document).ready(function() {
	update_adresses();
	
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
					update_adresses();
				}

			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(errorThrown);
			}
		})
	});

});


function update_adresses() {

$("#adresses").html("");
$.getJSON("./src/update.php",function(data){
$.each(data.adresses, function(i,adresse){
var newRow =
"<table class=\"table table-bordered\">"
								+"<tr>"
									+"<td class=\"active col-sm-3\">Nom</td>"
									+"<td class=\"col-sm-9\">"+adresse.nom+"</td>"
								+"</tr>"
								+"<tr>"
									+"<td class=\"active col-sm-3\">Adresse mail</td>"
									+"<td class=\"col-sm-9\">"+adresse.email+"</td>"
								+"</tr>";
								
if(adresse.notes!=""){
newRow=newRow+"<tr>"
									+"<td class=\"active col-sm-3\">Notes</td>"
									+"<td class=\"col-sm-9\">"+adresse.notes+"</td>"
								+"</tr>"
							+"</table>" ;
}else{
	newRow = newRow+ 		+"</table>" ;
}
								

$(newRow).appendTo("#adresses");
});
});
}