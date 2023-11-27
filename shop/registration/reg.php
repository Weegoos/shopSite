<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="registrantionPageStyle.css">
</head>
<body>

<div class="container">
        <input type="text" id="userName" v-model="userName" @keyup="checkLetter" ref="userName" placeholder="Напишите имя...">
        <input type="text" id="userPassword" v-model="password" @keyup="checkLetter"  ref="userPassword" placeholder="Придумайте пароль...">
        <button @click="insertData" ref="addBtn">Добавить</button> 
        
    </div>

    <?php
           $connection = mysqli_connect('localhost', 'root', '', 'shopdb');
      
      $sql = "SELECT login FROM user";
    
      $result = mysqli_query($connection, $sql);

    $username = $_POST['username'] ?? '';
    $password = $_POST['password']  ?? '';
   

   if ($username != null){
    $sql = " INSERT INTO `user` (`id_user`, `login`, `password`) VALUES (NULL, '$username', '$password')";
   }
    if (mysqli_query($connection, $sql)) {
} else {
    echo "Ошибка: " . $sql . "<br>" . mysqli_error($connection);
}
      
      mysqli_close($connection);
    ?>

  

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
    <script src="reg.js"></script>

</body>
</html>

