$(document).ready(function() {

	$("#codeform").submit(function(e) {
		e.preventDefault();

		var data = $("#codeform").serialize();

		$.post(
			"run.php",
			data,
			function(data1) {
				$("#output").html(data1);
			}
		);

	});

});