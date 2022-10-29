@extends('user::layouts.master')

@section('content')

<div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          
          
          
          <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
           <h3>Roles Info</h3>
          </div><!--//app-card-->
         
                <div class="row gy-4">
                  <div class="col-12 col-lg-12">
                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
               
                <div class="app-card-body px-4 w-100">
                  
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      
                      
                    <table class="table app-table-hover mb-0 text-left">
                    <thead>
                      <tr>
                        
                        <th class="cell">#</th>
                        <th class="cell">Role</th>
                        <th class="cell">Permissions</th>
                        <th class="cell">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp

                      @foreach($roles as $role)
                      <tr>
                        <td class="cell">{{$no++}}</td>
                        <td class="cell"><span class="truncate">{{$role->name}}</span></td>
                        <td class="cell">
                          {{$role->permissions->count()}}
                        </td>
                        <td class="cell"><a href="/admin/permissions/{{$role->id}}"><span class="badge bg-success">Assign Permissions</span></a></td>
                        
                      </tr>  
                      @endforeach                    
                          
                    </tbody>
                  </table>

                    </div><!--//row-->
                  </div><!--//item-->       
                  
                </div><!--//app-card-body-->
                
               
            </div><!--//app-card-->
                  </div><!--//col-->
                  
                   
                  
                  </div>
                </div><!--//row-->
        
        </div><!--//container-fluid-->
      </div><!--//app-content-->


@endsection
