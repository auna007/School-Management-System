@extends('student::layouts.master')

@section('content')
    <div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          
          
          
          <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
           <h3>Students Manager</h3>
          </div><!--//app-card-->

          <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Search by ID</h1>
                    </div>
                    <div class="col-auto">
                         <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <form class="table-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <input type="text" id="search" name="search" class="form-control search-orders" placeholder="Student ID">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Search</button>
                                        </div>
                                    </form>
                                    
                                </div><!--//col-->
                                <div class="col-auto">
                                    
                                    <select class="form-select w-auto" >
                                          <option selected value="option-1">Class</option>
                                          <option value="option-2">Primary 1</option>
                                          <option value="option-3">Primary 2</option>
                                          <option value="option-4">Primary 3</option>
                                          
                                    </select>
                                </div>
                                <div class="col-auto">
                                    
                                    <select class="form-select w-auto" >
                                          <option selected value="option-1">Section</option>
                                          <option value="option-2">Section A</option>
                                          <option value="option-3">Section B</option>
                                          <option value="option-4">Last 3 months</option>
                                          
                                    </select>
                                </div>
                                <div class="col-auto">                          
                                    <a class="btn app-btn-secondary" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
                                         Report
                                    </a>
                                </div>
                            </div><!--//row-->
                        </div><!--//table-utilities-->
                    </div><!--//col-auto-->
                </div><!--//row-->
            
          
            
            
         
                <div class="row gy-4">
                  <div class="col-12 col-lg-12">
                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                
                <div class="app-card-body px-4 w-100">
                  
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      
                      
                    <table class="table app-table-hover mb-0 text-left">
                    <thead>
                      <tr>
                        
                        <th class="cell">Admission No.</th>
                        <th class="cell">Student Class</th>
                        <th class="cell">Student Section</th>
                        <th class="cell">View Action  </th>
                        <th class="cell">View Action</th>
                        
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="cell">SE/BIO-CSC/3029</td>
                        <td class="cell"><span class="truncate">Primary 5</span></td>
                        <td class="cell">Section A</td>
                        <td class="cell"><a href=""><span>payment history</span></a></td>
                        <td class="cell"><a href=""><span> student dashboard</span></a></td>
                        
                        
                      </tr>
                      <tr>
                        <td class="cell">SE/BIO-CSC/3029</td>
                        <td class="cell"><span class="truncate">Primary 5</span></td>
                        <td class="cell">Section A</td>
                        <td class="cell"><a href=""><span>payment history</span></a></td>
                        <td class="cell"><a href=""><span> student dashboard</span></a></td>
                        
                        
                      </tr>
                      <tr>
                        <td class="cell">SE/BIO-CSC/3029</td>
                        <td class="cell"><span class="truncate">Primary 5</span></td>
                        <td class="cell">Section A</td>
                        <td class="cell"><a href=""><span>payment history</span></a></td>
                        <td class="cell"><a href=""><span> student dashboard</span></a></td>
                        
                        
                      </tr>
                      <tr>
                        <td class="cell">SE/BIO-CSC/3029</td>
                        <td class="cell"><span class="truncate">Primary 5</span></td>
                        <td class="cell">Section A</td>
                        <td class="cell"><a href=""><span>payment history</span></a></td>
                        <td class="cell"><a href=""><span> student dashboard</span></a></td>
                        
                        
                      </tr>
                          
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
