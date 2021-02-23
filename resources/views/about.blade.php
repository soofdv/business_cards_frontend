@extends('layouts.master')

@section('title')
    About
@endsection


@section('content')
    <div class="page_section">
        <div class="about_info flex_sb">
            <div class="about_text">
                <h2>About</h2>
                <p>On here you can sort <bold>YOUR</bold> business cards.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolorem exercitationem explicabo iste nam omnis placeat, praesentium soluta vitae voluptatibus?</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, tenetur.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aut cum dolore esse exercitationem in, laboriosam maiores placeat quam quisquam rem similique vero vitae voluptatum.</p>
            </div>
            <div class="about_img">
                <img class="customer_img" src="{{ asset('../images/customer_social.png') }}" alt="">

            </div>
        </div>
    </div>
@endsection
