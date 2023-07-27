@extends('backend.layouts.app')

@section('title', __('Create Blog Post'))

@section('content')
    <x-forms.post :action="route('admin.page.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Page Content')
            </x-slot>

            

            <x-slot name="body">
                <div>
                    <div class="card">
                        <div class="card-header">
                            <h6>Homepage / Hero Section</h6>
                        </div>
                        <div class="card-body">
                            <div id="slide1">
                                <h6>Slide 1</h6>
                                <div class="form-group row">
                                    <label for="image1" class="col-md-2 col-form-label">@lang('Image')</label>
                                    <div class="col-md-10">
                                        <input type="text" name="image1" class="form-control" placeholder="{{ __('Image URL (ex: /img/hero/hero1.avif )') }}" value="{{ config('homepage.hero.1.image') }}" maxlength="300" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title1" class="col-md-2 col-form-label">@lang('Title')</label>

                                    <div class="col-md-10">
                                        <input type="text" name="title1" class="form-control" placeholder="{{ __('Title of the slide') }}" value="{{ config('homepage.hero.1.title') }}" maxlength="300" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="href1" class="col-md-2 col-form-label">@lang('Href Button')</label>

                                    <div class="col-md-10">
                                        <input type="text" name="href1" class="form-control" placeholder="{{ __('Href adrress (ex: https://... )') }}" value="{{ config('homepage.hero.1.href') }}" maxlength="300" />
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div id="slide2">
                                <h6>Slide 2</h6>
                                <div class="form-group row">
                                    <label for="image2" class="col-md-2 col-form-label">@lang('Image')</label>
                                    <div class="col-md-10">
                                        <input type="text" name="image2" class="form-control" placeholder="{{ __('Image URL (ex: /img/hero/hero1.avif )') }}" value="{{ config('homepage.hero.2.image') }}" maxlength="300" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title2" class="col-md-2 col-form-label">@lang('Title')</label>

                                    <div class="col-md-10">
                                        <input type="text" name="title2" class="form-control" placeholder="{{ __('Title of the slide') }}" value="{{ config('homepage.hero.2.title') }}" maxlength="300" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="href2" class="col-md-2 col-form-label">@lang('Href Button')</label>

                                    <div class="col-md-10">
                                        <input type="text" name="href2" class="form-control" placeholder="{{ __('Href adrress (ex: https://... )') }}" value="{{ config('homepage.hero.2.href') }}" maxlength="300" />
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div id="slide3">
                                <h6>Slide 3</h6>
                                <div class="form-group row">
                                    <label for="image3" class="col-md-2 col-form-label">@lang('Image')</label>
                                    <div class="col-md-10">
                                        <input type="text" name="image3" class="form-control" placeholder="{{ __('Image URL (ex: /img/hero/hero1.avif )') }}" value="{{ config('homepage.hero.3.image') }}" maxlength="300" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title3" class="col-md-2 col-form-label">@lang('Title')</label>

                                    <div class="col-md-10">
                                        <input type="text" name="title3" class="form-control" placeholder="{{ __('Title of the slide') }}" value="{{ config('homepage.hero.3.title') }}" maxlength="300" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="href3" class="col-md-2 col-form-label">@lang('Href Button')</label>

                                    <div class="col-md-10">
                                        <input type="text" name="href3" class="form-control" placeholder="{{ __('Href adrress (ex: https://... )') }}" value="{{ config('homepage.hero.3.href') }}" maxlength="300" />
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div id="slide4">
                                <h6>Slide 4</h6>
                                <div class="form-group row">
                                    <label for="image4" class="col-md-2 col-form-label">@lang('Image')</label>
                                    <div class="col-md-10">
                                        
                                        <input type="text" name="image4" class="form-control" placeholder="{{ __('Image URL (ex: /img/hero/hero1.avif )') }}" value="{{ config('homepage.hero.4.image') }}" maxlength="300" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title4" class="col-md-2 col-form-label">@lang('Title')</label>

                                    <div class="col-md-10">
                                        <input type="text" name="title4" class="form-control" placeholder="{{ __('Title of the slide') }}" value="{{ config('homepage.hero.4.title') }}" maxlength="300" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="href4" class="col-md-2 col-form-label">@lang('Href Button')</label>

                                    <div class="col-md-10">
                                        <input type="text" name="href4" class="form-control" placeholder="{{ __('Href adrress (ex: https://... )') }}" value="{{ config('homepage.hero.4.href') }}" maxlength="300" />
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                     
                   

                </div>
            </x-slot>

        </x-backend.card>
    </x-forms.post>
@endsection
