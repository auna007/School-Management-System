<?php

namespace Modules\Applicant\Http\Livewire;

use Livewire\Component;
use Modules\Applicant\Entities\Applicant;
use Modules\User\Entities\SessionSetting;

class ApplicantDetails extends Component
{
    
    public $application_no = '';
    public $applicants, $sessions;
    

    public static function search()
    {

        $this->applicants = Applicant::where('application_no', $this->application_no)->get();
        $this->sessions = SessionSetting::all();
        return view('applicant::livewire.applicant-details');
    }

    public function render()
    {
            $this->sessions = SessionSetting::all();   
            return view('applicant::livewire.applicant-details');
         
    }
}
