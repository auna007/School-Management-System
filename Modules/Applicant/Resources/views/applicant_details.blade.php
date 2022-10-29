@extends('user::layouts.master')

@section('content')
<div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          
           <br><br>
          
<div class="row gy-4">
                  <div class="col-12 col-lg-6">
                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                      <div class="col-auto">
                        <div class="app-icon-holder">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
                      </div><!--//icon-holder-->
                            
                      </div><!--//col-->
                      <div class="col-auto">
                        <h4 class="app-card-title">Academic Info</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">

                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label mb-2"><strong>Photo</strong></div>
                        <div class="item-data" style="margin-top: 5px;"><img class="profile-image" src="/applicant_passport/{{$applicant->passport ?? 'applicant_passport.jpg'}}" alt="Passport"></div>
                      </div><!--//col-->                      
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Name</strong></div>
                          <div class="item-data" style="margin-top: 5px;">{{$applicant->surname.' '.$applicant->f_name.' '.$applicant->m_name ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Application No.</strong></div>
                          <div class="item-data" style="margin-top: 5px;">
                            {{$applicant->application_no ?? ''}}
                          </div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Email</strong></div>
                          <div class="item-data" style="margin-top: 5px;">{{$applicant->email ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Study Category</strong></div>
                          <div class="item-data" style="margin-top: 5px;"> {{$applicant_category->category ?? ''}}
                            
                          </div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Previous Class</strong></div>
                          <div class="item-data" style="margin-top: 5px;">
                           {{$applicant_class->class_title ?? ''}}
                          </div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Proposed Class</strong></div>
                          <div class="item-data" style="margin-top: 5px;">
                           {{$applicant_propose_class->class_title ?? ''}}
                          </div>
                      </div><!--//col-->
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
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-code-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z"/>
</svg>
                      </div><!--//icon-holder-->
                            
                      </div><!--//col-->
                      <div class="col-auto">
                        <h4 class="app-card-title">Personal Info</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">

                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Religion</strong></div>
                          <div class="item-data" style="margin-top: 5px;">{{$applicant->religion ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Date of Birth </strong></div>
                          <div class="item-data" style="margin-top: 5px;">{{$applicant->dob ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Home Address </strong></div>
                          <div class="item-data" style="margin-top: 5px;">{{$applicant->address ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Phone Number</strong></div>
                          <div class="item-data" style="margin-top: 5px;">{{$applicant->phone_no ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>LGA</strong></div>
                          <div class="item-data" style="margin-top: 5px;">{{$applicant->lga ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>State of Origin</strong></div>
                          <div class="item-data" style="margin-top: 5px;">{{$applicant->state ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Nationality</strong></div>
                          <div class="item-data" style="margin-top: 5px;">Nigeria</div>
                      </div><!--//col-->
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
                        
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
    <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  </svg>
                      
                      </div><!--//icon-holder-->
                            
                      </div><!--//col-->
                      <div class="col-auto">
                        <h4 class="app-card-title">Guardian Info</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">                  
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Name</strong></div>
                          <div class="item-data" style="margin-top: 5px;">{{$applicant->guardian_name ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                      <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Contact Adress</strong></div>
                          <div class="item-data" style="margin-top: 5px;">{{$applicant->g_address ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                   <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Phone number</strong></div>
                          <div class="item-data" style="margin-top: 5px;">{{$applicant->g_phone_no ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  
                </div><!--//app-card-body-->
                
                
               
            </div><!--//app-card-->
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                      <div class="col-auto">
                        <div class="app-icon-holder">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
  </svg>
                      </div><!--//icon-holder-->
                            
                      </div><!--//col-->
                      <div class="col-auto">
                        <h4 class="app-card-title">Health Info</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                  
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Blood Group</strong></div>
                          <div class="item-data" style="margin-top: 5px;"> {{$applicant->blood_group ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Disability </strong></div>
                          <div class="item-data" style="margin-top: 5px;"> {{$applicant->disability ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->

                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Allergic info</strong></div>
                          <div class="item-data" style="margin-top: 5px;"> {{$applicant->allergic_info ?? ''}}</div>
                      </div><!--//col-->
                    </div><!--//row-->
                  </div><!--//item-->
                  
                </div><!--//app-card-body-->
                
               
            </div><!--//app-card-->
                  </div>
                </div><!--//row-->

                <div class="app-card-footer p-4 mt-auto">
                <center> <a class="btn app-btn-primary" href="#">Admit Applicant</a> <span style="margin-left: 10px;"></span> <a href="{{route('view.pending_applications')}}" class="btn app-btn-secondary"> Back to Applicants</a> </center> 
                </div><!--//app-card-footer-->

       </div><!--//container-fluid-->
      </div><!--//app-content-->
    </div>
          
    @endsection