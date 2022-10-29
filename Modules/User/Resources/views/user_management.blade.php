@extends('user::layouts.master')

@section('content')
    
    <div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          
          
          
          <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
           <h3>User Manager</h3>
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
                        <h4 class="app-card-title">Register User</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      
                      
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      
                    <form class="settings-form" method="POST" @php if(isset($user)) { @endphp action="{{route('update.user', ['id'=>$user->id])}}" @php } else { @endphp action="{{route('create.user')}}" @php } @endphp>
                      @csrf
                    <div class="mb-3">
                      <label class="form-label">Name </label>
                      <input type="text" class="form-control" name="name" id="name" value="{{$user->name ?? ''}}">
                    </div>

                  <div class="mb-3">
                      <label class="form-label">Email </label>
                      <input type="email" class="form-control" name="email" id="email" value="{{$user->email ?? ''}}">
                  </div>

                  <div class="mb-3">
                      <label class="form-label">Rank </label>
                      <input type="text" class="form-control" name="rank" id="rank" value="{{$user->rank ?? ''}}">
                  </div>

                  
                  <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control" 
                        name="role" required>
                        <option value="">Select role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" @isset($userRole)
                                {{ in_array($role->name, $userRole) 
                                    ? 'selected' 
                                    : '' }} @endisset>{{ $role->name ?? ''}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('role'))
                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                    @endif
                </div>
                  @isset($status)
                  
                  @else
                  <div class="mb-3">
                      <label class="form-label">Password </label>
                      <input type="password" class="form-control" name="password" id="password" value="">
                  </div>
                  @endisset
                  
                    
                  <div class="mb-3">
                      <label class="form-label">Status </label>
                      <select class="form-control" name="status" id="status">
                        @if(!empty($user)) 
                        @if($user->status == 1)
                        <option value="1" selected> Active</option>
                        <option value="0"> Inactive</option>
                        @elseif($user->status == 0)
                        <option value="0" selected> Inactive</option>
                        <option value="1"> Active</option>
                        @endif
                        @endif
                        @if(empty($user))
                        <option value=""> Select...</option>
                        <option value="1"> Active</option>
                        <option value="0"> Inactive</option>
                        @endif

                      </select>
                  </div>
                  
                   @if($user ?? '') 
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
                        <h4 class="app-card-title">Users Information</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      
                      
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    
                       
                      <table class="table app-table-hover">
                    <thead>
                      <tr>
                        <th class="cell">#</th>
                        <th class="cell">Name</th>
                        <th class="cell">Email</th> 
                        <th class="cell">Rank</th> 
                        <th class="cell">Role(s)</th> 
                        <th class="cell">Status</th> 
                        <th class="cell">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                       @php $no = 1; @endphp
                      @foreach($users as $user)
                      <tr>
                        <td class="cell">{{$no++}}</td>
                        <td class="cell"><span class="truncate">{{$user->name}}</span></td>
                        <td class="cell"><span class="truncate">{{$user->email}}</span></td>
                         <td class="cell"><span class="truncate">{{$user->rank}}</span></td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="truncate">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        @if($user->status == 1)
                         <td class="cell">
                          <div class="form-check form-switch mb-3">
                           <input class="form-check-input" type="checkbox" id="settings-switch-1" onchange="update_status('{{$user['id']}}','0')" data-search="on" @if($user->status == 1) checked @endif>
                          </div>
                        </td>
                        @endif
                        @if($user->status == 0)
                        <td class="cell">
                          <div class="form-check form-switch mb-3">
                           <input class="form-check-input" type="checkbox" id="settings-switch-1" onchange="update_status('{{$user['id']}}','1')" data-search="on">
                          </div>
                        </td>
                        @endif
                        <td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('edit.user', ['id'=>$user->id])}}">update</a>
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

            axios.post('{{route('update.user_status')}}', {
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
