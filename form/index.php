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
        <form action="dataconnect.php" method="post">
            <label for="firstname">First Name<span class="required">*</span></label><br>
            <input type="text" name="firstname" id="firstname" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>" required>
            <span class="error"><?php if(isset($errors['firstname'])) echo $errors['firstname']; ?></span><br><br>

            <label for="lastname">Last Name<span class="required">*</span></label><br>
            <input type="text" name="lastname" id="lastname" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : ''; ?>" required>
            <span class="error"><?php if(isset($errors['lastname'])) echo $errors['lastname']; ?></span><br><br>

            <label for="age">Age<span class="required">*</span></label><br>
            <input type="text" name="age" id="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>" required>
            <span class="error"><?php if(isset($errors['age'])) echo $errors['age']; ?></span><br><br>

            <label for="dob">Date of Birth<span class="required">*</span></label><br>
            <input type="date" name="dob" id="dob" value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : ''; ?>" required>
            <span class="error"><?php if(isset($errors['dob'])) echo $errors['dob']; ?></span><br><br>
            <!-- Gebder -->
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
            <select id="skills" name="skills[]" multiple size="5" required>
                <option value="php" <?php echo (isset($_POST['skills']) && in_array('php', $_POST['skills'])) ? 'selected' : ''; ?>>PHP</option>
                <option value="javascript" <?php echo (isset($_POST['skills']) && in_array('javascript', $_POST['skills'])) ? 'selected' : ''; ?>>JavaScript</option>
                <option value="apache" <?php echo (isset($_POST['skills']) && in_array('apache', $_POST['skills'])) ? 'selected' : ''; ?>>Apache</option>
                <option value="mysql" <?php echo (isset($_POST['skills']) && in_array('mysql', $_POST['skills'])) ? 'selected' : ''; ?>>MYSQL</option>
                <option value="laravel" <?php echo (isset($_POST['skills']) && in_array('laravel', $_POST['skills'])) ? 'selected' : ''; ?>>Laravel</option>
                <option value="reactjs" <?php echo (isset($_POST['skills']) && in_array('reactjs', $_POST['skills'])) ? 'selected' : ''; ?>>ReactJs</option>
                <option value="java" <?php echo (isset($_POST['skills']) && in_array('java', $_POST['skills'])) ? 'selected' : ''; ?>>Java</option><br>

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
        <select name="state" id="state" required>
        <option value="">Select State</option>
        <option value="Uttarkhand" <?php echo (isset($_POST['state']) && $_POST['state'] === 'Uttarkhand') ? 'selected' : ''; ?>>Uttarkhand</option>
        <option value="Maharashtra" <?php echo (isset($_POST['state']) && $_POST['state'] === 'Maharashtra') ? 'selected' : ''; ?>>Maharashtra</option>
        <option value="Bihar" <?php echo (isset($_POST['state']) && $_POST['state'] === 'Bihar') ? 'selected' : ''; ?>>Bihar</option>
        <option value="West Bengal" <?php echo (isset($_POST['state']) && $_POST['state'] === 'West Bengal') ? 'selected' : ''; ?>>West Bengal</option>
        <option value="Madhya Pradesh" <?php echo (isset($_POST['state']) && $_POST['state'] === 'Madhya Pradesh') ? 'selected' : ''; ?>>Madhya Pradesh</option>
        <option value="Tamil Nadu" <?php echo (isset($_POST['state']) && $_POST['state'] === 'Tamil Nadu') ? 'selected' : ''; ?>>Tamil Nadu</option>
        <option value="Rajasthan" <?php echo (isset($_POST['state']) && $_POST['state'] === 'Rajasthan') ? 'selected' : ''; ?>>Rajasthan</option>
        <option value="Karnataka" <?php echo (isset($_POST['state']) && $_POST['state'] === 'Karnataka') ? 'selected' : ''; ?>>Karnataka</option>
        <option value="Gujarat" <?php echo (isset($_POST['state']) && $_POST['state'] === 'Gujarat') ? 'selected' : ''; ?>>Gujarat</option>
        <option value="Andhra Pradesh" <?php echo (isset($_POST['state']) && $_POST['state'] === 'Andhra Pradesh') ? 'selected' : ''; ?>>Andhra Pradesh</option>
        <option value="Telangana" <?php echo (isset($_POST['state']) && $_POST['state'] === 'Telangana') ? 'selected' : ''; ?>>Telangana</option>

        
        </select>
        <span class="error"><?php if(isset($errors['state'])) echo $errors['state']; ?></span><br><br>


            <!-- Country -->
            <label for="country">Country<span class="required">*</span></label><br>
            <select name="country" id="country" required>
                <option value="">Select Country</option>
                <option value="India" <?php echo (isset($_POST['country']) && $_POST['country'] === 'India') ? 'selected' : ''; ?>>India</option>
                <option value="United States" <?php echo (isset($_POST['country']) && $_POST['country'] === 'United States') ? 'selected' : ''; ?>>United States</option>
                <option value="China" <?php echo (isset($_POST['country']) && $_POST['country'] === 'China') ? 'selected' : ''; ?>>China</option>
                <option value="Brazil" <?php echo (isset($_POST['country']) && $_POST['country'] === 'Brazil') ? 'selected' : ''; ?>>Brazil</option>
                <option value="Russia" <?php echo (isset($_POST['country']) && $_POST['country'] === 'Russia') ? 'selected' : ''; ?>>Russia</option>
                <option value="Japan" <?php echo (isset($_POST['country']) && $_POST['country'] === 'Japan') ? 'selected' : ''; ?>>Japan</option>
                <option value="Germany" <?php echo (isset($_POST['country']) && $_POST['country'] === 'Germany') ? 'selected' : ''; ?>>Germany</option>
                <option value="United Kingdom" <?php echo (isset($_POST['country']) && $_POST['country'] === 'United Kingdom') ? 'selected' : ''; ?>>United Kingdom</option>
                <option value="France" <?php echo (isset($_POST['country']) && $_POST['country'] === 'France') ? 'selected' : ''; ?>>France</option>
                <option value="Italy" <?php echo (isset($_POST['country']) && $_POST['country'] === 'Italy') ? 'selected' : ''; ?>>Italy</option>
                <option value="Canada" <?php echo (isset($_POST['country']) && $_POST['country'] === 'Canada') ? 'selected' : ''; ?>>Canada</option>

            </select>
            <span class="error"><?php if(isset($errors['country'])) echo $errors['country']; ?></span><br><br>

            <!-- Submit Button -->
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>
