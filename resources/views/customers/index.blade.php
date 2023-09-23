@extends('customers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a href="{{ route('customers.create') }}" class="btn btn-outline-secondary">Add data of Customer</a>
            </div>&nbsp;
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-succes">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th widht="280px">Action</th>
        </tr>
        @foreach ($customers as $customer )
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->gender }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-outline-info">Show</a>
                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-outline-primary">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection