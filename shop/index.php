<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="mainStyle.css">
</head>
<body>


    <?php
//       $connection = mysqli_connect('localhost', 'root', '', 'shopdb');
      
//       $sql = "SELECT login FROM user";
//       $result = mysqli_query($connection, $sql);
      
//       if ($result) {
//           while ($data = mysqli_fetch_assoc($result)) {
//               foreach ($data as $key => $value) {
              
//               }
//           }
//       } else {
//           echo "Ошибка выполнения запроса: " . mysqli_error($connection);
//       }

   
//       $nameUser = "aibar";
//       $query = "SELECT PASSWORD FROM `user` WHERE login = '$nameUser'";
//       $resultName = mysqli_query($connection, $query);
//       if ($resultName && mysqli_num_rows($resultName) > 0){
   
//         while ($row = mysqli_fetch_assoc($resultName)) {
//             echo "Пароль: " . $row['PASSWORD'];
//         }
//       }else {
//         echo "Error";
//       }

    
//    if (strlen($_POST['username'] > 0)){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $sql = " INSERT INTO `user` (`id_user`, `login`, `password`) VALUES (NULL, '$username', '$password')";
//    }

   

// if (mysqli_query($connection, $sql)) {
//     echo "Данные успешно добавлены";
// } else {
//     echo "Ошибка: " . $sql . "<br>" . mysqli_error($connection);
// }
      
//       mysqli_close($connection);
      ?> 

      <!-- <br>
    <input type="text" id="userName" placeholder="Имя пользователя">
    <input type="text" id="userEmail" placeholder="Email пользователя">
    <button onclick="insertData()">Добавить</button> -->   

    <div class="container">
        <div class="wrapper">
            <div class="overallDiv">
                <button class="registration">Registrate</button>
                <button class="existingCLass">Log In</button>
            </div>
        </div>
    </div>


    <script src="script.js">
        
    </script>
</body>
</html>