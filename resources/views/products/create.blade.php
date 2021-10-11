@extends('layouts.app')
@section('content')
    <h1>Create a product</h1>
<form action=" {{ route('products.store') }}" method="post" required>
    @csrf   
<div class="form-row">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
</div>
<div class="form-row">
    <label>Description</label>
    <input type="text" name="description" class="form-control" value="{{ old('description') }}" required>
</div>
<div class="form-row">
    <label>Price</label>
    <input type="number" min="1.00" step="0.01" name="price" class="form-control" value="{{ old('price') }}" required>
</div>
<div class="form-row">
    <label>Stock</label>
    <input type="number" min="0" step="1" name="stock" class="form-control" value="{{ old('stock') }}" required>
</div>
<div class="form-row">
    <label>Status</label>
    <select name="status" class="custom-select" required>
    <option value="" selected>Select...</option>
    <option value="available" {{ old('status') == 'available' ? 'selected' : ''}}>available</option>
    <option value="unavailable" {{ old('status')  == 'unavailable' ? 'selected' : '' }} >unavailable</option>
    </select>
</div>
<div class="form-row">
<button class="btn btn-primary btn-lg mt-3" type="submit">Create product</button>
</div>
</form>
@endsection
