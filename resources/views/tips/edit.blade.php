@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Home</a></li>
				<li><a href="{{ url('/admin/tips') }}">Tips GetJobs</a></li>
				<li class="active">Ubah</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Ubah</h2>
				</div>
				<div class="panel-body">
					{!! Form::model($tip, ['url'=>route('tips.update', $tip->id), 'method'=>'put', 'class'=>'form-horizontal']) !!}
					@include('tips._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection