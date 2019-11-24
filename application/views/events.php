	<section id="eventList">
		<div class="container-fluid">
			<div class="col-12">
				<div class="eventItem">
					<div class="ml-5 position-relative mb-5 pt-3">
						<div class="row">
							<div class="ml-2 mt-3">
								<h5>Best Seller Books</h5>
							</div>
							<div class="ml-3 mt-3">
								<i class="fas fa-angle-right fa-2x"></i>
							</div>
						</div>
					</div>
					<div class="eventItem-group">
						<div class="container-fluid">
							<?php foreach ($books as $buku) : ?>
								<div class="card to-row" style="width: 18rem;">
									<div class="text-center">
										<img class="card-img-top" src="<?= base_url($buku['gambar']) ?>" alt="Card image cap" style="width: 80%; height: 20vw;">
									</div>
									<div class="card-body">
										<h5 class="card-title"><?= $buku['judul'] ?></h5>
										<p class="card-text"><?= $buku['penulis'] ?></p>
										<p class="card-text"><?= $buku['harga'] ?></p>
										<a href="<?= base_url('books/detailBuku/') . $buku['id_buku'] ?>">
											<button class="btn btn-primary">Detail Buku</button>
										</a>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="pad-100" id="bestEvents">
		<div class="container">
			<div class="bestEvents-title row">
				<div class="m-auto">
					<h4>On-Going Events</h4>
				</div>
			</div>
			<div class="my-5">
				<div class="events-list">
					<?php foreach ($events as $data) : ?>
						<div class="card">
							<div class="row align-items-center">
								<div class="col-md-4">
									<img src="<?= base_url($data['image']) ?>" class="" alt="" style="width: 100%;">
								</div>
								<div class="col-md-8 my-2 px-3">
									<div class="card-block">
										<h4 class="card-title"><?= $data['nama'] ?></h4>
										<p class="card-text"> <?= $data['lokasi'] ?></p>
										<p class="card-text"><?= $data['tanggal'] ?>.</p>
										<a href="<?= base_url('events/details/') . $data['id_event'] ?>" class="btn btn-primary">Go To Event</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>