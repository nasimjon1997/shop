@extends('layouts.app')
@section('title', 'Просмотр заказа')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Заказ #{{ $order->id }}</h5>
        </div>
        <div class="card-body">
            <p><strong>ФИО покупателя:</strong> {{ $order->customer_name }}</p>
            <p><strong>Товар:</strong> {{ $order->product->name }}</p>
            <p><strong>Количество:</strong> {{ $order->quantity }}</p>
            <p><strong>Итоговая цена:</strong> {{ number_format($order->product->price * $order->quantity, 2, ',', ' ') }} ₽</p>
            <p><strong>Статус:</strong> {{ $order->status == 'new' ? 'Новый' : 'Выполнен' }}</p>
            <p><strong>Комментарий:</strong> {{ $order->comment ?? 'Нет комментария' }}</p>
            <p><strong>Дата создания:</strong> {{ $order->created_date }}</p>
            <a href="{{ route('orders.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@endsection