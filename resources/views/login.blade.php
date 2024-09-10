@extends('layout.app')

<body>
    <form action="/home" method="POST">
        @csrf
        <div class="container">
            <div class="form-group mt-3">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}"
                    placeholder="Enter Username">
                <span class="text-danger">
                    @error('username')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="form-control" value="{{ old('email') }}"
                    placeholder="Enter email address">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
</body>
