<x-layouts>

    <x-slot:title>
        Mahsulot qo'shish
    </x-slot>


    <form action="{{ route("products.store")}}" method="POST" enctype="multipart/form-data" style="margin-top: 200px;">
        @csrf
        <div class="container mt-5">
            <div class="contact-form">
    <select class="form-select" name="team_id">
        <option selected>Qaysi jamoaga tegishli</option>
        @foreach ($teams as $team)
        <option value="{{ $team->id }}"> {{ $team->name }} </option>
        @endforeach
      </select>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Mahsulot nomi</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Mahsulotning qisqacha ta'rifi</label>
        <input type="text" class="form-control" name="short_description" value="{{ old('short_description') }}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mahsulot narxi</label>
        <input type="number" class="form-control" name="price" value="{{ old('price') }}">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Rasm yuklang</label>
        <input class="form-control" type="file" name="image">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary btn-lg">Saqlash</button>

    </div>
    </div>
    </form>

</x-layouts>
