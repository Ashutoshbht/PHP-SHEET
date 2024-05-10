<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "demo";


// Connect to the database
$conn = new mysqli($server, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <form action="dbconn.php" method="post">
    <label for="firstname">First Name<span class="required">*</span></label><br>
    <input type="text" name="firstname" id="firstname" required>
    <span class="error">
        


            <label for="lastname">Last Name<span class="required">*</span></label><br>
            <input type="text" name="lastname" id="lastname" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : ''; ?>" required>
            <span class="error"><?php if(isset($errors['lastname'])) echo $errors['lastname']; ?></span><br><br>

            <label for="age">Age<span class="required">*</span></label><br>
            <input type="text" name="age" id="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>" required>
            <span class="error"><?php if(isset($errors['age'])) echo $errors['age']; ?></span><br><br>

            <label for="dob">Date of Birth<span class="required">*</span></label><br>
            <input type="date" name="dob" id="dob" value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : ''; ?>" required>
            <span class="error"><?php if(isset($errors['dob'])) echo $errors['dob']; ?></span><br><br>
            <!-- Gender -->
            <label>Gender<span class="required">*</span></label><br>
            <input type="radio" name="gender" id="male" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'male') ? 'checked' : ''; ?> required>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'female') ? 'checked' : ''; ?> required>
            <label for="female">Female</label>
            <span class="error"><?php if(isset($errors['gender'])) echo $errors['gender']; ?></span><br><br>

            <!-- Education Qualification -->
            <label for="education">Education Qualification<span class="required">*</span></label><br>
            <input type="checkbox" name="education[]" id="10th" value="10th" <?php echo (isset($_POST['education']) && in_array('10th', $_POST['education'])) ? 'checked' : ''; ?>>
            <label for="10th">10th</label><br>
            <input type="checkbox" name="education[]" id="12th" value="12th" <?php echo (isset($_POST['education']) && in_array('12th', $_POST['education'])) ? 'checked' : ''; ?>>
            <label for="12th">12th</label><br>
            <input type="checkbox" name="education[]" id="graduation" value="graduation" <?php echo (isset($_POST['education']) && in_array('graduation', $_POST['education'])) ? 'checked' : '';?>>
            <label for="graduation">Graduation</label><br>
            <input type="checkbox" name="education[]" id="masters" value="masters" <?php echo (isset($_POST['education']) && in_array('masters', $_POST['education'])) ? 'checked' : '';?>>
            <label for="masters">Masters</label><br>
            <input type="checkbox" name="education[]" id="phd" value="phd" <?php echo (isset($_POST['education']) && in_array('phd', $_POST['education'])) ? 'checked' : '';?>>
            <label for="phd">Phd</label><br><br>
            <span class="error"><?php if(isset($errors['education'])) echo $errors['education']; ?></span><br>

            <!-- Skills -->
            

            <label for="skills">Skills<span class="required">*</span></label><br>
            <select id="skills" name="skills[]" multiple size="3" required>
            <?php
            $result =mysqli_query($conn,"select * from skills");
            while($row = mysqli_fetch_array($result)){
                echo"<option value='".$row['skills_id']."'>".$row['skills_name']."</option>";
            }

            ?>
            </select>
            <span class="error"><?php if(isset($errors['skills'])) echo $errors['skills']; ?></span><br><br>

            <!-- Address Line 1 -->
            <label for="address1">Address Line 1<span class="required">*</span></label><br>
            <input type="text" name="address1" id="address1" value="<?php echo isset($_POST['address1']) ? $_POST['address1'] : ''; ?>" required>
            <span class="error"><?php if(isset($errors['address1'])) echo $errors['address1']; ?></span><br><br>

            <!-- Address Line 2 -->
            <label for="address2">Address Line 2<span class="required">*</span></label><br>
            <input type="text" name="address2" id="address2" value="<?php echo isset($_POST['address2']) ? $_POST['address2'] : ''; ?>" required>
            <span class="error"><?php if(isset($errors['address2'])) echo $errors['address2']; ?></span><br><br>

            <!-- State -->
            <label for="state">State<span class="required">*</span></label><br>
            <select id="state" name="state[]"  required>
                <option value="">Select the state</option>
            <?php
            $result1 =mysqli_query($conn,"select * from state");
            while($row1 = mysqli_fetch_array($result1)){
                echo"<option value='".$row1['state_id']."'>".$row1['state_name']."</option>";
            }
            

            ?>
            </select>
            <span class="error"><?php if(isset($errors['state'])) echo $errors['state']; ?></span><br><br>


            <!-- Country -->
            <label for="country">State<span class="required">*</span></label><br>
            <select id="country" name="country[]"  required>
                <option value="">Select the country</option>
            <?php
            $result2 =mysqli_query($conn,"select * from country");
            while($row2 = mysqli_fetch_array($result2)){
                echo"<option value='".$row2['country_id']."'>".$row2['country_name']."</option>";
            }

            ?>
            </select>
            <span class="error"><?php if(isset($errors['country'])) echo $errors['country']; ?></span><br><br>

            <!-- Submit Button -->
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>
