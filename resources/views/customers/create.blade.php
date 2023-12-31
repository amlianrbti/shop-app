@extends('customers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="text-align: center">Add New Customer</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('customers.index') }}" class="btn btn-outline-primary">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>                
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nama Panjang kamu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <input type="text" name="gender" class="form-control" placeholder="Male or Female">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="example:...@gmail.com">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon:</strong>
                <input type="text" name="phone" class="form-control" placeholder="08xxxxxxx">
            </div>
        </div>&nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </div>
    </form>
    
@endsection