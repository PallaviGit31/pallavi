<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @vite(['resources/css/app.scss','resources/css/app.css', 'resources/js/app.js'])
    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

</head>

<body class="c-app">
<div class="container">
<h1 class="h3 mb-3">List Users</h1>


<div class="card border">
    
    <div class="card-body border-top py-4">
        <div class="table-responsive">
            <table class="table table-bordered table-sm table-striped">
                <thead>
                    <tr>
                        <th style="width:80px">Sr. No.</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th> Date of Birth</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>State</th>
                        <th>City</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @if ($users->count())
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->dob }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->country_name  }}</td>
                                <td>{{ $user->state_name }}</td>
                                <td>{{ $user->city_name }}</td>
                                
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="mt-3">
                
            </div>
        </div>
    </div>
</div>
</div>

<a href="{{ route('logout') }}" class="text-center">Logout</a>

</body>
</html>