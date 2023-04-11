<div style="display: inline-block">
    <form method="POST" action="{{ route('changePassword') }}">
        @csrf
        <h1>Jeslszó módosítás</h1>
        <div>
            <label for="current_password">Current Password:</label>
            <input type="password" name="current_password">
        </div>

        <div>
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password">
        </div>

        <div>
            <label for="new_password_confirmation">Confirm New Password:</label>
            <input type="password" name="new_password_confirmation">
        </div>

        <div>
            <button type="button" onclick="history.back();">Vissza</button>
            <button type="submit">Mentés</button>
        </div>

    </form>
</div>
