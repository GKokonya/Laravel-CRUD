@extends('layouts.app')

@section('content')


<!--
<div>


->all divs are divided into 12 columns
-> col-*-6 sans 6 of 12 columns(half the width)
->col-*-12 spansn12 of 12 columns(the entire width)

--EXAMPLE for two equal columns to span a div--
<div class="col-xs-6">column 1</div>
<div class="col-xs-6"">column 2</div>


--EXAMPLE for three unequal columns to span a div--
<div class="col-xs-2"">column 1</div>
<div class="col-xs-6">column 2</div>
<div class="col-xs-4">column 4</div>

-->
<!doctype html>
<html lang="en"> 
  <head>
     <meta charset="UTF-8">

     <!--
        width=device-width->part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).

      initial->scale=1 part sets the initial zoom level when the page is first loaded by the browser.
-->
       <meta name="viewport"contennt="witdh=device-width,user-scalable=no,initial-scale-1.0, maximum-scale=1.0,minimum-scale=1.0">
      
      <!--allows you to use bootsrap framework-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<!--

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

-->

     <meta http-equi="X-UA-Compatible" content="te=edge">
       <title>Cars</title>
  </head>
<body>
<!--1-->
<div class='container-fluid'>


<!--2-->
  <div class='jumbotron jumbotron-fluid bg-danger p-1 '>
    


    <!--3-->
    <div class='container'>

      <!--4-->
      <div class='row'>
        
        <!--5-->
        <div class='col-md-6'>
          <hi class="display-1 text-white">Cars</h1>
          <p class="lead text-white">A web Application that Stores cars details..</p>
        </div>
        <!--5-->

        <!--6-->
        <div class="col-md-6">
      <!--  <img src="img/car.png">-->
        </div>
        <!--6-->


       </div>
       <!--4-->

     </div>
     <!--3-->

   </div>
   <!--2-->


<!--7-->
<div clas="row">
<!--8-->

<!--Start form modal -->

      <form action="/update/{{$cars[0]->id}}" method="POST" >
      {{csrf_field()}}
      <div>
     
      <div class="form-group">
    <label for="make">Make</label>
    <input type="text" class="form-control" id="make" name="make"  placeholder="Enter make"   value="{{$cars[0]->make}}">
  </div>
  <div class="form-group">
    <label for="model">Model</label>
    <input type="text" class="form-control" id="model" name="model" placeholder="Enter  model"  value="{{$cars[0]->model}}">
  </div>
  <div class="form-group">
    <label for="produced_on">Produced on</label>
    <input type="date" class="form-control" id="produced_on" name="produced_on" placeholder="Enter produced_on"  value="{{$cars[0]->produced_on}}">
  </div>
       <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <button type="submit" name="submit" class="btn btn-primary">Update Data</button>
      </div>


      </div>
      
      </form>


<!-- End Form -->




       </div>
    </div>
</div>

<!--8-->

  <!--7-->


 </div>
 <!--8-->

</div>
<!--1-->



<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>




</body>
</html> 
@endsection
