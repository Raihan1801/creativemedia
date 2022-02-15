<?php $this->load->view('_heading/_headerContent') ?>

<style>
.field-icon {
    float: left;
    margin-left: 93%;
    margin-top: -25px;
    position: relative;
    z-index: 2;
}
</style>

<section class="content">
    <!-- style loading -->
    <div class="loading2"></div>
    <!-- -->

    <div class="box">
        <div class="row">
            <div class="col-md-8">

                <div class="box-header with-border">
                    <h3 class="box-title">Edit Data</h3>
                </div>

                <!-- /.box-header -->
                <!-- form start -->

                <!-- form start -->
                <form class="form-horizontal" id="form-update" method="POST">
                    <!-- <input type="hidden" name="created_by" value="<?php echo $userdata->nama; ?>"> -->
                    <input type="hidden" name="id_tentor" value="<?php echo $datatrainer->id_tentor; ?>">
        			<input type="hidden" name="id_login" value="<?php echo $datatrainer->id_login; ?>">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama Trainer</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="nama tentor" name="nama_tentor"
                                    aria-describedby="sizing-addon2" value="<?php echo $datatrainer->nama_tentor; ?>">
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="username" name="username"
                                    aria-describedby="sizing-addon2" value="<?php echo $datatrainer->username; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" id="password-field" placeholder="password"
                                    name="password" aria-describedby="sizing-addon2" value="<?php echo $datatrainer->password; ?>"><span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Bidang Studi </label>
                            <div class="col-sm-7">
                                <select name="bidang_studi[]" class="form-control selek-status" multiple="multiple"
                                    aria-describedby="sizing-addon2">
                                    <?php $pecah=explode(",",$datatrainer->bidang_studi) ?>
										<?php foreach ($Studi as $data) {?>
										<option value="<?php echo $data->nama_bidang_studi; ?>"
											<?php foreach ($pecah as $pecah2){?>
											<?php if ($data->nama_bidang_studi == $pecah2){echo "selected='selected'";}}?>>
											<?php echo  $data->nama_bidang_studi ?></option>
										<?php
										} 
										?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">No KTP</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="No KTP" name="ktp"
                                    aria-describedby="sizing-addon2" value="<?php echo $datatrainer->ktp; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control select2-cat">
                                    <option></option>
                                    <option value="Laki-laki"
                                        <?= $datatrainer->jenis_kelamin == 'laki-laki' ? 'selected' : '' ?>>Laki-laki
                                    </option>
                                    <option value="Perempuan"
                                        <?= $datatrainer->jenis_kelamin == 'perempuan' ? 'selected' : '' ?>>Perempuan
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tempat/Tgl Lahir</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="tempat lahir" name="tempat_lahir"
                                    aria-describedby="sizing-addon2" value="<?php echo $datatrainer->tempat_lahir; ?>">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="tanggal" name="tanggal_lahir"
                                    placeholder="tanggal lahir" aria-describedby="sizing-addon2" value="<?php echo $datatrainer->tanggal_lahir; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="alamat" name="alamat" id="alamat"
                                    aria-describedby="sizing-addon2" value="<?php echo $datatrainer->alamat; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"></label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="kota" name="kota" id="kota"
                                    aria-describedby="sizing-addon2" value="<?php echo $datatrainer->kota; ?>">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="provinsi" placeholder="provinsi"
                                    aria-describedby="sizing-addon2" value="<?php echo $datatrainer->provinsi; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nomor Telepon</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="Nomor Telepon" name="telepon"
                                    aria-describedby="sizing-addon2" value="<?php echo $datatrainer->telepon; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nomor Telepon Alternatif</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="Nomor Telepon Alternatif"
                                    name="telepon_alternatif" aria-describedby="sizing-addon2" value="<?php echo $datatrainer->telepon_alternatif; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Pendidikan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan"
                                    aria-describedby="sizing-addon2" value="<?php echo $datatrainer->pendidikan; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Lembaga Pendidikan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="Lembaga Pendidikan"
                                    name="lembaga_pendidikan" aria-describedby="sizing-addon2" value="<?php echo $datatrainer->lembaga_pendidikan; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Tahun Lulus</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="Tahun Lulus" name="tahun_lulus"
                                    aria-describedby="sizing-addon2" value="<?php echo $datatrainer->tahun_lulus; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tgl Masuk</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="tanggalmasuk" name="tanggal_masuk"
                                    placeholder="tanggal masuk" aria-describedby="sizing-addon2" value="<?php echo $datatrainer->tanggal_masuk; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Status Tentor</label>
                            <div class="col-sm-3">
                                <select name="status_tentor" class="form-control selek-status">
                                    <!-- <?php foreach ($datatrainer as $data) { ?>
										<option value="<?php echo $data->nama ?>"
											<?php if($data->nama == $datatrainer->status){echo "selected='selected'";} ?>>
											<?php echo $data->nama; ?>
										</option>
										<?php }?> -->

                                    <option></option>
                                    <option value="aktif"
                                        <?= $datatrainer->status_tentor == 'aktif' ? 'selected' : '' ?>>Aktif
                                    </option>
                                    <option value="tidak aktif"
                                        <?= $datatrainer->status_tentor == 'tidak aktif' ? 'selected' : '' ?>>Tidak
                                        Aktif
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="slider">
                                <img class="img-thumbnail" id="output"
                                src='../<?php echo $datatrainer->gambar; ?>'
                                    alt="your image" />
                            </div>

                            <label for="inputFoto" class="col-sm-2 control-label">Foto</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="gambar" id="gambar" />
                                <p style='color: red; font-size: 14px;'> *Maksimal File Foto 2 MB</p>
                            </div>
                        </div>


                        <div class="box-footer">
                            <button name="simpan" type="submit" class="btn btn-success btn-flat"><i
                                    class="fa fa-save"></i> Simpan</button>
                            <button type="reset" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i>
                                Cancel</button>
                            <a class="klik ajaxify" href="<?php echo site_url('trainer'); ?>"><button
                                    class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i>
                                    Kembali</button></a>
                        </div>
                </form>

            </div>
            <!-- /.box -->

        </div>
        <!-- /.row -->
    </div>

</section>

<!-- js edit -->
<script type="text/javascript">	
	
		$('#form-update').submit(function(e) {
		
		var data = $(this).serialize();
		
		$.ajax({
        beforeSend: function (){
        $(".loading2").show();
		$(".loading2").modal('show');	
        },
		url:'<?php echo base_url();?>Category/Trainer/prosesUpdate',
		type:"post",
		data:new FormData(this),
		processData:false,
		contentType:false,
		cache:false,	
		})
		.done(function(data) {
			var result = jQuery.parseJSON(data);
			if (result.status == 'berhasil')
			{
				$(".loading2").hide();
				$(".loading2").modal('hide');	
				save_berhasil();
				
				
			} else 
			
			{
				$(".loading2").hide();
				$(".loading2").modal('hide');	
				gagal();
			
			}
		})
		e.preventDefault();
	});
		
		
		// untuk select2 ajak pilih tipe
		$(function () 
		{
		$(".selek-status").select2({
        placeholder: " -- pilih status -- "
        });
		});
		
		// untuk select2 ajak pilih tipe
		$(function () 
		{
		$(".selek-status").select2({
        placeholder: " -- pilih bidang studi -- "
        });
		});
		
		
	// untuk show hide password
	$(".toggle-password").click(function() {

	$(this).toggleClass("fa-eye fa-eye-slash");
	var input = $($(this).attr("toggle"));
	if (input.attr("type") == "password") {
    input.attr("type", "text");
	} else {
    input.attr("type", "password");
	}
	});
		
	</script>

<!-- end js edit -->


<script type="text/javascript">
$('#gambar').bind('change', function() {
    if (this.files[0].size > 2007200) // validasi ukuran size file
    {
        swal("Peringatan", "File harus maksimal 2 MB", "warning");
        this.value = '';
        // return false;
    } else {
        var reader = new FileReader();
        reader.onload = function() {
            var dataURL = reader.result;
            var output = document.getElementById('output');
            output.src = dataURL;
        };
        reader.readAsDataURL(this.files[0]);
    }
});

// untuk datetime from
$(function() {
    $("#tanggal").datepicker({
        format: 'dd-mm-yyyy'
    })
});

// untuk datetime from
$(function() {
    $("#tanggalmasuk").datepicker({
        format: 'dd-mm-yyyy'
    })
});
</script>