@extends('layout.app')

@section('content')
    


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Subject Details</h1>
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
                    <label >Enter Subject Name</label>
                    
                    <input type="text" name="name" required value="{{$getRecord->name}}" class="form-control" placeholder="Enter Name Here: ">
                  </div>
                  <div class="form-group">
                    <label >Subject Type</label>
                    <select class="form-control" name="type">
                      <option {{($getRecord->status == 'Theory') ? 'selected' : ''}} value="Theory">Theory</option>
                      <option {{($getRecord->status == 'Practical') ? 'selected' : ''}} value="Pratical">Pratical</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label >Status</label>
                    <select class="form-control" name="status">
                      <option {{($getRecord->status == 0) ? 'selected' : ''}} value="0">Active</option>
                      <option {{($getRecord->status == 1) ? 'selected' : ''}} value="1">Inactive</option>
                    </select>
                  </div>
              
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Subject</button>
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