<div class="cap">
            <div class="card" style="max-width: 350px; background-color: #D9D9D91A;display: flex; align-items: center;">
                <img src="assets/images/poster.png" class="card-img-top rounded-5" style="width: 250px; margin: 35px 15px 15px 15px;" alt="...">
                <div class="card-body">
                  <p class="card-text text-white" style="font-size: 25px;">Frieren: Beyond Journey's End</p>
                  <p class="bintang"><i class="fas fa-star"></i></p>
                </div>
              </div>
        </div>
        <div class="detail rounded-3">
            <div class="text-dt">
            @foreach($dvd as $detail)
            <p class="text-detail">ID: {{ $detail->id }}</p>
            <p class="text-detail">Rilis: {{ $detail->release_date }}</p>
            <p class="text-detail">Genre: {{ $detail->genre }}</p>
            <p class="text-detail">Durasi: {{ $detail->duration }}</p>
            <p class="text-detail">Produser: {{ $detail->producer }}</p>
            <p class="text-detail">Status: {{ $detail->status }}</p>
            <p class="text-detail">Tersedia: {{ $detail->availability }}</p>
            <p class="text-detail">Sinopsis: {{ $detail->deskripsi }}</p>
        @endforeach
            </div>
            <div class="btn-detail">
                <div class="keranjang-detail rounded-3">
                    + Keranjang
                </div>
                <div class="langsung-sewa rounded-3">
                    Langsung Sewa
                </div>
            </div>
        </div>