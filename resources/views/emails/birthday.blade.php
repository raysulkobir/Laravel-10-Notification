<!-- resources/views/emails/birthday.blade.php -->

<html>
<head>
    <!-- Your email styles go here -->
</head>
<body>
    <h1>Happy Birthday, {{ $notifiable->name }}!</h1>
    <p>{{ $messages['wish'] }}</p>

    <!-- Add any other birthday-specific content here -->

    <p>Thank you for being a valued member!</p>
</body>
</html>
