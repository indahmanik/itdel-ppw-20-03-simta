
@extends('layout/mahasiswa')

@section('title', 'Event Detail')

@section('container-md-8')
<div class="col-md-7" style="margin:auto; margin-top: 10px;">

    @foreach($event as $event)
	<form action="/profiled/updateweb" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $event->id_event }}"> <br/>
		<!-- Event <input type="text" required="required" name="event" value="{{ $event->event }}"> <br/>
		Date <input type="date" required="required" name="date" value="{{ $event->date }}"> <br/>
		Description <textarea required="required" name="description">{{ $event->description }}</textarea> <br/>
		<input type="submit" value="Update"> -->

		<div class="modal-body">
			<div class="form-group">
				<div class="row">
					<div class="col-md-3">
						<label class="ml-4 mr-4">Event</label>
					</div>
					<div class="col-md-8">
						<input type="text" required="required" name="event" class="form-control" value="{{ $event->event }}">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-3">
						<label class="ml-4 mr-4">Team ID</label>
					</div>
					<div class="col-md-8">
						<input type="text" required="required" name="team_id" class="form-control" value="{{ $event->team_id }}">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-3">
						<label class="ml-4 mr-4">Date</label>
					</div>
					<div class="col-md-8">
						<input type="date" required="required" name="date" class="form-control" value="{{ $event->date }}">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-3">
						<label class="ml-4 mr-4">Description</label>
					</div>
					<div class="col-md-8">
						<input type="text-area" required="required" name="description" class="form-control" value="{{ $event->description }}">
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a type="button" href="/profiled" class="btn btn-danger" data-dismiss="modal">Cancel</a>
			<button type="submit" name="add" class="btn btn-primary">Update</button>
		</div>
	</form>
    @endforeach

</div>
@endsection