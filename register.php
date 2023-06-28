<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
</head>
<body>
    <form action="/includes/signup.php" method="post">
        <h3>Регистрация</h3>
        <label>Электронная почта</label> <br>
        <input type="text" name="email" placeholder="Введите почту"> <br>
        <label>Пароль</label> <br>
        <input type="password" name="password" placeholder="Введите пароль"> <br>
        <button type="submit">Регистрация</button>
        <p>
            Уже были здесь?
            <a href="/index.php">Авторизация</a>
        </p>
    </form>
</body>
</html>