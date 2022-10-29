@extends('user::layouts.master')

@section('content')
   
    <div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          
          
          
          <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
           <h3>Session Manager</h3>
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
                        <h4 class="app-card-title">Create Session</h4>
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
                      @php $current_yr= date('Y');
                           $next_year = date('Y')+1;
                      @endphp
                      
                    <form class="settings-form" method="POST" action="{{route('create.academic_session')}}">
                    <div class="mb-3">
                      @csrf
                      <label class="form-label">Session </label>
                      <select class="form-control" name="session" id="session">
                        <option value=""> Select...</option>
                        <option value="@php echo $current_yr-'2'.'_'.$next_year-'2'; @endphp"> @php echo $current_yr-'2'.'/'.$next_year-'2'; @endphp </option>
                        <option value="@php echo $current_yr-'1'.'_'.$next_year-'1'; @endphp"> @php echo $current_yr-'1'.'/'.$next_year-'1'; @endphp </option>
                        <option value="@php echo $current_yr.'_'.$next_year; @endphp"> @php echo $current_yr.'/'.$next_year; @endphp </option>
                        <option value="@php echo $current_yr+'1'.'_'.$next_year+'1'; @endphp"> @php echo $current_yr+'1'.'/'.$next_year+'1'; @endphp </option>
                        <option value=" @php echo $current_yr+'2'.'_'.$next_year+'2'; @endphp"> @php echo $current_yr+'2'.'/'.$next_year+'2'; @endphp </option>
                        <option value="@php echo $current_yr+'3'.'_'.$next_year+'3'; @endphp"> @php echo $current_yr+'3'.'/'.$next_year+'3'; @endphp </option>
                      </select>
                       @if ($errors->has('session'))
                      <p class="alert" style="color:red">
                      {{ $errors->first('session') }}
                      </p>
                       @endif
                  </div>

                  <div class="mb-3">
                      <label class="form-label">Status </label>
                      <select class="form-control" name="status" id="status">
                        <option value="" > Select...</option>
                        <option value="1"> Active</option>
                        <option value="0"> Inactive</option>
                      </select>
                      @if ($errors->has('status'))
                      <p class="alert" style="color:red">
                      {{ $errors->first('status') }}
                      </p>
                       @endif
                  </div>
                  
                  <button type="submit" class="btn app-btn-primary" >Register  </button>
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
                        <h4 class="app-card-title">List of Sessions</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                            @if(Session::has('success_delete'))
                            <div class="alert alert-success" role="alert">
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
                        <th class="cell">Session</th> 
                        <th class="cell">Status</th>
                        <th class="cell">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach($sessions as $session)
                      <tr>
                        <td class="cell">{{$no++}}</td>
                        <td class="cell"><span class="truncate">{{$session->session}}</span></td>
                        @if ($session->status == 1) <td class="cell">
                          <div class="form-check form-switch mb-3">
                           <input class="form-check-input" type="checkbox" id="settings-switch-1" onchange="update_status('{{$session['id']}}','0')" data-search="on" @if ($session->status == 1) checked @endif>
                          </div>
                        </td>
                        @endif
                        @if ($session->status == 0)
                        <td class="cell">
                          <div class="form-check form-switch mb-3">
                           <input class="form-check-input" type="checkbox" id="settings-switch-1" onchange="update_status('{{$session['id']}}','1')" data-search="on">
                          </div>
                        </td>
                        @endif
                        <td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('delete.academic_session', ['id'=>$session->id])}}">delete</a>
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

@section('script')
    <script>
        function update_status(id, status){

            axios.post('{{route('update.academic_session_status')}}', {
                status_id: id,
                status: status,
            })
                .then(function (response) {
                })
                .catch(function (error) {
                });
        }

    </script>
   
@endsection

