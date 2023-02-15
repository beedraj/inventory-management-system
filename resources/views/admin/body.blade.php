<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
            <div class="col-md-3">
             <div class="card">
              <div class="card card-body bg-primary text-white mb-3">
                <label for="">Total Employee</label>
                <h1>{{$employee}}</h1>
                <a href="{{route('showemployee')}} " class="text-white">View</a>
              </div>
              
              
             </div>

            </div>
            <div class="col-md-3">
             <div class="card">
              <div class="card card-body bg-success text-white mb-3">
                <label for="">Total Product</label>
                <h1>{{$product}}</h1>
                <a href="{{route('showproduct')}} " class="text-white">View</a>
              </div>
              
             </div>

            </div>
            <div class="col-md-3">
             <div class="card">
              <div class="card card-body bg-danger text-white mb-3">
                <label for="">Total Category</label>
                <h1>{{$data1}}</h1>
                <a href="{{route('category')}} " class="text-white">View</a>
              </div>
              
             </div>

            </div>
           
            <div class="col-md-3">
             <div class="card">
              <div class="card card-body bg-info text-white mb-3">
                <label for=""> User</label>
                <h1>{{$totaluser}}</h1>
                <a href="{{route('user')}} " class="text-white">View</a>
              </div>
              
             </div>

            </div>
            <div class="col-md-3">
             <div class="card">
              <div class="card card-body bg-warning text-white mb-3">
                <label for=""> Admin</label>
                <h1>{{$totaladmin}}</h1>
                <a href="{{route('user')}} " class="text-white">View</a>
              </div>
              
             </div>

            </div>


            </div>
            


            </div>
          </div>