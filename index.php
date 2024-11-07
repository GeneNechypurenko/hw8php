<?php
include_once 'Button.php';
include_once 'Text.php';
include_once 'Label.php';
include_once 'convertToHTML.php';

$button = new Button('lightblue', 100, 40, 'submitBtn', 'Отправить', true);
$text = new Text('white', 440, 40, 'inputText', '', 'Введите текст');
$label = new Label('transparent', 100, 20, $text);

$submittedText = isset($_POST['inputText']) ? htmlspecialchars($_POST['inputText']) : '';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Элементы управления</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card p-4 shadow" style="max-width: 500px; margin: 0 auto;">
        <h2 class="text-center mb-4">Элементы управления</h2>

        <form action="" method="post">
            <div class="mb-3">
                <?php echo convertToHTML($label); ?>
            </div>
            <div class="mb-3">
                <?php echo convertToHTML($text); ?>
            </div>
            <div class="text-center">
                <?php echo convertToHTML($button); ?>
            </div>
        </form>

        <?php if ($submittedText): ?>
            <div class="alert alert-success mt-4">
                <strong>Введенный текст:</strong> <?= $submittedText ?>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
