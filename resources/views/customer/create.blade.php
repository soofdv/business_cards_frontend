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
    Create
@endsection

@section('content')
    <div class="page_section">
        <h2>Create page, Customer</h2>
        <form enctype="multipart/form-data" action="{{route('customers.store')}}" method="POST">
            @csrf
            <div class="card">
                <div class="card_avatar">
                    <span>
                        <img class="customer_img" src="{{ asset('../images/upload_foto.png') }}" alt="">
                        <input name="profile_picture" type="file">
                    </span>
                </div>
                <div class="card_details card_form">
                    @error('contact_name')
                    {{$message}}
                    @enderror
                    <input name="contact_name" type="text" class="name input_field" placeholder="Name person">
                    <label class="label">Full Name</label>

                    <div class="card_about">
                        <div class="item">
                            @error('company_name')
                            {{$message}}
                            @enderror
                            <input name="company_name" type="text" class="value input_field" placeholder="Bedrijfsnaam hier">
                            <label class="label">Company Name</label>
                        </div>
                        <div class="item">
                            @error('company_position')
                            {{$message}}
                            @enderror
                            <input name="company_position" type="text" class="value input_field" placeholder="Positie in bedrijf hier">
                            <label class="label">company_position</label>
                        </div>
                        <div class="item">
                            @error('email')
                            {{$message}}
                            @enderror
                            <input name="email" type="email" class="value input_field" placeholder="email@mail.nl">
                            <label class="label">E-mail</label>
                        </div>
                        <div class="item">
                            @error('phone')
                            {{$message}}
                            @enderror
                            <input name="phone" type="tel" class="value input_field" placeholder="+31 6 2345678">
                            <label class="label">Phone Number</label>
                        </div>
                    </div>
                    <div class="item buttons_from">
                        <input type="submit" value="Confirm" class="btn card_btn-edit confirm_btn">
                        <a class="btn del_btn" href="{{route('home')}}">Cancel</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
