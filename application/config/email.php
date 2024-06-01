<?php defined('BASEPATH') or exit('No direct script access allowed');

//$config = array(
//    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
//    'smtp_host' => 'smtp.googlemail.com',
//    'smtp_port' => 465,
//    'smtp_user' => 'leo.shade123@gmail.com',
//    'smtp_pass' => 'blazikencombusken',
//    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
//    'mailtype' => 'html', //plaintext 'text' mails or 'html'
//    'smtp_timeout' => '4', //in seconds
//    'charset' => 'utf-8',
//    'wordwrap' => TRUE,
//    'crlf'    => "\r\n",
//    'newline' => "\r\n"
//);

$config = array(
    'protocol' => "smtp",
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'goenawan.fredy@gmail.com',
    'smtp_pass' => 'eutaujmjocsjfuid',
    'smtp_timeout' => 30,
    'smtp_debug' => 4,
    'crlf' => "\r\n",
    'charset' => "utf-8"
);
