<?php
/**
 * Created by PhpStorm.
 * User: sova
 * Date: 3/11/2021
 * Time: 1:29 PM
 */
?>
@if(Session::get('status'))
    <p class="alert alert-success">
        {{Session::get('status')}}
    </p>
@endif
