@extends('user::layouts.master')

@section('content')
    <div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">          

                <livewire:applicant::applicant-details />
            
                </div><!--//app-card-footer-->
        
        </div><!--//container-fluid-->
      </div><!--//app-content-->
@endsection

