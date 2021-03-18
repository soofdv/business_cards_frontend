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
    Edit
@endsection


@section('content')
    <div class="page_section">
        <h2>Edit page, Customer</h2>
        <form action="{{route('customers.update', $customer->id)}}" method="post">
            @csrf
            @method('put')

            <div class="card">
                <div class="card_avatar">
                    <span>
                        <img class="customer_img" src="{{ asset('../images/upload_foto.png') }}" alt="">
                        <input type="file">
                    </span>
                </div>
                <div class="card_details card_form">
                    @error('contact_name')
                    <p class="alert alert-danger">
                        {{$message}}
                    </p>
                    @enderror
                    <input name="contact_name" type="text" class="name input_field" value="{{$customer->contact_name}}">
                    <div class="occupation">Position in company</div>

                    <div class="card_about">
                        <div class="item">
                            @error('company_name')
                            <p class="alert alert-danger">
                                {{$message}}
                            </p>
                            @enderror
                            <input name="company_name" type="text" class="value input_field"
                                   value="{{$customer->company_name}}">
                            <span class="label">Company Name</span>
                        </div>
                        <div class="item">
                            @error('company_position')
                            <p class="alert alert-danger">
                                {{$message}}
                            </p>
                            @enderror
                            <input name="company_position" type="text" class="value input_field"
                                   value="{{$customer->company_position}}">
                            <label class="label">company_position</label>
                        </div>
                        <div class="item">
                            @error('email')
                            <p class="alert alert-danger">
                                {{$message}}
                            </p>
                            @enderror
                            <input name="email" type="email" class="value input_field" value="{{$customer->email}}">
                            <span class="label">E-mail</span>
                        </div>
                        <div class="item">
                            @error('phone')
                            <p class="alert alert-danger">
                                {{$message}}
                            </p>
                            @enderror
                            <input name="phone" type="tel" class="value input_field" value="{{$customer->phone}}">
                            <span class="label">Phone Number</span>
                        </div>
                    </div>
                    <div class="item buttons_from">
                        <input type="submit" class="btn card_btn-edit confirm_btn" value="Confirm">
                 </form>

                    <form action="{{route('customers.destroy', $customer->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <input class="link" id="card_btn-del" type="submit" value="Delete business card">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
