<div style="display: inline-block">
    <form method="POST" action="{{ route('menetrend-listazas') }}">
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
            <th>Célállomás</th>
            <th>Érkezési idő</th>
            <th>Megálló száma</th>
            <th>Km a megállóig</th>
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
                    <td>{{ $jarat->telepules }}</td>
                    <td>{{ $jarat->ido }}</td>
                    <td>{{ $jarat->sorszam }}</td>
                    <td>{{ $jarat->kilometer }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>
