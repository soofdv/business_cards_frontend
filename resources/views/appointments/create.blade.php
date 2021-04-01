<?php
?>

@extends('layouts.master')

@section('content')
    <div class="page_section">
        <h1>Create an appointment for {{ $customer->contact_name }}</h1>

        <form action="{{route('appointments.store')}}" method="post" style="width: 50%; margin: 0 auto;">
            @csrf

            <input type="hidden" name="customer_id" value="{{$customer->id}}">

            <div class="mb-6 d-flex flex-column">
                <label for="title" class="form-label">Title of appointment</label>
                <input name="title" type="text" class="form-control">
            </div>

            <div class="mb-6 d-flex flex-column">
                <label for="description" class="form-label">Description of appointment</label>
                <input name="description" type="text" class="form-control">
            </div>

            <div class="mb-6 d-flex flex-column">
                <label for="attendees" class="form-label">Who are involved</label>
                <input name="attendees" type="text" class="form-control">
            </div>

            <div class="mb-6 d-flex flex-column">
                <label for="location" class="form-label">Where are we meeting?</label>
                <input name="location" type="text" class="form-control">
            </div>

            <div class="mb-6 d-flex flex-column">
                <label class="form-label" for="appointment_date">Date of appointment</label>
                <input name="appointment_date" type="datetime-local" class="form-control">
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

@endsection
