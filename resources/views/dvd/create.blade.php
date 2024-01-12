@extends('templete')
  
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('dvd.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">DVD Code</label>
                <input type="text" name="dvd_code" class="form-control" placeholder="DVD code" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="harga" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Produser</label>
                <input type="text" name="produser" class="form-control" placeholder="Produser" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal/Tahun Rilis</label>
                <input type="text" name="rilis" class="form-control" placeholder="Tanggal/Tahun Rilis" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Durasi DVD</label>
                <input type="text" name="durasi" class="form-control" placeholder="harga" >
            </div>
        </div>
        <div class="col mb-3">
            <div class="image">
                <label>Add image</label>
            </div>
            <input type="file" class="form-control" required name="img_url">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Buat</button>
            </div>
        </div>
    </form>
@endsection