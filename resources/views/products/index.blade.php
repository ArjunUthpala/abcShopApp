<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

   
    <div class="p-3">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table table-light table-hover table-bordered border-primary" style=" border-radius:15px">
                <thead>
                    <tr>
                        <td>
                            Id
                        </td>
                        <td>
                            Product Name
                        </td>
                        <td>
                            Brand
                        </td>
                        <td>
                            Quantity
                        </td>
                        <td>
                            Price (Rs.)
                        </td>
                        <td>
                            Weight (kg)
                        </td>
                        <td>
                            Product Category
                        </td>
                        <td>
                          
                        </td>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_brand}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->weight}}</td>
                    <td>{{$product->category_name}}</td>
                    <td><a type="button" href="" class="btn-warning btn-sm text-dark font-bold">Edit</a> <a type="button" class="mx-2 btn-danger btn-sm text-light font-bold">Delete</a></td>   
                </tr> 
                @endforeach
            </tbody>
            <tfoot>
                <x-anchor class="mb-3" style="text-decoration:none"  href="{{ route('products.create') }}" > Add New Product</x-anchor> 
       </tfoot>
              </table>
              {!! $products->render() !!}
        </div>
    </div>
  
    
</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
