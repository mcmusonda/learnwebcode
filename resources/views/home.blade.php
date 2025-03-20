<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div style="border: 3px solid #000;">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf 
            <input type="text" name="name" id="" placeholder="Enter your name." style="margin: 0 5">
            <input type="text" name="email" id="" placeholder="Enter your email.">
            <input type="text" name="password" id="" placeholder="Enter your password." tyle="margin: 5px">
            <button>Register</button>
            <p></p>
        </form>
    </div>
</body>
</html>