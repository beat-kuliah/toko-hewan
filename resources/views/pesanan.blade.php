@extends('initial.initial')

@section('content-body')
@foreach($order as $o)
<div class="container" style="background-color: white;margin: 10px 0 0 0; padding-bottom: 10px">
    <div class="row">
        <p style="margin: 10px"><small class="text-muted">No Pesanan : {{ $o->noPesanan }}</small></p>
        <div class="col-md-3">
            <img src="{{ $o->Product->image }}" alt="..." class="img-fluid" style="border-radius: 10px;">
        </div>
        <div class="col-md-9"><br>
            <h5 class="card-text" style="float: right">{{ $o->Status->name }}</h5>
            <h4 class="card-title">{{ $o->Product->nama }}</h4>
            <h5 class="card-text" style="float: right">{{ $o->Product->rating }} &nbsp;<i class="fas fa-star"></i></h5>
            <h5 class="card-text">{{ $o->Product->description }}</h5>
            <h5 class="card-text">Jumlah Item : {{ $o->jumlah }} item</h5>
            @if($o->status == 3)
                <a href="/order/status/{{ $o->id }}/4" class="btn btn-primary btn-lg" role="button" style="float: right">Nilai</a>
            @else()
                @if(Auth::user()->role == 0)
                    @if($o->status == 1)
                        <a href="/order/status/{{ $o->id }}/2" class="btn btn-primary btn-lg" role="button" style="float: right">Bayar</a>
                    @endif
                    @if($o->status == 2)
                        <a href="/order/status/{{ $o->id }}/3" class="btn btn-primary btn-lg" role="button" style="float: right">Kirim</a>
                    @endif
                @endif
            @endif
            <h5 class="card-text">Total: Rp.{{ $o->harga }}</h5>
        </div>
    </div>
    
</div>

@endforeach
<div class="preloader">
  <div class="loading">
    <img src="{{ URL::to('/images/loading.gif') }}" width="200">
    <p style="text-align:center; margin-left: 20px">Harap Tunggu</p>
  </div>
</div>
@endsection

@section('script')
<script type='text/javascript'>
  $( document ).ready(function() {
    $(".preloader").fadeOut();
  });
</script>
@endsection