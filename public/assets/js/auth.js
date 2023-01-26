$(document).ready(function(){

    // Login   
    $('#formLogin').submit(function(e){
        var email = $('#email').val();
        var password = $('#password').val();
        var valid_captcha = $('#valid_captcha').val();
        var captcha = $('#captcha').val();
        console.log(email)
        if(!email){
            toastr.error('Email harus diisi!', 'ERROR')
            return false
        }
        if(!email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
            toastr.error('Format email belum benar!', 'ERROR')
            return false
        }
        if(!password){
            toastr.error('Password harus diisi!', 'ERROR')
            return false
        }
        if(password.length <= 6){
            toastr.error('Password minimal 6 karakter!', 'ERROR')
            return false
        }
        if(!captcha){
            toastr.error('Kode Captcha harus diisi!', 'ERROR')
            return false
        }
        if(valid_captcha != captcha){
            toastr.error('Kode Captcha salah!', 'ERROR')
            return false
        }

        e.preventDefault();

        var formData = new FormData($("#formLogin")[0]);
        $.ajaxSetup({
           headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });
        $.ajax({
            type: "POST",
            url: $('#formLogin').attr('action'),
            data: formData,
            dataType:'json',
            processData: false,
            contentType: false,
            beforeSend:function(){
                $('#btnLogin').prop("disabled", true)
                $('#btnLogin').html("Harap tunggu ...")
            },
            success: function(data){
                if(!data.success){
                    toastr.error(data.message, 'ERROR')
                    $('#btnLogin').prop("disabled", false)
                    $('#btnLogin').html("MASUK")
                    return false
                }else{
                    var role = data.user.role_id
                    toastr.success('Login Berhasil', 'Success')
                    if(role == 1){
                        window.location.href = 'superadmin'
                    }else if(role == 2){
                        window.location.href = 'admin'
                    }else if(role == 3){
                        window.location.href = 'instruktur'
                    }else{
                        window.location.href = 'peserta'
                    }
                }
            }
        })
    })

    $('#formRegister').submit(function(e){
        var nama = $('#nama').val();
        var email = $('#email').val();
        var hp = $('#hp').val();
        var password = $('#password').val();
        var password_confirm = $('#password_confirm').val();
        var foto_ktp = $('#foto_ktp').val();
        var pas_foto = $('#pas_foto').val();
        var no_ktp = $('#no_ktp').val();
        var kejuruan = $('#kejuruan').val();
        var jenis_kelamin = $('#jenis_kelamin').val();
        var agama = $('#agama').val();
        var tempat_lahir = $('#tempat_lahir').val();
        var tgl_lahir = $('#tgl_lahir').val();
        var provinsi = $('#provinsi').val();
        var kota = $('#kota').val();
        var alamat = $('#alamat').val();
        var pendidikan_terakhir = $('#pendidikan_terakhir').val();
        var asal_sekolah = $('#asal_sekolah').val();
        var status_pernikahan = $('#status_pernikahan').val();
        var pekerjaan = $('#pekerjaan').val();

        // Hitung Umur
        var today = new Date();
    		var birthday = new Date(tgl_lahir);
    		var year = 0;
    		if (today.getMonth() < birthday.getMonth()) {
    			year = 1;
    		} else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
    			year = 1;
    		}
    		var age = today.getFullYear() - birthday.getFullYear() - year;
    		if(age < 0){
    			age = 0;
    		}
        // End Hitung Umur

        var check = $('#cek_setuju').is(':checked');
        if(check){
          if(!nama){
              toastr.error('Nama harus diisi!', 'ERROR')
              return false
          }
          if(!email){
              toastr.error('Email harus diisi!', 'ERROR')
              return false
          }
          if(!email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
              toastr.error('Format email belum benar!', 'ERROR')
              return false
          }
          if(!hp){
            toastr.error('Nomor HP harus diisi!', 'ERROR')
            return false
          }
          if(!password){
            toastr.error('Password harus diisi!', 'ERROR')
            return false
          }
          if(password.length < 6){
            toastr.error('Password minimal terdiri dari 6 karakter!', 'ERROR')
            return false
          }
          if(!password_confirm){
            toastr.error('Konfirmasi Password harus diisi!', 'ERROR')
            return false
          }
          if(password != password_confirm){
            toastr.error('Password tidak sama!', 'ERROR')
            return false
          }
          if(!foto_ktp){
            toastr.error('Foto KTP harus dilengkapi!', 'ERROR')
            return false
          }
          if(!pas_foto){
            toastr.error('Pas Foto harus dilengkapi!', 'ERROR')
            return false
          }
          if(!no_ktp){
            toastr.error('Nomor KTP harus diisi!', 'ERROR')
            return false
          }
          if(no_ktp.length != 16){
            toastr.error('Nomor KTP harus terdiri 16 digit!', 'ERROR')
            return false
          }
          if(!kejuruan){
            toastr.error('Kejuruan harus diisi!', 'ERROR')
            return false
          }
          if(!jenis_kelamin){
            toastr.error('Jenis Kelamin harus diisi!', 'ERROR')
            return false
          }
          if(!agama){
            toastr.error('Agama harus diisi!', 'ERROR')
            return false
          }
          if(!tempat_lahir){
            toastr.error('Tempat Lahir harus diisi!', 'ERROR')
            return false
          }
          if(!tgl_lahir){
            toastr.error('Tanggal Lahir harus diisi!', 'ERROR')
            return false
          }
          if(age < 17){
            toastr.error('Anda harus berumur minimal 17 Tahun!', 'ERROR')
            return false
          }
          if(!provinsi){
            toastr.error('Provinsi harus diisi!', 'ERROR')
            return false
          }
          if(!kota){
            toastr.error('Kab/Kota harus diisi!', 'ERROR')
            return false
          }
          if(!alamat){
            toastr.error('Alamat harus diisi!', 'ERROR')
            return false
          }
          if(!pendidikan_terakhir){
            toastr.error('Pendidikan Terakhir harus diisi!', 'ERROR')
            return false
          }
          if(!asal_sekolah){
            toastr.error('Asal Sekolah harus diisi!', 'ERROR')
            return false
          }
          if(!status_pernikahan){
            toastr.error('Status Pernikahan harus diisi!', 'ERROR')
            return false
          }
          if(!pekerjaan){
            toastr.error('Pekerjaan harus diisi!', 'ERROR')
            return false
          }
        }else{
          toastr.error('Anda belum menyetujui kebijakan privasi serta syarat dan ketentuan yang berlaku', 'ERROR')
          return false
        }

        e.preventDefault()

        var formData = new FormData($("#formRegister")[0]);
        $.ajaxSetup({
           headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });
        $.ajax({
            method: "POST",
            url: $('#formRegister').attr('action'),
            data: formData,
            dataType:'json',
            processData: false,
            contentType: false,
            beforeSend:function(){
                $('#btnRegister').prop("disabled", true)
                $('#btnRegister').html("Harap tunggu ...")
            },
            success: function(data){
                if(!data.status){
                  toastr.error(data.message, 'ERROR')
                  $('#btnRegister').prop("disabled", false)
                  $('#btnRegister').html("Daftar")
                  return false
                }else{
                  toastr.success('Pendaftaran Berhasil', 'Success')
                  window.location.href = 'login'
                }
            }
        })
    })

})
