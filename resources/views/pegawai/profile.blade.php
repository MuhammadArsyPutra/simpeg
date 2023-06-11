@extends('layouts.induk')
@section('konten')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
  @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
  </div>
  </div>
  @if ($message = Session::get('alert-success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif
<div class="row">
<div class="col-md-3">
<div class="card shadow mb-4 align-middle">
    <div class="card-body">
    <img src="../../foto/{{$pegawai->foto}}" width="180px" />
    </div>
    </div>
    </div>

    <div class="col-md-6">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-info text-center">{{$pegawai->nama}}</h6>
  </div>
    <div class="card-body">
<i class="fa fa-address-card"></i> {{$pegawai->nip}} <hr>
<i class="fa fa-phone"></i> {{$pegawai->no_telp}}<hr>
<i class="fa fa-envelope"></i> {{$pegawai->sts_pegawai}}
    </div>
    </div>
    </div>
    </div>


    <div class="row">
  <div class="col-md-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active bg-info" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
    </div>
  </div>

  
  <div class="col-md-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
  
      <div class="col-md-8">
     <div class="card shadow mb-4 pl-5 pt-5 pr-5">

     <!-- row 1 -->
     <div class="row">
     <div class="col-md-4"> NIP
     </div>
     <div class="col-md-8"> : {{$pegawai->nip}}
     </div>
     </div>
     <hr>

     <!-- row 2 -->

     <div class="row">
     <div class="col-md-4"> Nama
     </div>
     <div class="col-md-8"> : {{$pegawai->nama}}
     </div>
     </div>
     <hr>

          <!-- row 3 -->

      <div class="row">
     <div class="col-md-4"> Tempat, Tanggal Lahir
     </div>
     <div class="col-md-8"> : {{$pegawai->t_lahir}}, {{$pegawai->tgl_lahir}}
     </div>
     </div>
     <hr>

          <!-- row 4 -->

          <div class="row">
     <div class="col-md-4"> Agama
     </div>
     <div class="col-md-8"> : {{$pegawai->agama->agama}}
     </div>
     </div>
     <hr>

          <!-- row 5 -->

          <div class="row">
     <div class="col-md-4"> Jenis Kelamin
     </div>
     <div class="col-md-8"> : @if($pegawai->jns_kelamin == 'L') Laki-laki @else Perempuan @endif
     </div>
     </div>
     <hr>

          <!-- row 6 -->

          <div class="row">
     <div class="col-md-4"> Hobi
     </div>
     <div class="col-md-8"> : {{$pegawai->hobi}}
     </div>
     </div>
     <hr>

          <!-- row 7 -->

          <div class="row">
     <div class="col-md-4"> Status Pernikahan
     </div>
     <div class="col-md-8"> : {{$pegawai->sts_marital}}
     </div>
     </div>
     <hr>

          <!-- row 8 -->

          <div class="row">
     <div class="col-md-4"> Status Kepegawaian
     </div>
     <div class="col-md-8"> : {{$pegawai->sts_pegawai}}
     </div>
     </div>
     <hr>

          <!-- row 9 -->

          <div class="row">
     <div class="col-md-4"> Pendidikan
     </div>
     <div class="col-md-8"> : @foreach($pegawai->pendidikan as $pp) <span class="badge badge-primary">{{$pp->pendidikan}}</span> @endforeach
     </div>
     </div>
     <hr>

          <!-- row 10 -->

          <div class="row">
     <div class="col-md-4"> No. Telp
     </div>
     <div class="col-md-8"> : {{$pegawai->no_telp}}
     </div>
     </div>
     <hr>
     </div>
     </div>
      </div>
          @endsection