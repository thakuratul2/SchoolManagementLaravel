@extends('layout.app')

@section('content')
    


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student List (Total : {{$getRecord->total()}})</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{url('admin-home/studentDetails/add')}}" class="btn btn-primary">Add Student</a>
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
                  <h3 class="card-title">Search Student</h3>
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
                <h3 class="card-title">Atul Management | Student Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body col-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Student Pic</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Admission Number</th>
                    <th>Roll Number</th>
                    <th>Class</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Caste</th>
                    <th>Religion</th>
                    <th>Mobile Number</th>
                    <th>Admission Date</th>
                    <th>Blood Group</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($getRecord as $item)
                      <tr>
                        <td>
                          {{$item->id}}
                        </td>
                        <td>
                          @if (!empty($item->getProfile()))
                          <img src="{{$item->getProfile()}}" style="height: 50px; width: 50px; border-radius: 50px;">
                              
                          @endif
                        </td>
                        <td>
                          {{$item->name}}
                        </td>
                        <td>
                          {{$item->last_name}}
                        </td>
                        <td>
                          {{$item->email}}
                        </td>
                        <td>
                          {{$item->admission_number}}
                        </td>
                     <td>
                      {{$item->roll_number}}
                     </td>
                     <td>
                      {{$item->class_name}}
                     </td>
                     <td>
                      {{$item->gender}}
                     </td>

                     <td>
                      @if (!empty($item->date_of_birth))
                          {{date('d-m-Y', strtotime($item->date_of_birth))}}
                      @endif
                     </td>
                     <td>
                      {{$item->caste}}
                     </td>

                     <td>
                      {{$item->religion}}
                     </td>
                     <td>
                      {{$item->mobile_number}}
                     </td>
                     <td>
                      @if (!empty($item->admission_date))
                      {{date('d-m-Y', strtotime($item->admission_date))}}
                  @endif
                     </td>
                     <td>
                      {{$item->blood_group}}
                     </td>
                     <td>
                      {{$item->height}}
                     </td>
                     <td>
                      {{$item->weight}}
                     </td>
                     
                     <td>
                      {{($item->status == 0)? 'Active' : 'Inactive'}}
                     </td>
                        
                        <td>
                          {{date('d-m-Y H:i', strtotime($item->created_at))}}
                        </td>
                        <td>
                          {{date('d-m-Y H:i', strtotime($item->updated_at))}}
                        </td>
                        <td style="min-width: 150px;">
                          <a href="{{url('admin-home/studentDetails/edit/'. $item->id)}}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>

                          <a href="{{url('admin-home/studentDetails/delete/'. $item->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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