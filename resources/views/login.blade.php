<div style="display: inline-block">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1>Bejelentkezés és Regisztráció</h1>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="password">Jelszo</label>
            <input type="password" name="password" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        </div>

        <div>
            <button type="submit">LogIn</button>
        </div>
    </form>
</div>

<div style="display: inline-block">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <div>
            <button type="submit">Register</button>
        </div>

        <button type="button" onclick="history.back();">Vissza</button>
    </form>
</div>

<div style="display: inline-block">
    <form method="POST" action="{{ route('admin-login') }}">
        @csrf

        <h1>Admin Bejelentkezés</h1>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="password">Jelszó</label>
            <input type="password" name="password" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        </div>

        <div>
            <button type="submit">LogIn</button>
        </div>
    </form>
</div>
