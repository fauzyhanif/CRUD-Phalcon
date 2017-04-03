<div class="content">
	<div class="container">
		<div class="row" style="width: 400px; margin: auto;">
			<div class="card-box">
				<h4 class="m-t-0 header-title"><b>Update data mahasiswa</b></h4>
				<p class="text-muted font-13 m-b-30">
                    Your awesome text goes here.
                </p>
                            
				<form action="<?= $this->url->get('crud/create') ?>" method="post" data-parsley-validate novalidate>
					<input type="hidden" name="id" value="<?= $nim ?>">
					<div class="form-group">
						<label for="userName">Nim</label>
						<input type="text"parsley-trigger="change" required class="form-control" name="nim" value="<?= $nim ?>">
					</div>
					<div class="form-group">
						<label for="emailAddress">Nama</label>
						<input type="text" name="nama" required class="form-control" value="<?= $nama ?>">
					</div>
					<div class="form-group">
						<label for="pass1">Jurusan</label>
						<input type="text" name="id_jurusan" required class="form-control" value="<?= $id_jurusan ?>">
					</div>
					<div class="form-group">
						<label for="passWord2">Alamat</label>
						<input type="text" name="alamat" required class="form-control" value="<?= $alamat ?>">
					</div>
					

					<div class="form-group text-right m-b-0">
						<button class="btn btn-primary waves-effect waves-light" type="submit">
							Submit
						</button>
						<button type="reset" class="btn btn-default waves-effect waves-light m-l-5" data-dismiss="modal">
							Cancel
						</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>