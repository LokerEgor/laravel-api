<!DOCTYPE html>
<html>
<head>
    <title>Тестовое задание</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Создать новый пост</h1>
    <form method="POST" action="/posts">
        <input type="text" name="title" placeholder="Заголовок" required>
        <textarea name="content" placeholder="Текст поста" rows="5" required></textarea>
        <button type="submit">Отправить</button>
    </form>
    <hr>
    <p><a href="/api/posts">Посмотреть все посты (JSON)</a></p>
</body>
</html>