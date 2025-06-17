<div>
    <h1>Заказ #{{ $order->id }}</h1>
    <p>ФИО покупателя: {{ $order->customer_name }}</p>
    <p>Товар: {{ $order->product->name }}</p>
    <p>Количество: {{ $order->quantity }}</p>
    <p>Итоговая цена: {{ $order->product->price * $order->quantity }} ₽</p>
    <p>Статус: {{ $order->status == 'new' ? 'Новый' : 'Выполнен' }}</p>
    <p>Комментарий: {{ $order->comment ?? 'Нет комментария' }}</p>
    <p>Дата создания: {{ $order->created_date }}</p>
    <a href="{{ route('orders.index') }}">Назад</a>
</div>