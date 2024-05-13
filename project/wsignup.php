<center>
<h1>Sign Up</h1>
<form action="wsignupinsert.php" method="post" enctype="multipart/form-data">

<label for="name">Name:-</label><br>
<input type="text" name="name" id="name" required><br><br>

<label for="email">Email:-</label><br>
<input type="text" name="email" id="email" required "><br><br>

<label for="password">Password:-</label><br>
<input type="password" name="password" id="password" required><br><br>


<label for="adsress">Address:-</label><br>
<textarea name="address" id="address" required></textarea><br><br>

<label for="gender">Gender:-</label><br>

<input type="radio" name="gender" id="male" value="male" >
<label for="male">Male</label><br>
<input type="radio" name="gender" id="female" value="female" >
<label for="female">Female</label>
<br><br>

<label for="qualification">Qualification:-</label><br>

<input type="checkbox" name="qualification[]" id="12th" value="12th" required>
<label for="12th">12th</label><br>

<input type="checkbox" name="qualification[]" id="Diploma" value="diploma">
<label for="diploma">Diploma</label><br>

<input type="checkbox" name="qualification[]" id="graduate" value="graduate">
<label for="graduate">Graduate</label><br>

<input type="checkbox" name="qualification[]" id="masters" value="masters">
<label for="masters">Masters</label><br>
<br><br>

<label for="image">Picture:-</label><br>
<input type="file" name="image" id="image"><br><br>

<label for="vehicle">Vehicle:-</label><br>
<select name="vehicle" id="vehicle">
<option value="">Vehicle</option>
<option value="1">4 wheeler</option>
<option value="2">2 wheeler</option>
<option value="3">other</option>
<option value="4">none</option>
</select>
<br><br>
<input type="submit" name="submit" value="signup">



</form>
</center>
