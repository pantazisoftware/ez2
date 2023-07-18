@extends('frontend.layouts.app')

@section('title', __('Login'))

@section('content')
    <div class="w-full p-2 mx-auto md:w-9/12 lg:6/12 xl:w-5/12 lg:px-16">
        <div class="flex items-center justify-center py-10">

               
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('Login')
                    </x-slot>

                    <x-slot name="body">
                        <x-forms.post :action="route('frontend.auth.login')">
                            <div class="py-2">
                                <label for="email" class="text-gray-500">@lang('E-mail Address')</label>

                                <div class="py-2">
                                    <input type="email" name="email" id="email" class="h-full w-full text-sm bg-neutral-300 px-3 py-2.5 outline-none transition duration-300 ease-linear focus:outline-accent focus:bg-white"
 placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}" maxlength="255" required autofocus autocomplete="email" />
                                </div>
                            </div><!--form-group-->

                            <div class="py-2">
                                <label for="password" class="text-gray-500">@lang('Password')</label>

                                <div class="py-2">
                                    <input type="password" name="password" id="password" class="h-full w-full text-sm bg-neutral-300 px-3 py-2.5 outline-none transition duration-300 ease-linear focus:outline-accent focus:bg-white" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="current-password" />
                                </div>
                            </div><!--form-group-->

                  
                                    <div class="inline-flex items-center py-2 space-x-2">
                                        <input name="remember" id="remember" class="w-4 h-4 accent-accent" type="checkbox" {{ old('remember') ? 'checked' : '' }} />

                                        <label class="text-gray-500 " for="remember">
                                            @lang('Remember Me')
                                        </label>
                                    </div><!--form-check-->
                              

                            @if(config('boilerplate.access.captcha.login'))
                                <div class="row">
                                    <div class="col">
                                        @captcha
                                        <input type="hidden" name="captcha_status" value="true" />
                                    </div><!--col-->
                                </div><!--row-->
                            @endif

                            <div class="flex flex-row items-center justify-between py-5">
                                    <button class="bg-primary text-white px-4 py-2.5 font-bold tracking-tight rounded-lg hover:bg-accent transition duration-200 ease-linear" type="submit">@lang('Login')</button>

                                    <x-utils.link :href="route('frontend.auth.password.request')" class="text-primary hover:text-accent" :text="__('Forgot Your Password?')" />
                            </div><!--form-group-->

                            <div class="text-center">
                                @include('frontend.auth.includes.social')
                            </div>
                        </x-forms.post>
                    </x-slot>
                </x-frontend.card>
        </div><!--row-->
    </div><!--container-->
@endsection
