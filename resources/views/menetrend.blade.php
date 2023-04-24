@extends("layouts.app")
@section("body")
    <div style="text-align: center;">
        <form method="POST" action="{{ route('menetrend-listazas') }}">
            @csrf

            <h1 style="font-size: 36px;">Keresés</h1>

            <div style="display: inline-block;">
                <div style="margin: 5px">
                    <label for="name" style="display: block;">Honnan?</label>
                    <input type="text" name="from" required style="height: 25px; border-radius: 10px; padding: 5px;">
                </div>
                <div style="margin: 5px">
                    <label for="name" style="display: block;">Hova?</label>
                    <input type="text" name="to" required style="height: 25px; border-radius: 10px; padding: 5px;">
                </div>
            </div>

            <div>
                <button style="margin-top: 10px; padding: 8px; border-radius: 14%; background-color: #4c848f; cursor: pointer;">Keresés</button>
                <button onclick="history.back();" style="margin-top: 10px; padding: 8px; border-radius: 14%; background-color: #4c848f; cursor: pointer;" >Vissza</button>
            </div>
        </form>
        @if(Auth::guard("admin")->check())
            <a href="{{route("szerkeszto")}}">
                <button>Menetrend szerkesztő</button>
            </a>
        @endif
        @if(Route::currentRouteName() == 'menetrend-listazas')
            <table style="border-collapse: collapse; margin: 25px 0; font-size: 0.9em; font-family: sans-serif; min-width: 400px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); width: 80%; margin: 30px auto;">
                <thead style="background-color: #4c848f;">
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
                <tbody style="background-color: #afc5c9;">
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
        @endif
    </div>
@endsection
