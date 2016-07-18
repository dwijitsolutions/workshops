@extends("la.layouts.app")

@section("contentheader_title", "Edit course: ")
@section("contentheader_description", $course->$view_col)
@section("section", "Courses")
@section("section_url", url(config('laraadmin.adminRoute') . '/courses'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Course Edit : ".$course->$view_col)

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
				{!! Form::model($course, ['route' => [config('laraadmin.adminRoute') . '.courses.update', $course->id ], 'method'=>'PUT', 'id' => 'course-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'hours')
					@la_input($module, 'technologies')
					@la_input($module, 'author')
					@la_input($module, 'description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/courses') }}">Cancel</a></button>
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
	$("#course-edit-form").validate({
		
	});
});
</script>
@endpush