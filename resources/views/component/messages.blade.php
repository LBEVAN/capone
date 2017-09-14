@if (session('success'))
    <div class="alert alert-top alert-success alert-dismissible">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-top alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif