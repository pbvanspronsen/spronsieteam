@extends ('layout.master')

@section('content')
    <div>
    SCORES TOEVOEGEN
    </div>
        <div>
        @foreach ($tables as $table)
            <h2>{{ $table->number }}</h2>
            <ul>
                @foreach ($table->users as $user)
                    <li>{{ $user->id }} - {{ $user->name }}</li>
                @endforeach
            </ul>
        @endforeach
    </div>

@endsection
