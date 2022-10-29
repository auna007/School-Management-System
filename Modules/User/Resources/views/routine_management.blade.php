@extends('user::layouts.master')

@section('content')
    
    <div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          
          
          
          <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
           <h3>Routine Manager</h3>
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
                        <h4 class="app-card-title">Routine Settings Form</h4>
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
                      <label class="form-label">Day </label>
                      <select class="form-control">
                        <option value=""> Select...</option>
                        <option value="1"> Monday</option>
                        <option value="2"> Tuesday</option>
                        <option value="3"> Wednesday</option>
                        <option value="4"> Thursday</option>
                        <option value="5"> Friday</option>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Class</label>
                      <select class="form-control">
                        <option value=""> Select...</option>
                        <option value=""> Primary 1</option>
                        <option value="1"> Primary 2</option>
                        <option value="0"> Primary 3</option>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Subject</label>
                      <select class="form-control">
                        <option value=""> Select...</option>
                        <option value=""> English Language</option>
                        <option value="1"> Mathematics</option>
                        <option value="0"> Social Studies</option>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Period</label>
                      <select class="form-control">
                        <option value=""> Select...</option>
                        <option value=""> Single</option>
                        <option value="1"> Double</option>      
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
                        <h4 class="app-card-title">Class Routine</h4>
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
                        <th class="cell">Day</th>
                        <th class="cell">Class</th> 
                        <th class="cell">Subject</th>
                        <th class="cell">Period</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="cell">1</td>
                        <td class="cell"><span class="truncate">Primary 1 ..</span></td>
                        <td class="cell">ENG
                        </td>
                        <td class="cell"> 7:30AM - 8:10AM</td>
                        
                      </tr> 

                      <tr>
                        <td class="cell">2</td>
                        <td class="cell"><span class="truncate">Primary 2 ..</span></td>
                        <td class="cell">MTH
                        </td>
                        <td class="cell">  8:10AM - 8:40AM</td>
                      </tr> 

                      <tr>
                        <td class="cell">3</td>
                        <td class="cell"><span class="truncate">Primary 3 ..</span></td>
                        <td class="cell">CSC
                        </td>
                        <td class="cell"> 8:40AM - 9:20AM</td>
                        
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
