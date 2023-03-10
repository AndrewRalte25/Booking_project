<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           ADD CATEGORY
        </h2>
    </x-slot>
   
    <div class="mt-3 d-flex align-items-center justify-content-center">
        <div class="max-w-1xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-ash overflow-hidden shadow-sm sm:rounded-lg">
        <div class="container-fluid ">

<form action="/categories" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="mb-3">
                <label for="nameInput" class="form-label">Name</label>
                <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="nameInput" aria-describedby="nameHelp">
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <div class="row gx-3">
                    <div class="col-xs-12 cl-sm-12 col-md-6">
                        <label for="dateInput" class="form-label">Catergory Code</label>
                        <input name="code" value="{{ old('date') }}" type="text" class="form-control" id="dateInput" aria-describedby="dateHelp">
                        @error('date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </div>
</form>  
</div>
</div>
</div>
</div>
</x-admin-layout>