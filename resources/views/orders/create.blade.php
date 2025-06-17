@extends('layouts.app')
@section('title', 'Создать заказ')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Создать заказ</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">ФИО покупателя</label>
                    <input type="text" name="customer_name" value="{{ old('customer_name') }}" class="form-control">
                    @error('customer_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Товар</label>
                    <select name="product_id" class="form-select">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                        @endforeach
                    </select>
                    @error('product_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Количество</label>
                    <input type="number" name="quantity" value="{{ old('quantity', 1) }}" min="1" class="form-control">
                    @error('quantity')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Комментарий</label>
                    <textarea name="comment" class="form-control" rows="4">{{ old('comment') }}</textarea>
                    @error('comment')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Дата создания</label>
                    <input type="date" name="created_date" value="{{ old('created_date') }}" class="form-control">
                    @error('created_date')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Создать</button>
                    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Назад</a>
                </div>
            </form>
        </div>
    </div>
@endsection