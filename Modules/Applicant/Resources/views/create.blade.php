<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="refresh" content="{{config('session.lifetime')*60}}">
    <meta name="keywords" content="">
    <meta name="description"
        content="">
    <title>Applicant Dashboard</title>
    <!-- Favicon icon -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
 
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- chartist CSS -->
    <link href="{{asset('applicant/css/chartist.min.css') }}" rel="stylesheet">
    <link href="{{asset('applicant/css/chartist-init.css') }}" rel="stylesheet">
    <link href="{{asset('applicant/css/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="{{asset('applicant/css/c3.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('applicant/css/style.min.css') }}" rel="stylesheet">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">            
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ms-4" href="#">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="" alt="Applicant Form" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                           <!-- <img src="" alt="" class="dark-logo" /> -->

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <marquee behavior="scroll" directtion="left" style="color: white;"> Applicant can fill the form below and make payment for processing fee</marquee>
                    
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <br>
                        <li class="sidebar-item"><h5> <center>Application Status</center></h5> <hr> </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#home" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Personal Information</span></a>
                        </li>
                            @if(Auth::user()->surname && Auth::user()->f_name && Auth::user()->email && Auth::user()->gender && Auth::user()->address && Auth::user()->state)
                            <span style="color:red"><center>
                            Submitted <i class="mdi me-2 mdi-code-tags-check"></i>
                             </center></span><hr>
                            @else 
                            <span style="color:green"><center> <i class="mdi me-2 mdi-information-outline"></i>required</center></span> <hr>
                            @endif

                       
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#profile" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                            class="hide-menu">Health Information</span></a></li>
                            @if(Auth::user()->blood_group && Auth::user()->disability && Auth::user()->allergic_info)
                            <span style="color:red"><center>
                            Submitted <i class="mdi me-2 mdi-code-tags-check"></i>
                             </center></span><hr>
                            @else 
                            <span style="color:green"><center> <i class="mdi me-2 mdi-information-outline"></i>required</center></span> <hr>
                            @endif

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="#settings" aria-expanded="false"><i
                            class="mdi me-2 mdi-emoticon"></i><span class="hide-menu">Guardian Information</span></a></li>
                            @if(Auth::user()->guardian_name && Auth::user()->relationship && Auth::user()->g_address)
                            <span style="color:red"><center>
                            Submitted <i class="mdi me-2 mdi-code-tags-check"></i>
                             </center></span><hr>
                            @else 
                            <span style="color:green"><center> <i class="mdi me-2 mdi-information-outline"></i>required</center></span> <hr>
                            @endif


                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#education" aria-expanded="false">
                                <i class="mdi me-2 mdi-book-open"></i><span class="hide-menu">Previous Education</span></a>
                        </li>

                         @if(Auth::user()->guardian_name && Auth::user()->relationship && Auth::user()->g_address)
                        <span style="color:red"><center>
                        Submitted <i class="mdi me-2 mdi-code-tags-check"></i>
                         </center></span><hr>
                        @else 
                        <span style="color:blue;"><center>Null <i class="mdi me-2 mdi-flask-empty-outline"></i></center></span><hr>
                        @endif                        

                        <span style="color:red"><center>Click on the processing fee button to make payment for the application</center></span>

                        <li class="text-center p-20 upgrade-btn">
                            <a href="#"
                                class="btn btn-warning text-white mt-4" target="_blank">Processing fee</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="mdi mdi-help-circle"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="{{ route('applicant.logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                     <form id="logout-form" action="{{ route('applicant.logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                    </div>
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('images/profile-bg.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body little-profile text-center">
                                <div class="pro-img">
                                    @isset(Auth::user()->passport)
                                    <img src="{{ asset('applicant_passport/'.Auth::user()->passport.'') }}">
                                    @else 
                                    <img src="{{ asset('images/4.jpg') }}" alt="Passport">
                                    @endisset

                                </div>
                                @if(Session::has('success_passport'))
                                <p class="alert alert-success" role="alert" style="color:red">
                                <i class="mdi me-2 mdi-information-outline"></i> {{ Session::get('success_passport') }}                               
                                </p>
                                @else
                                <h3 class="mb-0">Dear Applicant</h3>
                                <p>Upload your passport. <br> <span style="color:red">Max size:100KB (50px by 50px)</span></p>
                                @endif
                                <form method="POST" action="{{route('passport.create', ['id'=>Auth::user()->id])}}" enctype="multipart/form-data">
                                    @csrf

                                <input type="file" class="form-control" name="passport" id="passport">
                                <button type="submit" class="mt-2 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Upload</button>
                            </form>                                
                            </div>
                        </div>
                        <!-- Column -->
                        
                    </div>
                    <div class="col-lg-8 col-xlg-9">
                        @if(Session::has('success'))
                                <p class="alert alert-success" role="alert" style="color:red">
                                <i class="mdi me-2 mdi-information-outline"></i>{{ Session::get('success') }}                               
                                </p>
                                @endif
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home"
                                        role="tab">Personal Info</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile"
                                        role="tab">Health Info</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#settings"
                                        role="tab">Guardian Info</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#education"
                                        role="tab">Previous Education</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                    <div class="row">

                                        <form class="form-horizontal form-material mx-2" method="POST" action="{{route('personal_info.create', ['id'=>Auth::user()->id])}}">
                                            <div class="form-group">
                                                @csrf
                                                <label class="col-md-12">Surname</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="surname" id="surname" 
                                                        class="form-control form-control-line ps-0" value="{{Auth::user()->surname ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">First Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="f_name" id="f_name" 
                                                        class="form-control form-control-line ps-0" value="{{Auth::user()->f_name ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Middle Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="m_name" id="m_name" 
                                                        class="form-control form-control-line ps-0" value="{{Auth::user()->m_name ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12"> Gender</label>
                                                <div class="col-sm-12 border-bottom">
                                                    <select class="form-select shadow-none border-0 form-control-line ps-0" name="gender" id="gender">
                                                        <option value="{{Auth::user()->gender ?? ''}}">@if(Auth::user()->gender) {{Auth::user()->gender}} @else Select Gender @endif</option>
                                                        @if(Auth::user()->gender && Auth::user()->gender == 'Female')
                                                        <option value="Male">Male</option>
                                                        @elseif(Auth::user()->gender && Auth::user()->gender == 'Male')
                                                        <option value="Female">Female</option> 
                                                        @else
                                                         <option value="Male">Male</option>
                                                         <option value="Female">Female</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="phone_no" id="phone_no" 
                                                        class="form-control form-control-line ps-0" value="{{Auth::user()->phone_no ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Address</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" name="address" id="address" 
                                                        class="form-control form-control-line ps-0">
                                                            {{Auth::user()->address ?? ''}}
                                                        </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" 
                                                        class="form-control form-control-line ps-0" name="email"
                                                        id="email" value="{{Auth::user()->email}}">
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label class="col-sm-12">State</label>
                                                <div class="col-sm-12 border-bottom">
                                                    <select class="form-select shadow-none border-0 form-control-line ps-0" name="state" id="state">
                                                        <option>Select State ....</option>
                                                        <option value="india">India</option>
                                                        <option value="usa">Usa</option>
                                                        <option value="canada">Canada</option>
                                                        <option value="Thailand">Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">LGA</label>
                                                <div class="col-sm-12 border-bottom">
                                                    <select class="form-select shadow-none border-0 form-control-line ps-0" name="lga" id="lga">
                                                        <option>Select LGA .....</option>
                                                        <option value="india">India</option>
                                                        <option value="usa">Usa</option>
                                                        <option value="canada">Canada</option>
                                                        <option value="Thailand">Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success text-white">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>            
                                                    
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            
                                            <form class="form-horizontal form-material mx-2" method="POST" action="{{route('health_info.create', ['id'=>Auth::user()->id])}}">
                                            <div class="form-group">
                                                @csrf
                                                <label class="col-md-12">Blood Group</label>
                                                <div class="col-md-12">
                                                    <input type="text"
                                                        class="form-control form-control-line ps-0" name="blood_group" value="{{Auth::user()->blood_group ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Disability</label>
                                                <div class="col-md-12">
                                                    <input type="text" 
                                                        class="form-control form-control-line ps-0" name="disability" value="{{Auth::user()->disability ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Allergic Info</label>
                                                <div class="col-md-12">
                                                    <input type="text" 
                                                        class="form-control form-control-line ps-0" name="allergic_info" value="{{Auth::user()->allergic_info ?? ''}}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success text-white">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material mx-2" method="POST" action="{{route('guardian_info.create', ['id'=>Auth::user()->id])}}">
                                            <div class="form-group">
                                                @csrf
                                                <label class="col-md-12">Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" 
                                                        class="form-control form-control-line ps-0" name="guardian_name" value="{{Auth::user()->guardian_name ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Relationship</label>
                                                <div class="col-md-12">
                                                    <input type="text" 
                                                        class="form-control form-control-line ps-0" name="relationship" value="{{Auth::user()->relationship ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" 
                                                        class="form-control form-control-line ps-0" name="g_phone_no" value="{{Auth::user()->g_phone_no ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Contact Address</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5"
                                                        class="form-control form-control-line ps-0" name="g_address"> {{Auth::user()->g_address ?? ''}} </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email <span style="color:red">* optional</span></label>
                                                <div class="col-md-12">
                                                    <input type="email" 
                                                        class="form-control form-control-line ps-0" name="g_email"
                                                        id="g_email" value="{{Auth::user()->g_email ?? ''}}">
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success text-white">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane" id="education" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material mx-2" method="POST" action="{{route('previous_edu.create', ['id'=>Auth::user()->id])}}">
                                           
                                        <p style="color:red; font-size: 12px;">Please applicant should select propose class for this application </p>
                                        <div class="form-group">
                                                @csrf
                                                <label class="col-md-12">Propose Class</label>
                                                <div class="col-md-12">

                                                    <select class="form-select shadow-none border-0 form-control-line ps-0"
                                                    name="propose_class_id">
                                                    <option value="">Select....</option>
                                                    @foreach($classes as $class)
                                                    @php $applicant_propose_class = Auth::user()->propose_class_id @endphp 
                                                     <option value="{{ $class->id ?? ''}}" @if($applicant_propose_class == $class->id) selected @endif>{{$class->class_title ?? ''}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <br>

                                        <p style="color:red; font-size: 12px;">Please fill this section only if you want to do school transfer </p>
                                       
                                        
                                            <div class="form-group">
                                                
                                                <label class="col-md-12">Previous School</label>
                                                <div class="col-md-12">
                                                    <input type="text" 
                                                        class="form-control form-control-line ps-0" name="previous_sch" value="{{Auth::user()->previous_sch ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Class Attended </label>
                                                <div class="col-sm-12 border-bottom">
                                                    <select class="form-select shadow-none border-0 form-control-line ps-0"
                                                    name="class_id">
                                                    <option value="">Select....</option>
                                                    @foreach($classes as $class)
                                                    @php $applicant_class = Auth::user()->class_id @endphp 
                                                     <option value="{{ $class->id ?? ''}}" @if($applicant_class == $class->id) selected @endif>{{$class->class_title ?? ''}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-12">Study Type * <span style="color:red"><sup> for secondary school applicant only </sup> </span></label>
                                                <div class="col-sm-12 border-bottom">
                                                    <select class="form-select shadow-none border-0 form-control-line ps-0"
                                                    name="category_id">
                                                    <option value="">Select.....</option>
                                                    @foreach($categories as $category)
                                                    @php $applicant_category = Auth::user()->category_id @endphp 
                                                     <option value="{{ $category->id ?? ''}}" @if($applicant_category == $category->id) selected @endif>{{ $category->category ?? '' }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success text-white">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->

                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 Developed by ASCON-Tech <span style="float: right;">School Portal version 3.0
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('applicant/js/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('applicant/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('applicant/js/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{asset('applicant/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('applicant/js/sidebarmenu.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart
    <script src="{{asset('applicant/js/chartist.min.js') }}"></script>  
    <script src="{{asset('applicant/js/chartist-plugin-tooltip.min.js') }}"></script> -->
    <!--c3 JavaScript -->
    <script src="{{asset('applicant/js/d3.min.js') }}"></script>
    <script src="{{asset('applicant/js/c3.min.js') }}"></script>
    <!--Custom JavaScript 
    <script src="{{asset('applicant/js/dashboard1.js') }}"></script> -->
    <script src="{{asset('applicant/js/custom.js') }}"></script>
</body>

</html>