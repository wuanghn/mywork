@extends('layouts.admin.master')
@section('content')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="panel panel-default panel_create">
			<div class="panel-heading">
				<h3 class="panel-title">Danh sách câu hỏi</h3>
			</div>
			<div class="panel-body">
				<form action="{{asset('sys_store_article')}}" method="POST" enctype="multipart/form-data">
					<div class="row">
					<div class="col-md-12">
						<table class="table-hover table">
							<tr>
								<td style="width: 1%">STT</td>
								<td style="width:15%">Loại</td>
								<td style="width:15%">User</td>
								<td>Câu hỏi</td>
								<td style="width:10%">Action</td>
							</tr>
							<?php
								$i = 0;
							?>
							@foreach($question as $key => $val)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$val->type}}</td>
								<td>{{$val->id_user}}</td>
								<td>{{$val->question}}</td>
								<td><a>Xóa</a></td>
							</tr>
							@endforeach
						</table>
					</div>
					<input id="btn_submit_ac" type="submit" value="Lưu bài viết" class="btn btn-danger center-block">
				</form>
			</div>
		</div>
	</div>


	<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->
		</div>

@stop


