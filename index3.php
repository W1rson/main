<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Transfer</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./mainds.css">

</head>
<body>
<div class='container mt-4'>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Transfer</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">

</head>
<body>


    <div class='container mt-4'>
    
    <form action="./fo.php" method="post">
    <h5 class='Some_arr'>ПЕРСОНАЛЬНЫЕ ДАННЫЕ</h5>
    <input type="text" name='birthdate' placeholder="Дата рождения - ДД/ММ/ГГГГ" class="form-control">
    <div class='i'>Как указано в Вашем паспорте или в идентификационной карточке</div><br>

    <h5 class='Some_arr'>КОНТАКТНЫЕ ДАННЫЕ</h5>
    <select id="country-select" name="country" class='form-control mb-3'>
        <option value="Росия" id='Some_country'>Росия</option>
        <option value="Украина" >Украина</option>
        <option value="США" >США</option>
        <option value="Канада" >Канада</option>
        <option value="Великобритания" >Великобритания</option>
        <option value="Польша" >Польша</option>
        <option value="Чехия" >Чехия</option>
        <option value="Китай" >Китай</option>
        <option value="Казакстан" >Казакстан</option>
        <option value="Турция" >Турция</option>
        <option value="Германия" >Германия</option>
    </select>
    <input type="text" name='postal_code' placeholder='Почтовый индекс' class='form-control mb-3'>
    <input type="text" name='city' placeholder='Город' class='form-control mb-3'>
    <input type="text" name='address' placeholder='Адрес' class='form-control mb-3'>
    <input type="text" name='mobile_number' placeholder='Номер мобильного телефона' class='form-control mb-3'>
    <input type="text" name='discount_or_referral_code' placeholder='Введите скидочный или реферальный код' class='form-control mb-0'>
    <div class='i'>Необязательно</div><br>

    <h5 class='Some_arr'>ДАННЫЕ КАРТЫ</h5>
    <select id="card-select" name="card_type" class='form-control mb-3'>
        <option value="---">Выберите карту</option>
        <option value="Tinkoff">Tinkoff</option>
        <option value="American Express">American Express</option>
        <option value="Visa">Visa</option>
        <option value="Discover">Discover</option>
        <option value="МИР">МИР</option>
        <option value="Diners Club">Diners Club</option>
        <option value="JCB">JCB</option>
        <option value="UnionPay">UnionPay</option>
        <option value="Maestro">Maestro</option>
        <option value="Mir Pay">Mir Pay</option>
    </select>
    <input type="text" name='card_number' placeholder="Номер карты" class="form-control">
    
    <br><div class='i'>Окончание действия</div>
    <select name="expiration_month" class='form-control w-50 fl'>
        <option value="--" id=''>--</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>

    <select name="expiration_year" class='form-control w-50 fl'>
        <option value="---" id=''>----</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
        <option value="2027">2027</option>
        <option value="2028">2028</option>
        <option value="2029">2029</option>
        <option value="2030">2030</option>
        <option value="2031">2031</option>
        <option value="2032">2032</option>
        <option value="2033">2033</option>
        <option value="2034">2034</option>
        <option value="2035">2035</option>
        <option value="2036">2036</option>
        <option value="2037">2037</option>
        <option value="2038">2038</option>
        <option value="2039">2039</option>
        <option value="2040">2040</option>
        <option value="2041">2041</option>
        <option value="2042">2042</option>
        <option value="2043">2043</option>
        <option value="2044">2044</option>
        <option value="2045">2045</option>
        <option value="2046">2046</option>
        <option value="2047">2047</option>
        <option value="2048">2048</option>
    </select>

    <br><br><div class='i'>Код безопасности</div>
    <input type="text" name="security_code" placeholder='----' class='form-control mb-3'>

    <input type="checkbox" name="save_payment_data" class='fl mt-2'>
    <div class='fl' id='ll'>Сохранить платежные данные для будущих пополнений кошелька</div>
    <input type="submit" value="Далее" class="btn btn-success fr">
</form>

    </div>

    <script src="script.js"></script>
</body>
</html>

</div>
    <script>alert('Ошыбка');</script>
    
    <script src="script.js"></script>
</body>
</html>