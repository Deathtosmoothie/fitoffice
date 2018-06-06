<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['theme'])&&$_POST['theme']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['message'])&&$_POST['message']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'info@fit-office.net'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заявка с сайта fit-office'; //Загаловок сообщения
        $from = $_POST['email'];
        $message = ''.$subject.'
                Имя: '.$_POST['name'].'
                      Тема: '.$_POST['theme'].'
                        Сообщение: '.$_POST['message'].'                    
                        email: '.$_POST['email'].''; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers = 'From:' .$from.''; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
        echo $message;
}
?>

