<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1>Добавить <span class="highlight">студента</span></h1>
        <form id="addStudentForm">
            <label>Имя:</label>
            <input type="text" name="name"><br>
            <label>Email:</label>
            <input type="email" name="email"><br>
            <label>Телефон:</label>
            <input type="text" name="phone"><br>
            <div class="button-container">
                <button type="submit">Добавить</button>
                <button type="button" onclick="history.back()">Назад</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('addStudentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            fetch('/api/students', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert(data.messages.success);
            });
        });
    </script>
<?= $this->endSection() ?>