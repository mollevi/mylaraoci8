@extends("layouts.app")
@section("body")
    <div style="display: block">
        <h1>Üdvözlünk a kezdőlapodon, {{Auth::user()->nev}}</h1>
        <a href="{{ route("menetrend") }}">
            <button style="padding:5px 10px; border: 1px solid black; border-radius: 10px; margin: 20px 20px; background-color: #c5a23f;">
                Menetrendek
            </button>
        </a>
        <a href="{{ route("profile") }}">
            <button style="padding:5px 10px; border: 1px solid black; border-radius: 10px; margin: 20px 20px; background-color: #c5a23f;">
                Profil
            </button>
        </a>

        <a href={{route("logout")}}>
            <button style="padding:10px 10px; border: 2px solid red; border-radius: 5px; margin: 20px 20px; background-color: #c5a23f;">
                Kijelentkezés
            </button>
        </a>
    </div>
    @if(!empty($hirdetesek))
        <h1 style="align-content: cente;">Hírek</h1>
        @foreach($hirdetesek as $hirdetes)
            <h2>{{ $hirdetes->cim }}</h2>
            <small>
                @if(isset($hirdetes->updated_at))
                        Frissítve: {{$hirdetes->updated_at}}
                @endif
                @if( is_null($hirdetes->updated_at))
                        {{$hirdetes->created_at}}
                @endif
            </small>
            <div style="display:block; width: 50%;border: 1px solid white; padding: 1em; margin: 1em;"><p><strong>{{ $hirdetes->tartalom }}</strong></p></div>
        @endforeach
    @endif
@endsection
