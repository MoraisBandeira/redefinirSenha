<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newPassword</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="" method="POST">
                <input type="hide" name="email" value=<?= $_GET["email"];?>>
                <input type="password" name="password" placeholder="nova senha">
                <button class="btn btn-primary">Alterar</button>
            </form>
        </div>
    </div>
</body>
</html>