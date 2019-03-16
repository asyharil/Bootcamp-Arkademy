<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Jawaban no 1 Tipe Soal E</title>
</head>
<body>
	<div id="bio"></div>
</body>
<script>
	var mybio = {
		"name":"Asyharil",
		"address":"Jl. Tgk. Glee Iniem, Tungkop, Aceh Besar",
		"hobbies": ["Gaming","Ngoding"],
		"is_married" : false,
		"school" : {
			"highSchool" : "SMKN 4 Banda Aceh",
			"university" : "LP3I Banda Aceh"
		},
		"skills" : [{"Android Programming" : "Intermediate"},
			{"Web Programming" : "Beginner"},
			{"IT Support" : "Intermediate"}
		]
	}
	var stringJSON = "Value JSON : "+ JSON.stringify(mybio);
	document.getElementById("bio").innerHTML = stringJSON;
</script>
</html>