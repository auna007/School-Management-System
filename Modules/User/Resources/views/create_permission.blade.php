@extends('user::layouts.master')

@section('content')
   <div class="app-wrapper">
        
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">              
                
                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                <h3>Permission Manager</h3>
                </div><!--//app-card-->
                <hr class="mb-4">

                <div class="row g-4 settings-section" id="Permissions">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Create Permission</h3>
                        <div class="section-intro">New Permission must be linked to a particular role and also descriptive</a></div>
                    </div>
                    <div class="col-12 col-md-8">

                        <div class="app-card app-card-settings shadow-sm p-4">
                            @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                            </div>
                            @endif                             
                            
                            <div class="app-card-body">
                                <form method="POST" action="{{ route('create.permission') }}" enctype="multipart/form-data" name="Permissionform" id="Permissionform">
                                     @csrf                                    
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Permission</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                         @if ($errors->has('name'))
                                        <p class="alert" style="color:red">
                                        {{ $errors->first('name') }}
                                        </p>
                                         @endif
                                         <input type="hidden" name="guard_name" id="guard_name" value="admin">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Permission Status</label>
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
                        <h3 class="section-title">Available Permissions</h3>
                        <div class="section-intro">Update System Permissions</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                             @if(session()->has('error'))
                            <div class="alert alert-success" role="alert">
                            {{ session()->get('error') }}
                            </div>
                            @endif    
                            
                            <div class="app-card-body">

                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">#</th>
                                                <th class="cell">Permission</th>
                                                <th class="cell">Assigned Roles </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 0; @endphp
                                            @foreach($permissions as $permission)
                                            @php 
                                                $ini_permission_name = str_replace('.', ' ', $permission->name);
                                                $row_permission_name = str_replace('_', ' ', $ini_permission_name);
                                            @endphp
                                            <tr>
                                              @php  $no++;  @endphp
                                                <td class="cell">{{$no}}</td>
                                                <td class="cell">{{ucwords($row_permission_name)}}</td>
                                                 <td class="cell"> @foreach($permission->roles as $role) {{$role->name}} <br> @endforeach</td>
                                                <td class="cell">
                                                    <a href="{{ route('delete.permission', ['permission_id' => $permission['id']]) }}" class="badge bg-success" style="padding-top: 5px; padding-bottom: 5px"> delete </a>
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
        function update_permission(permissionid, status){

            axios.post('{{route('update.permission_status')}}', {
                permissionid: permissionid,
                status: status,
            })
                .then(function (response) {
                })
                .catch(function (error) {
                });
        }

    </script>
   
@endsection

