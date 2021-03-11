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
                <img class="customer_img" src="{{ asset('../images/female_avatar.png') }}" alt="">
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
                    <a class="btn" id="card_btn-edit" href="{{route('customers.edit', $customer->id)}}">Edit Business card</a>
                    <form action="{{route('customers.destroy', $customer->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <input class="link" id="card_btn-del" type="submit" value="Delete business card" >
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
