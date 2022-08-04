<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-5">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="p-3">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col">
                    <button class="bg-white overflow-hidden shadow-lg sm:rounded-lg" style="width:100%">
                        <div class=" p-6 bg-indigo-200   " style=" text-align: center;">
                            Products
                           
                        </div>
                        
                    </button>
                </div>
                <div class="col">
                    <button class="bg-white overflow-hidden shadow-lg sm:rounded-lg" style="width:100%">
                        <div class="p-6 bg-indigo-200 " style=" text-align: center;">
                            Product Categories
                        </div>
                    </button>
                </div>
                <div class="col">
                    <button class="bg-white overflow-hidden shadow-lg sm:rounded-lg" style="width:100%">
                        <div class="p-6 bg-indigo-200 " style=" text-align: center;">
                            Suppliers
                        </div>
                    </button>
                </div>
                <div class="col button">
                    <button class="bg-white overflow-hidden shadow-lg sm:rounded-lg" style="width:100%">
                        <div class="p-6 bg-indigo-200 " style=" text-align: center;">
                            Customers
                        </div>
                    </button>
                </div>
            </div>
           
           
        </div>
    </div>
    <div id="footer"><div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-center small">
          <div class="text-dark">Copyright &copy; SyntCode 2021</div>
        </div>
      </div>
    </div>
    
</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    #footer {
        position: fixed;
        padding: 10px 10px 0px 10px;
        bottom: 0;
        width: 100%;
        /* Height of the footer*/ 
        height: 40px;
        background: rgb(224, 193, 246)
    }
</style>