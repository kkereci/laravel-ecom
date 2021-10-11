@extends('layouts.app')
@section('content')
    <h1>Create a product</h1>
<form action=" {{ route('products.update', ['product' => $product->id ]) }}" method="post">
    @csrf   
    @method('PUT')
<div class="form-row">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value={{ old('title') ?? $product->title }} required>
</div>
<div class="form-row">
    <label>Description</label>
    <input type="text" name="description" value={{ old('description') ?? $product->description }} class="form-control" required>
</div>
<div class="form-row">
    <label>Price</label>
    <input type="number" min="1.00" step="0.01" name="price" value={{ old('price') ?? $product->price }} class="form-control" required>
</div>
<div class="form-row">
    <label>Stock</label>
    <input type="number" min="0" step="1" name="stock" value={{ old('stock') ?? $product->stock }} class="form-control" required>
</div>
<div class="form-row">
    <label>Status</label>
    <select name="status" class="custom-select" required>
    <option value="available"  {{ old('status') == 'available' ? 'selected' : ($product->status == 'available' ? 'selected' : '')}}>available</option>
    <option value="unavailable"{{ old('status') == 'unavailable' ? 'selected' : ($product->status == 'unavailable' ? 'selected' : '' )}}>unavailable</option>
    </select>
</div>
<div class="form-row">
<button class="btn btn-primary btn-lg mt-3" type="submit">Update product</button>
</div>
</form>
@endsection