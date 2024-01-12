@extends('templete')
  
@section('title')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h3 class="mb-0">List Product</h3>
        <a href="{{ route('dvd.create') }}" class="btn btn-primary">Tambah DVD +</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Kode</th>
                <th>Gambar</th>
                <th>Judul DVD</th>
                <th>Harga DVD</th>
                <th>Durasi/Waktu Tayang</th>
                <th>Produser/Publiser</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($dvd->count() > 0)
                @foreach($dvd as $dvd)
                    <tr>
                        <td class="align-middle">{{$dvd->dvd_code}}</td>
                        <td class="align-middle">
                            <img class="image-url" src="{{Storage::url($dvd->img_url)}}" alt="">
                        </td>
                        <td class="align-middle">{{$dvd->title}}</td>
                        <td class="align-middle">{{$dvd->harga}}</td>
                        <td class="align-middle">{{$dvd->durasi}}</td>
                        <td class="align-middle">{{$dvd->produser}}</td>
                        <td class="align-middle">{{$dvd->deskripsi}}</td>
                        <td class="align-middle">{{$dvd->status}}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('dvd.show', $dvd->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('dvd.edit', $dvd->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('dvd.destroy', $dvd->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection