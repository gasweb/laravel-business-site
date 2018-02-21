@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div>

                @if(count($listings))
                    <h3>Your listings</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Website</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Bio</th>
                        </tr>
                        @foreach($listings as $listing)
                            <tr>
                                <td>{{ $listing->name }}</td>
                                <td>{{ $listing->address }}</td>
                                <td>{{ $listing->website }}</td>
                                <td>{{ $listing->email }}</td>
                                <td>{{ $listing->phone }}</td>
                                <td>{{ $listing->bio }}</td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
