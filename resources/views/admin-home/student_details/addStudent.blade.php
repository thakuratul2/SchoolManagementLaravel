@extends('layout.app')

@section('content')
    


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Student</h1>
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
                    <div class="row">
                  <div class="form-group col-md-6">
                    
                        <label >Enter First Name <span style="color: red;">*</span></label>
                        <input type="text" name="name" value="{{old('name')}}" required class="form-control" placeholder="Enter Name Here: ">
                      </div>
                      <div class="form-group col-md-6">
                    
                        <label >Enter Last Name <span style="color: red;">*</span></label>
                        <input type="text" name="last_name" name="{{old('last_name')}}" required class="form-control" placeholder="Enter Last Name Here: ">
                      </div>
                      <div class="form-group col-md-6">
                    
                        <label >Admission Number <span style="color: red;">*</span></label>
                        <input type="text" name="admission_number" name="{{old('last_name')}}" required class="form-control" placeholder="Enter Admission Number: ">
                      </div>
                      <div class="form-group col-md-6">
                    
                        <label >Enter Roll Number <span style="color: red;">*</span></label>
                        <input type="text" name="roll_number" name="{{old('last_name')}}" required class="form-control" placeholder="Enter Roll Number: ">
                      </div>
                      <div class="form-group col-md-6">
                    
                        <label >Enter Last Name <span style="color: red;">*</span></label>
                        <input type="text" name="last_name" name="{{old('last_name')}}" required class="form-control" placeholder="Enter Last Name Here: ">
                      </div>
                    </div>
                    
                    </div>
                    
                    </div>
                    
                    </div>
                    
                  <div class="form-group">
                    <label >Enter Email</label>
                    <input type="email" name="email" required class="form-control" placeholder="Enter Email Here: ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="pasword" required class="form-control" placeholder="Enter Password Here: ">
                  </div>
              
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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