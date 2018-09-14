<?php
$from = 'noreply@acm-utsa.org';

$text = $_POST['text'];
$to = 'acmw.utsa@gmail.com';
$sender = $_POST['name'] . $_POST['m-email'];

if(strlen($text) <= 1 || strlen($sender) <= 1 || strlen($from) <= 1){
    die('Please complete all fields of the contact form.');
}

$recipient = 'ACM-W UTSA';
if($_POST['recipient'] == 'acmw'){
    //use defaults
}
if($_POST['recipient'] == 'acmw-chair'){
    $recipient = 'Tiffany Tabourne';
}
else if($_POST['recipient'] == 'acmw-vice-chair'){
    $recipient = 'Anna Arroyo';
}
else if($_POST['recipient'] == 'acmw-secretary'){
    $recipient = 'Patricia Lao';
}
else{
    $recipient = 'undefined recipient';
}

$body = 'Message from acm-utsa.org, sent by ' . htmlentities($sender) . '<br />Email: ' . htmlentities($_POST['email']) . '<br />For: '.htmlentities($recipient).'<br />Message: <br />' . htmlentities($text);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: " . $from . "\r\n"."X-Mailer: php";

$message_stat = '';
if(mail($to, 'Message on acm-utsa.org', $body, $headers)){
    $message_stat = '1';
}
else{
    $message_stat = '2';
}

header('Location: contact?message_stat='.rawurlencode($message_stat));
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require('common/head-includes.php');
        ?>
        <title>Contact Us | Association for Computing Machinery UTSA</title>
        <style type="text/css">
            select, input[type="text"], input[type="password"], textarea {
                background-color: #DFDFDF;
                border-radius: 3px;
                border-style: none;
                outline-color: #204972;
                outline-width: 1px;
                outline-style: none;
                padding-left: 10px;
                padding-right: 10px;
            }
            select:focus, input[type="text"]:focus, input[type="password"]:focus, textarea:focus {
                outline-style: none;
                box-shadow: 0px 0px 0px 3px #204972;
            }
        </style>
    </head>
    <body>
        <?php
            require('common/menu.php');
        ?>
        <div id="content" class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row section-container group">
                        <div class="col-sm-12">
                            <h1>Contact Us</h1>
                            <br />
                            <div class="row">
                                <div class="col-sm-8">
                                    <p>
                                        ACM's primary form of communication is through <a href="index#slack-container">Slack</a> at <a href="http://acm-utsa.slack.com">acm-utsa.slack.com</a> but you can contact us directly through the form below.
                                    </p>
                                </div>
                                <div class="col-sm-4" style="text-align:center;">
                                    <a class="link" href="slack_invite" target="_blank">
                                        <input type="image" src="images/icons/add-to-slack.png" class="slack-button" style="outline-style: none;" />
                                    </a>
                                </div>
                            </div>
                            <br />
                            <form action="send_message" method="post">
                                <?php
                                    $position = '';
                                    if(isset($_GET['position'])){
                                        $position = $_GET['position'];
                                    }
                                ?>
                                <div class="row">
                                    <div class="hidden-xs col-sm-12" style="text-align:left;margin-bottom:10px;">
                                        <input type="text" name="name" placeholder="Your Name" aria-required="true" style="margin-right: 10px; width: 260px;" />
                                        <input type="text" name="email" placeholder="Your Email" aria-required="true" style="width: 260px;" />
                                    </div>
                                    <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl" style="text-align:center;margin-top:10px;">
                                        <input type="text" name="m-name" placeholder="Your Name" aria-required="true" style="width:100%;" />
                                    </div>
                                    <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl" style="text-align:center;margin-top:10px;margin-bottom:10px;">
                                        <input type="text" name="m-email" placeholder="Your Email" aria-required="true" style="width:100%;" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="text" placeholder="Your Message" style="width:100%;height:400px;"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 hidden-xs" style="text-align:right;">
                                        <input type="submit" value="Send" id="contact-form-submit-button" /> to
                                        <select name="recipient" style="margin-left:10px;">
                                            <option value="acmw">
                                                ACM-W UTSA
                                            </option>
                                            <option value="acmw-chair"<?php if($position == 'president') echo(' selected');?>>
                                                ACM-W Chair
                                            </option>
                                            <option value="acmw-vice-chair"<?php if($position == 'vice-president') echo(' selected');?>>
                                                Vice Chair
                                            </option>
                                            <option value="acmw-secretary"<?php if($position == 'secretary') echo(' selected');?>>
                                                Secretary
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl" style="text-align:center;">
                                        <input type="submit" value="Send" id="contact-form-submit-button" />
                                        <br />
                                        to
                                    </div>
                                    <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl" style="text-align:center;margin-top:10px;">
                                        <select name="recipient">
                                            <option value="acmw">
                                                ACM-W UTSA
                                            </option>
                                            <option value="acmw-chair"<?php if($position == 'president') echo(' selected');?>>
                                                ACM-W Chair
                                            </option>
                                            <option value="acmw-vice-chair"<?php if($position == 'vice-president') echo(' selected');?>>
                                                Vice Chair
                                            </option>
                                            <option value="acmw-secretary"<?php if($position == 'secretary') echo(' selected');?>>
                                                Secretary
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            <form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require('common/footer.php');
        ?>
    </body>
</html>