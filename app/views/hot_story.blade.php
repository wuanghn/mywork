@extends('layouts.admin.master')
@section('content')

<script type="text/javascript">

	$(document).ready(function(){
		$('.da_arti_new').click(function(){
			id = $(this).children().find('input').val();
			title = $(this).find('td.td_title').text();

			$('#title_article').val(title);
			$('#id_article').val(id);



		})
	})
</script>
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="border: none;">
					Bài viết nổi bật trong tuần
				</h1>
			</div>
			<div class="col-lg-12">
				<table class="table ">
					<tr>
						<td style="width: 65%";>
						<form action="{{asset('sys_store_hot')}}" method="post">
							<div class="form-group">
								<label>Bài viết được chọn</label>
								@foreach($now as $key3 => $val3)
								<input class="form-control" type="text" style="width: 80%;" id="title_article" value="{{$val3->title}}">
								<input class="form-control" type="hidden" value="{{$val3->id}}" id="id_article" name="id_article">
								@endforeach
							</div>
							<input type="submit" value="Lưu" class="btn btn-primary">
						</form>
						</td>
						<td>
							<form action="{{asset('sys_search_hot')}}" method="get">
								<label>Tìm bài viết</label>
								<div class="form-group">

									<input class="form-control" type="text" style="width: 70%;float: left;" name="key">
									<input type="submit" value="Tìm" class="btn btn-primary" style="margin-left: 20px;">
								</div>

							</form>
						</td>
					</tr>
				</table>
				<h3>Bài viết mới nhất</h3>
				<table class="table table-hover">
					<tr>
						<td style="width: 2%;">STT</td>
						<td>Tên bài viết</td>
						<td>Tác giả</td>
					</tr>
					<?php
						$i=1;
					?>
					@foreach($article as $key2 => $val2)
					<tr class="da_arti_new">
						<td class="hidden"><input type="hidden" class="check_arti" value="{{$val2->id}}"></td>
						<td>{{$i++}}</td>

						<td class="td_title">{{$val2->title}}</td>
						<td>{{$val2->name}}</td>
					</tr>
					@endforeach

				</table>

				<div class="pull-right">
					{{$article->links()}}
				</div>

			</div>

			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->

	</div>
		</div>
@stop







