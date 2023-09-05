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
                    
                        <label >Class <span style="color: red;">*</span></label>

                        <select name="class_id" class="form-control">
                            <option value="">Select Class</option>
                            @foreach ($getClass as $value)
                                <option value="{{$value->cid}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Gender <span style="color: red;">*</span></label>

                        <select name="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Date Of Birth <span style="color: red;">*</span></label>

                        <input type="date" class="form-control" required value="{{old('date_of_birth')}}" name="date_of_birth">
                    </div>
                  

                    <div class="form-group col-md-6">
                    
                        <label >Caste <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('caste')}}" name="caste" placeholder="Enter your caste">
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Religion <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('religion')}}" name="religion" placeholder="Enter your religion">
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Mobile Number <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('mobile_number')}}" name="mobile_number" placeholder="Enter Number">
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Admission Date <span style="color: red;">*</span></label>

                        <input type="date" class="form-control" required value="{{old('admission_date')}}" name="admission_date">
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Profile Pic <span style="color: red;">*</span>
                          
                        </label>

                        <input type="file" class="form-control" value="{{old('profile_pic')}}" name="profile_pic">
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Blood Group <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('blood_group')}}" name="blood_group" placeholder="Blood Group">
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Height <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('height')}}" name="height" placeholder="Enter Height"> 
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Weight <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('weight')}}" name="weight" placeholder="Enter Weight">
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Status <span style="color: red;">*</span></label>

                        <select name="gender" class="form-control">
                            <option value="">Select Status</option>
                            <option value="0">Active</option>
                            <option value="1">Inactive</option>
                            
                        </select>
                    </div>
                
                    
                    </div>
                    
                  <div class="form-group">
                    <label >Enter Email <span style="color: red;">*</span></label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter Email Here: ">
                  </div>
                  <div class="form-group">
                    <label>Password <span style="color: red;">*</span></label>
                    <input type="password" name="pasword" value="{{old('password')}}" required class="form-control" placeholder="Enter Password Here: ">
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