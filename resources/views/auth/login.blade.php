<center>
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-info">
                {{$message}}
            </div>
        @endif
        <form action="login" method="POST">
            @csrf
            <label for="email" class="form-Label">Email</label>
            <input type="email" value="{{ Session::get('email')}}" name="email" class="form-control">
            <label for="password" class="form-Label">Password</label>
            <input type="password" name="password" class="form-control">
            <input type="submit" value="Login">
        </form>
        <a href="register">
            <button>
                Register
            </button>
        </a>
    </div>
</center>
