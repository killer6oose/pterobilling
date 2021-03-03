<!DOCTYPE html>
<html>
    <body>
        <h1>You received a message from the contact form on the PteroBilling store.</h1>
        <p>
            <b>Email:</b> {{ $email }}<br>
            <b>Name:</b> {{ $name }}<br>
            <b>Subject:</b> {{ $messageSubject }}<br>
            <b>Message:</b><br>
            {{ $messageBody }}
        </p>
    </body>
</html>