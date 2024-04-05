<?php
    try {
        // Connection params
        $dsn = "pgsql:host=localhost;port=5432;dbname=campusmart;user=postgres;password=Password";

        // Create a PDO instance
        $pdo = new PDO($dsn);

        // Set error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert query
        $sql = "INSERT INTO products (name, price, quantity) VALUES ('Product 1', 1000)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':value1', $value1);
        $stmt->bindParam(':value2', $value2);
        $stmt->bindParam(':value3', $value3);
        
        // Define variables and bind parameters
        $product_name = 'Product 1';
        $product_price = 1000;
        $product_quantity = 10;

        // Assign values to parameters
        if (isset($_POST['product_name']) && isset($_POST['product_price']) && isset($_POST['product_quantity'])) {
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_quantity = $_POST['product_quantity'];

            // Bind parameters
            $value1 = $product_name;
            $value2 = $product_price;
            $value3 = $product_quantity;

            // Execute the query
            $stmt->execute();

            // Redirect to products page
            header('Location: ../pages/products.php');

        } else  {
            echo "Please fill in all the fields";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }