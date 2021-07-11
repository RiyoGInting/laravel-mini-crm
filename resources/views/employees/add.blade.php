@extends('layouts.master')
@section('title', 'Add Employee')

@section('content')
<h3>Add Employee</h3>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('create.employee') }}">
    @csrf
    <div class="mb-3 row">
        <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="first_name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="last_name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="company_id" class="col-sm-2 col-form-label">Company</label>
        <div class="col-sm-10">
            <select name="company_id" id="company_id">
                <option selected="selected" value="">Choose one</option>
                @foreach ($company as $c)
                <option value="{{ $c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="email">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="phone">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection