@extends('user::layouts.master')

@section('content')
    
    <div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          
          
          
          <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
           <h3>Students Payment Manager</h3>
          </div><!--//app-card-->
            
          
                <div class="row gy-4">
                  <div class="col-12 col-lg-12">
                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                      <div class="col-auto">
                        <div class="app-icon-holder">
                        <img src="" width="30px" height="30px">
                      </div><!--//icon-holder-->
                            
                      </div><!--//col-->
                      <div class="col-auto">
                        <h4 class="app-card-title">List of Students</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                  <div class="item border-bottom py-3">
                    
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      
                      
                    <table class="table app-table-hover mb-0 text-left">
                    <thead>
                      <tr>
                        
                        <th class="cell">Admission No.</th>
                        <th class="cell">Class</th>
                        <th class="cell">Section</th>
                        <th class="cell">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="cell">SE/BIO-CSC/3029</td>
                        <td class="cell"><span class="truncate">Primary 5</span></td>
                        <td class="cell">Section A</td>
                        <td class="cell"><a href="payment-history.php"><span class="badge bg-success">view payment history</span></a></td>
                        
                      </tr>
                      <tr>
                        <td class="cell">SE/BIO-CSC/3029</td>
                        <td class="cell"><span class="truncate">Primary 5</span></td>
                        <td class="cell">Section A</td>
                        <td class="cell"><a href="payment-history.php"><span class="badge bg-success">view payment history</span></a></td>
                        
                      </tr>
                      <tr>
                        <td class="cell">SE/BIO-CSC/3029</td>
                        <td class="cell"><span class="truncate">Primary 5</span></td>
                        <td class="cell">Section A</td>
                        <td class="cell"><a href="payment-history.php"><span class="badge bg-success">view payment history</span></a></td>
                        
                      </tr>
                      <tr>
                        <td class="cell">SE/BIO-CSC/3029</td>
                        <td class="cell"><span class="truncate">Primary 5</span></td>
                        <td class="cell">Section A</td>
                        <td class="cell"><a href="payment-history.php"><span class="badge bg-success">view payment history</span></a></td>
                        
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
