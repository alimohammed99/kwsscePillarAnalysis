<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KWSG </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
  @include('admin.css')
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        @include('admin.navbar')
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
     
      <!-- Sidebar Navigation end-->

      @include('admin.skin')
  
     
      <div class="container">
        
      <div class="container" align="center" style="text-align:center; margin-top:35px">
 

        <h1 style="text-align:center; text-decoration:underline; font-size:30px; color:green">PB Pillars</h1>
        <br>

        @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
        @endif

        <div class="table-responsive">



<table id="example" class="table table-bordered" style="width:; background-color:green margin-top:30px">
        <thead>
            <tr style="color:tomato">
                <th style="color:tomato">PLAN NUMBER</th>
                <th style="color:tomato">NAME</th>
                <th style="color:tomato">LOCATION</th>
                <th style="color:tomato">SIZE/AREA</th>
                <th style="color:tomato">PILLAR NUMBER</th>
                <th style="color:tomato">EASTINGS</th>
                <th style="color:tomato">NORTHINGS</th>
                <th style="color:tomato">HEIGHT</th>
                <th style="color:tomato">ORIGIN</th>
                <th style="color:tomato">REMARKS</th>
                <th style="color:tomato">ACTION</th>
            </tr>
        </thead>
        <tbody>



@foreach($data as $data)


            <tr>
                <td style="color:white">{{$data->plan_number}}</td>
                <td style="color:white">{{$data->name}}</td>
                <td style="color:white">{{$data->location}}</td>
                <td style="color:white">{{$data->size}}</td>
                <td style="color:white">{{$data->pillar_number}}</td>
                <td style="color:white">{{$data->eastings}}</td>
                <td style="color:white">{{$data->northings}}</td>
                <td style="color:white">{{$data->height}}</td>
                <td style="color:white">{{$data->origin}}</td>
                <td style="color:white">{{$data->remarks}}</td>
                <td style="color:white"><a class="btn btn-danger" href="{{url('deletepbpillar', $data->id)}}">Delete</a></td>
                
            </tr>

@endforeach
    
        </tbody>
    </table>
    </div>




     


      
   
</div>







    <!-- JavaScript files-->
@include('admin.script')
  </body>
</html>