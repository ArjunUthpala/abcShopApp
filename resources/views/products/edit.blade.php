<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
    <div class="pt-3">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-yellow-300 border-b border-gray-200">
                   
                    <form action="{{ route('products.update', $product) }}" method="POST">
                        @method('put')
                        @csrf
                        <label class="font-bold">Product Name</label>
                        <x-input type="text" name="product_name" id="" class="w-full mb-3" placeholder="Product Name" :value="@old('product_name', $product->product_name)"></x-input>
                        @error('category_name')
                        <div  role="alert">
                            {{ $message }}
                          </div>
                        @enderror
                        <label class="font-bold">Brand Name</label>
                        <x-input type="text" name="product_brand" id="" class="w-full mb-3" placeholder="Brand Name" :value="@old('product_brand', $product->product_brand)"></x-input>
                        @error('product_brand')
                        <div  role="alert">
                            {{ $message }}
                          </div>
                        @enderror
                        <label class="font-bold">Quantity</label>
                        <x-input type="number" name="quantity" min="0"  id="" class="w-full mb-3" placeholder="Quantity" :value="@old('quantity', $product->quantity)"></x-input>
                        @error('quantity')
                        <div  role="alert">
                            {{ $message }}
                          </div>
                        @enderror
                        <label class="font-bold">Price (Rs)</label>
                        <x-input type="number" name="price" min="0" step="any"  id="" class="w-full mb-3" placeholder="Price (Rs)" :value="@old('price', $product->price)"></x-input>
                        @error('price')
                        <div  role="alert">
                            {{ $message }}
                          </div>
                        @enderror
                        <label class="font-bold">Weight (Kg)</label>
                        <x-input type="number" name="weight" min="0" step="any"  id="" class="w-full mb-3" placeholder="Weight (Kg)" :value="@old('weight', $product->weight)"></x-input>
                        @error('weight')
                        <div  role="alert">
                            {{ $message }}
                          </div>
                        @enderror
                        <label class="font-bold">Product Category</label>
                        <select name="product_category_id" id="product_category_id" class="w-full  rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                            <option value="{{ $categorydata->id }}" class=""  selected>{{ $categorydata->category_name}}</option>
                            @foreach ($category_types as $type)
                            <option value="{{ $type->id }}">{{ $type->category_name }}</option>    
                            @endforeach

                        </select><br>
                        <div></div>
                       
                        <x-button class="mt-3">Edit Product</x-button>
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
