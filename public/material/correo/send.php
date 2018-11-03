Prueba smtp
<?php
 
    $this->Email->smtpOptions = array(
                    'timeout'=> '5',
                    'host' => 'ssl://in.mailjet.com',
                    'port'=> '2525',
                    'username'=>'268874d93793da32b170dc00226f8087',
                    'password'=>'b841e68a8db427b5bbd724cd6b34e75c');
    $this->Email->delivery = 'smtp';
    $this->Email->from = 'You <contacto@instaclass>';
    $this->Email->to = 'Somebody <ariel@nmhdesarrolla.cl>';
    $this->Email->subject = 'My first email by Mailjet';
    $this->Email->send('Hello from Mailjet & CakePHP 1.3 !');
?>