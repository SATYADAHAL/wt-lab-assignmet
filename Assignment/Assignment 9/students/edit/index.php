<?php
require_once "../../utils/db.php";
$id = $_GET['updateid'];
$sql = "SELECT * from `students` where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
$dob = $row['dob'];
$favorite_color = $row['color'];
$weight = $row['weight'];
$gender = $row['gender'];
$hobbies = $row['hobbies'];
$nationality = $row['nationality'];


if(isset($_POST['submit'])){
    echo "hey ho";
    $name = $_POST['name'] ?? '';
	$email = $_POST['email'] ?? '';
	$password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
	$dob = $_POST['dob'] ?? '';
	$favorite_color = $_POST['color'] ?? '';
	$weight = $_POST['weight'] ?? '';
	$gender = $_POST['gender'] ?? '';
	$hobbies = implode(",", $_POST['hobbies'] ?? []);
	$nationality = $_POST['nationality'] ?? 'NP';

	$sql = "update `students` set id=$id,name='$name',email='$email',password='$password',dob='$dob',favorite_color='$favorite_color',weight='$weight',gender='$gender',hobbies='$hobbies',nationality='$nationality' where id = $id";
    $result = mysqli_query($conn,$sql);

    if(($result)){
		header('location:../index.php');
        // echo "data inserted";
    }
}

// if (!isset($_GET['id'])) {
// 	header("location:../?error=invalid id");
// }
// $id = $_GET['id'];

// $sql = "SELECT * FROM students WHERE id=$id";



// $result = $conn->query($sql);

// if ($result->num_rows < 1) {
// 	header("location:../");
// }

// $student = $result->fetch_assoc();


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<style type="text/css">
		.form-group {
			margin-top: 3px;
		}
	</style>
</head>
<body>
<form method="POST">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" id="name" placeholder="Nishal Gurung" name="name" value =<?php echo $name ?>>
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" id="email" placeholder="nishal.gurung4@gmail.com" name="email" value =<?php echo $email ?>>
	</div>
	<div class="form-group">
		<label for="dob">D.O.B.</label>
		<input type="date" id="dob" name="dob" value =<?php echo $dob ?>>
	</div>
	<div class="form-group">
		<label for="favorite-color">Favorite Color</label>
		<input type="color" id="favorite-color" name="color" value =<?php echo $favorite_color ?>>
	</div>
	<div class="form-group">
		<label for="weight">Weight (kg)</label>
		<input type="number" id="weight" name="weight" value =<?php echo $weight ?>>
	</div>
	<div class="form-group">
		<label>Gender</label>
		<div>
			<label for="male">Male</label>
			<input type="radio" id="male" name="gender" value="male" <?php if($gender == "male") echo "checked" ?>>
			<label for="female">Female</label>
			<input type="radio" id="female" name="gender" value="female" <?php if($gender == "female") echo "checked" ?>>
			<label for="other">Other</label>
			<input type="radio" id="other" name="gender" value="other" <?php if($gender == "other") echo "checked" ?>>
		</div>
	</div>

	<div class="form-group">
		<label>Hobbies</label>
		<input type="checkbox" id="traveling" name="hobbies[]" value="traveling" <?php if($hobbies == "traveling") echo "checked" ?>/>
		<label for="traveling">traveling</label>
		<input type="checkbox" id="dancing" value="dancing" name="hobbies[]" <?php if($hobbies == "dancing") echo "checked" ?>/>
		<label for="dancing">dancing</label>
		<input type="checkbox" id="singing" value="singing" name="hobbies[]" <?php if($hobbies == "singing") echo "checked" ?>/>
		<label for="singing">singing</label>
	</div>

	<div class="form-group">
		<label for="nationality">Nationality</label>
		<select id="nationality" name="nationality" value =<?php echo $nationality ?>>
			<option value="NP">Nepal</option>
			<option value="IN">India</option>
			<option value="CH">China</option>
			<option value="UK">United Kingdom</option>
		</select>
	</div>

	<div class="form-group">
		<label for="profile">Profile</label>
		<input type="file" id="profile" accept="image/png,image/jpeg" name="profile" />
	</div>
	<div class="form-group">
		<input type="submit" value="Update" name="submit"/>
	</div>
</form>
</body>
</html>