<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1>Детали <span class="highlight">студента</span></h1>
        <div id="student"></div>
        <button type="button" onclick="history.back()">Назад</button>
    </div>

    <script>
        const studentId = <?= $id ?>; // Получаем ID из контроллера
        fetch(`/api/students/${studentId}`)
            .then(response => response.json())
            .then(student => {
                const studentDiv = document.getElementById('student');
                studentDiv.innerHTML = `
                    <p><strong>id:</strong> ${student.id}</p>
                    <p><strong>Имя:</strong> ${student.name}</p>
                    <p><strong>Email:</strong> ${student.email}</p>
                    <p><strong>Телефон:</strong> ${student.phone}</p>
                `;
            });
    </script>
<?= $this->endSection() ?>