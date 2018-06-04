<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Login page</h1>
    
    <form action="" method="post">
        {{ csrf_field() }}
        <ul>
            <li>UserName: <input type="text"></li>
            <li>Password: <input type="text"></li>
        </ul>
    </form>

    
    <button>Login</button>

</body>
</html>