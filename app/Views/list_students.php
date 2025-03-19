<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1>Список <span class="highlight">студентов</span></h1>
        <ul id="students"></ul>

        <button type="button" onclick="history.back()">Назад</button>
    </div>

    <script>
        fetch('/api/students')
            .then(response => response.json())
            .then(students => {
                const studentsList = document.getElementById('students');
                students.forEach(student => {
                    const li = document.createElement('li');
                    li.textContent = `${student.id} ${student.name} (${student.email} ${student.phone})`;
                    studentsList.appendChild(li);
                });
            });
    </script>
<?= $this->endSection() ?>