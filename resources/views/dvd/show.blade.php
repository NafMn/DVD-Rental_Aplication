@extends('templete')
  
@section('title')
  
@section('contents')
    <h3 class="mb-0">Detail Product</h3>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <img class="image" src="{{Storage::url($dvd->img_url)}}" alt="">
            <img class="image" src="{{ $dvd->img_url }}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $dvd->title }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">DVD Code</label>
            <input type="text" name="dvd_code" class="form-control" placeholder="DVD code" value="{{ $dvd->dvd_code }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="price" class="form-control" placeholder="harga" value="{{ $dvd->harga }}" >
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
        <div class="image">
            <label>Add image</label>
            <img src="{{$dvd->img_url}}" alt="">
        </div>
        <label class="form-label">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" placeholder="Deskripsi">{{$dvd->deskripsi}}</textarea>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $dvd->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $dvd->updated_at }}" readonly>
        </div>
    </div>
@endsection