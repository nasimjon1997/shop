<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель | @yield('title')</title>
    <!-- Подключение Bootstrap через CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #2c3e50;
            color: #fff;
            padding: 20px 0;
            position: fixed;
            width: 250px;
        }
        .sidebar h4 {
            padding: 15px 20px;
            margin: 0;
            border-bottom: 1px solid #34495e;
        }
        .sidebar a {
            color: #bdc3c7;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            transition: background 0.2s;
        }
        .sidebar a:hover {
            background-color: #34495e;
            color: #fff;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #e9ecef;
            padding: 15px 20px;
            border-radius: 8px 8px 0 0;
        }
        .card-body {
            padding: 20px;
        }
        .table {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }
        .table th, .table td {
            vertical-align: middle;
            padding: 12px;
        }
        .table thead {
            background-color: #f8f9fa;
        }
        .btn-sm {
            padding: 5px 10px;
            font-size: 14px;
        }
        .alert {
            border-radius: 5px;
        }
        .form-label {
            font-weight: 500;
        }
        .form-control, .form-select {
            border-radius: 5px;
        }
        .form-control:focus, .form-select:focus {
            border-color: #2c3e50;
            box-shadow: 0 0 5px rgba(44, 62, 80, 0.2);
        }
        .text-danger {
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">Админ-панель</h4>
        <a href="{{ route('products.index') }}">Товары</a>
        <a href="{{ route('orders.index') }}">Заказы</a>
    </div>
    <!-- Content -->
    <div class="content w-100">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>