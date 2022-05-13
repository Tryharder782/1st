<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css"> 
  <title>Registration</title>
</head>
<body>
  <div class="container mt-4">
    <?php 
    if($_COOKIE['user'] == ''):
    ?>
    <div class="row">
      <div class="col">
        <h1 >Форма регистрации</h1>
        <form action="php/check.php" method="post">
          <p class="user-exists  ?> text-danger fs-6 p-0 pt-2 m-0">Пользователь с таким логином уже существует</p>
          <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"> <br>
          <input type="text" class="form-control" name="password" id="password" placeholder="Введите Пароль"><br>
          <input type="text" class="form-control" name="name" id="name" placeholder="Введите Имя"><br>
          <button class="btn btn-success" type="submit">Регистрация</button>
        </form>
      </div>

      <div class="col">
        <h1 >Форма Авторизации</h1>
        <form action="/php/auth.php" method="post">
          <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"> <br>
          <input type="text" class="form-control" name="password" id="password" placeholder="Введите Пароль"><br>
          <button class="btn btn-success" type="submit">Авторизоваться </button>
        </form>
      </div>
      <?php else: ?>
        <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти, нажмите <a href="/exit.php">здесь</a></p>
      <?php endif; ?>

    </div>
  </div>
</body>
</html>
