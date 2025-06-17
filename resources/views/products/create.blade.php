@extends('layouts.app')
@section('title', 'Добавить товар')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Добавить товар</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Название</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Категория</label>
                    <select name="category_id" class="form-select">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Цена (₽)</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price') }}" class="form-control">
                    @error('price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Описание</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад</a>
                </div>
            </form>
        </div>
    </div>
@endsection