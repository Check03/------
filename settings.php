<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Панель задач</title>
</head>
<body>
<div id="container">
    <header>
        <h1>Панель задач</h1>
        <button onclick="addTask()">Добавить задачу</button>
    </header>
    <main>
        <aside>
            <nav>
                <ul>
                    <li><a href="index.php">Главная</a></li> 
                    <li><a href="tasks.php">Задачи</a></li> 
                    <li><a href="settings.php">Настройки</a></li> 
                </ul>
            </nav>
        </aside>
        <section>
        <div id="settings">
    <h2>Настройки пользователя</h2>
    <form>
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Электронная почта:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Сохранить изменения</button>
    </form>
</div>
        </section>
    </main>
</div>
<script src="/js-cookie/dist/js.cookie.js"></script>
<script src="script.js"></script>
</body>
</html>
