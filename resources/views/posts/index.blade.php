<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-4 py-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <div class="border-b">
                            <a href="{{route('posts.create')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">Create New Post</a>
                        </div>
                        <!-- <div>
                            <form action="{{route('posts.index')}}" method="GET">
                                <input type="text" class="px-4 py-2 h-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm placeholder-gray-400 dark:placeholder-gray-600" placeholder="Search..." name="search">
                                <button type="submit" class="inline-flex items-center px-4 py-2 h-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">Search</button>
                            </form>
                        </div> -->
                        <input type="text" class="px-4 py-2 h-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm placeholder-gray-400 dark:placeholder-gray-600" placeholder="Search Title..." name="search" id="searchInput">   
                    </div>
                    <div class="w-full overflow-x-auto">
                        <table class="w-full white-space-no-wrap" id="dataTable">
                            <thead>
                                <tr>
                                    <th class="px-6 py-4 text-left font-bold uppercase bg-gray-100 border-b">#</th>
                                    <th class="px-6 py-4 text-left font-bold uppercase bg-gray-100 border-b">Title</th>
                                    <th class="px-6 py-4 text-left font-bold uppercase bg-gray-100 border-b">Post</th>
                                    <th class="px-6 py-4 text-left font-bold uppercase bg-gray-100 border-b">Category</th>
                                    <th class="px-6 py-4 text-left font-bold uppercase bg-gray-100 border-b">Posted by</th>
                                    <th class="px-6 py-4 text-left font-bold uppercase bg-gray-100 border-b">Posted at</th>
                                    <th class="px-6 py-4 text-left font-bold uppercase bg-gray-100 border-b">Updated at</th>
                                    <th class="px-6 py-4 text-left font-bold uppercase bg-gray-100 border-b">Action</th>
                                </tr> 
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 border-b">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 border-b">{{ $post->title }}</td>
                                    <td class="px-6 py-4 border-b">{{ $post->post_body }}</td>
                                    <td class="px-6 py-4 border-b">{{ $post->category->name }}</td>  
                                    <td class="px-6 py-4 border-b">{{ $post->user->name }}
                                        <br>
                                        @if(Auth::user()->is_admin)
                                        <span class="text-gray-500 text-sm ml-2">(Admin)</span>
                                        @else
                                        <span class="text-gray-500 text-sm ml-2">(User)</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 border-b">{{ $post->created_at }}</td>
                                    <td class="px-6 py-4 border-b">{{ $post->updated_at }}</td>
                                    <td class="px-6 py-4 border-b">
                                        <div class="flex justify-between">
                                            <a href="{{route('posts.edit', $post)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Edit</a>
                                            <form method="POST" action="{{route('posts.destroy', $post)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Delete </button>
                                            </form>
                                        </div>
                                            
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script>
    
</script>