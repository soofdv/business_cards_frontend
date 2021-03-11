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
    <div class="flex_sb page_section">
        <div class="customers_page">
            <div class="customers_text">
                <h2>All Customers are to be seen here in a list.</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem blanditiis eveniet hic quod rem
                    reprehenderit ullam. A accusamus amet eveniet itaque nihil similique velit!
                </p>
            </div>

            <div class="customers_list">
                <ul>
                    {{--<li class="customer_link">
                        <a href="" class="link"></a>
                    </li>--}}

                    @foreach($customers as $customer)
                        <li class="customer_link">
                            <a href="{{route('customers.show', $customer->id)}}"
                               class="link">{{ $customer->contact_name }}</a>
                        </li>
                    @endforeach
                </ul>
                {{ $customers->links() }}
            </div>
            <div>
                <a class="btn" href="{{route('customers.create')}}">Create Customers business card</a>
            </div>
        </div>
        <img class="index_img page_img" src="{{ asset('../images/team_list.png') }}" alt="">
    </div>

@endsection
