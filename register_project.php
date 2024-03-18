<?php include("head_project.html")
?>
<body>
<div class="register">
<br>
<h1>REGISTRATION FORM</h1>
<form action="connect.php" method="post">
<br>
<label for="username">UESRNAME</label>
<input type="text" size="30" name="n" placeholder="enter your name" required>
<br><br>
<label for="age">AGE</label>
<input type="number" size="2" name="a">
<br><br>
<label for="DOB">DOB</label>

<input type="date" name="d">
<br><br>
<label for="gender">GENDER</label>
<input type="radio" value="male" name="g">male
<input type="radio" value="female" name="g">female
<input type="radio" value="others" name="g">others
<br><br>
<label for="email">EMAIL</label>
<input type="email" name="e" size="40" required>
<br><br>
<label for="password">PASSWORD</label>
<input type="password" maxlength="8" min="4" name="p" required>
<br><br>
<label for="DEPT">DEPARTMENT</label>
<select name="s">
<option value="CS">CS</option>
<option value="DS">DS</option>
<option value="MATHS">MATHS</option>
<option value="ENGLISH">ENGLISH</option>
<option value="TAMIL">TAMIL</option>
</select>
<br><br>
<input type="Submit" value="Register">
<input type="reset"  value="cancel">
</form>
</div>
</body>
<?php include("foot_project.html")
?>`