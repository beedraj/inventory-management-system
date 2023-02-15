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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Layout styles -->
    <link rel="stylesheet" href="app/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="app/assets/images/favicon.png" />
    <style>
    .form{
        text-align:center;
        padding-top:40px;
    }
    .font{
        font-size:40px;
        padding-bottom:40px;

    }
    .table{
        margin:auto;
        width:50%;
        margin-top:60px;
        border:3px solid white;
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
            <div class="form">
            
                <h2 class="font" >Add Category</h2>
                <form action="{{route('addcategory')}}" method="Post">
                @csrf
                    
                   
                    <input type="text" name="name" placeholder="write category name">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add category">
                    
                </form>


              <table class="table">
                <tr>
                    <th>#</th>
                    <td>Category Name</td>
                    <td>Action</td>
                </tr>
                @foreach($data1 as $data)
                
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->category_name}}</td> 
                    
                   <td> <form action="{{ route('deletecategory', $data->id)}} " method="post">
                   @method('DELETE')
                    @csrf

                    
                        <button type="submit" onclick="return confirm('Are you sure to delete this')"  class="btn btn-danger"><i class=" fa fa-trash"></i>delete</button>
                    </form>
               
</td>
                    
                    <!-- <td><a onclick="return confirm('Are u sure to delete')" href="{{route('deletecategory', ['id' =>$data->id])}}" class="btn btn-danger">Delete</td> -->
                </tr>
                @endforeach

              </table>
            </div>
        </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
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
</html>