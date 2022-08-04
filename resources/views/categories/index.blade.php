<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('Product Categories') }}
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
                            Category
                        </td>
                        <td colspan="2">
                            
                        </td>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td><a type="button" class="btn-warning btn-sm text-dark font-bold">Edit</a> <a type="button" class="btn-danger btn-sm text-light font-bold">Delete</a></td>
                 
                  
                </tr> 
                @endforeach
            </tbody>
            <tfoot>
                <a type="button" class="btn btn-success btn-sm  text-light" style="margin-bottom:1rem"  > Add New Category</label></a> 
       </tfoot>
              </table>
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