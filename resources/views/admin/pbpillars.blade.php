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
        <h1 style="color:white; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; background-color:green; padding:15px; margin-bottom:52px">ADD NEW RECORD</h1>

        <h1 style="text-align:center; text-decoration:underline; font-size:30px; color:green">PB Pillars</h1>
        <br>







        @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
        @endif


        <div style="border:3px solid red; padding:10px; border-radius:10px 150px 10px 150px">
        <h1>Upload an excel sheet</h1> <br>


        <form action="{{route('import2')}}" method="post" enctype="multipart/form-data">

          @csrf

          <input type="file" name="file" accept=".csv" id=""> <br> <br>
          <button class="btn btn-success">Import Data</button>
          <a href="{{route('export2')}}" class="btn btn-info">Export Data</a> <br><br>

        </form>
  </div> <br><br><br>


      <form style="" class="form" action="{{url('addpbpillars')}}" method="post" enctype="multipart/form-data">
          @csrf

        <div class="form-group">
          <label for="plan">PLAN NUMBER</label>
          <input style="color:tomato;" class="form-control" type="text" placeholder="Enter Plan Number" name="plan" required>
        </div>

       <div class="form-group">
        <label for="name">NAME</label>
          <input style="color:tomato" class="form-control" type="text" name="name" placeholder="Enter Namer" required>
        </div>

       <div class="form-group">
        <label for="location">LOCATION</label>
          <input style="color:tomato" class="form-control" type="text" name="location" placeholder="Enter Location" required>
        </div>

        <div class="form-group">
        <label for="size">SIZE/AREA</label>
          <input style="color:tomato" class="form-control" type="text" name="size" placeholder="Enter Size/Area" required>
        </div>

        <div class="form-group">
        <label for="pillar">PILLAR NUMBER</label>
          <input style="color:tomato" class="form-control" type="text" name="pillar" placeholder="Enter Pillar Number" required>
        </div>

        <div class="form-group">
        <label for="eastings">EASTINGS</label>
          <input style="color:tomato" class="form-control" type="text" name="eastings" placeholder="Enter Eastings" required>
        </div>


        <div class="form-group">
        <label for="northings">NORTHINGS</label>
          <input style="color:tomato" class="form-control" type="text" name="northings" placeholder="Enter Northings" required>
        </div>

        <div class="form-group">
        <label for="origin">ORIGIN</label>
          <input style="color:tomato" class="form-control" type="text" name="origin" placeholder="Enter Origin" required>
        </div>


        <div class="form-group">
        <label for="origin">HEIGHT</label>
          <input style="color:tomato" class="form-control" type="text" name="height" placeholder="Enter Height" required>
        </div>


        <div class="form-group">
        <label for="remarks">REMARKS</label>
          <input remarks="color:green" class="form-control" type="text" name="remarks" placeholder="Remarks" required>
        </div>


       <div class="form-group">
          <input style="background-color:green" type="submit" class="btn btn-success" value="Submit">
        </div>


        </form>













      </div>
   
</div>







    <!-- JavaScript files-->
@include('admin.script')
  </body>
</html>