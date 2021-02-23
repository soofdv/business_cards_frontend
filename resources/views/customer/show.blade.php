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
                <div class="name">Name person</div>
                <div class="occupation">Position in company</div>

                <div class="card_about">
                    <div class="item">
                        <span class="value">Company here</span>
                        <span class="label">Company Name</span>
                    </div>
                    <div class="item">
                        <span class="value">email@mail.nl</span>
                        <span class="label">E-mail</span>
                    </div>
                    <div class="item">
                        <span class="value">+31 6 2345678 </span>
                        <span class="label">Phone Number</span>
                    </div>
                </div>
                <div class="item buttons">
                    <a class="btn" id="card_btn-edit" href="#">Edit Business card</a>
                    <a class="link" id="card_btn-del" href="#">Delete Business card</a>
                </div>
            </div>
        </div>
    </div>
@endsection
