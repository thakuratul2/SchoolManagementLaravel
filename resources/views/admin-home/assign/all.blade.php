@extends('layout.app')

@section('content')
    


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assign Subject List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{url('admin-home/assign/new')}}" class="btn btn-primary">Assign Subject</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            
              <!-- left column -->
              
               <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Search Assign Subject</h3>
                </div>
                  <form method="get" action="">
                    
                    <div class="card-body">
                      <div class="row">

                      
                      <div class="form-group col-md-3">
                        <label >Enter Name</label>
                        
                        <input type="text" name="name" required value="{{Request::get('name')}}" class="form-control" placeholder="Enter Name Here: ">
                      </div>
                      <div class="form-group col-md-3">
                        <label >Enter Email</label>
                        
                        <input type="email" name="email" required value="" class="form-control" placeholder="Enter Email Here: ">
                      </div>
                      <div class="form-group col-md-3">
                        
                        <button class="btn btn-primary" type="submit" style="margin-top: 30px;">Search</button>
                        <button class="btn btn-success" type="submit" style="margin-top: 30px;">Clear</button>

                      </div>
                      
                    </div>
                      
                    <!-- /.card-body -->
    
                    </div>
                  </form>
               
                <!-- /.card -->
          </div>
               
                <!-- /.card -->
    
              
            @include('_message')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Atul Management | Assign Subject</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection