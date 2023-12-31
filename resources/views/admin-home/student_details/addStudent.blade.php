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
           
              
              <form method="POST" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-6">
                    
                        <label >Enter First Name <span style="color: red;">*</span></label>
                        <input type="text" name="name" value="{{old('name')}}" required class="form-control" placeholder="Enter Name Here: ">
                        <div style="color: red;">

                          {{$errors->first('name')}}
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                    
                        <label >Enter Last Name <span style="color: red;">*</span></label>
                        <input type="text" name="last_name" name="{{old('last_name')}}" required class="form-control" placeholder="Enter Last Name Here: ">
                        <div style="color: red;">

                          {{$errors->first('last_name')}}
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                    
                        <label >Admission Number <span style="color: red;">*</span></label>
                        <input type="text" name="admission_number" name="{{old('admission_number')}}" required class="form-control" placeholder="Enter Admission Number: ">
                        <div style="color: red;">

                          {{$errors->first('admission_number')}}
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                    
                        <label >Enter Roll Number <span style="color: red;">*</span></label>
                        <input type="text" name="roll_number" name="{{old('roll_number')}}" required class="form-control" placeholder="Enter Roll Number: ">
                        <div style="color: red;">

                          {{$errors->first('roll_number')}}
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                    
                        <label >Class <span style="color: red;">*</span></label>

                        <select name="class_id" class="form-control">
                            <option value="">Select Class</option>
                            @foreach ($getClass as $value)
                                <option {{(old('class_id') == $value->cid) ? 'selected' : ''}} value="{{$value->cid}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                        <div style="color: red;">

                          {{$errors->first('class_id')}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Gender <span style="color: red;">*</span></label>

                        <select name="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option {{(old('gender') == 'Male') ? 'selected' : ''}} value="Male">Male</option>
                            <option {{(old('gender') == 'Female') ? 'selected' : ''}} value="Female">Female</option>
                            <option {{(old('gender') == 'Other') ? 'selected' : ''}} value="Other">Other</option>
                        </select>
                        <div style="color: red;">

                          {{$errors->first('gender')}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Date Of Birth <span style="color: red;">*</span></label>

                        <input type="date" class="form-control" required value="{{old('date_of_birth')}}" name="date_of_birth">
                        <div style="color: red;">

                          {{$errors->first('date_of_birth')}}
                        </div>
                      </div>
                  

                    <div class="form-group col-md-6">
                    
                        <label >Caste <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('caste')}}" name="caste" placeholder="Enter your caste">
                        <div style="color: red;">

                          {{$errors->first('caste')}}
                        </div>
                      </div>
                    <div class="form-group col-md-6">
                    
                        <label >Religion <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('religion')}}" name="religion" placeholder="Enter your religion">
                        <div style="color: red;">

                          {{$errors->first('religion')}}
                        </div>
                      </div>
                    <div class="form-group col-md-6">
                    
                        <label >Mobile Number <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('mobile_number')}}" name="mobile_number" placeholder="Enter Number">
                        <div style="color: red;">

                          {{$errors->first('mobile_number')}}
                        </div>
                      </div>
                    <div class="form-group col-md-6">
                    
                        <label >Admission Date <span style="color: red;">*</span></label>

                        <input type="date" class="form-control" required value="{{old('admission_date')}}" name="admission_date">
                        <div style="color: red;">

                          {{$errors->first('admission_date')}}
                        </div>
                      </div>
                    <div class="form-group col-md-6">
                    
                        <label >Profile Pic <span style="color: red;">*</span>
                          
                        </label>

                        <input type="file" class="form-control" value="{{old('profile_pic')}}" name="profile_pic">
                        <div style="color: red;">

                          {{$errors->first('profile_pic')}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                    
                        <label >Blood Group <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('blood_group')}}" name="blood_group" placeholder="Blood Group">
                        <div style="color: red;">

                          {{$errors->first('blood_group')}}
                        </div>
                      </div>
                    <div class="form-group col-md-6">
                    
                        <label >Height <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('height')}}" name="height" placeholder="Enter Height"> 
                        <div style="color: red;">

                          {{$errors->first('height')}}
                        </div>
                      </div>
                    <div class="form-group col-md-6">
                    
                        <label >Weight <span style="color: red;">*</span></label>

                        <input type="text" class="form-control" required value="{{old('weight')}}" name="weight" placeholder="Enter Weight">
                        <div style="color: red;">

                          {{$errors->first('weight')}}
                        </div>
                      </div>
                    <div class="form-group col-md-6">
                    
                        <label >Status <span style="color: red;">*</span></label>

                        <select name="status" class="form-control">
                            <option value="">Select Status</option>
                            <option {{(old('status') == 0) ? 'selected' : ''}} value="0">Active</option>
                            <option {{(old('status') == 1) ? 'selected' : ''}} value="1">Inactive</option>
                            
                        </select>
                        <div style="color: red;">

                          {{$errors->first('status')}}
                        </div>
                    </div>
                
                    
                    </div>
                    
                  <div class="form-group">
                    <label >Enter Email <span style="color: red;">*</span></label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter Email Here: ">
                  <div style="color: red;">

                    {{$errors->first('email')}}
                  </div>
                  </div>
                  <div class="form-group">
                    <label>Password <span style="color: red;">*</span></label>
                    <input type="password" name="pasword" value="{{old('password')}}" required class="form-control" placeholder="Enter Password Here: ">
                    <div style="color: red;">

                      {{$errors->first('password')}}
                    </div>
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