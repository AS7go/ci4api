<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1>Удалить <span class="highlight">студента</span></h1>
        <div id="studentDetails"></div>
        <div class="button-container">
            <button id="deleteButton">Удалить</button>
            <button type="button" onclick="history.back()">Назад</button>
        </div>
    </div>

    <script>
        const studentId = window.location.pathname.split('/').pop();
        const studentDetailsDiv = document.getElementById('studentDetails');

        fetch(`/api/students/${studentId}`)
            .then(response => response.json())
            .then(student => {
                studentDetailsDiv.innerHTML = `
                    <p><strong>id:</strong> ${student.id}</p>
                    <p><strong>Имя:</strong> ${student.name}</p>
                    <p><strong>Email:</strong> ${student.email}</p>
                    <p><strong>Телефон:</strong> ${student.phone}</p>
                `;
            });

        document.getElementById('deleteButton').addEventListener('click', function() {
            fetch(`/api/students/${studentId}`, {
                method: 'DELETE'
            })
            .then(response => response.json())
            .then(data => {
                alert(data.messages.success);
            });
        });
    </script>
<?= $this->endSection() ?>