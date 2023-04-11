<div style="display: inline-block">
    <form method="POST" action="{{ route('menetrend') }}">
        @csrf

        <h1>Keresés</h1>

        <div>
            <label for="name">Honnan?</label>
            <input type="text" name="from" required>
        </div>

        <div>
            <label for="name">Hova?</label>
            <input type="text" name="to" required>
        </div>

        <button>Keresés</button>
    </form>
</div>
