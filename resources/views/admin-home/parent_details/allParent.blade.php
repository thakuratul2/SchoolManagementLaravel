@extends('layout.app')

@section('content')
    


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parent List </h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            
            <a href="{{url('admin-home/parentDetails/add')}}" class="btn btn-primary">Add Parent</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-16">
            
            
              <!-- left column -->
              
               <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Search Parent</h3>
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
                <h3 class="card-title">Atul Management | Parent Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body col-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>PID</th>
                    <th>Parent Pic</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                
                    <th>Gender</th>
                    
                    <th>Mobile Number</th>
                    <th>Occupation</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  @foreach ($getParent as $value)
                      <tr>
                        <td>
                          {{$value->id}}
                        </td>
                       
                        <td>
                          {{$value->name}}
                        </td>
                        <td>
                          {{$value->last_name}}
                        </td>
                        <td>
                          {{$value->email}}
                      
                     
                     <td>
                      {{$value->gender}}
                     </td>

                     
                     

                    
                     <td>
                      {{$value->mobile_number}}
                     </td>
                     
                    
                     
                      {{($value->status == 0)? 'Active' : 'Inactive'}}
                     </td>
                        
                        <td>
                          {{date('d-m-Y H:i', strtotime($value->created_at))}}
                        </td>
                        <td>
                          {{date('d-m-Y H:i', strtotime($value->updated_at))}}
                        </td>
                        <td style="min-width: 150px;">
                          <a href="{{url('admin-home/studentDetails/edit/'. $value->id)}}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>

                          <a href="{{url('admin-home/studentDetails/delete/'. $value->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                      </tr>
                  @endforeach
                  </tbody>
                </table>
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