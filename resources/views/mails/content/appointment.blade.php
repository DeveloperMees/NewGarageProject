@extends('mails.master')

@section('content')
    <h2>Het afspraak maken formulier is ingevuld</h2>
    <p>
        <strong>Naam:</strong><br/>
        {{ $request->name }}
    </p>
    <p>
        <strong>E-mailadres:</strong><br/>
        {{ $request->email }}
    </p>
    <p>
        <strong>Kenteken:</strong><br/>
        {{ $request->plate }}
    </p>
    <p>
        <strong>Telefoonnummer:</strong><br/>
        {{ $request->phone }}
    </p>
    <p>
        <strong>Reden voor afspraak:</strong><br/>
        {{ $request->job }}
    </p>
    <p>
        <strong>Datum:</strong><br/>
        {{ $request->date }}
    </p>

    @if ($request->msg)
        <p>
            <strong>Opmerkingen:</strong><br/>
            {{ $request->msg }}
        </p>
    @endif

@stop
