@extends('initial.initial')

@section('content-body')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 10px">
  <div class="carousel-inner" style="border-radius: 10px">
    <div class="carousel-item active">
      <a href="/test"><img src="{{ URL::to('/images/promo.jpg') }}" class="d-block w-100" alt="..." height="300px"></a>
    </div>
    <div class="carousel-item">
      <a href="/test"><img src="{{ URL::to('/images/avatar.jpg') }}" class="d-block w-100" alt="..." height="300px"></a>
    </div>
    <div class="carousel-item">
      <a href="/test"><img src="{{ URL::to('/images/promo.jpg') }}" class="d-block w-100" alt="..." height="300px"></a>
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

<div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="{{ URL::to('/images/avatar.jpg') }}" class="card-img-top" alt="..." style="padding: 10px 10px 10px 10px">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">{{ Auth::user() }}</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="{{ URL::to('/images/avatar.jpg') }}" class="card-img-top" alt="..." style="padding: 10px 10px 10px 10px">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="{{ URL::to('/images/avatar.jpg') }}" class="card-img-top" alt="..." style="padding: 10px 10px 10px 10px">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="{{ URL::to('/images/avatar.jpg') }}" class="card-img-top" alt="..." style="padding: 10px 10px 10px 10px">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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