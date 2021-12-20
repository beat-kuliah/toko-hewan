@extends('initial.initial')

@section('content-body')

<div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>Alamat</h3>
        <textarea name="alamat" id="alamat" cols="30" rows="2"></textarea><br>
        <h3>Pembayaran</h3>
        @foreach($payment as $p)
          <input type="radio" name="payment" id="payment" value="{{ $p->id }}"> {{ $p->nama }}<br>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="order()">Pesan</button>
      </div>
    </div>
  </div>
</div>

<div class="row" style="background-color: white;">
    <div class="col-md-6">
        <img src="{{ $product->image }}" class="card-img-top" alt="..." style="padding: 10px 10px 10px 10px">
    </div>
    <div class="col-md-6" style="margin-top: 20px; padding-right: 35px">
        <h4 style="float:right">{{ $product->terjual }} terjual</h4>
        <h2>{{ $product->nama }}</h2><br>
        <h2>Rp.{{ $product->harga }}</h2><br>
        <div class="row">
            <div class="col-md-3">
                <h4>Jenis</h4>
                <h4>Kualitas</h4>
                <h4>Kuantitas</h4>
            </div>
            <div class="col-md-9">
                <h4>{{ $product->Jenis->nama }}</h4>
                <h4>{{ $product->Kualitas->nama }}</h4>
                <!-- <h4>5 tersisa 3 ekor</h4> -->
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                  <button type="button" onclick="divideFunction()" class="btn btn-outline-primary">-</button>
                  <input type="text" class="numeric" name="jumlah" style="width: 100px" value="1" id="jumlah" autocomplete="off"/>
                  <button type="button" onclick="addFunction()" class="btn btn-outline-primary">+</button>
                </div>
            </div>
        </div>
        <br>
        <button type="button"  onclick="message()" class="btn btn-warning btn-lg"><i class="far fa-comment-dots"></i>&nbsp;Chat Penjual</button>
        <button type="button" class="btn btn-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#detail">Beli</button>
        
    </div>
    <div class="col-md-12">
        <div style="margin: 10px 10px 10px 10px">
            <h4>Deskripsi</h4>
            <p>{{ $product->description }}</p>
        </div>
    </div>
</div>
<div class="row" style="background-color: white;padding-top: 10px;margin-top: 10px">
    <h2>Ulasan (coming soon)</h2>
</div>

@if($terkait->count() != 0)
<div class="row" style="background-color: white;padding-top: 10px;margin-top: 10px;padding-bottom: 10px">
    <h2>Product Terkait</h2>
    <div class="row row-cols-1 row-cols-md-5 g-4" style="margin-top: 0; padding-top: 0">
        @foreach($terkait as $t)
          <div class="col" style="margin-top: 0">
            <a href="/product/{{ $t->id }}" style="color: black; text-decoration: none;">
              <div class="card h-100">
                <img src="{{ $t->image }}" class="card-img-top" alt="..." style="padding: 10px 10px 10px 10px">
                <div class="card-body">
                  <h6 style="float: right">{{ $t->rating }}&nbsp;<i class="fas fa-star"></i></h6>
                  <h5 class="card-title">{{ $t->nama }}</h5>
                  <h6>Rp.{{ $t->harga }}</h6>
                </div>
              </div>
            </a>
          </div>
        @endforeach
    </div>
</div>
@endif

<div class="preloader">
  <div class="loading">
    <img src="{{ URL::to('/images/loading.gif') }}" width="200">
    <p style="text-align:center; margin-left: 20px">Harap Tunggu</p>
  </div>
</div>

<div class="success" style="display: none">
  <div class="icon">
    <center>
      <img src="{{ URL::to('/images/success.png') }}" width="200"><br>
      <h3>Success</h3>
      <a href="/" class="btn btn-success btn-lg" role="button" aria-disabled="true">Home</a>
      <button type="button"  onclick="messageOrder()" class="btn btn-warning btn-lg"><i class="far fa-comment-dots"></i>&nbsp;Chat Penjual</button>
      <a href="/pesanan" class="btn btn-success btn-lg" role="button" aria-disabled="true">Pesanan</a>
    </center>
  </div>
</div>

@endsection

@section('script')
<script type='text/javascript'>
  let order = "";

  $('.numeric').on('input', function (event) { 
    this.value = this.value.replace(/[^0-9]/g, '');
  });
  $( document ).ready(function() {
    $(".preloader").fadeOut();
    document.getElementById("jumlah").addEventListener("change", function() {
      let v = parseInt(this.value);
      if (v < 1) this.value = 1;
      if (v > 50) this.value = 50;
    });
  });

  function addFunction(){
    var x = document.getElementById("jumlah").value;
    document.getElementById("jumlah").value = Math.floor(x) + 1;
  }

  function divideFunction(){
    var x = document.getElementById("jumlah").value;
    if(x > 1)
      document.getElementById("jumlah").value = Math.floor(x) - 1;
  }

  function order(){
    var check = true;

    if(document.getElementById("jumlah").value == "" || document.getElementById("jumlah").value == null){
      alert("Jumlah item tidak boleh kosong !");
      check = false;
    }

    if(document.getElementById("alamat").value == "" || document.getElementById("alamat").value == null){
      alert("Alamat item tidak boleh kosong !");
      check = false;
    }

    if(document.getElementById("payment").value == "" || document.getElementById("payment").value == null){
      alert("Harap pilih pembayaran !");
      check = false;
    }

    if(check){
      $(".preloader").fadeIn();
      var formData = new FormData();
      formData.append('userId', "{{ Auth::user()->id }}");
      formData.append('product', "{{ $product->id }}");
      formData.append('jumlah', document.getElementById("jumlah").value);
      formData.append('alamat', document.getElementById('alamat').value);
      formData.append('payment', document.getElementById('payment').value);
      axios({
        method: "post",
        url: "/order",
        data: formData,
        headers: { "Content-Type": "multipart/form-data" },
      })
        .then(function (response) {
          $(".preloader").fadeOut();
          if(response.data.response == 'success'){
            order = response.data.noPesanan;
            $(".success").fadeIn();
          }
        })
        .catch(function (response) {
          //handle error
          $(".preloader").fadeOut();
          console.log(response);
        });
    }
  }

  function message(){
    window.open(
      'https://wa.me/628972524442',
      '_blank' // <- This is what makes it open in a new window.
    );
  }

  function messageOrder(){
    window.open(
      'https://wa.me/628972524442?text=NoPesanan%20' + order,
      '_blank' // <- This is what makes it open in a new window.
    );
  }
</script>
@endsection