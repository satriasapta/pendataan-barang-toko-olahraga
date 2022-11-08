<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <title>Login EA Sports</title>
</head>

<body>
    <div class="container mt-5" style="max-width: 500px;">
        <h1 class="text-center mb-5">Login EA Sports</h1>
        <form action="/login/auth" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" id="" placeholder="Masukkan username Anda !" name="username" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" id="" placeholder="Masukkan password Anda !" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>