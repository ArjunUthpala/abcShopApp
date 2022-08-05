<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('Add New Product') }}
        </h2>
    </x-slot>
    <div class="pt-3">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-yellow-300 border-b border-gray-200">
                   
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <x-input type="text" name="product_name" id="" class="w-full" placeholder="Product Name" :value="@old('product_name')"></x-input>
                        @error('category_name')
                        <div  role="alert">
                            {{ $message }}
                          </div>
                        @enderror
                        <x-button class="mt-3">Add Product</x-button>
                                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <div class="p-3">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
           
        </div>
    </div>
  
    
</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
