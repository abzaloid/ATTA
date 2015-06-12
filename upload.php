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
print "sent";

?>