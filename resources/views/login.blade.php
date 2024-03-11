<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="demo" method="post">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input
                    type="text"
                    name="username"
                    id="username"
                    class="form-control"
                    placeholder="Enter username..."
                />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input
                    type="text"
                    name="password"
                    id="password"
                    class="form-control"
                    placeholder="Enter password..."
                />
            </div><br>
            <button type="submit" class="btn btn-success form-control">Login</button>
        </form>
    </div>

</body>

</html>