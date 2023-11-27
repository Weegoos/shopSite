<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="product.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>
<body>
    <div>
        <span class="allText">All Products</span>
        <img class="photoModel" src="photo\photoModel.jpg" alt="">
    </div>
  
    <?php
     $connection = mysqli_connect('localhost', 'root', '', 'shopdb');
     $sql = "SELECT * FROM products";

     $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                "<div >";
                echo "<table class='table' id='table'";
                echo "<thead>";
                "<tr>";
                echo "  <th scope='col'>Product Name</th>";
                echo "  <th scope='col'>Product Price</th>";
                echo "  <th scope='col'>Product Year</th>";
                // echo "  <th scope='col'></th>";

                "</tr>";

                echo "</thead>";
                 
             echo "<tbody>";
             echo "<tr>";
             echo "<td scope='row'>" . $row['product_name'] . "</th>";
             echo "<td>" ."$". $row['price'] . "</td>";
             echo "<td>" ."$". $row['product_year'] . "</td>";
             // echo  . "<button  class='btn btn-success' id='buyProduct'>Buy</button>" . ;


             echo "</tr>";
             echo "</tbody>";
             
             echo "</table>";
                "</div>";
                
            }

            $tableName = "products";

            // Запрос для получения информации о столбцах таблицы
            $result = $connection->query("SELECT COUNT(*) AS total_users FROM products");
            
            if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $totalUsers = $row["total_users"];
            echo "<p class='totalNum'>/_$totalUsers/</p>";
        } else {
            echo "Ошибка при выполнении запроса";
    }
            
      mysqli_close($connection);
    ?>
        <script src="productScript.js">
         
        </script>
</body>
</html>
