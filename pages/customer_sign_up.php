<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../base.css">
    <link rel="stylesheet" href="../styles/sign_up.css">
    <title>CampusMart | Sign Up</title>
</head>
<body>

    <!-- Include header -->
    <?php include '../components/header.php'; ?>

    <form>
        <div class="title">Customer | Sign Up</div>
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" placeholder="First name" required>
        <br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" placeholder="Last name" required>
        <br>

        <label for="email">Student Email</label>
        <input type="email" id="email" name="email" placeholder="Enter school email" required>
        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required>
        <br>

        <button type="submit">Create Account</button>
        
        <div class="cr-text">Already have an account?</div>

        <a href="customer_sign_up.php">Log into your account</a>
    </form>

</body>
</html>