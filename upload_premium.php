<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="premium_insert.php" method="POST" enctype="multipart/form-data">
		Name: <input type="text" name="name" required><br><br>
		Town: <input type="text" name="town" required><br><br>
		City: <input type="text" name="city" required><br><br>
		State: <input type="text" name="state" required><br><br>	
		Email: <input type="email" name="email"><br><br>
		Phone No: <input type="text" name="phone"><br><br>	
		Prayer:   <select name="prayer" required>			
		    <option value="(Student) Almighty Nalla Mark Amma, please help me get good marks in my exams.">(Student) Almighty Nalla Mark Amma, please help me get good marks in my exams.</option>
		    <option value="(Jobseeker) Almighty Nalla Mark Amma, please help me get a good job.">(Jobseeker) Almighty Nalla Mark Amma, please help me get a good job.</option>
		    <option value="(Employed) Almighty Nalla Mark Amma, please help me get the promotion that I am looking forward to.">(Employed) Almighty Nalla Mark Amma, please help me get the promotion that I am looking forward to.</option>
		    <option value="(Parent) Almighty Nalla Mark Amma, please help my child.">(Parent) Almighty Nalla Mark Amma, please help my child.</option>
		    <option value="(Marriage Help) Almighty Nalla Mark Amma, please help me to get married.">(Marriage Help) Almighty Nalla Mark Amma, please help me to get married.</option>
		    <option value="(Family Problems) Almighty Nalla Mark Amma, please solve my family problems.">(Family Problems) Almighty Nalla Mark Amma, please solve my family problems.</option>
			</select><br><br>
		Profile: <input type="file" name="uploadfile" value="" ><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>