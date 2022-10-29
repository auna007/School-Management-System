@extends('user::layouts.master')

@section('content')
   
    <div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          
          
          
          <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
           <h3>Class Manager</h3>            
          </div><!--//app-card-->
         
                <div class="row gy-4">                          
                  <div class="col-12 col-lg-6">
                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                      <div class="col-auto">
                        <div class="app-icon-holder">
                        <img src="" width="30px" height="30px">
                      </div><!--//icon-holder-->
                            
                      </div><!--//col-->
                      <div class="col-auto">
                        <h4 class="app-card-title">@if(empty($class))Create Class @else Update Class @endif</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                    </div>
                    @endif 
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                     
                    <form class="settings-form" method="POST" @php if(isset($class)) { @endphp action="{{route('update.class', ['id'=>$class->id])}}" @php } else { @endphp action="{{route('create.class')}}" @php } @endphp>
                       @csrf
                    <div class="mb-3">
                      <label class="form-label">Class Title </label>
                      <input type="text" class="form-control" name="class_title" id="class_title" value="{{$class->class_title ??''}}">
                       @if ($errors->has('class_title'))
                      <p class="alert-warning">
                      {{ $errors->first('class_title') }}
                      </p>
                       @endif
                  </div>
                  
                  <div class="mb-3">
                      <label class="form-label">Status </label>
                      <select class="form-control" name="status" id="status">
                        @if(!empty($class)) 
                        @if($class->status == 1)
                        <option value="1" selected> Active</option>
                        <option value="0"> Inactive</option>
                        @elseif($class->status == 0)
                        <option value="0" selected> Inactive</option>
                        <option value="1"> Active</option>
                        @endif
                        @endif
                        @if(empty($class))
                        <option value=""> Select...</option>
                        <option value="1"> Active</option>
                        <option value="0"> Inactive</option>
                        @endif

                      </select>
                      @if ($errors->has('status'))
                     <p class="alert-warning">
                      {{ $errors->first('status') }}
                      </p>
                       @endif
                  </div>
                   @if(!empty($class)) 
                  <button type="submit" class="btn app-btn-primary" >Update </button>
                  @else
                  <button type="submit" class="btn app-btn-primary" >Create </button>
                  @endif
                  </form>


                    </div><!--//row-->
                  </div><!--//item-->       
                  
                </div><!--//app-card-body-->
                
               
            </div><!--//app-card-->
                  </div><!--//col-->
                  <div class="col-12 col-lg-6">
                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                      <div class="col-auto">
                        <div class="app-icon-holder">
                        <img src="" width="30px" height="30px">
                      </div><!--//icon-holder-->
                            
                      </div><!--//col-->
                      <div class="col-auto">
                        <h4 class="app-card-title">List of Classes</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                            @if(Session::has('success_delete'))
                            <div class="alert alert-danger" role="alert">
                            {{ Session::get('success_delete') }}
                            </div>
                            @endif 
                            @if(Session::has('success_update'))
                            <div class="alert alert-success" role="danger">
                            {{ Session::get('success_update') }}
                            </div>
                            @endif

                           
                      
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                      <table class="table app-table-hover">
                    <thead>
                      <tr>
                        <th class="cell">#</th>
                        <th class="cell">Class Title</th>                         
                        <th class="cell">Status</th>
                        <th class="cell">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach($classes as $class)
                      <tr>
                        <td class="cell">{{$no++}}</td>
                        <td class="cell"><span class="truncate">{{$class->class_title}}</span></td>
                        @if ($class->status == 1)
                        <td class="cell"><span class="badge bg-success">Active</span></td>
                        @else
                        <td class="cell"><span class="badge bg-warning">Inactive</span></td>
                        @endif
                        <td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('edit.class', ['id'=>$class->id])}}">edit</a>
                        </td>
                        
                      </tr> 
                      @endforeach
                      
                    </tbody>
                  </table>
                    
                  </div><!--//item-->
                  
                  
                </div><!--//app-card-body-->
                
               
            </div><!--//app-card-->
                   
                  
                  </div>
                </div><!--//row-->
        
        </div><!--//container-fluid-->
      </div><!--//app-content-->
    </div>

@endsection


