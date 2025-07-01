<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);

    $to = "spb_programmer@mail.ru";  // ← сюда придёт письмо
    $subject = "Новая заявка с сайта";
    $message = "Имя: $name\nТелефон: $phone";

    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
        // можно сделать redirect:
        // header("Location: thankyou.html");
    } else {
        echo "Ошибка отправки.";
    }
}
?>