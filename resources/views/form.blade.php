<!DOCTYPE html>
<html>
<head>
	<title>Halaman Form</title>
</head>
<body>
	<h2>Buat Account Baru!</h2>
	<h4>Sign Up Form</h4>
	<form action="/selamatdatang" method="POST">
        @csrf
		<label for="first">First name:</label><br><br>
		<input type="text" id="first" name="first"><br><br>
		<label for="last">Last name:</label><br><br>
		<input type="text" id="last" name="last"><br><br>
		<label for="fname">Gender:</label><br><br>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label>
		<br><br>
		<label for="fname">Nationality:</label><br><br>
		<select name="" id="">
			<option value="idn">Indonesian</option>
			<option value="mly">Malaysian</option>
			<option value="sgp">Singaporean</option>
			<option value="aut">Australian</option>
		</select>
		<br><br>
		<label for="fname">Language Spoken:</label><br><br>
		<input type="checkbox" id="language1" name="language1" value="indo">
		<label for="language1">Bahasa Indonesia</label><br>
		<input type="checkbox" id="language2" name="language2" value="eng">
		<label for="language2">English</label><br>
		<input type="checkbox" id="language3" name="language3" value="oth">
		<label for="language3">Other</label>
		<br><br>
		<label for="fname">Bio:</label><br><br>
		<textarea cols="30" rows="10"></textarea>
	<input type="submit" value="Sign Up"> </a>
	</form>
</body>
</html>