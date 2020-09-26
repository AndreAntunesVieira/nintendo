<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Nintendo</title>
    <style>
        body{
            min-height: 100vh;
            background-color: #f5f5f5;
        }
        .center-v{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="center-v">
    <div class="container-sm">

        <main class="card p-3">
            <form method="post" action="/login">
                <h1>Faça seu login na nintendo</h1>

                <div class="form-group">
                    <input type="text" name="login" class="form-control" placeholder="Login"/>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Senha"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Entrar</button>
                </div>

            </form>
        </main>
    </div>
</body>
</html>