<table>
    <thead>
    <tr>
        <th>Название</th>
        <th>Цена</th>
        <th>Категория</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }} ₽</td>
            <td>{{ $product->category->name }}</td>
            <td>
                <a href="{{ route('products.show', $product) }}">Просмотр</a>
                <a href="{{ route('products.edit', $product) }}">Редактировать</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{ route('products.create') }}">Добавить товар</a>