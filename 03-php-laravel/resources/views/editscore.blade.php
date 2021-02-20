<!doctype html>
<html lang="en">
<head>
    <title>Edit Scores</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background-color:gray">

<div class="col-md-4" style="background-color:white;  position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); border-radius:5%">                          
  <h5 style="margin-top: 10px; text-align:center">Edit Score</h5>
  @foreach($sco as $sco)
  <form action="/scores/update" method="post" style="margin: auto">
  {{ csrf_field() }}
  <input type="hidden" name="id" value="{{ $sco->id }}"> <br/>
    <div class="form-group">
    <label for="event">Event</label>
    <input name="event" required="required" class="form-control" type="text"  value="{{$sco->event}}" required>
    </div>  
    <div class="form-group">
    <label for="team_id">Team Id</label>
    <input name="team_id" required="required" class="form-control" type="text"  value="{{$sco->team_id}}" required>
    </div>
    <div class="form-group">
    <label for="grade">Grade</label>
    <input name="grade" required="required" class="form-control" type="text" value="{{$sco->grade}}" required>
    </div>   
    <div class="modal-footer">
    <a href="/score/cancel" class="btn btn-danger" style="float: right">Cancel</a>
    <button type="submit" name="add" class="btn btn-primary">Save Changes</button>
    </div>
  </form>
  @endforeach
</div>
</body> 
</html>