<div class="w-full p-16 bg-white">
    @if (isset($header))
        <div class="flex flex-row items-center justify-between space-y-2">
            <p class="py-5 text-xl font-bold text-primary">{{ $header }}</p>
            

            @if (isset($headerActions))
                <div>
                    {{ $headerActions }}
                </div><!--card-header-actions-->
            @endif
        </div><!--card-header-->
    @endif

    @if (isset($body))
        <div>
            {{ $body }}
        </div><!--card-body-->
    @endif

    @if (isset($footer))
        <div class="border-t border-gray-200">
            {{ $footer }}
        </div><!--card-footer-->
    @endif
</div><!--card-->
