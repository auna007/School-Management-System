@extends('user::layouts.master')

@section('content')
   <div class="app-wrapper">
        
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">              
                <h1 class="app-page-title">Role: {{ucwords($role->name)}}</h1>               
                <hr class="my-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Role Information</h3>
                        <div class="section-intro">Activate or Deactivate the permissions for the <span style="color:blue; font-size: bold"> {{$role->name}} </span>  role by checking/unchecking each permission respectively.</div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">                          
                            <div class="app-card-body">
                        <label for="permissions" class="form-label">Activate Permissions</label>
                        <form method="POST" action="{{ route('update.role_permission', $role->id) }}">
                        @method('patch')
                        @csrf
                        <table class="table table-striped">
                            <thead>
                                <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                                <th scope="col" width="20%">Name</th>
                                <th scope="col" width="1%">Guard</th> 
                            </thead>

                            @foreach($permissions as $permission) 
                                    @php 
                                        
                                        $ini_permission_name = str_replace('.', ' ', $permission->name);
                                        $row_permission_name = str_replace('_', ' ', $ini_permission_name);

                                    @endphp

                                <tr>
                                    <td>
                                <input type="checkbox" 
                                name="permission[{{ $permission->name }}]"
                                value="{{ $permission->name }}"
                                class='permission'
                                {{ in_array($permission->name, $rolePermissions) 
                                    ? 'checked'
                                    : '' }}>
                            </td>
                                    <td>{{ ucwords($row_permission_name) }}</td>
                                    <td>{{ $permission->guard_name }}</td>
                                </tr>
                            @endforeach
                        </table>

                         <button type="submit" class="btn btn-primary">Save changes</button>

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
   <script type="text/javascript">
    
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }
                
            });
        });
    </script>
@endsection