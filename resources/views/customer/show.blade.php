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
    <h2>Detail page, Customer</h2>
    <div class="card">
        <div class="card_avatar">
            <img class="customer_img" src="{{ asset('../images/female_avatar.png') }}" alt="">
        </div>
        <div class="card_details">
            <div class="name">Naam persoon</div>
            <div class="occupation">Positie in het bedrijf</div>

            <div class="card_about">
                <div class="item">
                    <span class="value">Bedrijfsnaam hier</span>
                    <span class="label">Bedrijfsnaam</span>
                </div>
                <div class="item">
                    <span class="value">email@mail.nl</span>
                    <span class="label">E-mail</span>
                </div>
                <div class="item">
                    <span class="value">+31 6 2345678 </span>
                    <span class="label">Telefoon</span>
                </div>
            </div>
            <div class="item buttons">
                <a class="btn" id="card_btn-edit" href="#">Business card bewerken</a>
                <a class="link" id="card_btn-del" href="#">Business card verwijderen</a>
            </div>
        </div>
    </div>



@endsection
