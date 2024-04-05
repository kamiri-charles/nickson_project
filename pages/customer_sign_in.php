<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../base.css">
    <link rel="stylesheet" href="../styles/sign_in.css">
    <title>CampusMart | Sign In</title>
</head>
<body>

    <!-- Include header -->
    <?php include '../components/header.php'; ?>

    <form>
        <div class="title">Customer | Sign In</div>
        <label for="email">Student Email</label>
        <input type="email" id="email" name="email" placeholder="Enter school email" required>
        <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <br>
        <button type="submit">Sign In</button>
        
        <div class="cr-text">Don't have an account?</div>

        <a href="customer_sign_up.php">Sign up as a buyer</a>
    </form>

</body>
</html>