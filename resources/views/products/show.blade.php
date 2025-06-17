<div>
    <h1>{{ $product->name }}</h1>
    <p>Категория: {{ $product->category->name }}</p>
    <p>Цена: {{ $product->price }} ₽</p>
    <p>Описание: {{ $product->description ?? 'Нет описания' }}</p>
    <a href="{{ route('products.index') }}">Назад</a>
</div>