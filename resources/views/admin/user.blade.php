<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>orion esolution</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="app/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="app/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="app/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="app/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="app/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="app/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="app/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="app/assets/images/favicon.png" />
    <style>
    .center{
      margin:auto;
      width:50%;
      border:2px solid white;
      text-align:center;
      margin-top:40px;
    }
    .font{
      text-align:center;
      font-size:40px;
      padding-top:20px;
    }
    .image_size{
      width:150px;
      height:150px;
    }
    .th_color{
      background:skyblue;
      
    }
    .th_design{
      padding:15px;
    }
    </style>
  </head>
  <body>
  
   
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif
            <h2 class="font">All User</h2>
            <table class="center">
              <tr class="th_color">
             
                <th class="th_design"> Id</th>
                <th class="th_design">Name</th>
               
                <th class="th_design">Email</th>
              
                <th class="th_design">Action</th>

                
                
              </tr>
              @foreach($user as $user)
              <tr>
             
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                
              
                 <td>
                  <a class="btn btn-success" href=" {{route('userview',$user->id)}}">View</a>
                
                 </td>
              </tr>
              @endforeach

          
            </table>

          </div>
        </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="app/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="app/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="app/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="app/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="app/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="app/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="app/assets/js/off-canvas.js"></script>
    <script src="app/assets/js/hoverable-collapse.js"></script>
    <script src="app/assets/js/misc.js"></script>
    <script src="app/assets/js/settings.js"></script>
    <script src="app/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="app/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    
  </body>
