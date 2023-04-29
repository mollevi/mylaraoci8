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
                    @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->tipus))
                        <th>TÍPUS</th>
                    @endif
                    @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->datum ) )
                        <th>Indulási idő</th>
                    @endif
                    @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->megnevezes))
                        <th>Név</th>
                    @endif
                    @if(isset($jaratok) && count($jaratok) > 0 && isset($jaratok[0]->leiras))
                        <th>Leírás</th>
                    @endif
                </tr>
                </thead>
                <tbody style="background-color: #afc5c9;">
                @if(isset($jaratok))
                    @foreach ($jaratok as $jarat)
                        @php
                            $kilometer = 0;
                        @endphp
                        <tr>
                            @if(isset( $jarat->tipus ))
                                <td>{{ $jarat->tipus }}</td>
                            @endif
                            @if(isset( $jarat->datum ))
                                <td>{{ $jarat->datum }}</td>
                            @endif
                            @if(isset( $jarat->megnevezes ))
                                <td>{{ $jarat->megnevezes }}</td>
                            @endif
                            @if(isset( $jarat->leiras ))
                                <td>{{ $jarat->leiras }}</td>
                            @endif
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        @endif
    </div>
@endsection
