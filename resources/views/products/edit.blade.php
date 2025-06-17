<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Название</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}">
        @error('name') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Категория</label>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Цена</label>
        <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}">
        @error('price') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Описание</label>
        <textarea name="description">{{ old('description', $product->description) }}</textarea>
        @error('description') <span>{{ $message }}</span> @enderror
    </div>
    <button type="submit">Обновить</button>
</form>