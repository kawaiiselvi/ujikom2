@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Daftar Pelamar</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Pelamar</h2>
				</div>
				<div class="panel-body">
					
					<div class="table-responsive">
						<table class="table">
							<tr>
								<td>Nama Pelamar</td>
							</tr>
							@foreach($karyawan as $data)
							<tr>
								<td><a href="{{route('karyawans.show', $data->id)}}">{{$data->nama}}</a></td>
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection