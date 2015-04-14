@extends('layouts.admin.master')
@section('content')
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="panel panel-default panel_create">
				<div class="panel-heading">
					<h3 class="panel-title">THÊM BÀI VIẾT</h3>
				</div>
				<div class="panel-body">
					<form action="{{asset('sys_store_article')}}" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12 div_article">
								<div class="form-group">
									<label>Tiêu đề</label>
									<input name="title" type="text" class="form-control title">
								</div>
								<div class="form-group">
									<label>Tác giả</label>
									<input placeholder="Nhập tên tác giả" name="author" type="text" class="form-control author autocomplete_name" id="autocomplete_name">
									<input name="id_author" type="hidden" id="id_author">
								</div>
								<div class="form-group">
									<label>Mô tả (250 ký tự)</label>
									<textarea name="article_description" type="text" class="form-control article_description"></textarea>
								</div>
								<div class="form-group">
									<label>Avatar (tỉ lệ 16:9 - ex: 370x208 px)</label>
									<div>
										<img src="" id="img_avatar_ar"  class="img_avatar_ar">
									</div>
									<input  name="avatar" type="file" class="form-control avatar_ar" id="in_avatar_ar">
								</div>
								<div class="form-group">
									<h4 class="samples">Nội dung</h4>
									<textarea rows="50" name="editor1" id="editor1">
									</textarea>
									<script>
										CKEDITOR.replace( 'editor1' );
									</script>
								</div>
							</div>
							<div class="col-md-12 div_article">
								<label style="margin-bottom: 20px;">Bài liên quan</label><br>
								<div class="form-group">
									<input placeholder="Nhập tiêu đề" type="text" class="form-control in_searh_acticle">  <br>
									<input type="hidden" name="id_acticles" id="id_acticles">
									<span class="note">Tối đa 3 bài.</span>
								</div>
								<div class="div_alert_relate">
								</div>
							</div>
						</div>
						<input id="btn_submit_ac" type="submit" value="Lưu bài viết" class="btn btn-danger center-block">
					</form>
				</div>
			</div>
			<div class="panel panel-default panel_update">
				<div class="panel-heading">
					<h3 class="panel-title">SỬA BÀI VIẾT</h3>
				</div>
				<div class="panel-body">
					<form action="{{asset('sys_update_article')}}" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12 div_article">
								<div class="form-group">
									<label>Tiêu đề</label>
									<input name="title" type="text" class="form-control title" id="title_up">
									<input name="id_article" type="hidden" id="id_article_up">
								</div>
								<div class="form-group">
									<label>Tác giả</label>
									<input placeholder="Nhập tên tác giả" name="author" type="text" class="form-control author autocomplete_name_up" id="autocomplete_name_up">
									<input name="id_author" type="hidden" id="id_author_up">
								</div>
								<div class="form-group">
									<label>Mô tả (250 ký tự)</label>
									<textarea name="article_description" type="text" class="form-control " id="article_description_up"></textarea>
								</div>
								<div class="form-group">
									<label>Avatar (tỉ lệ 16:9)</label>
									<div>
										<img src="" id="img_avatar_ar_up"  class="img_avatar_ar">
									</div>
									<input  name="avatar" type="file" class="form-control avatar_ar" id="in_avatar_ar">
								</div>
								<div class="form-group">
									<h4 class="samples">Nội dung</h4>
									<textarea rows="50" name="editor2" id="editor2">
									</textarea>
									<script>
										CKEDITOR.replace( 'editor2' );
									</script>
								</div>
							</div>
							<div class="col-md-12 div_article">
								<label style="margin-bottom: 20px;">Bài liên quan</label><br>
								<div class="form-group">
									<input placeholder="Nhập tiêu đề" type="text" class="form-control in_searh_acticle_up">  <br>
									<input type="hidden" name="id_acticles" id="id_acticles_up">
									<span class="note">Tối đa 3 bài.</span>
								</div>
								<div class="div_alert_relate_up">
								</div>
							</div>
						</div>
						<div style="padding-left: 40%;">
							<input id="btn_cancel" type="button" value="Hủy" class="btn btn-default" style="margin-right: 20px;">
							<input id="btn_submit_ac_up" type="submit" value="Cập nhật bài viết" class="btn btn-danger">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="container-fluid div_contaner2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">DANH SÁCH BÀI VIẾT</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<table class="table table-hover table-striped">
								<tr>
									<th style="width: 2%;">STT
									</th>
									<th>Tiêu đề
									</th>
									<th>Tác giả
									</th>
									<th style="width: 10%;">Hoạt động
									</th>
								</tr>
								<?php
									$i = 1;
								?>
								@foreach($article as $key =>$val)
								<tr>
									<td>{{$i++}}</td>
									<td class="td_title">{{$val->title}}</td>
									<td class="td_name_author">{{$val->name}}</td>
									<td class="hidden td_content">{{$val->content}}</td>
									<td class="hidden td_id_author">{{$val->id_author}}</td>
									<td class="hidden td_id_article">{{$val->id_article}}</td>
									<td class="hidden td_related">{{$val->related}}</td>
									<td class="hidden td_avatar_article">{{$val->avatar_article}}</td>
									<td class="hidden td_article_description">{{$val->article_description}}</td>
									<td class="hidden td_name_title_relate">
										@foreach($title as $key2 =>$val2)

										@if($key2 == $val->id_article)
										{{json_encode($val2)}}
										@else
										{{""}}

										@endif
										@endforeach
									</td>
									<td>
										<a href="#" data-toggle="modal" data-target="#myModal_update" class="ar_update">Sửa</a> |
										<a style="color: red;" href="{{asset('sys_delete_article?id='.$val->id_article)}}" onclick="return confirm('Bạn thực sự muốn xóa?')" >Xóa</a>
									</td>
								</tr>
								@endforeach
							</table>
							<div class="pagination pull-right">
								{{$article->links()}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->
		</div>

@stop


