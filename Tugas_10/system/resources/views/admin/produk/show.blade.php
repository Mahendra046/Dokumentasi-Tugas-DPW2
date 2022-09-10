@extends ('admin.base')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Detail Data Produk   
                    </div>
                    <div class="card-body">
                        <h3>{{$produk->nama}}</h3>
                        <hr>
                        <p>
                            @include('admin.produk.show.detail')
                        </p>
                        <br>
                        <div class="col d-md-flex">
                            <div class="bg-light">
                                <img src="{{url("public",$produk->foto)}}" alt="" style="width:100px">
                            </div>
                        </div>
                    
                        
                        <p>
                        Deskripsi : {!!nl2br($produk->deskripsi)!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection