@extends('layout.app')

@section('content')
    


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Admin</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
           
              
              <form method="POST" action="">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label >Enter Name</label>
                    
                    <input type="text" name="name" required value="{{$setRecord->name}}" class="form-control" placeholder="Enter Name Here: ">
                  </div>
                  <div class="form-group">
                    <label >Enter Email</label>
                    
                    <input type="email" name="email" required value="{{$setRecord->email}}" class="form-control" placeholder="Enter Email Here: ">
                  </div>
                  <div class="form-group">
                    
                    <label for="exampleInputPassword1">Password</label>

                    <input type="password" name="pasword" class="form-control" placeholder="Enter Password Here: ">
                  </div>
              
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           
            <!-- /.card -->

          </div>
        
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
   

  

    
 

@endsection