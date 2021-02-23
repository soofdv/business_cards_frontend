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

        <form action="" method="">
            <div class="card">
                <div class="card_avatar">
                    <span>
                        <img class="customer_img" src="{{ asset('../images/upload_foto.png') }}" alt="">
                        <input type="file">
                    </span>
                </div>
                <div class="card_details card_form">
                    <input name="name_customer" type="text" class="name input_field" placeholder="Name person">
                    <div class="occupation">Position in company</div>

                    <div class="card_about">
                        <div class="item">
                            <input type="text" class="value input_field" placeholder="Bedrijfsnaam hier">
                            <span class="label">Company Name</span>
                        </div>
                        <div class="item">
                            <input type="email" class="value input_field" placeholder="email@mail.nl">
                            <span class="label">E-mail</span>
                        </div>
                        <div class="item">
                            <input type="tel" class="value input_field" placeholder="+31 6 2345678">
                            <span class="label">Phone Number</span>
                        </div>
                    </div>
                    <div class="item buttons_from">
                        <a href="#" class="btn card_btn-edit confirm_btn">Confirm</a>
                        <a class="btn del_btn" href="{{route('home')}}">Cancel</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
