<table border="1">
    <tr>
    <th><h1>Bejelentkezés</h1></th>
    <th><h1>Regisztráció</h1></th>
    <th><h1>Admin Bejelentkezés</h1></th>
    </tr>
    <tr><td><form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">E-mail
            <input type="email" name="email" required></label><br>
        <label for="password">Jelszó
            <input type="password" name="password" required></label><br>
        <button type="submit">LogIn</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    </form></td>

    <td><form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Name
            <input type="text" name="name" required></label><br>
        <label for="email">Email
            <input type="email" name="email" required></label><br>
        <label for="password">Password
            <input type="password" name="password" required></label><br>
        <label for="password_confirmation">Confirm Password
            <input type="password" name="password_confirmation" required></label><br>
        <button type="submit">Register</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    </form></td>

    <td><form method="POST" action="{{ route('admin/login') }}">
        @csrf
        <label for="email">Email
            <input type="email" name="email" required></label><br>
        <label for="password">Jelszó
            <input type="password" name="password" required></label>
        <button type="submit">LogIn</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    </form></td></tr>
</table>

<button type="button" onclick="history.back();">Vissza</button>
