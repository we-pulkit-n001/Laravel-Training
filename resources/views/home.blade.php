@extends('layout.app')
{{-- <h1>Home Blade {{ $name[0] }}</h1> --}}

<div class="container">
    <div class="button-wrapper">
        <a href="/login"><button class="btn btn-primary">Logout</button></a>
    </div>

    <div class="button-wrapper-google">
        <a href="/google" target="_blank"><button class="btn btn-primary">Search on Google</button></a>
    </div>

    <div class="button-wrapper-set">
        <a href="/set-session"><button class="btn btn-primary">Set Session</button></a>
        <a href="/set-cookie"><button class="btn btn-primary">Set Cookie</button></a>
    </div>

    <div class="button-wrapper-get">
        <a href="/get-session"><button class="btn btn-primary">Get Session</button></a>
        <a href="/get-cookie"><button class="btn btn-primary">Get Cookie</button></a>
    </div>

    <div class="button-wrapper-delete">
        <a href="/delete-session"><button class="btn btn-primary">Delete Session</button></a>
        <a href="/delete-cookie"><button class="btn btn-primary">Delete Cookie</button></a>
    </div>

    <h1>All Users</h1>
    <br>
    @foreach ($users as $user)
        <ul>
            <li><b>Username -</b> {{ $user->name }}</li>
            <li><b>Email -</b> {{ $user->email }}</li>
            <li><b>Password -</b> {{ $user->password }}</li>
        </ul>
    @endforeach

    <div class="custom-custom">
        <h1>My Details</h1>
        <ul>
            <li><b>Username -</b>{{ $request->username }}</li>
            <li><b>Username in session -</b>{{ session()->get('username') }}</li>
            <li><b>Email -</b>{{ $request->email }}</li>
            <li><b>Email in session -</b>{{ session()->get('email') }}</li>
            <li><b>Password -</b>{{ $request->password }}</li>
            <li><b>Password in session -</b>{{ session()->get('password') }}</li>
        </ul>
    </div>

    <h1>Branch Factory</h1>
    @foreach ($branches as $branch)
        <ul>
            <li><b>branch -</b> {{ $branch->branch }}</li>
            <li><b>Email -</b>{{ $branch->email }}</li>
        </ul>
    @endforeach

</div>
