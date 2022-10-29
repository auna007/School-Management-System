<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
           <h3>Applicant's Manager</h3>
          </div><!--//app-card-->

          <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Search by Applicant ID</h1>
                    </div>
                    <div class="col-auto">
                         <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                               
                                <div class="col-auto">
                                       <form>
                                        <div class="col-auto">
                                            <input wire:model="application_no" type="text" class="form-control search-orders" placeholder="Applicant ID">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit"  wire:click.prevent="search()" class="btn app-btn-secondary">Search</button>
                                        </div>
                                         </form>
                                </div><!--//col-->
                                <div class="col-auto">
                                    <select wire:model="sessions" class="form-select w-auto" name="sessions">
                                          <option value="">Select Session</option>
                                          @foreach($sessions as $session)
                                          <option value="{{$session->id}}" @if(!empty($session_get)){{ $session_get == $session->id ? 'selected' : ''}}@endif>{{str_replace('_', '/',$session->session)}}</option>
                                          @endforeach
                                         
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
                      
                      
                    <table class="table">
                    <thead>
                      <tr>
                        
                        <th class="cell">Application No.</th>
                        <th class="cell">Applicant Name</th>
                        <th class="cell">Previous Sch</th>
                        <th class="cell">Class Attended</th>
                        <th class="cell">Propose Class</th>
                        <th class="cell">Action</th>
                        
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                        <tr colspan="6"><td class="cell">{{$applicant->application_no ?? ''}} - {{$applicants->previous_sch ?? ''}}</td></tr>

                        @if(!empty($applicants))
                       @foreach($applicants as $applicant)

                       <tr>
                        <td class="cell">{{$applicant->application_no ?? ''}} - {{$applicants->application_no ?? ''}}</td>
                        <td class="cell"><span class="truncate">{{$applicant->f_name ?? ''.' '.$applicant->surname ?? ''}}</span></td>
                        <td class="cell">{{$applicant->previous_sch ?? ''}}</td>
                        <td class="cell">{{$applicant->class->class_title ?? ''}}</td>
                        <td class="cell">{{$applicant->propose_class->class_title ?? ''}}</td>
                        <td class="cell"><a href="{{route('view_applicant_details', ['id'=>$applicant->id])}}"><span> view </span></a> | 
                        <a href="{{route('admit.applicant', ['id'=>$applicant->id])}}"><span> Admit</span></a>
                    </td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                          <td colspan="6"><p class="alert alert-danger">No record found </p> </td>
                      </tr>
                      @endif                       
                          
                    </tbody>
                  </table>

                    </div><!--//row-->
                  </div><!--//item-->       
                  
                </div><!--//app-card-body-->
                
                    </div><!--//app-card-->
                  </div><!--//col-->
                  </div>
                </div><!--//row-->
                
                <div class="app-card-footer p-4 mt-auto">
                <center> <a href="{{route('view.pending_applications')}}" class="btn app-btn-secondary"> View Applicants</a> </center> 


