@extends('backend.layouts.app')

@section('title', __('Create Blog Post'))

@section('content')
    <x-forms.post :action="route('admin.post.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Blog Post')
            </x-slot>

            

            <x-slot name="body">
                <div>
                     <div class="form-group row">
                        <label for="image" class="col-md-2 col-form-label">@lang('Image')</label>

                        <div class="col-md-10">
                            <input type="text" name="image" class="form-control" placeholder="{{ __('Image URL (ex: /img/hero/hero1.avif )') }}" value="{{ old('image') }}" maxlength="300" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label">@lang('Title')</label>

                        <div class="col-md-10">
                            <input type="text" name="title" class="form-control" placeholder="{{ __('Title') }}" value="{{ old('title') }}" maxlength="100" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-md-2 col-form-label">@lang('Content')</label>

                        <div class="col-md-10">
                            <textarea name="content" id="content" class="form-control" placeholder="{{ __('Your content here') }}" rows="10" required>{{ old('content') }}</textarea>
                            
                        </div>
                    </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="float-right btn btn-sm btn-primary" type="submit">@lang('Create Post')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection
