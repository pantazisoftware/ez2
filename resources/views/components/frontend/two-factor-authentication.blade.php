<div class="w-full p-2 mx-auto md:w-9/12 lg:6/12 xl:w-5/12 lg:px-16">
    @error('code')
        <x-utils.alert type="danger">
            {{ $message }}
        </x-utils.alert>
    @enderror

    <form wire:submit.prevent="validateCode" class="form-horizontal">
        <div class="py-2">
            <label for="code" class="text-gray-500">@lang('Authorization Code')</label>

            <div class="py-2">
                <input
                    type="text"
                    id="code"
                    wire:model.lazy="code"
                    minlength="6"
                    class="h-full w-full text-sm bg-neutral-300 px-3 py-2.5 outline-none transition duration-300 ease-linear focus:outline-accent focus:bg-white"
                    placeholder="{{ __('Authorization Code') }}"
                    required
                    autofocus />
            </div>
        </div><!--form-group-->


            <div class="py-5">
                <button class="bg-primary text-white px-4 py-2.5 font-bold tracking-tight rounded-lg hover:bg-accent transition duration-200 ease-linear" type="submit">@lang('Enable Two Factor Authentication')</button>
            </div>

    </form>
</div>
