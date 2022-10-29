@extends('user::layouts.master')

@section('content')
   
    <div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          
          
          
          <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
           <h3>Payment Settings</h3>
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
                        <h4 class="app-card-title">Create Payment Category</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                       @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                            </div>
                            @endif    
                      
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                     
                    <form class="settings-form" method="POST" @php if(isset($paymenttype)) { @endphp action="{{route('update.payment_setting', ['id'=>$paymenttype->id])}}" @php } else { @endphp action="{{route('create.payment_setting')}}" @php } @endphp>
                    <div class="mb-3">
                      @csrf
                      <label class="form-label">Payment Title </label>
                      <input type="text" class="form-control" name="title" id="title" value="{{$paymenttype->title ??''}}">
                       @if ($errors->has('title'))
                      <p class="alert" style="color:red">
                      {{ $errors->first('title') }}
                      </p>
                       @endif
                  </div>

                  <div class="mb-3">
                      @csrf
                      <label class="form-label">Payment Amount </label>
                      <input type="number" class="form-control" name="value" id="value" value="{{$paymenttype->value ??''}}">
                       @if ($errors->has('value'))
                      <p class="alert" style="color:red">
                      {{ $errors->first('value') }}
                      </p>
                       @endif
                  </div>

                  <div class="mb-3">
                      <label class="form-label">Status </label>
                      <select class="form-control" name="status" id="status">
                        @if(!empty($paymenttype)) 
                        @if($paymenttype->status == 1)
                        <option value="1" selected> Active</option>
                        <option value="0"> Inactive</option>
                        @else($paymenttype->status == 0)
                        <option value="0" selected> Inactive</option>
                        <option value="1"> Active</option>
                        @endif
                        @endif
                        @if(empty($paymenttype))
                        <option value=""> Select...</option>
                        <option value="1"> Active</option>
                        <option value="0"> Inactive</option>
                        @endif

                      </select>
                      @if ($errors->has('status'))
                      <p class="alert" style="color:red">
                      {{ $errors->first('status') }}
                      </p>
                       @endif
                  </div>
                   @if($paymenttype ?? '') 
                  <button type="submit" class="btn app-btn-primary" >Update </button>
                  @else
                  <button type="submit" class="btn app-btn-primary" >Create </button>
                  @endif
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
                        <h4 class="app-card-title">List of Payment Categories</h4>
                      </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                            @if(Session::has('success_delete'))
                            <div class="alert alert-success" role="alert">
                            {{ Session::get('success_delete') }}
                            </div>
                            @endif 

                            @if(Session::has('success_update'))
                            <div class="alert alert-success" role="danger">
                            {{ Session::get('success_update') }}
                            </div>
                            @endif 
                      
                    </div><!--//row-->
                  </div><!--//item-->
                  <div class="item border-bottom py-3">
                      <table class="table app-table-hover">
                    <thead>
                      <tr>
                        <th class="cell">#</th>
                        <th class="cell">Title</th> 
                        <th class="cell">Amount</th>
                        <th class="cell">Status</th>
                        <th class="cell">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach($paymenttypes as $paymenttype)
                      <tr>
                        <td class="cell">{{$no++}}</td>
                        <td class="cell"><span class="truncate">{{$paymenttype->title}}</span></td>
                        <td class="cell"><span class="truncate">{{$paymenttype->value}}</span></td>
                        @if ($paymenttype->status == 1) <td class="cell">
                          <div class="form-check form-switch mb-3">
                           <input class="form-check-input" type="checkbox" id="settings-switch-1" onchange="update_status('{{$paymenttype['id']}}','0')" data-search="on" @if ($paymenttype->status == 1) checked @endif>
                          </div>
                        </td>
                        @endif
                        @if ($paymenttype->status == 0)
                        <td class="cell">
                          <div class="form-check form-switch mb-3">
                           <input class="form-check-input" type="checkbox" id="settings-switch-1" onchange="update_status('{{$paymenttype['id']}}','1')" data-search="on">
                          </div>
                        </td>
                        @endif
                        <td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('edit.payment_setting', ['id'=>$paymenttype->id])}}">update</a>
                        </td>
                        
                      </tr> 
                      @endforeach
                      
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

@section('script')
    <script>
        function update_status(id, status){

            axios.post('{{route('update.payment_setting_status')}}', {
                status_id: id,
                status: status,
            })
                .then(function (response) {
                })
                .catch(function (error) {
                });
        }

    </script>
   
@endsection

