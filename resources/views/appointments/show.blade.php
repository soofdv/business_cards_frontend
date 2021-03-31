@extends('layouts.master')

@section('title')
    {{ $appointment->name }}
@endsection

@section('content')
    <div class="page-section">
        <div class="card">
            <div class="card_details" style="width: 100%;">
                <h2>{{ $appointment->title }}</h2>
                 <h4>Klant: <a class="link" href="{{ route('customers.show', $appointment->customer->id) }}">{{ $appointment->customer->contact_name }} </a></h4>
                <ul>
                    <li>
                        <p>
                            Datum: {{$appointment->appointment_date}}
                        </p>
                    </li>

                    <li>
                        <p>
                            Locatie: {{ $appointment->location }}
                        </p>
                    </li>

                    <li>
                        <p>
                            Beschrijving: {{$appointment->description}}
                        </p>
                    </li>

                    <li>
                        <p>
                            Uitgenodigden: {{ $appointment->attendees }}
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
