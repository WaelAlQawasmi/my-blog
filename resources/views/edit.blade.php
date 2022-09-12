
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Bootstrap Login Form in modal - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">edditing</h1>
      </div>

      <div class="modal-body">
          <form class="form col-md-12 center-block" method="POST" action="{{url('myProjects/'.$project->id)}}" >
            @csrf
            @method('PUT')
            <div class="form-group">
              <input type="text"  name="name" value="{{$project->name}}" class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
                <textarea  name="description" class="form-control" id="message-text">{{$project->description}}</textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block"> Edit</button>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-1accordion2">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    	  </div>	
      </div>
  </div>
  </div>
</div>

<style type="text/css">
                
body{margin-top:20px;}              
.modal-footer {   border-top: 0px; }
</style>

<script type="text/javascript">

</script>
</body>
</html>