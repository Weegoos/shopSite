<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="confirmStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <div class="container">
        <form method="post" action="confirm.php">
            <input type="text" name="username" class="form-control" id="confirmLogin" v-model="checkLogin" @keyup="loginConfirm"><br>
            <input type="text" name="password" class="form-control" id="confirmLogin"><br>
            <input type="submit" value="Отправить">
        </form>
    </div>

    
        <?php
           $connection = mysqli_connect('localhost', 'root', '', 'shopdb');
            $sql = "SELECT * FROM user ";

            $result = mysqli_query($connection, $sql);
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username']; 
                $password = $_POST['password'];
            
                $query = "SELECT password FROM user WHERE login = ?";
                $stmt = $connection->prepare($query);
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $resultGet = $stmt->get_result();
            
                if ($resultGet->num_rows > 0) {
                    $row = $resultGet->fetch_assoc();
                    $storedPassword = $row['password'];

                    if ($password == $storedPassword) {
                        echo "<p class='checkText' style='color: green'> Доступ разрешен.</p>";
                        header('Location:http://localhost/shop/main/main.html');
                        exit;
                    } else if ($password != $storedPassword){
                        echo "<p class='checkText' style='color: 	#9A2A2A'> Доступ запрещен. </p>";
                    }else {
                        echo "<p class='checkText'> Убедитесь что вы вели правильный логин или пароль </p>";
                    }
                } else {
                    echo "<p class='notExists'> Пользователь не найден. </p>";
                }
            }
  

           
            
    //         while ($row = mysqli_fetch_assoc($result)){
    //             echo "<table class='table'>";
    //             echo "<tr>";
    //             echo "<td>" . $row['login'] . "</td>";
    //             echo "<td>" . $row['password'] . "</td>";
           
    //             echo "</tr>";
    //             echo "</table>";
                
    //         }

        



      mysqli_close($connection);
        
        ?>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
    <script src="confirmScript.js"></script>

</body>
</html>