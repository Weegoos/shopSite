<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="adminStyle.css">
    <script src="adminScript.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="menu">
            <span class="companyNameText">Shop Drop</span>
            <p class="user_infoBtn">Пользователи</p>
            <p class="product_infoBtn">Продукт</p>
            <p class="addProducts">Добавить продукт</p>
        </div>
        <div class="header">
            <p class="administrationText">Администрация</p>
        </div> 
        <div class="generalInfo">
            <p class="warningText"><code>Здравствуйте Админ, вы находитесь в странице где представлена информация о пользователях и продуктах.<br> Будьте внимательны!</code></p>
        </div>

        <div class="userInfo">
            
    <?php
     $connection = mysqli_connect('localhost', 'root', '', 'shopdb');
     $sql = "SELECT * FROM user";
     $count = 0;

     $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                    $count+=1;
                "<div >";
                echo "<table class='table' id='table'";
                echo "<thead>";
                "<tr>";
                echo "  <th scope='col'>#</th>";

                echo "  <th scope='col'>User Name</th>";
                echo "  <th scope='col'>User Password</th>";
                // echo "  <th scope='col'></th>";

                "</tr>";

                echo "</thead>";
                 
             echo "<tbody>";
             echo "<tr>";
             echo "<td scope='row'>" . "$count". "</th>";

             echo "<td scope='row'>" . $row['login'] . "</th>";
             echo "<td>" ."$". $row['password'] . "</td>";
             // echo  . "<button  class='btn btn-success' id='buyProduct'>Buy</button>" . ;


             echo "</tr>";
             echo "</tbody>";
             
             echo "</table>";
                "</div>";
                
            }
            
      mysqli_close($connection);
    ?>
        </div>
        <div class="productInfo">
            <?php
                 $connection = mysqli_connect('localhost', 'root', '', 'shopdb');
                 $sql = "SELECT * FROM products";
                 $counter = 0;
            
                 $result = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_assoc($result)){
                                $counter+=1;
                            "<div >";
                            echo "<table class='table' id='table'";
                            echo "<thead>";
                            "<tr>";
                            echo "  <th scope='col'>#</th>";
                            echo "  <th scope='col'>Product Name</th>";
                            echo "  <th scope='col'>Product Price</th>";
                            echo "  <th scope='col'>Product Year</th>";
                            // echo "  <th scope='col'></th>";
            
                            "</tr>";
            
                            echo "</thead>";
                             
                         echo "<tbody>";
                         echo "<tr>";
                        echo "<td scope='row'>" . "$counter". "</th>";

                         echo "<td scope='row'>" . $row['product_name'] . "</th>";
                         echo "<td>" ."$". $row['price'] . "</td>";
                         echo "<td>" ."". $row['product_year'] ."г.". "</td>";
                         // echo  . "<button  class='btn btn-success' id='buyProduct'>Buy</button>" . ;
            
            
                         echo "</tr>";
                         echo "</tbody>";
                         
                         echo "</table>";
                            "</div>";
                            
                        }
            ?>
        </div>

        <div class="addProductsDiv">
            <input type="text" class="form-control" id="productName"  placeholder="Продукт...">
            <input type="text" class="form-control" id="productPrice" placeholder="Цена...">
            <input type="text" class="form-control" id="productYear" placeholder="Год...">

            <button onclick="insertData()" class="btn btn-primary" id="addProductBtn" ref="addBtn">Добавить</button> 
            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'shopdb');

                $product_name = $_POST['product_name'] ?? '';
                $price = $_POST['price'] ?? '';
                $product_year = $_POST['product_year'] ?? '';

                if ($product_name != '' && $price != '' && $product_year != '') {
                    $sql = "INSERT INTO `products` (`product_id`, `product_name`, `price`, `product_year`) 
                            VALUES (NULL, '$product_name', '$price', '$product_year')";

                    if (mysqli_query($connection, $sql)) {
                        echo "Данные успешно добавлены";
                    } else {
                        echo "Ошибка: " . $sql . "<br>" . mysqli_error($connection);
                    }
                } else {
                    // echo "Пожалуйста, заполните все поля";
                }

                mysqli_close($connection);
                ?>

        </div>
    </div>

    <div class="security">
        <input type="text" class="form-control" id="inputSecurity" placeholder="Потвердите пароль...">
        <button class="btn btn-danger" id="securityBtn">Отправить</button>
        <span class="passwordFail"></span>
    </div>
</body>
</html>