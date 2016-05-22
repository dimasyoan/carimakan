@extends('master2')

@section('content')
  <title>CariMakan | Hasil Pencarian</title>

  <div class="row" style="margin-top: 20px;">
    <section class="content-header" style="margin-left: 18%;">
      <h1>
        <small>Kategori Makanan :</small>
        {{$kategori}}
        <small>Waktu :</small>
        {{$waktu}}
      </h1>
    </section>
  </div>

    <div class="row" style="margin-top: 20px;">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <ul class="timeline">
          <li>
            <i class="fa bg-blue"></i>
              <div class="timeline-item">
                  <!--Nama Warung-->
                <h3 class="timeline-header"><a href="#">{{$warung}}</a></h3>
                
                <div class="timeline-footer">
                  <strong>Alamat</strong> <a class="btn btn-primary btn-xs">{{$alamat}}</a>
                </div>
              </div>
          </li>
          <li>
            <i class="fa bg-blue"></i>
              <div class="timeline-item">
                  <!--Nama Warung-->
                <h3 class="timeline-header"><a href="#">{{$warung}}</a></h3>
                
                <div class="timeline-footer">
                  <strong>Alamat</strong> <a class="btn btn-primary btn-xs">{{$alamat}}</a>
                </div>
              </div>
          </li>
          <li>
            <i class="fa bg-blue"></i>
              <div class="timeline-item">
                  <!--Nama Warung-->
                <h3 class="timeline-header"><a href="#">{{$warung}}</a></h3>
                
                <div class="timeline-footer">
                  <strong>Alamat</strong> <a class="btn btn-primary btn-xs">{{$alamat}}</a>
                </div>
              </div>
          </li>
          <li>
            <i class="fa bg-blue"></i>
              <div class="timeline-item">
                  <!--Nama Warung-->
                <h3 class="timeline-header"><a href="#">{{$warung}}</a></h3>
                
                <div class="timeline-footer">
                  <strong>Alamat</strong> <a class="btn btn-primary btn-xs">{{$alamat}}</a>
                </div>
              </div>
          </li>
          <li>
            <i class="fa bg-blue"></i>
              <div class="timeline-item">
                  <!--Nama Warung-->
                <h3 class="timeline-header"><a href="#">{{$warung}}</a></h3>
                
                <div class="timeline-footer">
                  <strong>Alamat</strong> <a class="btn btn-primary btn-xs">{{$alamat}}</a>
                </div>
              </div>
          </li>
        </ul>

      </div>
    </div>
@stop