<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAT 2 of Web development</title>
    <link rel="stylesheet" href="style.css">
    <script src="validate.js"></script>
</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" action="database.php" method="post">
    <h2>Application Form</h2>
    <div class="row">
        <label>Name</label>
        <input type="text" name="name">
        <div class="error" id="nameErr"></div>
    </div>
    <div class="row">
        <label>Phone Number</label>
        <input type="text" name="phone" maxlength="10">
        <div class="error" id="phoneErr"></div>
    </div>
    <div class="row">
        <label>Email Address</label>
        <input type="text" name="email">
        <div class="error" id="emailErr"></div>
    </div>  
    <div class="row">
        <input type="submit" name="submit" value="Submit">
    </div>
</form>
</body>
</html>