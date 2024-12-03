<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Panel de Control del Administrador</h1>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-primary mx-2">Gestionar Productos</a>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary mx-2">Gestionar Usuarios</a>
            </div>

        <form action="{{ route('logout') }}" method="POST" class="mt-4 text-center">
            @csrf
            <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
        </form>
    </div>
</body>
</html>
