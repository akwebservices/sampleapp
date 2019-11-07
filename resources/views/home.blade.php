@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <span style="padding-bottom: 20px; display: block;"></span>
                    <h4><a href="{{ route('users') }}">List All Users</a></h4>

                    
                    <h6>Enter Joe Smith or Jack Johnson</h6>
                        
                    <form action="{{ route('user') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <input class="form-control" name="name" placeholder="Enter Name Here" required="required" />
                            </div>
                            <div class="col-md-2">
                                <input type="submit" class="btn btn-success" value="Search" />
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
