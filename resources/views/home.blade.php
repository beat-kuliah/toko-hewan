@extends('initial.initial')

@section('content-body')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 10px">
  <div class="carousel-inner" style="border-radius: 10px">
    <div class="carousel-item active">
      <a href="" onclick="coming_soon()"><img src="{{ URL::to('/images/image_4.jpg') }}" class="d-block w-100" alt="..." height="300px"></a>
    </div>
    <div class="carousel-item">
      <a href="" onclick="coming_soon()"><img src="{{ URL::to('/images/image_2.jpg') }}" class="d-block w-100" alt="..." height="300px"></a>
    </div>
    <div class="carousel-item">
      <a href="" onclick="coming_soon()"><img src="{{ URL::to('/images/image_3.jpg') }}" class="d-block w-100" alt="..." height="300px"></a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div style="background-color: white;padding: 10px; padding-bottom: 10px">
  <ul class="nav nav-tabs" id="myTab" role="tablist" style="width: 100%">
    <li class="nav-item" role="presentation" style="width: 50%">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Pasar Hewan</button>
    </li>
    <li class="nav-item" role="presentation" style="width: 50%">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Rumah Potong Hewan</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent" style="margin-top: 10px">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="row row-cols-1 row-cols-md-5 g-4">
        @if($hewan->count() == 0)
          <center><h3>Tidak ada data</h3></center>
        @endif
        @foreach($hewan as $h)
          <div class="col">
            <a href="/product/{{ $h->id }}" style="color: black; text-decoration: none;">
              <div class="card h-100">
                <img src="{{ $h->image }}" class="card-img-top" alt="..." style="padding: 10px 10px 10px 10px">
                <div class="card-body">
                  <h6 style="float: right">{{ $h->rating }}&nbsp;<i class="fas fa-star"></i></h6>
                  <h5 class="card-title">{{ $h->nama }}</h5>
                  <h6>Rp.{{ $h->harga }}</h6>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="row row-cols-1 row-cols-md-5 g-4">
        @if($tempat->count() == 0)
          <center><h3>Tidak ada data</h3></center>
        @endif
        @foreach($tempat as $t)
          <div class="col">
            <div class="card h-100">
              <img src="{{ URL::to('/images/avatar.jpg') }}" class="card-img-top" alt="..." style="padding: 10px 10px 10px 10px">
              <div class="card-body">
                <h6 style="float: right">{{ $t->rating }}<i class="fas fa-star"></i></h6>
                <h5 class="card-title">{{ $t->nama }}</h5>
                <h6>Rp.{{ $t->harga }}</h6>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type='text/javascript'>
  let user = <?php echo Auth::user() ?>

  $( document ).ready(function() {
    console.log(user);
  });
</script>
@endsection