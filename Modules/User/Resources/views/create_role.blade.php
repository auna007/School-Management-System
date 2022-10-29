@extends('user::layouts.master')

@section('content')
   <div class="app-wrapper">
        
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">              
                
                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                <h3>Role Manager</h3>
                </div><!--//app-card-->
                <hr class="mb-4">

                <div class="row g-4 settings-section" id="roles">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Create Role</h3>
                        <div class="section-intro">New role must be unique and also descriptive</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                            </div>
                            @endif                             
                            
                            <div class="app-card-body">
                                <form method="POST" action="{{ route('create.role') }}" enctype="multipart/form-data" name="roleform" id="roleform">
                                     @csrf                                    
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Role </label>
                                        <input type="text" class="form-control" name="name" id="name">
                                         @if ($errors->has('name'))
                                        <p class="alert" style="color:red">
                                        {{ $errors->first('name') }}
                                        </p>
                                         @endif
                                         <input type="hidden" name="guard_name" id="guard_name" value="admin">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Role Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value=""> Select......</option>
                                            <option value="active"> Active</option>
                                            <option value="inactive"> Inactive</option>
                                        </select>
                                         @if ($errors->has('status'))
                                        <p style="color:red">
                                        {{ $errors->first('status') }}
                                        </p>
                                         @endif
                                    </div>
                                    <p class="my-4"></p>
                                    <div class="mt-3">
                                        <button type="submit" class="btn app-btn-primary" >Create</button>
                                    </div>
                                </form>
                            </div><!--//app-card-body-->
                            
                        </div><!--//app-card-->
                    </div>
                </div><!--//row-->
                <hr class="my-4">

                <div class="row g-4 settings-section">
                     
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Available Roles</h3>
                        <div class="section-intro">Update System Roles</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                             @if(session()->has('deleted_role'))
                            <div class="alert alert-success" role="alert">
                            {{ session()->get('deleted_role') }}
                            </div>
                            @endif    
                            
                            <div class="app-card-body">

                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">#</th>
                                                <th class="cell">Role</th>
                                                <th class="cell">Users</th>
                                                <th class="cell">Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 0; @endphp
                                            @foreach($roles as $role)
                                            <tr>
                                              @php  $no++;  @endphp
                                                <td class="cell">{{$no}}</td>
                                                <td class="cell">{{$role->name}}</td>
                                                 <td class="cell">  </td>
                                                <td class="cell">
                                                @if($role->status == 'active')
                                                <div class="form-check form-switch mb-3">
                                                 <input class="form-check-input" type="checkbox" id="settings-switch-1" onchange="update_role('{{$role['id']}}','inactive')" data-search="on" checked>
                                                </div>
                                                 @else
                                                 <div class="form-check form-switch mb-3">
                                                 <input class="form-check-input" type="checkbox" id="settings-switch-1" onchange="update_role('{{$role['id']}}','active')" data-search="on">
                                                </div>
                                                  
                                                 @endif
                                                </td>
                                                <td class="cell">
                                                    <a href="{{route('delete.role', ['role_id'=>$role->id])}}" class="badge bg-success" style="padding-top: 5px; padding-bottom: 5px"> delete </a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->
                                
                            </div><!--//app-card-body-->
                            
                        </div><!--//app-card-->
                    </div>
                </div><!--//row-->
                <hr class="my-4">
                
            </div><!--//container-fluid-->
        </div><!--//app-content-->
    </div><!--//app-wrapper-->                      
@endsection

@section('script')
    <script>

        function update_role(roleid, status){
            
            axios.post('{{route('update.role_status')}}', {
                roleid: roleid,
                status: status,
            })
                .then(function (response) {
                })
                .catch(function (error) {
                });
        }

    </script>
   
@endsection

