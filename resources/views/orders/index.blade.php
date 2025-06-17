@extends('layouts.app')
@section('title', 'Заказы')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Список заказов</h5>
            <a href="{{ route('orders.create') }}" class="btn btn-primary btn-sm">Создать заказ</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Дата создания</th>
                    <th>ФИО покупателя</th>
                    <th>Статус</th>
                    <th>Итоговая цена</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_date }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->status == 'new' ? 'Новый' : 'Выполнен' }}</td>
                        <td>{{ number_format($order->product->price * $order->quantity, 2, ',', ' ') }} ₽</td>
                        <td>
                            <a href="{{ route('orders.show', $order) }}" class="btn btn-info btn-sm">Просмотр</a>
                            @if ($order->status == 'new')
                                <form action="{{ route('orders.complete', $order) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Выполнить</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection