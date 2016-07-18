@extends("la.layouts.app")

@section("contentheader_title", "Edit college: ")
@section("contentheader_description", $college->$view_col)
@section("section", "Colleges")
@section("section_url", url(config('laraadmin.adminRoute') . '/colleges'))
@section("sub_section", "Edit")

@section("htmlheader_title", "College Edit : ".$college->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($college, ['route' => [config('laraadmin.adminRoute') . '.colleges.update', $college->id ], 'method'=>'PUT', 'id' => 'college-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'email')
					@la_input($module, 'phone')
					@la_input($module, 'website')
					@la_input($module, 'address')
					@la_input($module, 'city')
					@la_input($module, 'description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/colleges') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
				
				@if($errors->any())
				<ul class="alert alert-danger">
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
				@endif
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#college-edit-form").validate({
		
	});
});
</script>
@endpush