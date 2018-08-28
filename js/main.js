//@prepros-prepend ./jquery-1.12.4.min.js
//@prepros-prepend ./timber.master.min.js
// Function to change language in Spanish
function changeEsp(id) {
	$.ajax({
		type: 'POST',
		url: 'setLanguage.php',
		data: { lang: 'Spanish' },
		dataType: 'json',
			success: function(json) {
			location.reload();
		},
			error: function(xhr, status) {
			console.log("Error");
		}
	});
}
// Function to change language in English
function changeEn(id) {
	$.ajax({
		type: "POST",
		url: "setLanguage.php",
		data: { lang: "English" },
		dataType: "json",
			success: function(json) {
			location.reload();
		},
			error: function(xhr, status) {
			console.log("Error");
		}
	});
}
function validatedAges(){
	var ages = document.getElementById('ages').value;
	if (18 <= ages) {
		$.ajax({
		type: "POST",
		url: "setLanguage.php",
		data: { age: "adult" },
		dataType: "json",
			success: function(json) {
			location.reload();
		},
			error: function(xhr, status) {
			console.log("Error");
		}
	});

	}
	else{
		alert("Eres menor de edad");
	}
}
