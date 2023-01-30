<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           ADD ITEM
        </h2>
    </x-slot>
    <div class="py-0 d-flex align-items-center justify-content-center">
    <div class="max-w-1xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-ash overflow-hidden shadow-sm sm:rounded-lg">
    <div class="container-fluid ">
    <form action="/items" method="post" class="mt-5" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group mb-2"><input type="text" name="name" placeholder="Enter Item name"></div>
        <div class="form-group mb-2"><input type="text" name="description" placeholder="Enter Description"></div>
        <div class="form-group mb-2"><input type="date" name="date" placeholder="Select Date"></div>
        <div class="form-group mb-2"><input type="text" name="location" placeholder="Enter Location"></div>
        <div class="form-group mb-2"><input type="text" name="price" placeholder="Enter Price"></div>
        <div class="form-group w-25">
            {{-- <label for="exampleFormControlInput1" class="form-label">Category</label>
                <input name="cat_id" type="text" class="form-control"
                    id="exampleFormControlInput1" placeholder="Sports"> --}}
            <label for="exampleFormControlInput1" class="form-label">Category</label>
            <select name="category_id" class="form-select " aria-label="Default select example">

                @foreach ($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-2 w-25">
            <table class="table table-responsive" id="eventPrices">
                <thead>
                    <tr>
                        <td scope="col">ChooseImage</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><input required type="file" name="pic" class="form-control" /></td>  
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-10">
            <button class="btn btn-dark" type="submit">Submit</button></div>
    </form>
</div>
</div>
</div>
</div>
</x-admin-layout>
    