<div class="content">
	<div class="container">
		<div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">

                    <h4 class="m-t-0 header-title"><b>Data Mahasiswa</b></h4>
                    <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">
                    Standard Modal
                    </button>

                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Data</h4>
                                </div>

                                <div class="modal-body">

	                                <div class="card-box">
										<h4 class="m-t-0 header-title"><b>Basic Form</b></h4>
										<p class="text-muted font-13 m-b-30">
		                                    Your awesome text goes here.
		                                </p>
			                                        
										<form action="<?= $this->url->get('crud/create') ?>" method="post" data-parsley-validate novalidate>
											<div class="form-group">
												<label for="userName">Nim</label>
												<input type="text"parsley-trigger="change" required placeholder="001xx" class="form-control" name="nim">
											</div>
											<div class="form-group">
												<label for="emailAddress">Nama</label>
												<input type="text" name="nama" parsley-trigger="change" required placeholder="Jaja Sutarja" class="form-control">
											</div>
											<div class="form-group">
												<label for="pass1">Jurusan</label>
												<input type="text" name="id_jurusan" placeholder="Kuli" required class="form-control">
											</div>
											<div class="form-group">
												<label for="passWord2">Alamat</label>
												<input type="text" name="alamat" required placeholder="Alamat" class="form-control">
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
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <br>
                    <br>


                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>action</th>
                        </tr>
                        </thead>


                        <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($data as $v) { ?>
                        <?php $i = $i + 1; ?>
                        <tr>
                            <td><?= $i ?>.</td>
                            <td><?= $v->nim ?></td>
                            <td><?= $v->nama ?></td>
                            <td><?= $v->id_jurusan ?></td>
                            <td><?= $v->alamat ?></td>
                            <td>
                            	<a type="button" href="crud/updatepage/<?= $v->nim ?>" class="btn btn-primary waves-effect waves-light"><i class="glyphicon glyphicon-edit"></i></a>
                            	<a type="button" href="crud/delete/<?= $v->nim ?>" class="btn btn-danger waves-effect waves-light"><i class="glyphicon glyphicon-trash"></i></a>
                            	<a type="button" href="client/post/<?= $v->nim ?>" class="btn btn-success waves-effect waves-light"><i class="glyphicon  glyphicon-share"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>
</div>