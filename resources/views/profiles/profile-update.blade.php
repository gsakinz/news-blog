@extends('layouts.app')

@section('content')

<section class="profile-update">
    <div class="container pt-4 mt-2">
        <!-- Title -->
            <h2 class="pb-3 tittle">
            PROFILE
            </h2>
        <!-- if -->
            @if (session('response'))
                <div class="mb-2 col-md-6 offset-md-3" role="alert">
                    {{ __('Profile Added Successfully') }}
                </div>
            @endif
        <!-- Profile Update -->
            <div class="row">
                <div class="col-md-4">
                    <div class="container p-4 m-2">
                        @if(!empty($profile))
                            <img src="{{ $profile->profile_pic }}" alt="">
                        @else
                            <img src="{{ url('images/avatar.png') }}">
                        @endif
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container p-4 m-2">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label media-text1">{{ __('Name :') }}</label>

                        <div class="col-md-6 col-form-label">
                            @if(!empty($profile))
                                <p class="text_style">{{ $profile->name }}</p>
                            @else
                                <p>Whats your name ?</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label media-text1">{{ __('E-mail :') }}</label>

                        <div class="col-md-6 col-form-label">
                            @if(!empty($profile))
                                <p class="text_style">{{ $profile->email }}</p>
                            @else
                                <p>Whats your e-mail ?</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telephone" class="col-md-4 col-form-label media-text1">{{ __('Telephone No :') }}</label>

                        <div class="col-md-6 col-form-label">
                            @if(!empty($profile))
                                <p class="text_style">{{ $profile->telephone }}</p>
                            @else
                                <p>Whats your telephone number ?</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label media-text1">{{ __('User ID :') }}</label>

                        <div class="col-md-6 col-form-label">
                            @if(!empty($profile))
                                <p class="text_style">{{ $profile->user_id }}</p>
                            @else
                                <p class="text_style">{{ Auth::user()->user_id }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="date" class="col-md-4 col-form-label media-text1">{{ __('Date Of Birth :') }}</label>

                        <div class="col-md-6 col-form-label">
                            @if(!empty($profile))
                                <p class="text_style">{{ $profile->date }}</p>
                            @else
                                <p>Whats your date of birth ?</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="department" class="col-md-4 col-form-label media-text1">{{ __('Department :') }}</label>

                        <div class="col-md-6 col-form-label">
                            @if(!empty($profile))
                                <p class="text_style">{{ $profile->department }}</p>
                            @else
                                <p>Whats your department ?</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="designation" class="col-md-4 col-form-label media-text1">{{ __('Designation :') }}</label>

                        <div class="col-md-6 col-form-label">
                            @if(!empty($profile))
                                <p class="text_style">{{ $profile->designation }}</p>
                            @else
                                <p>Whats your designation ?</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <section class="top-footer">
        <div class="container">
            <div class="social-row">
                <div class="text-center col-md-8">
                <!--Facebook-->
                    <span class="btn mx-2 fab">
                        <a href="facebook.com" class="fa fa-facebook"></a>
                    </span>
                <!--Twitter-->
                    <span class="btn mx-2 fab">
                        <a href="twitter.com" class="fa fa-twitter"></a>
                    </span>
                <!--Google +-->
                    <span class="btn mx-2 fab">
                        <a href="google.com" class="fa fa-google"></a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="lower-footer">
        <div class="container">
            <div class="text-center">
                <div class="col-12">
                    <p class="display-p">
                    © Copyright 2020 GSAkinz - All Rights Reserved
                </p>
                </div>
            </div>
        </div>
    </section>
</footer>

@endsection
