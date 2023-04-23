<div style="display: inline-block">
    <form method="POST" action="{{ route('adminProfil') }}">
        @csrf

        <h1>AdminProfil</h1>

        <div>
            <label for="email">Email:</label>
            <label for="email">{{$admin->email}}</label>
        </div>

        <div>
            <label for="name">Név:</label>
            <label for="name">{{$admin->nev}}</label>
        </div>

        <div>
            <label for="password">Jelszómódosítás:</label>
            <a href="{{ route("changePassword") }}">Itt</a>
        </div>

        <div>
            <label for="date">Születési dátum</label>
            <label for="date">{{$admin->szul_datum}}</label>
        </div>


        <button type="button" onclick="history.back();">Vissza</button>
    </form>
</div>