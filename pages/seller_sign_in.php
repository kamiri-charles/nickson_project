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
        <div class="title">Seller | Sign In</div>
        <label for="email">Staff Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <br>
        <button type="submit">Sign In</button>
        
        <div class="cr-text">Don't have a seller account?</div>

        <a href="seller_sign_up.php">Sign up as a seller</a>
    </form>

</body>
</html>