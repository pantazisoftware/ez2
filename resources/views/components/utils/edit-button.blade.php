@props(['href' => '#', 'permission' => false])

<x-utils.link :href="$href" class="bg-red-300 text-red-600" icon="fas fa-pencil-alt" :text="__('Edit')"
    permission="{{ $permission }}" />
