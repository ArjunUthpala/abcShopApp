<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-5">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-yellow-300 border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="p-3">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col">
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg" style="width:100%">
                        <div class=" bg-indigo-200 " style=" text-align: center;">
                            <x-anchor class="m-3" style="text-decoration:none"  href="{{ route('products.index') }}" >Products</x-anchor> 
                           
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg" style="width:100%">
                        <div class=" bg-indigo-200 " style=" text-align: center;">
                            <x-anchor class="m-3" style="text-decoration:none"  href="{{ route('product_categories.index') }}" >Product Categories</x-anchor> 
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg" style="width:100%">
                        <div class=" bg-indigo-200 " style=" text-align: center;">
                            <x-anchor class="m-3" style="text-decoration:none"  href="{{ route('product_categories.index') }}" >Product Categories</x-anchor> 
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg" style="width:100%">
                        <div class=" bg-indigo-200 " style=" text-align: center;">
                            <x-anchor class="m-3" style="text-decoration:none"  href="{{ route('product_categories.index') }}" >Product Categories</x-anchor> 
                        </div>
                    </div>
                </div>
            </div>
           
           
        </div>
    </div>
   
</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
