<table>
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
            <td>{{ $order->product->price * $order->quantity }} ₽</td>
            <td>
                <a href="{{ route('orders.show', $order) }}">Просмотр</a>
                @if ($order->status == 'new')
                    <form action="{{ route('orders.complete', $order) }}" method="POST">
                        @csrf
                        <button type="submit">Выполнить</button>
                    </form>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{ route('orders.create') }}">Создать заказ</a>