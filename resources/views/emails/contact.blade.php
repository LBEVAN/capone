@extends('emails.master')

@section('content')

    <div class="row" style="margin-top: 30px;">
        <h3 style="text-align: center;"> You've received a message through the Capone Clothing contact form</h3>

        <div>
            <p> Name: {{ $name }} </p>
            <p> Email Address: {{ $email }} </p>
            <p> Message: {{ $contactMessage }} <p>
        </div>
    </div>

@stop