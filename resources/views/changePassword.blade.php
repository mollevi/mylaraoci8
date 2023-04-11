<div style="display: inline-block">
    <form method="POST" action="{{ route('change-password') }}">
        @csrf
        <h1>Jeslszó módosítás</h1>
        <div>
            <label for="password">Eredeti jelszó</label>
            <input type="password" name="password" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </div>

        <div>
            <label for="password">Új jelszó</label>
            <input type="password" name="password" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </div>

        <div>
            <label for="password">Új jelszó megismétlése</label>
            <input type="password" name="password" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </div>

        <div>
            <button >Vissza</button>
            <button type="submit">Mentés</button>
        </div>
    </form>
</div>
