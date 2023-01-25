@extends('template.templatedark')

@section('content')


 <!--Start Contact Us
	=========================================== -->
    <section class="contact-us" id="contact">
        <div class="container">

       <div class="row justify-content-center"  style="padding-bottom: 60px; padding-top: 60px;">
         <div class="col-xl-10 col-lg-10">
           <div class="card shadow w-100" style="border-radius: 20px; border: 2px solid rgba(0,0,0,.125);">
             <div class="card-body p-5">
               <div class="row mb-2">
                 <div class="col-12 text-center">
                   <img src="{{ 'assets/' }}images/logo_blk.png" alt="logo" width="80px" class="mb-3">

                   <h2>Pendaftaran</h2>
                             <p>Mohon isi data berikut dengan benar.</p>
                   <div class="border"></div>
                 </div>
               </div>
               <form id="formRegister" action="{{ 'register' }}" method="post" enctype="multipart/form-data">
                @csrf
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="nama" class="font-weight-bold">Nama</label>
                       <input type="text" class="form-control" id="nama" name="nama">
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="tahun_daftar" class="font-weight-bold">Tahun Pendaftaran</label>
                       <input type="text" class="form-control" id="tahun_daftar" name="tahun_daftar" value="2021" readonly>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="email" class="font-weight-bold">Email</label>
                       <input type="text" class="form-control" id="email" name="email">
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="hp" class="font-weight-bold">No. HP</label>
                       <input type="number" class="form-control" id="hp" name="hp">
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="password" class="font-weight-bold">Password</label>
                       <input type="password" class="form-control" id="password" name="password">
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="password_confirm" class="font-weight-bold">Konfirmasi Password</label>
                       <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="foto_ktp" class="font-weight-bold">Foto KTP <small class="text-danger">(Max: 2MB)</small></label>
                       <input type="file" class="form-control" id="foto_ktp" name="foto_ktp">
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="pas_foto" class="font-weight-bold">Pas Foto 3x4 <small class="text-danger">(Max: 2MB)</small></label>
                       <input type="file" class="form-control" id="pas_foto" name="pas_foto">
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="no_ktp" class="font-weight-bold">No. KTP</label>
                       <input type="number" class="form-control" id="no_ktp" name="no_ktp">
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="kejuruan" class="font-weight-bold">Kejuruan</label>
                       <select class="form-control select" id="kejuruan" name="kejuruan">
                         <option value="">Pilih Jenis Kejuruan</option>
                         <option value="1">A</option>
                         <option value="2">B</option>
                       </select>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="jenis_kelamin" class="font-weight-bold">Jenis Kelamin</label>
                       <select class="form-control select" id="jenis_kelamin" name="jenis_kelamin">
                         <option value="">Pilih Jenis Kelamin</option>
                         <option value="1">Laki-laki</option>
                         <option value="2">Perempuan</option>
                       </select>
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="agama" class="font-weight-bold">Agama</label>
                       <select class="form-control select" id="agama" name="agama">
                         <option value="">Pilih Agama</option>
                         <option value="Islam">Islam</option>
                         <option value="Kristen Protestan">Kristen Protestan</option>
                         <option value="Kristen Katholik">Kristen Katholik</option>
                         <option value="Hindu">Hindu</option>
                         <option value="Buddha">Buddha</option>
                         <option value="Konghucu">Konghucu</option>
                       </select>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="tempat_lahir" class="font-weight-bold">Tempat Lahir</label>
                       <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="tgl_lahir" class="font-weight-bold">Tanggal Lahir</label>
                       <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="provinsi" class="font-weight-bold">Provinsi</label>
                       <select class="form-control select" id="provinsi" name="provinsi">
                         <option value="">Pilih Provinsi</option>
                         <option value="3501">Jawa Timur</option>
                         <option value="3502">Jawa Barat</option>
                         <option value="3503">Jawa Tengah</option>
                       </select>
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="kota" class="font-weight-bold">Kabupaten/Kota</label>
                       <select class="form-control select" id="kota" name="kota">
                         <option value="">Pilih Kab/Kota</option>
                         <option value="11">Kabupaten Malang</option>
                         <option value="12">Kota Malang</option>
                       </select>
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-lg-12">
                     <div class="form-group">
                       <label for="alamat" class="font-weight-bold">Alamat Lengkap</label>
                       <input type="text" class="form-control" id="alamat" name="alamat">
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="pendidikan_terakhir" class="font-weight-bold">Pendidikan Terakhir</label>
                       <select class="form-control select" id="pendidikan_terakhir" name="pendidikan_terakhir">
                         <option value="">Pilih Pendidikan Terakhir</option>
                         <option value="1">SD</option>
                         <option value="2">SLTP Sederajat</option>
                         <option value="2">SLTA Sederajat</option>
                         <option value="2">D1</option>
                         <option value="2">D2</option>
                         <option value="2">D3</option>
                         <option value="2">S1</option>
                         <option value="2">S2</option>
                       </select>
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="asal_sekolah" class="font-weight-bold">Asal Sekolah</label>
                       <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="status_pernikahan" class="font-weight-bold">Status Pernikahan</label>
                       <select class="form-control select" id="status_pernikahan" name="status_pernikahan">
                         <option value="">Pilih Status Pernikahan</option>
                         <option value="Menikah">Menikah</option>
                       </select>
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label for="pekerjaan" class="font-weight-bold">Pekerjaan</label>
                       <select class="form-control select" id="pekerjaan" name="pekerjaan">
                         <option value="">Pilih Pekerjaan</option>
                         <option value="1">Wiraswasta</option>
                       </select>
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-12">
                     <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="cek_setuju">
                         <label class="form-check-label" id="cek_setuju">
                           Dengan ini, saya menyetujui <a href="#">Syarat dan Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> yang berlaku.
                         </label>
                       </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-12">
                     <button type="submit" id="btnRegister" class="btn btn-primary btn-block" style="border-radius: 0px; padding: 8px;">Daftar</button>
                   </div>
                 </div>
               </form>
               <div class="row pt-4">
                 <div class="col-12 text-center">
                   Sudah punya akun? <a href="{{ 'login' }}">Masuk di sini</a>
                 </div>
               </div>

             </div>
           </div>
         </div>
       </div>

        </div> <!-- end container -->
    </section> <!-- end section -->



@endsection
