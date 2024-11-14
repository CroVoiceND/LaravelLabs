<?php
session_start();

if (!isset($_SESSION['profile'])) {
    echo "Немає даних для відображення. Будь ласка, заповніть форму.";
    exit();
}

$profile = $_SESSION['profile'];
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Інформація профілю</title>
</head>

<body>
    <h1>Інформація профілю</h1>

    <?php if (isset($profile['avatar'])): ?>
        <img src="<?= htmlspecialchars($profile['avatar']); ?>" alt="Аватар" style="width: 150px; height: auto;">
    <?php endif; ?>

    <p><strong>Прізвище:</strong> <?= htmlspecialchars($profile['surname']); ?></p>
    <p><strong>Ім'я:</strong> <?= htmlspecialchars($profile['name']); ?></p>
    <p><strong>По-батькові:</strong> <?= htmlspecialchars($profile['patronymic']); ?></p>
    <p><strong>Дата народження:</strong> <?= htmlspecialchars($profile['birthdate']); ?></p>
    <p><strong>Адреса:</strong> <?= htmlspecialchars($profile['address']); ?></p>
    <p><strong>Мої захоплення:</strong> <?= htmlspecialchars(implode(', ', $profile['hobbies'] ?? [])); ?></p>
    <p><strong>Стать:</strong> <?= htmlspecialchars($profile['gender']); ?></p>
    <p><strong>Національність:</strong> <?= htmlspecialchars($profile['nationality']); ?></p>
    <p><strong>Коротка інформація:</strong> <?= htmlspecialchars($profile['info']); ?></p>
    <p><strong>E-mail:</strong> <?= htmlspecialchars($profile['email']); ?></p>
    <p><strong>Skype:</strong> <?= htmlspecialchars($profile['skype']); ?></p>
    <p><strong>Телефон:</strong> <?= htmlspecialchars($profile['phone']); ?></p>
    <p><strong>Зв'язуватися зі мною по:</strong>
        <?= htmlspecialchars(implode(', ', $profile['contact_method'] ?? [])); ?></p>
    <p><strong>Отримувати розсилку:</strong> <?= htmlspecialchars($profile['subscribe']); ?></p>
</body>

</html>