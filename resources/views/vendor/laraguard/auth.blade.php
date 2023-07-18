@extends('frontend.layouts.app')

@section('title', __('Two Factor Authentication is required'))

@section('content')
<div class="w-full p-2 mx-auto md:w-9/12 lg:6/12 xl:w-5/12 lg:px-16">
        <div class="flex items-center justify-center py-10">

                <x-frontend.card>
                    <x-slot name="header">
                        @lang('Two Factor Authentication is required')
                    </x-slot>

                    <x-slot name="body">
                        <p>@lang('To continue, open up your Authenticator app and issue your 2FA code.')</p>

                        <x-forms.post :action="$action">
                            @foreach((array)$credentials as $name => $value)
                                <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                            @endforeach

                            @if($remember)
                                <input type="hidden" name="remember" value="on">
                            @endif

                            <div class="py-2">
                                <label for="{{ $input }}" class="text-gray-500">@lang('Authentication Code')</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="{{ $input }}"
                                           id="{{ $input }}"
                                            class="h-full w-full text-sm bg-neutral-300 px-3 py-2.5 outline-none transition duration-300 ease-linear focus:outline-accent focus:bg-white"
                                           placeholder="123456"
                                           minlength="6"
                                           required />

                                    @if($error)
                                        <div class="px-2 py-3 my-3 text-sm text-red-500 bg-red-100">
                                            {{ trans('laraguard::validation.totp_code') }}
                                        </div>
                                    @endif
                                </div>
                            </div><!--form-group-->

                            <div class="mb-0 form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button class="bg-primary text-white px-4 py-2.5 font-bold tracking-tight rounded-lg hover:bg-accent transition duration-200 ease-linear" type="submit">@lang('Confirm Code')</button>
                                </div>
                            </div><!--form-group-->
                        </x-forms.post>
                    </x-slot>
                </x-frontend.card>
            </div>
        </div>

@endsection
