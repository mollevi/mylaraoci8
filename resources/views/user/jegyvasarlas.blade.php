@extends("layouts.app")
@section("body")
    <div style="text-align: center;">
        <h1 style="font-size: 36px;">Jegyvásárlás</h1>
        <p>Az egységár: {{$egysegar}} Ft</p>
        <form method="post" action="{{ route('megveszi') }}">
            @csrf
            <input type="hidden" name="milyenfajta" value="{{$tipus}}">
            <label for="szam" style="display: block;">Add meg a mennyiséget!</label><br>
            <input type="number" name="mennyiseg" required style="height: 25px; border-radius: 10px; padding: 5px;">
            @switch($tipus)
                @case("Helyi busz") darab @break
                @case("Távolsági busz" || "Vonat")Kilométer @break
            @endswitch
            <br>
            <input type="submit" style="margin-top: 10px; padding: 8px; border-radius: 14%; background-color: #4c848f; cursor: pointer;" value="Jegy megvásárlása"><br>
            <a href="{{route("menetrend")}}"><button type="button" style="margin-top: 10px; padding: 8px; border-radius: 14%; background-color: #4c848f;
             cursor: pointer;" >Menetrendekhez</button></a><br>
            <a href="{{route("jegyek")}}"><button type="button" style="margin-top: 10px; padding: 8px; border-radius: 14%; background-color: #4c848f;
             cursor: pointer;" >Jegyeimhez</button></a>
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
                    @if(isset($jaratok) && count($jaratok) > 0)
                        <th>Jegyvásárlás</th>
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
                            @if(isset( $jarat->id ))
                                <td><a href="{{ route("jegyvasarlas", ["tipus"=>$jarat->tipus]) }}"><button>Jegyvásárlás</button></a></td>
                            @endif
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        @endif
    </div>
@endsection
