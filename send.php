<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['tel']))&&(isset($_POST['email']))){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'info@fit-office.net'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заявка с сайта fit-office'; //Заголовок сообщения
        
        if($_POST['email'] == "") {
            $from = 'no-email';
        }
        
        else {
            $from = $_POST['email'];
        }
    
        $message = ''.$subject.'
                Имя: '.$_POST['name'].'
                      Телефон: '.$_POST['tel'].'                   
                        email: '.$_POST['email'].''; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers = 'From:' .$from.''; //Наименование и почта отправителя
        
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
                   

        echo "<script>alert('Уважаемый клиент! Ваша заявка принята, наши специалисты свяжутся с Вами в ближайшее время.');
            document.location.href='/index.html';</script>";
            
        header("Location: http://www.fit-office.net");
            
          
            
       
        
}
else {
    echo "<script>alert('Извините, сервис временно не работает (не отправлено)');
            document.location.href='/index.html';</script>";
        }
?>

