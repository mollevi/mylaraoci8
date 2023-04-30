
@if (session()->has('error'))
    <div style="position: absolute; top:0; right: 0; width:100%; display:flow;background: orangered;text-align: center;color:white;">
        {{ session('error') }}
    </div>
@endif
@if (session()->has('success'))
    <div style="position: absolute; top:0; right: 0; width:100%; display:block;background: darkgreen;text-align: center;color:white;">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
