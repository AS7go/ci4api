<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1>Обновить <span class="highlight">студента</span></h1>
        <form id="updateStudentForm">
            <label>Имя:</label>
            <input type="text" name="name" id="nameInput"><br>
            <label>Телефон:</label>
            <input type="text" name="phone" id="phoneInput"><br>
            <div class="button-container">
                <button type="submit">Обновить</button>
                <button type="button" onclick="history.back()">Назад</button>
            </div>
        </form>
    </div>

    <script>
        const studentId = window.location.pathname.split('/').pop();
        const nameInput = document.getElementById('nameInput');
        const phoneInput = document.getElementById('phoneInput');

        fetch(`/api/students/${studentId}`)
            .then(response => response.json())
            .then(student => {
                nameInput.value = student.name;
                phoneInput.value = student.phone;
            });

        document.getElementById('updateStudentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            const data = {};
            formData.forEach((value, key) => data[key] = value);
            fetch(`/api/students/${studentId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                alert(data.messages.success);
            });
        });
    </script>
<?= $this->endSection() ?>