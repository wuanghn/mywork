@extends('layouts.admin.master')
@section('content')
		<div class="container-fluid">
				<div class="panel panel-default panel_create">
					<div class="panel-heading">
						<h3 class="panel-title">List Member Apply <button type="button" class="btn btn-xs btn-primary">Export</button></h3>
					</div>
					<div class="panel-body">
						<form action="http://vnw.slifemedia.com/sys_store_article" method="POST" enctype="multipart/form-data">
							<div class="row">
							<div class="col-md-12">
								<table class="table-hover table">
									<tbody><tr>
										<td></td>
										<td>Job Title</td>
										<td>Full Name</td>
										<td>Email</td>
									</tr>
									@foreach($applies as $apply)
										<tr>
											<td></td>
											<td>{{ $apply->job_title }}</td>
											<td>{{ $apply->first_name }} {{ $apply->last_name }}</td>
											<td>{{ $apply->email }}</td>
											
										</tr>
									@endforeach
									</tbody></table>
								<hr>
								<dir class="pull-right">
								
								</dir>
							</div>
						
					</div></form>
				</div>
			</div>


			<!-- /.container-fluid -->
			</div>	
@stop