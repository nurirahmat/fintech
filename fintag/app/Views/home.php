<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt style="margin-top: -130px">
<span id="user"></span>
    <span id="user-id" style="color:#dedede"></span>
<img src="assets/img-01.png" alt="IMG">
</div>
<div class="login100-form validate-form" style="margin-top: -80px">
<span class="login100-form-title">
Fintag <span id="tt"></span>
</span>

<div id="cont">
<div class="row" style="margin-top:-40px">
        <div class="col-sm-6" style="background-color:#DAF7A6; height:70px;text-align:center;color:#666;padding-top:15px">
            <span>Tenor UP 12 Bulan</span>
        </div>
        <div class="col-sm-6" style="background-color:#2EE3E2; height:70px;text-align:center;color:#666;padding-top:25px">
            <span>Plafon 500rb - 5 jt</span>
        </div>
        <span style="font-family:arial-narrow;font-size:12px;color:#999">Biaya admin 1% , Bunga 2%</span>
    </div>
    
<button class="login100-form-btn" data-toggle="modal" data-target="#myModal" style="cursor: pointer;">
Ajukan Pinjaman
</button>
</div>

<div id="loan" style="display:none">
<div class="row" style="font-size:12px;margin-top:-45px">
    <div class="col-sm-6" style="background-color:#f1f1f1; height:30px;text-align:center;color:#666;padding-top:5px">
        <span>Nomor Pinjaman</span>
    </div>
    <div class="col-sm-6" style="background-color:#fff; height:30px;text-align:center;color:#666;padding-top:5px">
        <span id="no"></span> 
    </div>
    
    <div class="col-sm-6" style="background-color:#f1f1f1; height:30px;text-align:center;color:#666;padding-top:5px">
        <span>Tgl Pinjaman</span>
    </div>
    <div class="col-sm-6" style="background-color:#fff; height:30px;text-align:center;color:#666;padding-top:5px">
        <span id="tgl"></span> 
    </div>
</div>

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
          
          <h4 class="modal-title">Pengajuan Pinjaman</h4>
        	<button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="color: #ACACA8; font-family: arial;font-size:12px">
          <div class="row">
          <div class="col-sm-6">
          	 	<label for="tenor">Plafon</label>
          	 	<select class="form-control" id="plafon" name="plafon">
          	 		<option value="500000">500.000</option>
          	 		<option value="1000000">1.000.000</option>
          	 		<option value="3000000">3.000.000</option>
          	 		<option value="5000000">5.000.000</option>
          	 	</select>
          	 </div>
          	 <div class="col-sm-6">
          	 	<label for="tenor">Tenor</label>
          	 	<select class="form-control" id="tenor" name="tenor">
                   <option value="1">1 Bulan</option>
                   <option value="3">3 Bulan</option>
          	 		<option value="6">6 Bulan</option>
          	 		<option value="12">12 Bulan</option>
          	 	</select>
          	 </div>
               <div class="col-sm-6" style="margin-top:20px">
               </div>
               <div class="col-sm-6" style="margin-top:20px">
                    <p>Biaya Admin (1%) = Rp. <span id="biaya">5000</span></p>
                    <p>Bunga (2%)       = Rp. <span id="bunga">10000</span></p> 
                    <p>Pencairan        = Rp. <span id="cair">495000</span></p> 
                    <p>Cicilan (<span id="tenorCicilan">1</span>x)     = Rp. <span id="cicilan">510000</span></p> 
               </div>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="save" >Ajukan</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $( document ).ready(function(){
            //Perform Ajax request.
            var token = sessionStorage.getItem('token');
            var user_id = sessionStorage.getItem('user_id');
            $.ajax({
                type: "POST",
                url: "http://localhost/api/loan/getData",
                data: { 
                    'token': token,
                    'peminjam_id':user_id
                },
                cache: false,
                success: function(response) {
                    if(response.status===true){
                        $('#cont').css('display','none');
                        $('#loan').css('display','block');
                        $("#no").text(response.nomor_pinjaman);
                        $("#tgl").text(response.tanggal_pengajuan);
                        $("#user").text(response.fullname);
                        $("#user-id").text(response.peminjam_id);
                    }else{
                        $('#cont').css('display','block');
                        $('#loan').css('display','none');
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

                $.ajax({
                type: "POST",
                url: "http://localhost/api/login/getData",
                data: { 
                    'token': token,
                    'peminjam_id':user_id
                },
                cache: false,
                success: function(response) {
                    if(response.status===true){
                        $('#cont').css('display','block');
                        $('#loan').css('display','none');
                        $("#user").text(response.fullname);
                        $("#user-id").text(response.peminjam_id);
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
        
	
    $(function(){
        $('#plafon').on('change', function() {
            var plafon = this.value;
            var tenor = $("#tenor").val();
            var biaya = (plafon * 1)/100;
            var bunga = (plafon * 2)/100;
            var cair = plafon - biaya;
            var cicilan = (parseInt(plafon) + parseInt(bunga))/tenor;
            $("#biaya").text(biaya);
            $("#bunga").text(bunga);
            $("#cair").text(cair);
            $("#cicilan").text(cicilan);
            $("#tenorCicilan").text(tenor);
        });

        $('#tenor').on('change', function() {
            var tenor = this.value;
            var plafon = $("#plafon").val();
            var biaya = (plafon * 1)/100;
            var bunga = (plafon * 2)/100;
            var cair = plafon - biaya;
            var cicilan = (parseInt(plafon) + parseInt(bunga))/tenor;
            $("#biaya").text(biaya);
            $("#bunga").text(bunga);
            $("#cair").text(cair);
            $("#cicilan").text(cicilan);
            $("#tenorCicilan").text(tenor);
        });

        $('#save').on('click',function(){
            swal.fire({
				text: "Kirim pengajuan pinjaman ? ",
	        type: "warning",
	        showCancelButton: true,
	        confirmButtonColor: "#78FD75",
	        confirmButtonText: "Ya, Ajukan!",
	        closeOnConfirm: false
			}).then(function (result) {
                if (result.value) {
                    // handle confirm
                    var peminjam_id = sessionStorage.getItem('user_id');;
                    var plafon = $("#plafon").val();
                    var tenor = $("#tenor").val();
                    var biaya = $("#biaya").text();
                    var bunga = $("#bunga").text();
                    var cair = $("#cair").text();
                    var cicilan = $("#cicilan").text();
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/api/loan",
                        data: { 
                            'peminjam_id': peminjam_id,
                            'plafon':plafon,
                            'tenor': tenor,
                            'biaya':biaya,
                            'bunga':bunga,
                            'cair':cair,
                            'cicilan':cicilan
                        },
                        cache: false,
                        success: function(response) {
                            if(response.status===true){
                                swal.fire(
                                "Berhasil!",
                                "Pengajuan Anda berhasil dikirim, menunggu persetujuan",
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
					"Batal Pengajuan",
				"error"
				)
                }
				
			})
        });

    });
  </script>
    