@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/home" class="btn btn-primary">Back</a>&nbsp;&nbsp;User</div>

                <div class="card-body">
                <h4>You searched for {{ $name }}</h4>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Created</th>
                        </tr>
                        @if($user)
                           
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ \Carbon\Carbon::parse($user->created_at)->format('m/d/Y')}}</td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="4" align="center">No User Found</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection