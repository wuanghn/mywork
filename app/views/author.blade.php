@extends('layouts.admin.master')
@section('content')

<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					TÁC GIẢ
				</h1>
				<!--<ol class="breadcrumb">
				<li>
				<i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
				</li>
				<li class="active">
				<i class="fa fa-file"></i> Blank Page
				</li>
				</ol> -->

				<div class="div_searh">
					<form action="{{asset('sys_search_author')}}" class="form_search">
						<div class="form-group">
							<input class="form-control searh" type="text" id="in_searh_au" name="key">
							<button class="btn btn-primary btn_searh" id="seard_au">Tìm kiếm</button>
						</div>
					</form>
				</div>
				<a class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal" id="create_au">
					<i class="fa fa-plus"></i>  Thêm tác giả
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover">
					<tr>
						<th style="width: 5%;">STT</th>
						<th>Tên tác giả</th>
						<th style="width: 10%;">Action</th>
					</tr>
					<?php
						$i = 1;
					?>
					@foreach($au as $key =>$val)
					<tr>
						<td>{{$i++}}</td>
						<td class="td_name">{{$val->name}}</td>
						<td class="td_id hidden">{{$val->id}}</td>
						<td class="td_discription hidden">{{$val->discription}}</td>
						<td class="td_avatar hidden">{{$val->avatar}}</td>
						<td class="td_sectors hidden">{{$val->sectors}}</td>
						<td class="td_position hidden">{{$val->position}}</td>
						<td class="td_location hidden">{{$val->location}}</td>
						<td><a href="#" data-toggle="modal" data-target="#myModal_update" class="a_update">Sửa</a> |
							<a style="color: red;" href="{{asset('sys_delete_author?id=').$val->id}}" onclick="return confirm('Bạn thực sự muốn xóa?')" >Xóa</a>
						</td>
					</tr>
					@endforeach
				</table>
				<div class="pagination pull-right">
					{{$au->links()}}
				</div>
			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Tạo mới tác giả</h4>
			</div>
			<form action="{{asset('sys_store_author')}}" method="POST" enctype="multipart/form-data">
				<div class="modal-body" style="padding: 0 30px 0 30px;">
					<div>
						<div class="form-group" style="margin: 10px 0 0 0;">
							<label>Tên tác giả</label>
							<input name="name" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Chức vụ</label>
							<input name="position" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Lĩnh vực</label>
							<input name="sectors" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Nơi ở</label>
							<select name="location" class="form-control">
								@foreach($city as $ci =>$val_ci)
								<option value="{{$val_ci->region_id}}">{{$val_ci->region_name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Mô tả</label>
							<textarea name="discription" rows="4" type="text" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Avatar</label>
						</div>
						<div class="form-group">
							<div class="div_avatar">
								<img class="img_avatar" />
							</div>
							<input name="avatar" type="file" value="Chọn hình" class="in_avatar">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Lưu tác giả</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal_update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Sửa tác giả</h4>
			</div>
			<form action="{{asset('sys_update_author')}}" method="POST" enctype="multipart/form-data">
				<div class="modal-body" style="padding: 0 30px 0 30px;">
					<div>
						<div class="form-group" style="margin: 10px 0 0 0;">
							<label>Tên tác giả</label>
							<input name="name" type="text" class="form-control" id="name_up">
							<input name="id" type="hidden" id="id_up">
						</div>
						<div class="form-group">
							<label>Chức vụ</label>
							<input name="position" type="text" class="form-control" id="position_up">
						</div>
						<div class="form-group">
							<label>Lĩnh vực</label>
							<input name="sectors" type="text" class="form-control" id="sectors_up">
						</div>
						<div class="form-group">
							<label>Nơi ở</label>
							<select name="location" class="form-control" id="location_up">
								@foreach($city as $ci =>$val_ci)
								<option value="{{$val_ci->region_id}}">{{$val_ci->region_name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Mô tả</label>
							<textarea name="discription" rows="4" type="text" class="form-control" id="discription_up"></textarea>
						</div>
						<div class="form-group">
							<label>Avatar</label>
						</div>
						<div class="form-group">
							<div class="div_avatar">
								<img class="img_avatar" id="img_avatar_up"/>
							</div>
							<input name="avatar" type="file" value="Chọn hình" class="in_avatar">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Cập nhật tác giả</button>
				</div>
			</form>
		</div>
	</div>
		</div>
		<!-- /#wrapper -->

		<!-- jQuery -->

@stop


