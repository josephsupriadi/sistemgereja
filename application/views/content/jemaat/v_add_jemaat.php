<html>

<head>
	<title>Form Tambah Data Jemaat</title>
	<!-- CSS only CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- JQuery and Javascript CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script async src="https://docs.opencv.org/master/opencv.js" type="text/javascript"></script>
	<!-- JQuery Validation CDN -->
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
</head>

<body>
<div class="card">
	<div class="card-header">
		<h3>Form Add Jemaat</h3>
	</div>
	<div class="card-body">
		<form id="form-tambah-jemaat" method="post" action="<?=site_url('jemaat/insert')?>" enctype="multipart/form-data">
			<div class="form-group">
				<label class="form-label">Nomor Keluarga</label>
				<input required type="text" class="form-control" name="nomor_keluarga">
			</div>
			<div class="form-group">
				<label class="form-label">Nama Jemaat</label>
				<input required type="text" class="form-control" name="nama_jemaat">
			</div>
			<div class="form-group">
				<label class="form-label">Tempat Lahir</label>
				<input required type="text" class="form-control" name="tempat_lahir_jemaat">
			</div>
			<div class="form-group">
				<label class="form-label">Tanggal Lahir</label>
				<input required type="date" class="form-control" name="tanggal_lahir_jemaat">
			</div>
			<div class="form-group">
				<label class="form-label">Jenis Kelamin</label>
				<input required type="text" class="form-control" name="jenis_kelamin_jemaat">
			</div>
			<div class="form-group">
				<label class="form-label">Alamat</label>
				<input required type="text" class="form-control" name="alamat_jemaat">
			</div>
			<div class="form-group">
				<label class="form-label">Pekerjaan</label>
				<input required type="text" class="form-control" name="pekerjaan_jemaat">
			</div>
		</form>
	</div>
	<div class="card-footer">
		<button type="button" id="btn-save-jemaat" class="btn btn-success btn-sm">
			<i class="fa fa-plus"></i> Simpan
		</button>
		<a href="<?=site_url('jemaat')?>" class="btn btn-primary btn-sm">
			<i class="fa fa-reply"></i>Kembali
		</a>
	</div>
</div>
</body>

</html>
<script>
	$(function () {
		$("#btn-save-jemaat").on("click", function() {
			let validate = $("#form-tambah-jemaat").valid()
			if (validate) {
				$("#form-tambah-jemaat").submit()
			}
		})
		$("#form-tambah-jemaat").validates({
			rules: {
				nomor_keluarga: {
					digits: true
				},
				nama_jemaat: {
					digits: true
				},
				tempat_lahir_jemaat: {
					digits: true
				},
				tanggal_lahir_jemaat: {
					digits: true
				},
				jenis_kelamin_jemaat: {
					digits: true
				},
				alamat_jemaat: {
					digits: true
				},
				pekerjaan_jemaat: {
					digits: true
				}
			},
			errorElement: 'span',
			errorPlacement: function (error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);
			},
			highlight: function (element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			}
		})
	})
</script>
