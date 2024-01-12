<section class="rekomen">
        <div class="container text-white text-center row mt-5" style="margin: auto;">
            <div class="untuk-anda col mt-4">
                <p>Untuk Anda</p>
                <div class="d-flex gap-3">
                @foreach($dvd as $movie)
                    <div class="card bg-transparent border-0" style="width: 150px;">
                        <img src="{{Storage::url($movie->img_url)}}" class="card-img-top shadoww" alt="...">
                        <div class="card-body text-white" style="text-align: center;">
                            <p class="card-text">{{ $movie->title }}</p>
                        </div>
                    </div>
                @endforeach
                    
        </div>
    </section>