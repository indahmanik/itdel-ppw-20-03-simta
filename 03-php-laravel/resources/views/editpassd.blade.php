<!doctype html>
<html lang="en">
<head>
    <title>Edit Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background-color:gray">

<div class="col-md-4" style="background-color:white;  position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); border-radius:5%">                          
  <h5 style="margin-top: 10px; text-align:center">Change Password</h5>
  <form action="/settingsd/password/update" method="post" style="margin: auto">
  {{ csrf_field() }}
    <div class="form-group">
    <label for="password">Current Password</label>
    <input name="current" class="form-control" type="password">
    </div>  
    <div class="form-group">
    <label for="password">New Password</label>
    <input name="new" class="form-control" type="password">
    </div>
    <div class="form-group">
    <label for="password">Confirm Password</label>
    <input name="confirm" class="form-control" type="password">
    </div>  
    @if (session('message'))
    <div class="alert alert-danger" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif 
    <div class="modal-footer">
    <a href="/settingsd/password/cancel" class="btn btn-danger" style="float: right">Cancel</a>
    <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
  </form>
</div>
</body> 
</html>
