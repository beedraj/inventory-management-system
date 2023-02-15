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
    
  </head>
  <style>
    .form_design{
        box-shadow:0 0 20px blue;
        padding:30px 60px 30px 60px;
        margin-right:300px;
        border-radius:30px;
        
    }
    .font{
        font-size:40px;
        padding-bottom:40px;

    }
    label{
        display:inline-block;
        width:200px;
    }
    .design{
        padding-bottom:15px;
    }
    input{
      border-radius:10px;
    }
    .button_design{
      padding:10px;
      transition:all 0.7s ease-in-out;
    }
    .button_design:hover{
      transform:scale(1.09);
    }
    
    </style>
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
          <h2 class="font" >Add Employee</h2>
            <form action="{{route('addemployee')}}" method="Post" enctype="multipart/form-data" class="form_design">
            @csrf
               <div>
               <label for="product title" class="design test">Name:</label> 
               <input type="text" name="name" placeholder="write a name" >
               <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
               </span>
               </div>
               <div>
               <label for="product image" class="design">Phone:</label> 
               <input type="mobile" name="phone" placeholder="write a phone"  >
               
                <span class="text-danger">
                @error('phone')
                {{$message}}
                @enderror
               </span>
               </div>
               
               <div>
               <label for="product description" class="design">Email:</label> 
               <input type="email" name="email" placeholder="write a email"  >
              
                <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
               </span>
               </div>
               <div>
               <label for="product image" class="design">Addresss:</label> 
               <input type="text" name="address" placeholder="write a address"  >
              
                <span class="text-danger">
                @error('address')
                {{$message}}
                @enderror
               </span>
               </div>
               <div>
               <label for="product image" class="design">DOB:</label> 
               <input type="date" name="dob" placeholder="write a dob" >
              
                <span class="text-danger">
                @error('dob')
                {{$message}}
                @enderror
               </span>
               </div>
               <div>
               <p>Gender:</p>
                    <input type="radio" name="gender" value="Male" >
                    <label for="html">Male</label><br>
                    <input type="radio"  name="gender" value="Female" >
                    <label for="css">Female</label><br>
                  
                
                <span class="text-danger">
                @error('gender')
                {{$message}}
                @enderror
               </span>
               </div>
               <div>
               <label for="cars">Education:</label>

                    <select name="education"  >
                   
                    <option value="+2"  >+2</option>
                    <option value="Diploma" >Diploma</option>
                    <option value="under Graduate" > Under Graduate</option>
                    <option  value="post Graduate">Post Graduate</option>
                    </select>
                
                <span class="text-danger">
                @error('education')
                {{$message}}
                @enderror
               </span>
               </div>
               <div>
               <label for="product image" class="design">Salary:</label> 
               <input type="number" name="salary" placeholder="write a salary" >
              
                <span class="text-danger">
                @error('comment')
                {{$message}}
                @enderror
               </span>
               </div>
              
              
               <div>
               
               <input  class="btn btn-outline-primary button_design" type="submit" name="submit" value="Add Employee">
               </div>
              
                
            </form>
        </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <div class="form">
            
            
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