<?php
/**
 * Created by PhpStorm.
 * User: sova
 * Date: 2/22/2021
 * Time: 6:23 PM
 */
?>

@extends('layouts.master')

@section('title')
    Detail
@endsection


@section('content')
    <div class="page_section">
        <h2>Detail page, Customer</h2>
        <div class="card">
            <div class="card_avatar">
                @if ($customer->profile_picture === null)
                    <img class="customer_img" src="{{ asset('../images/female_avatar.png') }}" alt="">
                @else
                    <img class="customer_img" src="{{ asset('storage/' . $customer->profile_picture) }}" alt="">
                @endif
            </div>
            <div class="card_details">
                <div class="name">{{$customer->contact_name}}</div>
                <div class="occupation">{{$customer->company_position}}</div>

                <div class="card_about">
                    <div class="item">
                        <span class="value">{{$customer->company_name}}</span>
                        <span class="label">Company Name</span>
                    </div>
                    <div class="item">
                        <span class="value">{{$customer->email}}</span>
                        <span class="label">E-mail</span>
                    </div>
                    <div class="item">
                        <span class="value">{{$customer->phone}}</span>
                        <span class="label">Phone Number</span>
                    </div>
                </div>
                <div class="item buttons">
                    <a class="btn" id="card_btn-edit" href="{{route('customers.edit', $customer->id)}}">Edit Business
                        card</a>
                    <form action="{{route('customers.destroy', $customer->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <input class="link" id="card_btn-del" type="submit" value="Delete business card">
                    </form>
                </div>
            </div>
        </div>

        <div class="appointments">
            <a class="btn" href="{{route('appointments.create')}}">Make appointment</a>
            <h3>Appointments</h3>
            <table>
                <thead>
                <tr>
                    <th>Datum</th>
                    <th>
                        Titel
                    </th>
                    <th>Plaats</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customer->appointments as $appointment)
                <tr>
                    <td>{{ $appointment->appointment_date }}</td>
                    <td><a href="{{ route('appointments.show', $appointment->id) }}">{{ $appointment->title }} </a></td>
                    <td>{{ $appointment->location }}</td>
                </tr>
                @endforeach
                {{--<tr>--}}
                    {{--<td>04-04-2021 - 15:00</td>--}}
                    {{--<td><a href="">Kennismaking </a></td>--}}
                    {{--<td> Bij klant op locatie</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>04-04-2021 - 15:00</td>--}}
                    {{--<td><a href="">Kennismaking </a></td>--}}
                    {{--<td> Bij klant op locatie</td>--}}
                {{--</tr>--}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
