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
        <a class="btn btn-dark" href="/itemadd" role="button">Add ITEM</a>
        <H2>ITEMS LIST</h2>
        <div class="container" style="display: flex; justify-content: center; align-items: center; height: 50vh">
            
        
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                         <th>ID</th>
                         <th>NAME</th>
                         <th>CATEGORY</th>
                         <th>DATE</th>
                         <th>LOCATION</th>
                         <th>PRICE</th>
                         <th>ACTION</th>
                    </tr>
                </thead>    
            <tbody>
                @foreach ($item as $im)
                    <tr>
                      <td>{{ $im->id }}</td>
                      <td>{{ $im->name }}</td>
                      <td>{{ $im->category_id }}</td>
                      <td>{{ $im->date }}</td>
                      <td>{{ $im->location }}</td>
                      <td>{{ $im->price }}</td>
                      
     
    
                      <td>  
                        <form action="{{ '/items/' . $im->id }}" method="post">
                            @csrf
                            @method('DELETE')
                           
                            <button type="submit">  <i class="bi bi-trash3-fill"></i></button>
                            </i>
                            
                        </form>
                  
                        <form action="{{ '/edit/' . $im->id }}" method="get">
                            @csrf
                           
    
                            <button type="submit"><i class="bi bi-pencil-fill"></i></button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            
        </div>
       
</x-admin-layout>
