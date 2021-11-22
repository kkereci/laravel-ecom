@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">This is the admin panel.</div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="{{ route('products.index')}}" class="list-coup-item">Manage products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
