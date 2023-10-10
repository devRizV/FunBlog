<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" >
                    <div class="flex space-x-8 items-center justify-center">
                        <div style="width:20%;">
                            <a href="{{ route('profile.edit') }}" class="bg-gray-800 text-white flex items-center justify-center h- h-20 rounded-lg text-xl shadow-sm">{{Auth::user()->name}} <span class="text-gray-500 text-sm ml-2"> ({{ Auth::user()->postCount }}) </span></a>
                        </div>
                        @if (Auth::user()->is_admin)
                        <div style="width:20%;">
                            <a href="{{ route('categories.index') }}" class="bg-gray-800 text-white flex items-center justify-center h-20 rounded-lg text-xl">Categories <span class="text-gray-500 text-sm ml-2">({{$categoriesCount}})</span></a>
                        </div>
                        @endif
                        <div style="width:20%;">
                            <a href="{{ route('posts.index') }}" class="bg-gray-800 text-white flex items-center justify-center h-20 rounded-lg text-xl">Posts <span class="text-gray-500 text-sm ml-2">({{$postsCount}})</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
