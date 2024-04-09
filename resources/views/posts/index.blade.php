<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="container mx-auto rounded-lg mt-5 bg-white p-5">

        <div class="flex float-end my-3">
            <a href="{{ route('posts.create') }}"
                class="btn border-transparent rounded-lg bg-yellow-400 p-2 hover:border-yellow-400">Create
                New
                Post</a>
        </div>
        <table class=" table-auto border-seperate order-spacing-2 border-solid border-2 border-slate-600 w-full">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="border border-slate-500 p-1">ID</th>
                    <th class="border border-slate-500 p-1">Title</th>
                    <th class="border border-slate-500 p-1">Sub_title</th>
                    <th class="border border-slate-500 p-1">Category</th>
                    <th class="border border-slate-500 p-1">Cuisine</th>
                    <th class="border border-slate-500 p-1">Posted Date</th>
                    <th class="border border-slate-500 p-1">Posted at</th>
                    <th class="border border-slate-500 p-1">Edited at</th>
                    <th class="border border-slate-500 p-1"></th>
                    <th class="border border-slate-500 p-1">Actions</th>
                    <th class="border border-slate-500 p-1">Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="p-2">
                        <td class="border border-slate-500 p-2">{{ $post->id }}</td>
                        <td class="border border-slate-500 p-2">{{ $post->title }}</td>
                        <td class="border border-slate-500 p-2">{{ $post->sub_title }}</td>
                        <td class="border border-slate-500 p-2">{{ $post->category }}</td>
                        <td class="border border-slate-500 p-2">{{ $post->cuisine }}</td>
                        <td class="border border-slate-500 p-2">{{ $post->date }}</td>
                        <td class="border border-slate-500 p-2">{{ $post->created_at->diffForHumans() }}</td>
                        <td class="border border-slate-500 p-2">{{ $post->updated_at->diffForHumans() }}</td>
                        <td class="border border-slate-500 p-2">
                            <a href="{{ route('posts.edit', $post->id) }}"
                                class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                <i class="bi bi-pen-fill me-1"></i> Edit</a>
                        </td>
                        <td class="border border-slate-500 p-2">
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm ('Are you sure to delete the Post?')"
                                    class="ms-1 inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    <i class="bi bi-trash-fill me-1"></i> Delete</button>
                            </form>

                        </td>
                        <td class="border border-slate-500 p-2">
                            <a href="{{ route('posts.show', $post->id) }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Show
                                Detail</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
        <div class="my-3">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </div>

</x-app-layout>
