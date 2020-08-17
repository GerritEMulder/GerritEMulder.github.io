<?php

    if(isset($_POST['submit'])) {
        $name = $_POST['fullname'];
        $mailFrom = $_POST['email_address'];
        $subject = $_POST['message_subject'];
        $message = $_POST['message'];

        $mailTo = "gerrit97@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an email from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: contact.html?mailsent");
    }

?>