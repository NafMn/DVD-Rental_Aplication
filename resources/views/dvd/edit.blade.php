@extends('templete')
  
@section('title')
  
@section('contents')
    <h3 class="mb-0">Edit Product</h3>
    <hr />
    <form action="{{ route('dvd.update', $dvd->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $dvd->title }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">DVD Code</label>
                <input type="text" name="dvd_code" class="form-control" placeholder="DVD code" value="{{ $dvd->dvd_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="harga" value="{{ $dvd->harga }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Produser</label>
                <input type="text" name="produser" class="form-control" placeholder="Produser" value="{{ $dvd->produser }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal/Tahun Rilis</label>
                <input type="text" name="rilis" class="form-control" placeholder="Tanggal/Tahun Rilis" value="{{ $dvd->rilis }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Durasi DVD</label>
                <input type="text" name="durasi" class="form-control" placeholder="harga" value="{{ $dvd->durasi }}" >
            </div>
        </div>
        <div class="col mb-3">
            <img class="image-url mb-3" src="{{Storage::url($dvd->img_url)}}" alt="">
            <input type="file" class="form-control" required name="img_url">
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi">{{$dvd->deskripsi}}</textarea>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection