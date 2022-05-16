<div class="container">
  <div class="col-12 p-0">
    @php
        $url = "../storage/app/public/".$user->gambar;
        if ((isset($user->gambar) && $user->gambar != "") && file_exists($url)) {
            $url = "data:image/jpeg;base64,".base64_encode(file_get_contents($url));
        }else{
            $url = asset('assets/images/faces/face0.png');
        }
    @endphp
    <img src="{{$url}}" id="uploaded_image_edit" style="height: 110px;width:110px;border:2px solid #a6a6a6" class="rounded-circle img-thumbnail m-auto" />
    <h6 class="text-center pt-2 font-weight-bold">{{$user->nama_pengguna}}</h6>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="col-md-4 flex p-2">
        <div class="px-1">
          <div class="col-12 font-weight-bold">
            NIK
          </div>
          <div class="col-12 font-weight-400">
            <p>{{$user->nik}}</p>
          </div>
        </div>
        <div class="px-1">
          <div class="col-12 font-weight-bold">
            Peran Pengguna
          </div>
          <div class="col-12 font-weight-400">
            <p>{{$user->role}}</p>
          </div>
        </div>
        <div class="px-1">
          <div class="col-12 font-weight-bold">
            Tanggal Masuk
          </div>
          <div class="col-12 font-weight-400">
            <p>{{$user->tgl_masuk}}</p>
          </div>
        </div>
        <div class="px-1">
          <div class="col-12 font-weight-bold">
            Email
          </div>
          <div class="col-12 font-weight-400">
            <p>{{$user->email}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 flex p-2">
        <div class="px-1">
          <div class="col-12 font-weight-bold">
            Divisi
          </div>
          <div class="col-12 font-weight-400">
            <p>{{$user->nama_divisi}}</p>
          </div>
        </div>
        <div class="px-1">
          <div class="col-12 font-weight-bold">
            Jabatan
          </div>
          <div class="col-12 font-weight-400">
            <p>{{$user->nama_job_title}}</p>
          </div>
        </div>
        <div class="px-1">
          <div class="col-12 font-weight-bold">
            Level
          </div>
          <div class="col-12 font-weight-400">
            <p>{{$user->nama_level}}</p>
          </div>
        </div>
        <div class="px-1">
          <div class="col-12 font-weight-bold">
            Department
          </div>
          <div class="col-12 font-weight-400">
            <p>{{$user->nama_department}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 flex p-2">
        <div class="px-1">
          <div class="col-12 font-weight-bold">
            Sub Department
          </div>
          <div class="col-12 font-weight-400">
            <p>{{$user->nama_subdepartment}}</p>
          </div>
        </div>
        <div class="px-1">
          <div class="col-12 font-weight-bold">
            Liga CG
          </div>
          <div class="col-12 font-weight-400">
            <p>{{$user->nama_cg}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>