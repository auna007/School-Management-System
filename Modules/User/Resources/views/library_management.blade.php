@extends('user::layouts.master')

@section('content')
    
    <div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          
          
          
          <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
           <h3>Library Manager</h3>
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
                        <h4 class="app-card-title">Library Registration/Update Form</h4>
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
                      
                      
                    <form class="settings-form">
                    <div class="mb-3">
                      <label class="form-label">Content Title </label>
                      <input type="text" class="form-control" id="class_title" value="">
                  </div>
                    
                    <div class="mb-3">
                      <label class="form-label">Content File </label>
                      <input type="file" class="form-control" id="" value="">
                  </div>

                  <div class="mb-3">
                      <label class="form-label">Content Class </label>
                      <select class="form-control">
                        <option value=""> Select...</option>
                        <option value="1"> Active</option>
                        <option value="0"> Inactive</option>
                      </select>
                  </div>
                  
                  <button type="submit" class="btn app-btn-primary" >Save  </button>
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
                        <h4 class="app-card-title">Uploaded Contents</h4>
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
                        <th class="cell">S/N</th>
                        <th class="cell">Content Title</th> 
                        <th class="cell">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="cell">1</td>
                        <td class="cell"><span class="truncate">Primary 1 ..</span></td>
                        <td class="cell"><a class="btn-sm app-btn-secondary" href="#">update</a>
                        </td>
                        
                      </tr> 

                      <tr>
                        <td class="cell">2</td>
                        <td class="cell"><span class="truncate">Primary 2 ..</span></td>
                        <td class="cell"><a class="btn-sm app-btn-secondary" href="#">update</a>
                        </td>
                      </tr> 

                      <tr>
                        <td class="cell">3</td>
                        <td class="cell"><span class="truncate">Primary 3 ..</span></td>
                        <td class="cell"><a class="btn-sm app-btn-secondary" href="#">update</a>
                        </td>
                        
                      </tr>                 
    
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
