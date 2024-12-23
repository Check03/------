const addTask = () => {
    const taskName = prompt("Введите название задачи:");
    if (taskName) {
    const taskItem = document.createElement('li');
    taskItem.textContent = taskName;
    
        // Кнопка для удаления задачи
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Удалить';
        removeButton.className = 'remove';
        removeButton.onclick = () => removeTask(taskItem);
    
        // Кнопка для перемещения задачи
        const moveButton = document.createElement('button');
        moveButton.textContent = 'Переместить';
        moveButton.className = 'move';
        moveButton.onclick = () => moveTask(taskItem);
    
        taskItem.appendChild(moveButton);
        taskItem.appendChild(removeButton);
        document.getElementById('toDoList').appendChild(taskItem);
    }
    };
    
    // Функция для удаления задачи
    const removeTask = (taskItem) => {
    taskItem.remove();
    };
    
    // Функция для перемещения задачи в следующий список
    const moveTask = (taskItem) => {
    const currentList = taskItem.parentNode;
    const nextListId = getNextListId(currentList.id);
    
    if (nextListId) {
        const nextList = document.getElementById(nextListId);
        nextList.appendChild(taskItem);
    } else {
        // Если задача в завершенном списке, возвращаем в первый список
        const firstList = document.getElementById('toDoList');
        firstList.appendChild(taskItem);
    }
    };
    
    // Функция для получения следующего списка
    const getNextListId = (currentListId) => {
    switch (currentListId) {
    case 'toDoList':
    return 'inProgressList';
    case 'inProgressList':
    return 'doneList';
    case 'doneList':
    return null; // Нет следующего списка
    default:
    return null;
    }
    };