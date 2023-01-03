<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 align-self-center">
				<h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h3>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb m-0 p-0">
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan') ?>">Pengerjaan undangan</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan/detail/' . $code) ?>">Setting Data Undangan</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- Looping Card -->
		<?= form_open($this->uri->uri_string(), ['class' => 'mt-2']) ?>
		<div class="card shadow-sm px-3 pb-2">
			<div class="form-group mb-3">
				<h6 class="text-dark">Data Ke- 1</h6>
				<label for="tahap">Tahap <span class="text-danger">*</span></label>
				<div class="input-group">
					<select name="title[]" id="tahap" class="form-control <?= (form_error('title[]')) ? 'is-invalid' : '' ?>">
						<option selected>Pilih Tahap</option>
						<option value="Tahap 1">Tahap 1</option>
						<option value="Tahap 2">Tahap 2</option>
						<option value="Tahap 3">Tahap 3</option>
					</select>
					<div class="invalid-feedback"><?= form_error('title[]') ?></div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="tanggal">Tanggal <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="date" name="date[]" class="form-control <?= (form_error('date[]')) ? 'is-invalid' : '' ?>" id="tanggal">
					<div class="invalid-feedback"><?= form_error('date[]') ?></div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="cerita">Cerita <span class="text-danger">*</span></label>
				<div class="input-group">
					<textarea name="text[]" id="cerita" placeholder="Masukan Cerita" class="form-control <?= (form_error('text[]') ? 'is-invalid' : '') ?>"></textarea>
					<div class="invalid-feedback"><?= form_error('text[]') ?></div>
				</div>
			</div>
			<input type="hidden" id="count-form" name="count_form" value="1">
			<input type="hidden" name="invtId" value="1">
		</div>
		<div id="next-form"></div>
		<div class="flex mt-3 mb-4">
			<button type="submit" class="btn btn-sm btn-primary px-3 py-2 mr-3">Simpan</button>
			<button type="reset" id="btn-reset-form" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
		</div>
		<?= form_close() ?>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->

	<!-- Floating Button Add -->
	<div class="floating-container">
		<a href="#">
			<div id="btn-add-form" class="floating-button">+</div>
		</a>
	</div>
	<!-- Floating Button Add End -->

	<script>
		$(document).ready(function() {
			$("#btn-add-form").click(function() {
				var jumlah = parseInt($("#count-form").val());
				var nextform = jumlah + 1;
				if (nextform <= 3) {
					$("#next-form").append(
						'<div class="card shadow-sm px-3 pb-2">' +
						'<div class="form-group mb-3">' +
						'<h6 class="text-dark">Data Ke- ' + nextform + '</h6>' +
						'<label for="tahap">Tahap <span class="text-danger">*</span></label>' +
						'<div class="input-group">' +
						'<select name="title[]" id="tahap" class="form-control">' +
						'<option selected>Pilih Tahap</option>' +
						'<option value="tahap_1">Tahap 1</option>' +
						'<option value="tahap_2">Tahap 2</option>' +
						'<option value="tahap_3">Tahap 3</option>' +
						'</select>' +
						'</div>' +
						'</div>' +
						'<div class="form-group mb-3">' +
						'<label for="tanggal">Tanggal <span class="text-danger">*</span></label>' +
						'<div class="input-group">' +
						'<input type="date" name="date[]" class="form-control" id="tanggal">' +
						'</div>' +
						'</div>' +
						'<div class="form-group mb-3">' +
						'<label for="cerita">Cerita <span class="text-danger">*</span></label>' +
						'<div class="input-group">' +
						'<textarea name="text[]" id="cerita" placeholder="Masukan Cerita" class="form-control"></textarea>' +
						'</div>' +
						'</div>' +
						'</div>'
					);
				}
				$('#count-form').val(nextform);
			});
			$("#btn-reset-form").click(function() {
				$("#next-form").html(""); // Kita kosongkan isi dari div insert-form
				$("#count-form").val("1"); // Ubah kembali value jumlah form menjadi 1
			});
		});
	</script>
