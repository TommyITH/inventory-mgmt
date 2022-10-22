<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-row  justify-end">
                        <a href="{{route('product.create')}}" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">New Product</a>
                    </div>
                    <div class="w-1/2 mx-auto overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="py-3 px-6">Product</th>
                                    <th class="py-3 px-6">Price</th>
                                    <th class="py-3 px-6">Photo</th>
                                    <th class="py-3 px-6">Category</th>
                                    <th class="py-3 px-6">Supplier</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                    $count = 1;
                                @endphp
                                @foreach ($products as $product)
                                    @if ($count % 2 == 0)
                                        <tr class="bg-gray-100 border-b dark:bg-gray-900 dark:border-gray-700">
                                    @else
                                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    @endif
                                    <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$product->name}}
                                    </td>
                                    <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$product->price}}
                                    </td>
                                    <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$product->photo}}
                                    </td>
                                    <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$product->category}}
                                    </td>
                                    <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$product->supplier}}
                                    </td>
                                    <td class="py-4 px-6">
                                        <a href="{{route('product.edit', ['product'=>$product])}}" class="mr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                        <form method="POST" class="inline" action="{{route('product.destroy',['product'=>$product])}}">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                            type="submit"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                    @php($count++)
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>