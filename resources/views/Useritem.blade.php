<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome!!') }} {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
        
            <a href="/useritems" class="list-group-item list-group-item-action bg-light">Items</a>
            <a href="/profile" class="list-group-item list-group-item-action bg-light">Profile</a>
           
        </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div id="page-content-wrapper">
                
                <H2>ITEMS LIST</h2>
                <div class="container" style="display: flex; justify-content: center; align-items: center; height: 50vh">
                    
                
                    <table class="table table-bordered text-center">
                        <thead class="thead-dark">
                            <tr>
                              
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
                              
                              <td>{{ $im->name }}</td>
                              <td>{{ $im->category['name'] }}</td>
                              <td>{{ $im->date }}</td>
                              <td>{{ $im->location }}</td>
                              <td>{{ $im->price }}</td>
                              

            
    
                              <td>  <form action="{{ '/items/' . $im->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <i class="bi bi-trash3-fill">
                                <button type="submit">BOOK</button>
                                </i>
                            </form>
                           
                          </td>
                              
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    
                </div>
</x-app-layout>
