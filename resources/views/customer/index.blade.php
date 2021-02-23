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
    Customers
@endsection


@section('content')
    <div class="flex_sb">
        <div class="customers_list">
            <div class="customers_text">
                <h2>All Customers are to be seen here in a list.</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem blanditiis eveniet hic quod rem reprehenderit ullam. A accusamus amet eveniet itaque nihil similique velit!
                </p>
            </div>

            <ul>
                <li>
                    <a href="#">klant 1</a>
                </li>
            </ul>
        </div>

        <img class="index_img" src="{{ asset('../images/team_list.png') }}" alt="">
    </div>
@endsection
