<div style="display: inline-block">
    <form method="POST" action="{{ route('admin/change-password') }}">
        @csrf
        <h1>Jelszó módosítás</h1>
        <div>
            <label for="current_password">Current Password:
            <input type="password" name="current_password"></label>
        </div>

        <div>
            <label for="new_password">New Password:
            <input type="password" name="new_password"></label>
        </div>

        <div>
            <label for="new_password_confirmation">Confirm New Password:
            <input type="password" name="new_password_confirmation"></label>
        </div>

        <div>
            <button type="button" onclick="history.back();">Vissza</button>
            <button type="submit">Mentés</button>
        </div>

    </form>
</div>
