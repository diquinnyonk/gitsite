<?php
session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;

require 'core/classes/Core.php';
require 'core/classes/Chat.php';

$chat = new Chat();
//$chat->throwMessage(1, 'This is a test message');
//echo '<pre>';
//print_r($chat->fetchMessages());
//echo '</pre>';
?>

<!DOCTYPE html>
<html>
    <head>AJAX Chat</head>
    <link rel="stylesheet" href="css/styles.css" />
    
    <body>
        
        <div class="chat">
            <div class="messages">
                <div class="message">
                    <a href="#">Username </a>says:
                    <p>Message here</p>
                </div>
            </div>
            <textarea class="entry" placeholder="Type here and hit return. Use shift + enter for a new line"></textarea>
        </div>
        
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/chat.js"></script>
    </body>
</html>
