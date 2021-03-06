<!DOCTYPE html>
<html lang="en">
<head>
  <title>Notifications - Lan Kyone(Coming soon)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<nav class="navbar navbar-expand  navbar-dark sticky-top" style="background-color:#FFF";>
    <ul class="nav w-100 nav-justified border-bottom">
    <li class="nav-item">
      <a class="nav-link" href={{URL::to('driverschedule')}}><i class="material-icons text-muted" style="font-size:30px;">event_note</i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href={{URL::to('notifications')}}><i class="material-icons text-info" style="font-size:30px; ">notifications</i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href={{URL::to('profile')}}><i class="material-icons text-muted" style="font-size:30px;">people</i></a>
    </li>
  </ul>
</nav>


<body>
<div class="container-fluid">

@if($data)
@foreach($data as $data)  
<!--Noti --> 
  
  <div class="modal fade" id="noti1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <h6 class="text-center">Desired Location</h6>
           <table class="table">
    <tbody style="font-size:14px;">
      <tr class="table-success">
        <th>To</th>
        <td>{{$data->endpoint}}</td>
      </tr>
      <tr class="table-success">
        <th>From</th>
        <td>{{$data->startpoint}}</td>
      </tr>
      <tr class="table-success">
        <th>By</th>
        <td>{{$data->phone}}</td>
      </tr>
      <tr class="table-success">
        <th>Expected Fee</th>
        <td>{{$data->expected}}</td>
      </tr>
      
    </tbody>
  </table>
  @if($data->status=='Finished')
   <h6 class="text-center">Passenger #2</h6>
           <table class="table">
    <tbody style="font-size:14px;">
      <tr class="table-info">
        <th>To</th>
        <td>San Yeit Nyein</td>
      </tr>
      <tr class="table-info">
        <th>From</th>
        <td>Oat Kyinn</td>
      </tr>
      
    </tbody>
  </table>
  @endif
  <div class="form-group">        
        <div class="col-sm-12">
        <a href="tel:09964251712">
          <button type="button" class="btn btn-success btn-block" name="confirm"><i class="material-icons" style="font-size:22px">check</i></button>
         </a>
        </div>
        
      </div>    
        </div>        
      </div>
    </div>
  </div>

<!--                  --                  --               -->


  <a href="view_request.html" class="card bg-light text-dark" style="text-decoration:none; margin-bottom:5px;"  data-toggle="modal" data-target="#noti1" >
    <div class="card-body">
       <small>To</small> <span class="text-success">{{$data->endpoint}}</span>
       @if($data->status=='Finished')
        <small><span class="text-success float-right">{{$data->status}}</span></small><br />
       @else
        <small><span class="text-danger float-right">{{$data->status}}</span></small><br />
       @endif
        
        <small>From</small> <span class="text-info">{{$data->startpoint}}</span> 
        
        <small><span class="float-right">at {{$data->time}}</span></small>
    </div>
  </a>
     
  
  <!--                  --                  --               -->
  
@endforeach
@endif
  
</div>
</body>
</html>
