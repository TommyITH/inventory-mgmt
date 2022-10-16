<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit New Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('category.update',['category'=>$category])}}">
                        @csrf
                        <div class="mb-6 w-1/2 mx-auto">
                            <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New Category</label>

                            <input type="text" id="category_name" name="name" class="error('name') is-invalid @enderrors bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Name" name="name" value="{{$category->name}}" required>
                        </div>

                        @error('name')
                        <div class="mb-6 w-1/2 mx-auto">
                            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                                {{$message}}
                            </div>
                        </div>
                        @enderror

                        <div class="mb-6 w-1/2 mx-auto">
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                            </button>
                        </div>

                    </form>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>