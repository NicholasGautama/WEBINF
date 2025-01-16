@extends('layouts.main')

	@section('container')
	  <div class="container" style="font-family: 'Geologica', sans-serif; color: black; margin-top: 20px;">
		<div class="container-fluid my-5" style="font-family: 'Geologica', sans-serif; color: black">
			<h3 class="text-center" style="font-size: 50px">Courses Structure</h3>
		</div>

		  <!-- Program Tab Content -->
		  <div class="tab-pane fade show active" id="pills-merdeka" role="tabpanel" aria-labelledby="pills-merdeka-tab">
			<div id="accordion">
			  <div class="card">
				<div style="background-color: #023047; " class="card-header d-flex justify-content-between align-items-center" id="headingMerdeka" style="background: #014983">
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapseMerdeka" aria-expanded="true" aria-controls="collapseMerdeka" style="text-decoration: none; color: white;">
						Courses Flow
					</button>
				</div>
				<div id="collapseMerdeka" class="collapse show" aria-labelledby="headingMerdeka" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="background-color: darkblue">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home2-tab" data-toggle="pill" href="#pills-home2" role="tab" aria-controls="pills-home2" aria-selected="true">Semester 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile2-tab" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile2" aria-selected="false">Semester 2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact2-tab" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact2" aria-selected="false">Semester 3</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-sem42-tab" data-toggle="pill" href="#pills-sem42" role="tab" aria-controls="pills-sem42" aria-selected="false">Semester 4</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-sem52-tab" data-toggle="pill" href="#pills-sem52" role="tab" aria-controls="pills-sem52" aria-selected="false">Semester 5</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-sem62-tab" data-toggle="pill" href="#pills-sem62" role="tab" aria-controls="pills-sem62" aria-selected="false">Semester 6: Internship Track 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-sem72-tab" data-toggle="pill" href="#pills-sem72" role="tab" aria-controls="pills-sem72" aria-selected="false">Semester 7: Elective Course</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-sem82-tab" data-toggle="pill" href="#pills-sem82" role="tab" aria-controls="pills-sem82" aria-selected="false">Semester 8</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<!-- Semester 1 -->
							<div class="tab-pane fade show active table-responsive" id="pills-home2" role="tabpanel" aria-labelledby="pills-home2-tab">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width: 100px; text-align: center;">No</th>
											<th style="width: 100px; text-align: center;">Course Code</th>
											<th style="text-align: center;">Course Title</th>
											<th style="width: 100px; text-align: center;">Theory Credits</th>
											<th style="width: 100px; text-align: center;">Practice Credits</th>
										</tr>

									</thead>
									<tbody>
										<?php 
										$no = 1; 
										$total_sks_teori = 0; 
										$total_sks_praktek = 0; 
										$current_semester = '';
										foreach ($merdeka as $item): 
											if ($item->semester == 1):
										?>
										<tr>
											<td style="text-align: center;"><?php echo $no++; ?></td>
											<td style="text-align: center;"><?php echo $item->kodemk; ?></td>
											<td style="text-align: center;">
											  <a href="#" class="view-pdf-link" data-pdf-url="{{ asset('storage/ModuleHandbook/'. $item->deskripsimk) }}" style="color: black;">
												<?php echo $item->mk; ?>
											  </a>
											</td>
											<td style="text-align: center;"><?php echo $item->sksteori; ?></td>
											<td style="text-align: center;"><?php echo $item->skspraktek; ?></td>
										</tr>
										<?php 
											$total_sks_teori += $item->sksteori; 
											$total_sks_praktek += $item->skspraktek; 
											endif; 
										endforeach; 
										?>
										<tr>
											<td colspan="3" style="text-align: right;"><strong>Total Credits :</strong></td>
											<td style="text-align: center;"><strong><?php echo $total_sks_teori; ?></strong></td>
											<td colspan="1" style="text-align: center;"><strong><?php echo $total_sks_praktek; ?></strong></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Semester 2 -->
							<div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile2-tab">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width: 100px; text-align: center;">No</th>
											<th style="width: 100px; text-align: center;">Course Code</th>
											<th style="text-align: center;">Course Title</th>
											<th style="width: 100px; text-align: center;">Theory Credits</th>
											<th style="width: 100px; text-align: center;">Practice Credits</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$no = 1; 
										$total_sks_teori = 0; 
										$total_sks_praktek = 0; 
										$current_semester = '';
										foreach ($merdeka as $item): 
											if ($item->semester == 2):
										?>
										<tr>
											<td style="text-align: center;"><?php echo $no++; ?></td>
											<td style="text-align: center;"><?php echo $item->kodemk; ?></td>
											<td style="text-align: center;">
											  <a href="#" class="view-pdf-link" data-pdf-url="{{ asset('storage/ModuleHandbook/'. $item->deskripsimk) }}" style="color: black;">
												<?php echo $item->mk; ?>
											  </a>
											</td>
											<td style="text-align: center;"><?php echo $item->sksteori; ?></td>
											<td style="text-align: center;"><?php echo $item->skspraktek; ?></td>
										</tr>
										<?php 
											$total_sks_teori += $item->sksteori; 
											$total_sks_praktek += $item->skspraktek; 
											endif; 
										endforeach; 
										?>
										<tr>
											<td colspan="3" style="text-align: right;"><strong>Total Credits :</strong></td>
											<td style="text-align: center;"><strong><?php echo $total_sks_teori; ?></strong></td>
											<td colspan="1" style="text-align: center;"><strong><?php echo $total_sks_praktek; ?></strong></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Add the other tab content for other semesters -->
							<!-- Semester 3 -->
							<div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width: 100px; text-align: center;">No</th>
											<th style="width: 100px; text-align: center;">Course Code</th>
											<th style="text-align: center;">Course Title</th>
											<th style="width: 100px; text-align: center;">Theory Credits</th>
											<th style="width: 100px; text-align: center;">Practice Credits</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$no = 1; 
										$total_sks_teori = 0; 
										$total_sks_praktek = 0; 
										$current_semester = '';
										foreach ($merdeka as $item): 
											if ($item->semester == 3):
										?>
										<tr>
											<td style="text-align: center;"><?php echo $no++; ?></td>
											<td style="text-align: center;"><?php echo $item->kodemk; ?></td>
											<td style="text-align: center;">
											  <a href="#" class="view-pdf-link" data-pdf-url="{{ asset('storage/ModuleHandbook/'. $item->deskripsimk) }}" style="color: black;">
												<?php echo $item->mk; ?>
											  </a>
											</td>
											<td style="text-align: center;"><?php echo $item->sksteori; ?></td>
											<td style="text-align: center;"><?php echo $item->skspraktek; ?></td>
										</tr>
										<?php 
											$total_sks_teori += $item->sksteori; 
											$total_sks_praktek += $item->skspraktek; 
											endif; 
										endforeach; 
										?>
										<tr>
											<td colspan="3" style="text-align: right;"><strong>Total Credits :</strong></td>
											<td style="text-align: center;"><strong><?php echo $total_sks_teori; ?></strong></td>
											<td colspan="1" style="text-align: center;"><strong><?php echo $total_sks_praktek; ?></strong></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Semester 4 -->
							<div class="tab-pane fade" id="pills-sem42" role="tabpanel" aria-labelledby="pills-sem42-tab">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width: 100px; text-align: center;">No</th>
											<th style="width: 100px; text-align: center;">Course Code</th>
											<th style="text-align: center;">Course Title</th>
											<th style="width: 100px; text-align: center;">Theory Credits</th>
											<th style="width: 100px; text-align: center;">Practice Credits</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$no = 1; 
										$total_sks_teori = 0; 
										$total_sks_praktek = 0; 
										$current_semester = '';
										foreach ($merdeka as $item): 
											if ($item->semester == 4):
										?>
										<tr>
											<td style="text-align: center;"><?php echo $no++; ?></td>
											<td style="text-align: center;"><?php echo $item->kodemk; ?></td>
											<td style="text-align: center;">
											  <a href="#" class="view-pdf-link" data-pdf-url="{{ asset('storage/ModuleHandbook/'. $item->deskripsimk) }}" style="color: black;">
												<?php echo $item->mk; ?>
											  </a>
											</td>
											<td style="text-align: center;"><?php echo $item->sksteori; ?></td>
											<td style="text-align: center;"><?php echo $item->skspraktek; ?></td>
										</tr>
										<?php 
											$total_sks_teori += $item->sksteori; 
											$total_sks_praktek += $item->skspraktek; 
											endif; 
										endforeach; 
										?>
										<tr>
											<td colspan="3" style="text-align: right;"><strong>Total Credits :</strong></td>
											<td style="text-align: center;"><strong><?php echo $total_sks_teori; ?></strong></td>
											<td colspan="1" style="text-align: center;"><strong><?php echo $total_sks_praktek; ?></strong></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Semester 5 -->
							<div class="tab-pane fade" id="pills-sem52" role="tabpanel" aria-labelledby="pills-sem52-tab">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width: 100px; text-align: center;">No</th>
											<th style="width: 100px; text-align: center;">Course Code</th>
											<th style="text-align: center;">Course Title</th>
											<th style="width: 100px; text-align: center;">Theory Credits</th>
											<th style="width: 100px; text-align: center;">Practice Credits</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$no = 1; 
										$total_sks_teori = 0; 
										$total_sks_praktek = 0; 
										$current_semester = '';
										foreach ($merdeka as $item): 
											if ($item->semester == 5):
										?>
										<tr>
											<td style="text-align: center;"><?php echo $no++; ?></td>
											<td style="text-align: center;"><?php echo $item->kodemk; ?></td>
											<td style="text-align: center;">
											  <a href="#" class="view-pdf-link" data-pdf-url="{{ asset('storage/ModuleHandbook/'. $item->deskripsimk) }}" style="color: black;">
												<?php echo $item->mk; ?>
											  </a>
											</td>
											<td style="text-align: center;"><?php echo $item->sksteori; ?></td>
											<td style="text-align: center;"><?php echo $item->skspraktek; ?></td>
										</tr>
										<?php 
											$total_sks_teori += $item->sksteori; 
											$total_sks_praktek += $item->skspraktek; 
											endif; 
										endforeach; 
										?>
										<tr>
											<td colspan="3" style="text-align: right;"><strong>Total Credits :</strong></td>
											<td style="text-align: center;"><strong><?php echo $total_sks_teori; ?></strong></td>
											<td colspan="1" style="text-align: center;"><strong><?php echo $total_sks_praktek; ?></strong></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Semester 6 -->
							<div class="tab-pane fade" id="pills-sem62" role="tabpanel" aria-labelledby="pills-sem62-tab">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width: 100px; text-align: center;">No</th>
											<th style="width: 100px; text-align: center;">Course Code</th>
											<th style="text-align: center;">Course Title</th>
											<th style="width: 100px; text-align: center;">Theory Credits</th>
											<th style="width: 100px; text-align: center;">Practice Credits</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$no = 1; 
										$total_sks_teori = 0; 
										$total_sks_praktek = 0; 
										$current_semester = '';
										foreach ($merdeka as $item): 
											if ($item->semester == 6):
										?>
										<tr>
											<td style="text-align: center;"><?php echo $no++; ?></td>
											<td style="text-align: center;"><?php echo $item->kodemk; ?></td>
											<td style="text-align: center;">
											  <a href="#" class="view-pdf-link" data-pdf-url="{{ asset('storage/ModuleHandbook/'. $item->deskripsimk) }}" style="color: black;">
												<?php echo $item->mk; ?>
											  </a>
											</td>
											<td style="text-align: center;"><?php echo $item->sksteori; ?></td>
											<td style="text-align: center;"><?php echo $item->skspraktek; ?></td>
										</tr>
										<?php 
											$total_sks_teori += $item->sksteori; 
											$total_sks_praktek += $item->skspraktek; 
											endif; 
										endforeach; 
										?>
										<tr>
											<td colspan="3" style="text-align: right;"><strong>Total Credits :</strong></td>
											<td style="text-align: center;"><strong><?php echo $total_sks_teori; ?></strong></td>
											<td colspan="1" style="text-align: center;"><strong><?php echo $total_sks_praktek; ?></strong></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Semester 7 -->
							<div class="tab-pane fade" id="pills-sem72" role="tabpanel" aria-labelledby="pills-sem72-tab">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width: 100px; text-align: center;">No</th>
											<th style="width: 100px; text-align: center;">Course Code</th>
											<th style="text-align: center;">Course Title</th>
											<th style="width: 100px; text-align: center;">Theory Credits</th>
											<th style="width: 100px; text-align: center;">Practice Credits</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$no = 1; 
										$total_sks_teori = 0; 
										$total_sks_praktek = 0; 
										$current_semester = '';
										foreach ($merdeka as $item): 
											if ($item->semester == 7):
										?>
										<tr>
											<td style="text-align: center;"><?php echo $no++; ?></td>
											<td style="text-align: center;"><?php echo $item->kodemk; ?></td>
											<td style="text-align: center;">
											  <a href="#" class="view-pdf-link" data-pdf-url="{{ asset('storage/ModuleHandbook/'. $item->deskripsimk) }}" style="color: black;">
												<?php echo $item->mk; ?>
											  </a>
											</td>
											<td style="text-align: center;"><?php echo $item->sksteori; ?></td>
											<td style="text-align: center;"><?php echo $item->skspraktek; ?></td>
										</tr>
										<?php 
											$total_sks_teori += $item->sksteori; 
											$total_sks_praktek = 20; 
											endif; 
										endforeach; 
										?>
										<tr>
											<td colspan="3" style="text-align: right;"><strong>Total Credits :</strong></td>
											<td style="text-align: center;"><strong><?php echo $total_sks_teori; ?></strong></td>
											<td colspan="1" style="text-align: center;"><strong><?php echo $total_sks_praktek; ?></strong></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Semester 8 -->
							<div class="tab-pane fade" id="pills-sem82" role="tabpanel" aria-labelledby="pills-sem82-tab">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width: 100px; text-align: center;">No</th>
											<th style="width: 100px; text-align: center;">Course Code</th>
											<th style="text-align: center;">Course Title</th>
											<th style="width: 100px; text-align: center;">Theory Credits</th>
											<th style="width: 100px; text-align: center;">Practice Credits</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$no = 1; 
										$total_sks_teori = 0; 
										$total_sks_praktek = 0; 
										$current_semester = '';
										foreach ($merdeka as $item): 
											if ($item->semester == 8):
										?>
										<tr>
											<td style="text-align: center;"><?php echo $no++; ?></td>
											<td style="text-align: center;"><?php echo $item->kodemk; ?></td>
											<td style="text-align: center;">
											  <a href="#" class="view-pdf-link" data-pdf-url="{{ asset('storage/ModuleHandbook/'. $item->deskripsimk) }}" style="color: black;">
												<?php echo $item->mk; ?>
											  </a>
											</td>
											<td style="text-align: center;"><?php echo $item->sksteori; ?></td>
											<td style="text-align: center;"><?php echo $item->skspraktek; ?></td>
										</tr>
										<?php 
											$total_sks_teori += $item->sksteori; 
											$total_sks_praktek += $item->skspraktek; 
											endif; 
										endforeach; 
										?>
										<tr>
											<td colspan="3" style="text-align: right;"><strong>Total Credits :</strong></td>
											<td style="text-align: center;"><strong><?php echo $total_sks_teori; ?></strong></td>
											<td colspan="1" style="text-align: center;"><strong><?php echo $total_sks_praktek; ?></strong></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			  </div>
			  <div class="card">
				<div class="card-header" id="headingTwo" style="background-color:#023047;">
				  <h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: white; text-decoration: none">
					  Elective Courses
					</button>
				  </h5>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				  <div class="card-body">
					<table class="table table-bordered table-striped">
					  <thead>
						<tr>
						  <th style="width: 100px; text-align: center;">No</th>
						  <th style="width: 100px; text-align: center;">Course Code</th>
						  <th style="text-align: center;">Course Title</th>
						  <th style="width: 100px; text-align: center;">Theory <br>Credits</th>
						  <th style="width: 100px; text-align: center;">Practice Credits</th>
						  <th style="width: 100px; text-align: center;">Prerequisite</th>
						</tr>
					  </thead>
					  <tbody>
						  @php 
						  $no = 1; 
						  $current_kurikulum = '';
						  @endphp

						  @foreach ($mkelektif as $item)
							@if ($item->kurikulum == 'merdeka')
							  <tr>
								<td style="text-align: center;">{{ $no++ }}</td>
								<td style="text-align: center;">{{ $item->kodemk }}</td>
								<td style="text-align: center;">
								  <a href="#" class="view-pdf-link" data-pdf-url="{{ asset('storage/ModuleHandbook/'. $item->deskripsimk) }}" style="color: black;">
									{{ $item->mk }}
								  </a>
								</td>
								<td style="text-align: center;">{{ $item->sksteori }}</td>
								<td style="text-align: center;">{{ $item->skspraktek }}</td>
								<td style="text-align: center;">{{ $item->prasyarat }}</td>
							  </tr>
							@endif
						  @endforeach
					  </tbody>
					</table>
				  </div>
				</div>
			  </div>
			  <div class="card">
				<div class="card-header" id="headingThree" style="background-color:#023047; ">
				  <h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: white; text-decoration:none">
					  Curriculum Flow
					</button>
				  </h5>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				  <div class="card-body">
					<div class="row">
					  @foreach ($alur as $item)
						@if ($item->kurikulum == 'merdeka')
							<div class="position-relative">
							  <img class="img-fluid" src="{{ asset('storage/Sarana/' . $item->image) }}"/>
							</div>
						@endif
					  @endforeach
					</div>
				  </div>
				</div>
			</div>
		  </div>
		  <!-- Modal for PDF Display -->
		  <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="pdfModalLabel">Deskripsi Mata Kuliah</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<embed id="pdfViewer" src="" type="application/pdf" width="100%" height="500px">
					</div>
				</div>
			</div>
		  </div>
		</div>

		  <!-- Contact Tab Content -->
		  <!-- Kurikulum 2018 -->
		  <div class="tab-pane fade" id="pills-2018" role="tabpanel" aria-labelledby="pills-2018-tab">
				<div class="card">
				  <div class="card-header" id="headingOne" style="background-color:#023047;">
					<h5 class="mb-0">
					  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: white; text-decoration: none">
						Alur Course Title
					  </button>
					</h5>
				  </div>
				  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
					  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="background-color: darkblue">
						<li class="nav-item">
						  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Semester 1</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Semester 2</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Semester 3</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="pills-sem4-tab" data-toggle="pill" href="#pills-sem4" role="tab" aria-controls="pills-sem4" aria-selected="false">Semester 4</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="pills-sem5-tab" data-toggle="pill" href="#pills-sem5" role="tab" aria-controls="pills-sem5" aria-selected="false">Semester 5</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="pills-sem6-tab" data-toggle="pill" href="#pills-sem6" role="tab" aria-controls="pills-sem6" aria-selected="false">Semester 6</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="pills-sem7-tab" data-toggle="pill" href="#pills-sem7" role="tab" aria-controls="pills-sem7" aria-selected="false">Semester 7</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="pills-sem8-tab" data-toggle="pill" href="#pills-sem8" role="tab" aria-controls="pills-sem8" aria-selected="false">Semester 8</a>
						</li>
					  </ul>
					  <div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active table-responsive" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<table class="table table-bordered table-striped">
						  <thead>
							<tr>
							  <th style="width: 100px; text-align: center;">No</th>
							  <th style="width: 100px; text-align: center;">Course Code</th>
							  <th style="text-align: center;">Course Title</th>
							  <th style="width: 100px; text-align: center;">Theory <br>Credits</th>
							  <th style="width: 100px; text-align: center;">Practice Credits</th>
							</tr>
						  </thead>
						  <tbody>
							@php 
							$no = 1; 
							$total_sks_teori = 0; 
							$total_sks_praktek = 0; 
							$current_semester = '';
							@endphp

							@foreach ($kurikulum as $item)
								@if ($item->semester == 1)
									<tr>
										<td style="text-align: center;">{{ $no++ }}</td>
										<td style="text-align: center;">{{ $item->kodemk }}</td>
										<td style="text-align: center;">{{ $item->mk }}</td>
										<td style="text-align: center;">{{ $item->sksteori }}</td>
										<td style="text-align: center;">{{ $item->skspraktek }}</td>
									</tr>
									@php 
									$total_sks_teori += $item->sksteori; 
									$total_sks_praktek += $item->skspraktek; 
									@endphp
								@endif
							@endforeach

									<tr>
										<td colspan="1" style="text-align: right;"><strong>Total Credits :</strong></td>
										<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori + $total_sks_praktek }}</strong></td>
										<td></td>
										<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori }}</strong></td>
										<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_praktek }}</strong></td>
									</tr>
						  </tbody>
						</table>
					  </div>
					  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<table class="table table-bordered table-striped">
						  <thead>
							<tr>
							  <th style="width: 100px; text-align: center;">No</th>
							  <th style="width: 100px; text-align: center;">Course Code</th>
							  <th style="text-align: center;">Course Title</th>
							  <th style="width: 100px; text-align: center;">Theory <br>Credits</th>
							  <th style="width: 100px; text-align: center;">Practice Credits</th>
							</tr>
						  </thead>
						  <tbody>
							@php 
							$no = 1; 
							$total_sks_teori = 0; 
							$total_sks_praktek = 0; 
							$current_semester = '';
							@endphp

							@foreach ($kurikulum as $item)
								@if ($item->semester == 2)
									<tr>
										<td style="text-align: center;">{{ $no++ }}</td>
										<td style="text-align: center;">{{ $item->kodemk }}</td>
										<td style="text-align: center;">{{ $item->mk }}</td>
										<td style="text-align: center;">{{ $item->sksteori }}</td>
										<td style="text-align: center;">{{ $item->skspraktek }}</td>
									</tr>
									@php 
									$total_sks_teori += $item->sksteori; 
									$total_sks_praktek += $item->skspraktek; 
									@endphp
								@endif
							@endforeach

							<tr>
								<td colspan="1" style="text-align: right;"><strong>Total Credits :</strong></td>
								<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori + $total_sks_praktek }}</strong></td>
								<td></td>
								<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori }}</strong></td>
								<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_praktek }}</strong></td>
							</tr>
						  </tbody>
						</table>
					  </div>
					  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						  <table class="table table-bordered table-striped">
							<thead>
								<tr>
								  <th style="width: 100px; text-align: center;">No</th>
								  <th style="width: 100px; text-align: center;">Course Code</th>
								  <th style="text-align: center;">Course Title</th>
								  <th style="width: 100px; text-align: center;">Theory <br>Credits</th>
								  <th style="width: 100px; text-align: center;">Practice Credits</th>
								</tr>
							  </thead>
							  <tbody>
								@php 
								$no = 1; 
								$total_sks_teori = 0; 
								$total_sks_praktek = 0; 
								$current_semester = '';
								@endphp

								@foreach ($kurikulum as $item)
									@if ($item->semester == 3)
										<tr>
											<td style="text-align: center;">{{ $no++ }}</td>
											<td style="text-align: center;">{{ $item->kodemk }}</td>
											<td style="text-align: center;">{{ $item->mk }}</td>
											<td style="text-align: center;">{{ $item->sksteori }}</td>
											<td style="text-align: center;">{{ $item->skspraktek }}</td>
										</tr>
										@php 
										$total_sks_teori += $item->sksteori; 
										$total_sks_praktek += $item->skspraktek; 
										@endphp
									@endif
								@endforeach
										<tr>
											<td colspan="1" style="text-align: right;"><strong>Total Credits :</strong></td>
											<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori + $total_sks_praktek }}</strong></td>
											<td></td>
											<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori }}</strong></td>
											<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_praktek }}</strong></td>
										</tr>
							  </tbody>
						  </table>
					  </div>
					  <div class="tab-pane fade" id="pills-sem4" role="tabpanel" aria-labelledby="pills-sem4-tab"> 
						<table class="table table-bordered table-striped">
							<thead>
							  <tr>
								<th style="width: 100px; text-align: center;">No</th>
								<th style="width: 100px; text-align: center;">Course Code</th>
								<th style="text-align: center;">Course Title</th>
								<th style="width: 100px; text-align: center;">Theory <br>Credits</th>
								<th style="width: 100px; text-align: center;">Practice Credits</th>
							  </tr>
							</thead>
							<tbody>
							  @php 
							  $no = 1; 
							  $total_sks_teori = 0; 
							  $total_sks_praktek = 0; 
							  $current_semester = '';
							  @endphp

							  @foreach ($kurikulum as $item)
								  @if ($item->semester == 4)
									  <tr>
										  <td style="text-align: center;">{{ $no++ }}</td>
										  <td style="text-align: center;">{{ $item->kodemk }}</td>
										  <td style="text-align: center;">{{ $item->mk }}</td>
										  <td style="text-align: center;">{{ $item->sksteori }}</td>
										  <td style="text-align: center;">{{ $item->skspraktek }}</td>
									  </tr>
									  @php 
									  $total_sks_teori += $item->sksteori; 
									  $total_sks_praktek += $item->skspraktek; 
									  @endphp
								  @endif
							  @endforeach

							  <tr>
								  <td colspan="1" style="text-align: right;"><strong>Total Credits :</strong></td>
								  <td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori + $total_sks_praktek }}</strong></td>
								  <td></td>
								  <td colspan="1" style="text-align: center;"><strong>{{ $total_sks_praktek }}</strong></td>
							  </tr>
							</tbody>
						</table>
					  </div>
					  <div class="tab-pane fade" id="pills-sem5" role="tabpanel" aria-labelledby="pills-sem5-tab">
						<table class="table table-bordered table-striped">
							<thead>
							  <tr>
								<th style="width: 100px; text-align: center;">No</th>
								<th style="width: 100px; text-align: center;">Course Code</th>
								<th style="text-align: center;">Course Title</th>
								<th style="width: 100px; text-align: center;">Theory <br>Credits</th>
								<th style="width: 100px; text-align: center;">Practice Credits</th>
							  </tr>
							</thead>
							<tbody>
							  @php 
							  $no = 1; 
							  $total_sks_teori = 0; 
							  $total_sks_praktek = 0; 
							  $current_semester = '';
							  @endphp

							  @foreach ($kurikulum as $item)
								  @if ($item->semester == 5)
									  <tr>
										  <td style="text-align: center;">{{ $no++ }}</td>
										  <td style="text-align: center;">{{ $item->kodemk }}</td>
										  <td style="text-align: center;">{{ $item->mk }}</td>
										  <td style="text-align: center;">{{ $item->sksteori }}</td>
										  <td style="text-align: center;">{{ $item->skspraktek }}</td>
									  </tr>
									  @php 
									  $total_sks_teori += $item->sksteori; 
									  $total_sks_praktek += $item->skspraktek; 
									  @endphp
								  @endif
							  @endforeach

							  <tr>
								  <td colspan="1" style="text-align: right;"><strong>Total Credits :</strong></td>
								  <td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori + $total_sks_praktek }}</strong></td>
								  <td></td>
								  <td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori }}</strong></td>
								  <td colspan="1" style="text-align: center;"><strong>{{ $total_sks_praktek }}</strong></td>
							  </tr>
							</tbody>
						</table>
					  </div>
					  <div class="tab-pane fade table-responsive" id="pills-sem6" role="tabpanel" aria-labelledby="pills-sem6-tab">
						<table class="table table-bordered table-striped">
							<thead>
							  <tr>
								<th style="width: 100px; text-align: center;">No</th>
								<th style="width: 100px; text-align: center;">Course Code</th>
								<th style="text-align: center;">Course Title</th>
								<th style="width: 100px; text-align: center;">Theory <br>Credits</th>
								<th style="width: 100px; text-align: center;">Practice Credits</th>
							  </tr>
							</thead>
							<tbody>
							  @php 
							  $no = 1; 
							  $total_sks_teori = 0; 
							  $total_sks_praktek = 0; 
							  $current_semester = '';
							  @endphp

							  @foreach ($kurikulum as $item)
								  @if ($item->semester == 6)
									  <tr>
										  <td style="text-align: center;">{{ $no++ }}</td>
										  <td style="text-align: center;">{{ $item->kodemk }}</td>
										  <td style="text-align: center;">{{ $item->mk }}</td>
										  <td style="text-align: center;">{{ $item->sksteori }}</td>
										  <td style="text-align: center;">{{ $item->skspraktek }}</td>
									  </tr>
									  @php 
									  $total_sks_teori += $item->sksteori; 
									  $total_sks_praktek += $item->skspraktek; 
									  @endphp
								  @endif
							  @endforeach

							  <tr>
								  <td colspan="1" style="text-align: right;"><strong>Total Credits :</strong></td>
								  <td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori + $total_sks_praktek }}</strong></td>
								  <td></td>
								  <td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori }}</strong></td>
								  <td colspan="1" style="text-align: center;"><strong>{{ $total_sks_praktek }}</strong></td>
							  </tr>
							</tbody>
						</table>
					  </div>
					  <div class="tab-pane fade" id="pills-sem7" role="tabpanel" aria-labelledby="pills-sem7-tab"> 
						<table class="table table-bordered table-striped">
							<thead>
							  <tr>
								<th style="width: 100px; text-align: center;">No</th>
								<th style="width: 100px; text-align: center;">Course Code</th>
								<th style="text-align: center;">Course Title</th>
								<th style="width: 100px; text-align: center;">Theory <br>Credits</th>
								<th style="width: 100px; text-align: center;">Practice Credits</th>
							  </tr>
							</thead>
							<tbody>
							  @php 
							  $no = 1; 
							  $total_sks_teori = 0; 
							  $total_sks_praktek = 0; 
							  $current_semester = '';
							  @endphp

							  @foreach ($kurikulum as $item)
								  @if ($item->semester == 7)
									  <tr>
										  <td style="text-align: center;">{{ $no++ }}</td>
										  <td style="text-align: center;">{{ $item->kodemk }}</td>
										  <td style="text-align: center;">{{ $item->mk }}</td>
										  <td style="text-align: center;">{{ $item->sksteori }}</td>
										  <td style="text-align: center;">{{ $item->skspraktek }}</td>
									  </tr>
									  @php 
									  $total_sks_teori += $item->sksteori; 
									  $total_sks_praktek += $item->skspraktek; 
									  @endphp
								  @endif
							  @endforeach

									  <tr>
										  <td colspan="1" style="text-align: right;"><strong>Total Credits :</strong></td>
										  <td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori + $total_sks_praktek }}</strong></td>
										  <td></td>
										  <td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori }}</strong></td>
										  <td colspan="1" style="text-align: center;"><strong>{{ $total_sks_praktek }}</strong></td>
									  </tr>
							</tbody>
						</table>
					  </div>
					  <div class="tab-pane fade" id="pills-sem8" role="tabpanel" aria-labelledby="pills-sem-tab"> 
						<table class="table table-bordered table-striped">
						  <thead>
							<tr>
							  <th style="width: 100px; text-align: center;">No</th>
							  <th style="width: 100px; text-align: center;">Course Code</th>
							  <th style="text-align: center;">Course Title</th>
							  <th style="width: 100px; text-align: center;">Theory <br>Credits</th>
							  <th style="width: 100px; text-align: center;">Practice Credits</th>
							</tr>
						  </thead>
						  <tbody>
							@php 
							$no = 1; 
							$total_sks_teori = 0; 
							$total_sks_praktek = 0; 
							$current_semester = '';
							@endphp

							@foreach ($kurikulum as $item)
								@if ($item->semester == 8)
									<tr>
										<td style="text-align: center;">{{ $no++ }}</td>
										<td style="text-align: center;">{{ $item->kodemk }}</td>
										<td style="text-align: center;">{{ $item->mk }}</td>
										<td style="text-align: center;">{{ $item->sksteori }}</td>
										<td style="text-align: center;">{{ $item->skspraktek }}</td>
									</tr>
									@php 
									$total_sks_teori += $item->sksteori; 
									$total_sks_praktek += $item->skspraktek; 
									@endphp
								@endif
							@endforeach

							<tr>
								<td colspan="1" style="text-align: right;"><strong>Total Credits :</strong></td>
								<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori + $total_sks_praktek }}</strong></td>
								<td></td>
								<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_teori }}</strong></td>
								<td colspan="1" style="text-align: center;"><strong>{{ $total_sks_praktek }}</strong></td>
							</tr>
						  </tbody>
						</table>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="card">
				<div class="card-header" id="headingTwo" style="background-color:#023047;">
				  <h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: white; text-decoration: none">
					  Course Title Elektif
					</button>
				  </h5>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				  <div class="card-body">
					<table class="table table-bordered table-striped">
					  <thead>
						<tr>
						  <th style="width: 100px; text-align: center;">No</th>
						  <th style="width: 100px; text-align: center;">Course Code</th>
						  <th style="text-align: center;">Course Title</th>
						  <th style="width: 100px; text-align: center;">Theory <br>Credits</th>
						  <th style="width: 100px; text-align: center;">Practice Credits</th>
						</tr>
					  </thead>
					  <tbody>
						  @php 
						  $no = 1; 
						  $current_kurikulum = '';
						  @endphp

						  @foreach ($mkelektif as $item)
							@if ($item->kurikulum == '2018')
							  <tr>
								<td style="text-align: center;">{{ $no++ }}</td>
								<td style="text-align: center;">{{ $item->kodemk }}</td>
								<td style="text-align: center;">{{ $item->mk }}</td>
								<td style="text-align: center;">{{ $item->sksteori }}</td>
								<td style="text-align: center;">{{ $item->skspraktek }}</td>
							  </tr>
							@endif
						  @endforeach
					  </tbody>
					</table>
				  </div>
				</div>
			  </div>
				<div class="card">
					<div class="card-header" id="headingThree" style="background-color:#023047;">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: white; text-decoration:none">
								Alur Kurikulum
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							<div class="row">
								@foreach ($alur as $item)
								@if ($item->kurikulum == '2018')
								<div class="position-relative">
									<img class="img-fluid" src="{{ asset('storage/Sarana/' . $item->image) }}" />
								</div>
								@endif
								@endforeach
							</div>
						</div>
					</div>
			  </div>
			</div>
		  </div>
	  	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		<script>
			$(document).ready(function () {
				// Handle click event for viewing PDF
				$('.view-pdf-link').on('click', function (e) {
					e.preventDefault();

					// Ambil URL PDF dari atribut data
					var pdfUrl = $(this).data('pdf-url');
					$('#pdfViewer').attr('src', pdfUrl);

					// Tampilkan modal menggunakan jQuery
					$('#pdfModal').modal('show');
				});

				// Tutup modal dan reset embed source agar PDF tidak terus ter-load
				$('#pdfModal').on('hidden.bs.modal', function () {
					$('#pdfViewer').attr('src', '');
				});
			});
		</script>
	@endsection
