@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="content-fluid">
    <div class="page-header">CONTACT US</div>

    @include('component.messages')

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('abc') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6 .col-md-4">
                        <div class="form-group">
                            <label for="name">
                                Name
                            </label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Please enter your name" required="required"/>
                        </div>
                    </div>
                    
                    <div class="col-md-6 .col-md-4">
                        <div class="form-group">
                            <label for="email">
                                Email Address
                            </label>
                            
                            <input type="email" class="form-control" id="email" name="email" placeholder="Please enter your email" required="required"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 .col-md-8">
                        <div class="form-group">
                            <label for="subject">
                                Subject
                            </label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">--- Please select an option ---</option>
                                <option value="General Enquiry">General Enquires</option>
                                <option value="Product Information">Product Information</option>
                                <option value="Webiste bugs and improvements">Webiste - bugs and improvements</option>
                                <option value="** COMPLAINT **">Complaint</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 .col-md-8">
                        <div class="form-group">
                            <label for="name">
                                Message
                            </label>
                            <textarea name="message" id="message" class="form-control" rows="6" cols="25" required="required"placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 .col-md-8">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div>
@stop