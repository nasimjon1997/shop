<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <div>
        <label>ФИО покупателя</label>
        <input type="text" name="customer_name" value="{{ old('customer_name') }}">
        @error('customer_name') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Товар</label>
        <select name="product_id">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
        @error('product_id') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Количество</label>
        <input type="number" name="quantity" value="{{ old('quantity', 1) }}" min="1">
        @error('quantity') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Комментарий</label>
        <textarea name="comment">{{ old('comment') }}</textarea>
        @error('comment') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label>Дата создания</label>
        <input type="date" name="created_date" value="{{ old('created_date') }}">
        @error('created_date') <span>{{ $message }}</span> @enderror
    </div>
    <button type="submit">Создать</button>
</form>