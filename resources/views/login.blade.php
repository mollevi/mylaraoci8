@extends("layouts.app")
@section("body")
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
        <table style="">
            <tr style="background-color: #4c848f;">
                <th><h1>Bejelentkezés</h1></th>
                <th><h1>Regisztráció</h1></th>
                <th><h1>Admin Bejelentkezés</h1></th>
            </tr>
            <tr>
                <td style="padding: 40px; background-color: #afc5c9;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="email" style="display: inline-block; margin-right: 10px; padding: 10px;">Email:</label>
                        <label>
                            <input type="email" name="email" required style="display: inline-block; border-radius: 10px; padding: 5px;">
                        </label><br>
                        <label for="password" style="display: inline-block; margin-right: 10px; padding: 10px;">Jelszó:</label>
                        <label>
                            <input type="password" name="password" required style="display: inline-block; border-radius: 10px; padding: 5px;">
                        </label>
                        <button type="submit" style="display: block; margin-top: 10px; margin-left: 40%; border-radius: 14%; background-color: #4c848f; padding: 8px; cursor: pointer;">LogIn</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    </form>
                </td>

                <td style="padding: 40px; background-color: #afc5c9;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label for="name" style="display: inline-block; width: 100px; padding: 10px;">Name</label>
                        <label>
                            <input type="text" name="name" style="display: inline-block; border-radius: 10px; padding: 5px;" required>
                        </label><br>
                        <label for="email" style="display: inline-block; width: 100px; padding: 10px;">Email</label>
                        <label>
                            <input type="email" name="email" style="display: inline-block; border-radius: 10px; padding: 5px;" required>
                        </label><br>
                        <label for="password" style="display: inline-block; width: 100px; padding: 10px;">Password</label>
                        <label>
                            <input type="password" name="password" style="display: inline-block; border-radius: 10px; padding: 5px;" required>
                        </label><br>
                        <label for="password_confirmation" style="display: inline-block; width: 100px; padding: 10px;">Confirm Password</label>
                        <label>
                            <input type="password" name="password_confirmation" style="display: inline-block; border-radius: 10px; padding: 5px;" required>
                        </label><br>
                        <button type="submit" style="border-radius: 14%; background-color: #4c848f; padding: 8px; margin-left: 40%; cursor: pointer;">Register</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    </form>
                </td>


                <td style="padding: 40px; background-color: #afc5c9;">
                    <form method="POST" action="{{ route('admin/login') }}">
                        @csrf
                        <label for="email" style="display: inline-block; margin-right: 10px; padding: 10px;">Email:</label>
                        <label>
                            <input type="email" name="email" required style="display: inline-block; border-radius: 10px; padding: 5px;">
                        </label><br>
                        <label for="password" style="display: inline-block; margin-right: 10px; padding: 10px;">Jelszó:</label>
                        <label>
                            <input type="password" name="password" required style="display: inline-block; border-radius: 10px; padding: 5px;">
                        </label>
                        <button type="submit" style="display: block; margin-top: 10px; margin-left: 40%; border-radius: 14%; background-color: #4c848f; padding: 8px; cursor: pointer;">LogIn</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    </form>
                </td>

            </tr>
        </table>
        <button type="button" onclick="history.back();" style="margin-top: 40px; border-radius: 14%; background-color: #4c848f; padding: 8px; cursor: pointer;">Vissza</button>
    </div>

@endsection
