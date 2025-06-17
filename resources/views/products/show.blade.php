@extends('layouts.app')
@section('title', 'Просмотр товара')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Товар: {{ $product->name }}</h5>
        </div>
        <div class="card-body">
            <p><strong>Категория:</strong> {{ $product->category->name }}</p>
            <p><strong>Цена:</strong> {{ number_format($product->price, 2, ',', ' ') }} ₽</p>
            <p><strong>Описание:</strong> {{ $product->description ?? 'Нет описания' }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@endsection