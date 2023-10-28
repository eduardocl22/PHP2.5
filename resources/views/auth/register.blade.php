<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Restaurante UDI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        header {
            background-color: #ff0000;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            font-size: 24px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            background-color: #333;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }
        main {
            padding: 20px;
        }

        .user-registration-form {
            background-color: #ff0000;
            border: 1px solid #cc0000;
            border-radius: 5px;
            padding: 20px;
            max-width: 400px;
            margin: 150px auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .user-registration-form h2 {
            font-size: 24px;
            color: #fff;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            color: #fff;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #cc0000;
            border-radius: 5px;
        }

        .btn-registrarse {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .registration-image {
            float: left;
            width: 500px;
            height: 500px;
            margin-left: 191px;
            margin-top: 145px;
        }

        .placeholder-text {
            display: inline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Restaurante UDI</h1>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('dish.index') }}">Ver Platos</a></li>
            <li><a href="{{ route('customers.index') }}">Ver Clientes</a></li>
            <li><a href="{{ route('invoiceDetails.index') }}">Ver Facturas</a></li>
            <li><a href="{{ route('orders.index') }}">Ver Órdenes</a></li>
            <li><a href="{{ route('reservaciones.index') }}">Ver Reservaciones</a></li>
        </ul>
    </nav>

    <main>

        <img src="{{ asset('images/1697995863.jpeg') }}" class="registration-image" alt="Imagen de registro">

        <div class="user-registration-form">
            <h2>Registro</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre" style="color: #fff;">Nombre completo:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre completo" required>
                </div>
                <div class="form-group">
                    <label for="usuario" style="color: #fff;">Usuario:</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Escribe tu nombre de usuario" required>
                </div>
                <div class="form-group">
                    <label for="email" style="color: #fff;">Correo:</label>
                    <input type="email" name="email" id="email" placeholder="Escribe tu correo electrónico" required>
                </div>
                <div class="form-group">
                    <label for="contrasena" style="color: #fff;">Contraseña:</label>
                    <input type="password" name="contrasena" id="contrasena" placeholder="Escribe tu contraseña" required>
                </div>
                <div class="form-group">
                    <label for="confirmar_contrasena" style="color: #fff;">Confirmar Contraseña:</label>
                    <input type="password" name="confirmar_contrasena" id="confirmar_contrasena" placeholder="Confirma tu contraseña" required>
                </div>
                <button type="submit" class="btn btn-registrarse">Registrarse</button>
            </form>
        </div>
    </main>
</body>
</html>
