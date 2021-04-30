@extends('adminlte::page')
@section('title', 'Welcome')
@section('content')

    <div class="container-fluid">
  <div class="row">
    <div class="col-6 col-lg-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>761</h3>

          <p>Order Baru</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>54</h3>

          <p>Produk</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>607</h3>

          <p>Member</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>2649</h3>

          <p>Transaksi</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <!-- table produk baru -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Produk Baru Dhimas Siren!!</h4>
          <div class="card-tools">
            <a href="#" class="btn btn-sm btn-primary">
              More
            </a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Qty</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>1001</td>
                <td>Whellen Euro 1</td>
                <td>Modul Sirine</td>
                <td>1 pcs</td>
                <td>750.000</td>
              </tr>
              <tr>
                <td>2</td>
                <td>1002</td>
                <td>Lampu Tembak 2 Mode</td>
                <td>Lampu Tembak</td>
                <td>1 pcs</td>
                <td>120.000</td>
              </tr>
              <tr>
                <td>3</td>
                <td>1003</td>
                <td>Strobo T3 Ion</td>
                <td>Lampu Strobo</td>
                <td>1 pcs</td>
                <td>375.000</td>
              </tr>
              <tr>
                <td>4</td>
                <td>1004</td>
                <td>Speaker Toa YH-100</td>
                <td>Speaker</td>
                <td>1 pcs</td>
                <td>1.000.000</td>
              </tr>
              <tr>
                <td>5</td>
                <td>1005</td>
                <td>Stickbar Fedsig 4 sisi H6</td>
                <td>Stickbar</td>
                <td>1 pcs</td>
                <td>1.850.000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('footer')
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
    </div>
    <strong>CopyRight &copy; {{date('Y')}}
    <a href="https://www.instagram.com/dhim_nhatsu/" target="_blank">Dhimas Siren</a></strong>
@stop

@section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
        <script>console.log ('Hi!')</script>
 </div>
@stop
