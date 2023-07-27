@extends('backend.layouts.app')

@section('title', __('Edit Blog Post'))

@section('content')
    <x-forms.post :action="route('admin.post.update')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Blog Post')
            </x-slot>

            

            <x-slot name="body">
                <div>
                     <div class="form-group row">
                        <label for="image" class="col-md-2 col-form-label">@lang('Image')</label>

                        <div class="col-md-10">
                            <img class="img-thumbnail mb-2" width="300" src="{{ $post->image }}" />
                            <input type="text" name="image" class="form-control" placeholder="{{ __('Image URL (ex: /img/hero/hero1.avif )') }}" value="{{ $post->image }}" maxlength="300" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label">@lang('Title')</label>

                        <div class="col-md-10">
                            <input type="text" name="title" class="form-control" placeholder="{{ __('Title') }}" value="{{ $post->title }}" maxlength="100" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-md-2 col-form-label">@lang('Content')</label>

                        <div class="col-md-10">
                            <textarea name="content" id="content" class="form-control" placeholder="{{ __('Your content here') }}" rows="10" required>{{ $post->content }}</textarea>
                            
                        </div>
                    </div>

                </div>
            </x-slot>

            <x-slot name="footer">
                <input type="hidden" name="id" value="{{ $post->id }}" />
                <button class="float-right btn btn-sm btn-primary" type="submit">@lang('Edit Post')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection
