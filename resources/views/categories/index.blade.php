<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <div>
                            <x-primary-button>
                                <a href="{{route('categories.create')}}">Add Category</a>
                            </x-primary-button>
                        </div>
                            <input type="text" class="px-4 py-2 h-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm placeholder-gray-400 dark:placeholder-gray-600" placeholder="Search name..." name="search" id="searchInput">
                    </div>
                    
                    <div class="w-full overflow-x-auto">
                        <table class="w-full white-space-no-wrap" id="dataTable">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-left font-bold uppercase bg-gray-100 border-b">#</th>
                                    <th class="px-6 py-3 text-left font-bold uppercase bg-gray-100 border-b">Name</th>
                                    <th class="px-6 py-3 text-left font-bold uppercase bg-gray-100 border-b">Detail</th>
                                    <th class="px-6 py-3 text-left font-bold uppercase bg-gray-100 border-b">No of Post</th>
                                    <th class="px-6 py-3 text-left font-bold uppercase bg-gray-100 border-b">Created at</th>
                                    <th class="px-6 py-3 text-left font-bold uppercase bg-gray-100 border-b">Updated at</th>
                                    <th class="px-6 py-3 text-left font-bold uppercase bg-gray-100 border-b">Action</th>
                                </tr> 
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td class="px-6 py-4 border-b">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 border-b">{{ $category->name }}</td>
                                    <td class="px-6 py-4 border-b">{{ $category->cat_details }}</td>
                                    <td class="px-6 py-4 border-b">{{ $category->postCount }}</td>
                                    <td class="px-6 py-4 border-b">{{ $category->created_at }}</td>
                                    <td class="px-6 py-4 border-b">{{ $category->updated_at }}</td>
                                    <td class="px-6 py-4 border-b">
                                        <a href="{{route('categories.edit', $category)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Edit</a>
                                        <form method="POST" action="{{route('categories.destroy', $category)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Delete </button>
                                        </form>
                                    </td>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
