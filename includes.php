<?
if(isset($_POST['name1'])&&isset($_POST['phone1'])){ 
                                       //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'bandrashko1@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Форма 1'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name1'].'</p>
                        <p>Телефон: '.$_POST['phone1'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>