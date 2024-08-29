<?php
// get.php - получение ссылки на телеграм бота

function getTelegramBotLink() {
    // Здесь нужно использовать API для получения ссылки
    $api_url = 'https://okoboga.ru/api.php'; // Замените на реальный URL API
    $response = file_get_contents($api_url);

    // Парсинг JSON ответа
    $data = json_decode($response, true);

    // Возвращаем ссылку
    return $data['link'];
}

// Используйте эту функцию в нужных местах вашего кода
$telegramBotLink = getTelegramBotLink();
?>