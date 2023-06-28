<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
</head>
<body>
    <form action="/includes/signin.php" method="post">
        <h3>Авторизируйтесь, чтобы продолжить</h3>
        <label>Электронная почта</label> <br>
        <input type="text" name="email" placeholder="Введите почту"> <br>
        <label>Пароль</label> <br>
        <input type="password" name="password" placeholder="Введите пароль"> <br>
        <button type="submit" >Войти</button>
        <p>
            Впервые здесь?
            <a href="/register.php">Регистрация</a>
        </p>
    </form>
</body>
</html>