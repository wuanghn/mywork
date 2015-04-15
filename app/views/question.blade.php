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
								<td style="width:15%">Tên người gửi</td>
								<td style="width:15%">Loại câu hỏi</td>
								<td>Câu hỏi</td>
								<td style="width:5%">Action</td>
							</tr>
							<?php
								$i = 1;
							?>
							@foreach($question as $key => $val)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$val->user}}</td>
								<td>{{$val->type}}</td>
								<td>{{$val->question}}</td>
								<td><a style="color: red;" href="{{asset('sys_delete_question?id=').$val->id}}">Xóa</a></td>
							</tr>
							@endforeach
						</table>
						<hr>
						<dir class="pull-right">
						{{$question->links()}}
						</dir>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->
		</div>

@stop


