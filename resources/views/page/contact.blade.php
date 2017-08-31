@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="contact">
        <div class="contact-header">
            CONTACT
        </div>

        <div class="contact-email">
            If you have any enquiries please feel free to 
            contact us on the form below or email us at Caponeclothing@yahoo.com
        </div>

        <div class="container">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name
                                    </label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name" required="required"/>
                                </div>

                                <div class="form-group">
                                    <label for="email">
                                        Email Address
                                    </label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" required="required"/>
                                </div>

                                <div class="form-group">
                                    <label for="subject">
                                        Subject
                                    </label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Choose One:</option>
                                        <option value="service">General Customer Service</option>
                                        <option value="product">Product Information</option>
                                        <option value="suggestions">Suggestions</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message
                                    </label>
                                    <textarea name="message" id="message" class="form-control" rows="8" cols="25" required="required"placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" style="padding-top: 20px;">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop