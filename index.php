<!DOCTYPE html>
<html lang="ru">
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
            <h2>К выполнению</h2>
            <ul id="toDoList" class="task-list">
                <!-- Здесь будут задачи к выполнению -->
            </ul>
            <h2>В процессе</h2>
            <ul id="inProgressList" class="task-list">
                <!-- Здесь будут задачи в процессе -->
            </ul>
            <h2>Выполнено</h2>
            <ul id="doneList" class="task-list">
                <!-- Здесь будут выполненные задачи -->
            </ul>
        </section>
    </main>
</div>
<script src="/js-cookie/dist/js.cookie.js"></script>
<script src="script.js"></script>
</body>
</html>