<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt style="margin-top: -80px">
<img src="assets/img-01.png" alt="IMG">
</div>
<div class="login100-form validate-form" style="margin-top: -80px">
<span class="login100-form-title">
Member Login
</span>
<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<input class="input100" type="text" name="email" id="emailLog" placeholder="Email">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
</div>
<div class="wrap-input100 validate-input" data-validate="Password is required">
<input class="input100" type="password" name="pass" id="passLog" placeholder="Password">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>
<div class="container-login100-form-btn">
<button class="login100-form-btn" id="login">
Login
</button>
</div>
<div class="text-center p-t-13">
<a class="txt2" data-toggle="modal" data-target="#myModal" style="cursor: pointer;">
Create your Account
<i class="fa fa-arrow-right m-l-5" aria-hidden="true"></i>
</a>
</div>
</div>
</div>
</div>
</div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content"  style="padding: 5px 40px">
        <div class="modal-header">
          
          <h4 class="modal-title">Registration</h4>
        	<button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="color: #ACACA8; font-family: arial;font-size:12px">
          <div class="row">
          	 <div class="col-sm-6">
          	 	<label for="email">Nama Lengkap<i class="alert-input alert-fullname">*required</i></label>
          	 	<input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control">
          	 </div>
          	 <div class="col-sm-6">
          	 	<label for="email">Jenis Kelamin</label><br>
          	 	<label class="radio-inline" style="margin-top: 10px">
			      <input type="radio" class="gender" value="laki-laki" name="gender" checked="checked" style="margin-right: 5px">Laki-Laki
			    </label>
			    <label class="radio-inline" style="margin-left: 20px">
			      <input type="radio"  class="gender" value="perempuan" name="gender" style="margin-right: 5px">Perempuan
			    </label>
          	 </div>
          </div>
          <div class="row">
          	 <div class="col-sm-6">
          	 	<label for="email">Kota Kelahiran<span class="alert-input alert-kota-lahir">*required</span></label>
          	 	<input type="text" id="kota_lahir" name="kota_lahir" class="form-control">
          	 </div>
          	 <div class="col-sm-6">
          	 	<label for="email">Email<span class="alert-input alert-email">*required</span></label>
          	 	<input type="text" name="emailreg" id="emailreg" class="form-control">
          	 </div>
          </div>
          <div class="row">
		  <div class="col-sm-4">
          	 	<label for="email">Tanggal Lahir<span class="alert-input alert-tgl-lahir">*required</span></label>
          	 	<input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
          	 </div>
          	 <div class="col-sm-3">
          	 	<label for="email">Agama<span class="alert-input alert-agama">*required</span></label>
          	 	<select class="form-control" id="agama" name="agama">
          	 		<option value="">-</option>
          	 		<option value="Islam">Islam</option>
          	 		<option value="Katolik">Katolik</option>
          	 		<option value="Protestan">Protestan</option>
          	 		<option value="Hindu">Hindu</option>
          	 		<option value="Budha">Budha</option>
          	 		<option value="Konghucu">Konghucu</option>
          	 	</select>
          	 </div>
          	 <div class="col-sm-5">
          	 	<label for="email">HP<span class="alert-input alert-hp">*required</span></label>
          	 	<input type="text" id="hp" name="hp" class="form-control">
          	 </div>
          </div>
          <div class="row">
          	 <div class="col-sm-6">
          	 	<label for="email">KTP<span class="alert-input alert-ktp">*required</span></label>
          	 	<input type="text" id="ktp" name="ktp" class="form-control">
          	 </div>
          	 <div class="col-sm-6">
          	 	<label for="email">NPWP<span class="alert-input alert-npwp">*required</span></label>
          	 	<input type="text" id="npwp" name="npwp" class="form-control">
          	 </div>
          </div>
          <div class="row">
          	 <div class="col-sm-6">
          	 	<label for="email">Alamat<span class="alert-input alert-alamat">*required</span></label>
          	 	<input type="text" id="alamat" name="alamat" class="form-control">
          	 </div>
          	 <div class="col-sm-6">
          	 	<label for="email">Pekerjaan<span class="alert-input alert-pekerjaan">*required</span></label>
          	 	<select class="form-control" id="pekerjaan" name="pekerjaan">
          	 		<option value="">-</option>
          	 		<option value="PNS">PNS</option>
          	 		<option value="TNI/Polri">TNI/Polri</option>
          	 		<option value="Karyawan BUMN">Karyawan BUMN</option>
          	 		<option value="Karyawan Swasta">Karyawan Swasta</option>
          	 		<option value="Wiraswasta">Wiraswasta</option>
          	 		<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
          	 		<option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
          	 		<option value="Tidak Bekerja">Tidak Bekerja</option>
          	 	</select>
          	 </div>
          </div>
          <div class="row">
          	 <div class="col-sm-6">
          	 	<label for="email">BPJS<span class="alert-input alert-bpjs">*required</span></label>
          	 	<input type="text" id="bpjs" name="bpjs" class="form-control">
          	 </div>
          	 <div class="col-sm-6">
          	 	<label for="email">Nama Ibu Kandung<span class="alert-input alert-ibu">*required</span></label>
          	 	<input type="text" id="ibu" name="ibu" class="form-control">
          	 </div>
          </div>
		  <div class="row">
          	 <div class="col-sm-6">
          	 	<label for="email">Password<span class="alert-input alert-password">*required</span></label>
          	 	<input type="password" id="passwordreg" name="passwordreg" class="form-control">
          	 </div>
          	 <div class="col-sm-6">
          	 	<label for="email">Confirm Password</label>
          	 	<input type="password" id="repassword" name="repassword" class="form-control">
          	 </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="save" >Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
	
    $(function(){
        $('#save').on('click',function(){
			var nama = $("#nama_lengkap").val();
			var gender = $("input[name='gender']:checked").val();
			var kotaLahir = $("#kota_lahir").val();
			var email = $("#emailreg").val();
			var tglLahir = $("#tanggal_lahir").val();
			var agama = $("#agama").val();
			var hp = $("#hp").val();
			var ktp = $("#ktp").val();
			var npwp = $("#npwp").val();
			var alamat = $("#alamat").val();
			var pekerjaan = $("#pekerjaan").val();
			var bpjs = $("#bpjs").val();
			var ibu = $("#ibu").val();
			var password = $("#passwordreg").val();
			var repassword = $("#repassword").val();
			
			var error = 0;
			if(nama=='' || kotaLahir=='' || email=='' || tglLahir=='' || agama=='' || hp=='' || ktp=='' || npwp=='' || password =='' ){
				error = 1; 
			}else{
				error=0;
			}
			if(nama==''){$('.alert-fullname').css('display','block');}else{$('.alert-fullname').css('display','none');}
			if(kotaLahir==''){$('.alert-kota-lahir').css('display','block');}else{$('.alert-kota-lahir').css('display','none');}
			if(email==''){$('.alert-email').css('display','block');}else{$('.alert-email').css('display','none');}
			if(tglLahir==''){$('.alert-tgl-lahir').css('display','block');}else{$('.alert-tgl-lahir').css('display','none');}
			if(agama==''){$('.alert-agama').css('display','block');}else{$('.alert-agama').css('display','none');}
			if(hp==''){$('.alert-hp').css('display','block');}else{$('.alert-hp').css('display','none');}
			if(ktp==''){$('.alert-ktp').css('display','block');}else{$('.alert-ktp').css('display','none');}
			if(npwp==''){$('.alert-npwp').css('display','block');}else{$('.alert-npwp').css('display','none');}
			if(password==''){$('.alert-password').css('display','block');}else{$('.alert-password').css('display','none');}
			if(password!=repassword){$('.alert-password').css('display','block');$('.alert-password').text('password not matching');}else if(password!='' && password==repassword){$('.alert-password').css('display','none');}

			if(error==0){
				swal.fire({
				text: "Anda akan mendaftarkan data Anda ",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#78FD75",
				confirmButtonText: "Ya, Daftar!",
				closeOnConfirm: false
				}).then(function (result) {
					if (result.value) {
						// handle confirm	
					$.ajax({
						type: "POST",
						url: "http://localhost/api/register",
						data: { 
							'nama': nama,
							'gender':gender,
							'kotaLahir': kotaLahir,
							'email':email,
							'tglLahir': tglLahir,
							'agama':agama,
							'hp': hp,
							'ktp':ktp,
							'npwp': npwp,
							'alamat':alamat,
							'pekerjaan': pekerjaan,
							'bpjs':bpjs,
							'ibu':ibu,
							'password':password
						},
						cache: false,
						success: function(response) {
							if(response.status===true){
								swal.fire(
								"Berhasil!",
								"anda telah terdaftar sekarang",
								"success"
								).then(function(){
									location.reload();
								});
							}
						},
						failure: function (response) {
							swal.fire(
							"Internal Error",
							"Oops, your note was not saved.", // had a missing comma
							"error"
							)
						}
					});
					} else {
						// handle cancel
						swal.fire(
						"Cancelled",
							"Batal Registrasi",
						"error"
						)
					}
					
				})
			}
            
        });


		$('#login').on('click',function(){
            var email = $("#emailLog").val();
			var password = $("#passLog").val();	      
				$.ajax({
					type: "POST",
					url: "http://localhost/api/login",
					data: { 
						'email':email,
						'password':password
					},
					cache: false,
					success: function(response) {
						if(response.status===true){
							//sessionStorage.removeItem('token');
							sessionStorage.setItem("token", response.token);
							sessionStorage.setItem("user_id", response.user_id);
							//var token = sessionStorage.getItem('token');
							//alert(token);
							window.location.href = "http://localhost/fintag/";
						}else{
							swal.fire(
							"Fail!",
							"login gagal,email atau password salah ! !",
							"error"
							).then(function(){
								location.reload();
							});
						}
					},
					failure: function (response) {
						swal.fire(
						"Internal Error",
						"Oops, your note was not saved.", // had a missing comma
						"error"
						)
					}
				});
        });
    });
  </script>
    