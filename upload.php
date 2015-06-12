<?php
$email = $_POST['email'] ;
$text = $_POST['text'] ;
$contact_name = $_POST['name'];
$telephone = $_POST['telephone'];

$final_message = "";
$final_message .= "\ncontact name: ".$contact_name;
$final_message .= "\nemail: ".$email;
$final_message .= "\ntelephone: ".$telephone;
$final_message .= "\ntext\n: ".$text;

mail("aserekov@gmail.com", "New order from ".$contact_name, $final_message, "From:web@atta.kz" );
mail("abzal.serekov@gmail.com", "New order from ".$contact_name, $final_message, "From:web@atta.kz" );
mail($email, "Atta Studios: Ваше сообщение дощло успешно", "Здравствуйте ".$contact_name."\n\nСпасибо, что нам написали!\nМы с вами свяжемся в очень короткие сроки\n\nAtta Studios,\nAlmaty, Kazakhstan\n2015", "From:web@atta.kz" );

header('Location: /index.php');    

?>