<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1>Список <span class="highlight">студентов</span></h1>

        <a href="/test/add-student" class="btn btn-outline-success btn-sm mb-3">Add Student</a> <table class="table">

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Телефон</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody id="studentsTableBody">
                </tbody>
        </table>
    </div>

    <script>
        fetch('/api/students')
            .then(response => response.json())
            .then(students => {
                const studentsTableBody = document.getElementById('studentsTableBody');
                students.forEach(student => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${student.id}</td>
                        <td>${student.name}</td>
                        <td>${student.email}</td>
                        <td>${student.phone}</td>
                        <td>

                            <a href="/test/update-student/${student.id}" class="btn btn-outline-primary btn-sm">Edit</a>
                            <button class="btn btn-outline-danger btn-sm delete-btn" data-id="${student.id}">Delete</button>
                        
                        </td>
                    `;
                    studentsTableBody.appendChild(row);
                });

                // Добавляем обработчики событий для кнопок Delete
                const deleteButtons = document.querySelectorAll('.delete-btn');
                deleteButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const studentId = this.dataset.id;
                        if (confirm('Вы уверены, что хотите удалить этого студента?')) {
                            fetch(`/api/students/${studentId}`, {
                                method: 'DELETE'
                            })
                            .then(response => response.json())
                            .then(data => {
                                alert(data.messages.success);
                                // Перезагружаем страницу после удаления
                                location.reload();
                            });
                        }
                    });
                });
            });
    </script>
<?= $this->endSection() ?>