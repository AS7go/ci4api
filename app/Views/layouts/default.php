<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/styles1.css">
</head>
<body>
    <div class="page-container">
        <header>
            <div class="logo"><?= $title ?></div>
            <nav>
                <a href="/">Главная</a>
                <a href="/test/students">Студенты</a>
                <a href="/test/students-table">Список студентов (таблица)</a>
            </nav>
        </header>

        <div class="content">
            <?= $this->renderSection('content') ?>
        </div>

        <footer>
            <div class="footer-content">
                <p>&copy; 2024 <?= $title ?>. Все права защищены.</p>
                <div class="social-icons">
                    <a href="#" class="icon">Facebook</a>
                    <a href="#" class="icon">Telegram</a>
                    <a href="#" class="icon">GitHub</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>