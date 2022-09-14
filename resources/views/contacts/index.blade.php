@extends('layouts.main')

@section('content')
    <h1> All Contacts </h1>

    <div>
        <a href={{ route('contacts.create') }}>Add Contact</a>

        <?php foreach ($contacts as $id => $cont): ?>

        <p>{{ $cont['name'] }} | {{ $cont['phone'] }} | <a href={{ route('contacts.show', $id) }}>Show Contact</a>

            <?php endforeach ?>

    </div>
@endsection
