<x-admin-layout>
    <x-slot name="header">
        
    </x-slot>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <a href="/categories" class="list-group-item list-group-item-action bg-light">Categories</a>
            <a href="/items" class="list-group-item list-group-item-action bg-light">Items</a>
            <a href="/payment" class="list-group-item list-group-item-action bg-light">Payment</a>
            <a href="/profile" class="list-group-item list-group-item-action bg-light">Profile</a>
        </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
       
        <a class="btn btn-dark" href="/cateadd" role="button">Add Category</a>
        <H2>CATEGORY LIST</h2>
        <div class="container" style="display: flex; justify-content: center; align-items: center; height: 30vh">
            
        
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                         <th>ID</th>
                         <th>NAME</th>
                         <th>CODE</th>
                         <th>ACTION</th>
                    </tr>
                </thead>    
            <tbody>
                @foreach ($category as $cat)
                    <tr>
                      <td>{{ $cat->id }}</td>
                      <td>{{ $cat->name }}</td>
                      <td>{{ $cat->code }}</td>
                      <td>
                        
    
                        <form action="{{ '/categories/' . $cat->id }}" method="post">
                            @csrf
                            @method('DELETE')
    
                            <button type="submit"><i class="bi bi-trash3-fill"></i></button>
                        </form>
                        {{-- <form action="{{ '/categories/' . $cat->id }}" method="post">
                            @csrf
                            @method('PUT')
    
                            <button type="submit">UPDATE</button>
                        </form> --}}
                      </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            
        </div>
</x-admin-layout>
