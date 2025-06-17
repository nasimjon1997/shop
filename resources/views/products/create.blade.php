<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div>
        <label>Название</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Категория</label>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Цена</label>
        <input type="number" step="0.01" name="price" value="{{ old('price') }}">
        @error('price') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Описание</label>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description') <span>{{ $message }}</span> @enderror
    </div>
    <button type="submit">Сохранить</button>
</form>