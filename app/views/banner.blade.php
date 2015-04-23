@extends('layouts.admin.master')
@section('content')
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Quản lý Banner
				</h1>
			</div>
			<div class="col-lg-12">
				<div role="tabpanel">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Link</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Upload</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home">
							<div class="row" style="margin-top: 20px;">
								<div class="col-lf-12 div_list_img">
									<?php
										$dir = "public/uploads/banner/";
										if($open = opendir($dir)){
											//read
											while(($file = readdir($open)) != FALSE){
												if($file != "." && $file !='..'){
													echo '<div class="da_image">
													<span class="sys_delete_banner"><a href="delete_img?file='.$file.'">Xóa</a></span>
													<a>
													<img src="'.asset($dir.$file).'">
													</a>
													</div>
													';

												}
											}
										}

									?>

								</div>
							</div>
							<div class="row">
								<form action="{{asset('store_banner')}}" method="POST">
									@foreach($ban as $key =>$val)
									<div class="col-lg-6">
										<div class="form-group div_in_banner">
											<label>URL hình</label>
											<input type="text" class="form-control" id="input_url" name="link" value="{{$val->link}}">
										</div>

										<input type="submit" value="Lưu banner" class="btn btn-danger">
									</div>
									<div class="col-lg-6">
										<div class="form-group div_in_banner">
											<label>URL link</label>
											<input type="text" class="form-control" id="input_link" name="url" value="{{$val->url}}">
										</div>
									</div>
									@endforeach
								</form>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile">
							<form action="{{asset('upload_banner')}}" method="POST" enctype="multipart/form-data">
								<div class="col-lg-6">
									<div class="form-group div_in_banner">
										<input type="file" class="form-control" id="input_url" name="file">
									</div>
									<input type="submit" value="Upload" class="btn btn-danger">
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>

			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->

	</div>
		</div>
@stop







