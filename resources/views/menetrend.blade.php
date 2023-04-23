<div style="display: inline-block">
    <form method="POST" action="{{ route('menetrend-listazas') }}">
        @csrf

        <h1>Keresés</h1>

        <div>
            <label for="name">Honnan?
            <input type="text" name="from" required></label>
        </div>

        <div>
            <label for="name">Hova?
            <input type="text" name="to" required></label>
        </div>

        <button>Keresés</button>
    </form>
    @if(Auth::guard("admin")->check())
        <a href="{{route("szerkeszto")}}"><button>Menetrend szerkesztő</button></a>
    @endif
    <table border="1">
        <thead>
        <tr>
            @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->vonat_indulasi_telepules))
                <th>Vonat indulasi település</th>
            @endif
            @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->vonat_indulasi_ido))
                <th>Vonat indulási idő</th>
            @endif
            @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->tavolsagibusz_indulasi_telepules))
                <th>Távolsági busz indulási település</th>
            @endif
            @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->tavolsagibusz_indulasi_ido))
                <th>Távolsági busz indulási idő</th>
            @endif
            @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->helyibusz_indulasi_ido))
                <th>Helyi busz indulási idő</th>
            @endif
            @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->telepules))
                <th>Célállomás</th>
            @endif
            @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->ido))
                <th>Érkezési idő</th>
            @endif
            @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->sorszam))
                <th>Megálló száma</th>
            @endif
            @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->kilometer))
                <th>Km a megállóig</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @if(isset($jaratok))
            @foreach ($jaratok as $jarat)
                <tr>
                    @if(isset($jarat->vonat_indulasi_telepules))
                        <td>{{ $jarat->vonat_indulasi_telepules }}</td>
                    @endif
                    @if(isset($jarat->vonat_indulasi_ido))
                        <td>{{ $jarat->vonat_indulasi_ido }}</td>
                    @endif
                    @if(isset($jarat->tavolsagibusz_indulasi_telepules))
                        <td>{{ $jarat->tavolsagibusz_indulasi_telepules }}</td>
                    @endif
                    @if(isset($jarat->tavolsagibusz_indulasi_ido))
                        <td>{{ $jarat->tavolsagibusz_indulasi_ido }}</td>
                    @endif
                    @if(isset($jarat->helyibusz_indulasi_ido))
                        <td>{{ $jarat->helyibusz_indulasi_ido }}</td>
                    @endif
                    @if(isset($jarat->telepules))
                        <td>{{ $jarat->telepules }}</td>
                    @endif
                    @if(isset($jarat->ido))
                        <td>{{ $jarat->ido }}</td>
                    @endif
                    @if(isset($jarat->sorszam))
                        <td>{{ $jarat->sorszam }}</td>
                    @endif
                    @if(isset($jarat->kilometer))
                        <td>{{ $jarat->kilometer }}</td>
                    @endif
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>
