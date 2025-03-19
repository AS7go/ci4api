<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1>Инструкция по тестированию <span class="highlight">API</span></h1>

        <h2>Меню</h2>
        <ul>
            <li><a href="/test/students-table">Список студентов (таблица)</a></li>
            <li><a href="/test/students">Список студентов</a></li>
            <li><a href="/test/students/2">Детали студента (ID 2)</a></li>
            <li><a href="/test/add-student">Добавить студента</a></li>
            <li><a href="/test/update-student/2">Обновить студента (ID 2)</a></li>
            <li><a href="/test/delete-student/2">Удалить студента (ID 2)</a></li>

            
        </ul>

        <h2>Описание</h2>
        <p>
            Данная инструкция описывает, как тестировать API для управления студентами, созданное с использованием CodeIgniter 4 и Docker.
        </p>

        <h3>1. Список студентов (GET /api/students)</h3>
        <p>
            Показывает список всех студентов в формате JSON.
            <a href="/test/students">Перейти</a>
        </p>
        <p>
            Пример cURL:
            <pre><code>curl http://localhost/api/students</code></pre>
        </p>

        <h3>2. Детали студента (GET /api/students/{id})</h3>
        <p>
            Показывает детали студента с указанным ID.
            <a href="/test/students/2">Перейти</a>
        </p>
        <p>
            Пример cURL (замените {id} на реальный ID):
            <pre><code>curl http://localhost/api/students/2</code></pre>
        </p>

        <h3>3. Добавить студента (POST /api/students)</h3>
        <p>
            Позволяет добавить нового студента с помощью формы.
            <a href="/test/add-student">Перейти</a>
        </p>
        <p>
            Пример cURL:
            <pre><code>curl -X POST -F "name=Новый Студент" -F "email=new.student@example.com" -F "phone=+380501234567" http://localhost/api/students</code></pre>
        </p>

        <h3>4. Обновить студента (PUT /api/students/{id})</h3>
        <p>
            Позволяет обновить данные студента с указанным ID с помощью формы.
            <a href="/test/update-student/2">Перейти</a>
        </p>
        <p>
            Пример cURL (замените {id} на реальный ID):
            <pre><code>curl -X PUT -H "Content-Type: application/json" -d '{"name": "Обновленный Студент", "phone": "+33112345678"}' http://localhost/api/students/2</code></pre>
        </p>
        <p>
            Пример ответа:
            <pre><code>{
                "status": 200,
                "error": null,
                "messages": {
                    "success": "Student updated successfully"
                }
            }</code></pre>
        </p>
        <p>
            Пример cURL для проверки ошибки (запрос с ошибкой):
            <pre><code>curl -X PUT -H "Content-Type: application/json" -d '' http://localhost/api/students/2</code></pre>
        </p>
        <p>
            Результат должен быть таким:
            <pre><code>{
                "status": 400,
                "error": 400,
                "messages": {
                    "error": "Invalid JSON data"
                }
            }</code></pre>
        </p>

        <h3>5. Удалить студента (DELETE /api/students/{id})</h3>
        <p>
            Позволяет удалить студента с указанным ID.
            <a href="/test/delete-student/2">Перейти</a>
        </p>
        <p>
            Пример cURL (замените {id} на реальный ID):
            <pre><code>curl -X DELETE http://localhost/api/students/2</code></pre>
        </p>

        <h2>API Endpoints</h2>
        <ul>
            <li>GET /api/students</li>
            <li>GET /api/students/{id}</li>
            <li>POST /api/students</li>
            <li>PUT /api/students/{id}</li>
            <li>DELETE /api/students/{id}</li>
        </ul>

        <h2>Docker Compose</h2>
        <p>
            Для запуска проекта используется Docker Compose. Файл <code>docker-compose.yml</code> определяет контейнеры для веб-сервера, базы данных и phpMyAdmin.
        </p>
    </div>
<?= $this->endSection() ?>