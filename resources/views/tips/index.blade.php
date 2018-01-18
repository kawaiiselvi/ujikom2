@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Home</a></li>
				<li class="active">Tips GetJobs</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Tips GetJobs</h2>
				</div>
				<div class="panel-body">
					<p>
						<a class="btn btn-primary" href="{{ url('/admin/tips/create') }}">Tambah</a>

			<table class="table">
				<thead>
					<tr>
						<th>Judul</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
			</table>
				<div class="panel-body">
						
					</p>
					<td>Tips</td>
					@foreach($tip as $data)
					<tr> 
						<td>{{$data->Tips}}</td>
					</tr>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

