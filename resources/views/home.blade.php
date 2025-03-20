<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

    @auth
        <p>Congratulations! You're logged in.</p>
        <form action="/logout" method="post">
            @csrf 
            <button>Log out</button>
        </form>

        <div style="border: 3px solid #000;">
            <h2>All Posts</h2>
            @foreach($posts as $post)
                <div style="background-color: gray; padding: 10px; margin:10px">
                    <h3>{{$post['title']}}</h3>
                    <p>{{$post['body']}}</p>
                </div>
            @endforeach 
        </div>

        <div style="border: 3px solid #000;">
            <h2>Create a Post</h2>
            <form action="/create-post" method="post">
                @csrf 
                <input type="text" name="title" id="" placeholder="Post Title">
                <textarea name="body" id="" placeholder="Body content here ..."></textarea>
                <button>Save Post</button>
                <p></p>
            </form>
        </div>
    @else
        <div style="border: 3px solid #000;">
            <h2>Register</h2>
            <form action="/register" method="post">
                @csrf 
                <input type="text" name="name" id="" placeholder="Enter your name." style="margin: 0 5">
                <input type="email" name="email" id="" placeholder="Enter your email.">
                <input type="password" name="password" id="" placeholder="Enter your password." tyle="margin: 5px">
                <button>Register</button>
                <p></p>
            </form>
        </div>

        <div style="border: 3px solid #000;">
            <h2>Login</h2>
            <form action="/login" method="post">
                @csrf 
                <input type="text" name="login_name" id="" placeholder="Enter your name." style="margin: 0 5">
                <input type="password" name="login_password" id="" placeholder="Enter your password." tyle="margin: 5px">
                <button>Log In</button>
                <p></p>
            </form>
        </div>
    @endauth
    
</body>
</html>