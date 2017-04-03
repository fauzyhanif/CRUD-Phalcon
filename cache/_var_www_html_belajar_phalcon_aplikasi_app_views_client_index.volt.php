<div class="content">
	<div class="container">
		<div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">

                    <h4 class="m-t-0 header-title"><b>Data Mahasiswa dari API</b></h4>

                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
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
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>
</div>