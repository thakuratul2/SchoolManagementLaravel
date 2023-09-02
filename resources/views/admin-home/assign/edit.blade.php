@extends('layout.app')

@section('content')
    


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Assign Subject</h1>
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
                    <label >Class Name</label>
                    <select name="class_id" class="form-control" required>
                      <option value="">Select Class</option>
                      @foreach ($getClass as $item)
                          <option value="{{$item->cid}}">{{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label >Subject Name</label>
                    @foreach ($getSubject as $subject)
                        <div>
                          <label style="font-weight: normal;">
                            <input type="checkbox" value="{{$subject->sid}}" name="subject_id[]">
                            {{$subject->name}}
                          </label>
                        </div>
                    @endforeach
                  </div>
                  <div class="form-group">
                    <label >Status</label>
                    <select class="form-control" name="status">
                      <option value="0">Active</option>
                      <option value="1">Inactive</option>
                    </select>
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