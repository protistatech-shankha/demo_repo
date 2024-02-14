@extends('layouts.master')
@section('content')

	<!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="submenu">
                        <a href="{{ route('home') }}" class="">
                            <i class="la la-dashboard"></i>
                            <span> Dashboard</span> 
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                          <!-- @if (Auth::user()->role_name=='Admin')
                            <li><a class="active" href="{{ route('home') }}">Admin Dashboard</a></li>
                            
                            @else
                            <li><a href="{{ route('em/dashboard') }}">Employee Dashboard</a></li>
                            @endif -->
                        </ul>
                    </li>
                    @if (Auth::user()->role_name=='Admin')
                       <!-- <li class="menu-title"> <span>Authentication</span> </li>
                        <li class="submenu">
                            <a href="#">
                                <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                            </a>
                            <ul style="display: none;">
                                <li><a href="{{ route('userManagement') }}">All User</a></li>
                                <li><a href="{{ route('activity/log') }}">Activity Log</a></li>
                                <li><a href="{{ route('activity/login/logout') }}">Activity User</a></li>
                            </ul>
                        </li>-->
                         <li class="menu-title"> <span>Employees</span> </li>
                            <li class="submenu">
                                <a href="#">
                                    <i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span>
                                </a>
                                <ul style="display: none;">
                                    <li><a href="{{ route('all/employee/card') }}">All Employees</a></li>
                                    <li><a href="{{ route('form/holidays/new') }}">Holidays</a></li>
                                    <li><a href="{{ route('form/leaves/new') }}">Leaves (Admin) 
                                        <span class="badge badge-pill bg-primary float-right">1</span></a>
                                    </li>
                                    <li><a href="{{route('form/leavesemployee/new')}}">Leaves (Employee)</a></li>
                                    <!--<li><a href="{{ route('form/leavesettings/page') }}">Leave Settings</a></li>
                                    <li><a href="{{ route('attendance/page') }}">Attendance (Admin)</a></li>
                                    <li><a href="{{ route('attendance/employee/page') }}">Attendance (Employee)</a></li>-->
                                    <li><a href="departments.html">Departments</a></li>
                                    <li><a href="designations.html">Designations</a></li>
                                    <!---<li><a href="timesheet.html">Timesheet</a></li>
                                    <li><a href="shift-scheduling.html">Shift & Schedule</a></li>
                                    <li><a href="overtime.html">Overtime</a></li>-->
                                </ul>
                            </li>
                   
                   
                   <!--- <li class="menu-title"> <span>HR</span> </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-files-o"></i>
                            <span> Sales </span> 
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="estimates.html">Estimates</a></li>
                            <li><a href="{{ route('form/invoice/view/page') }}">Invoices</a></li>
                            <li><a href="payments.html">Payments</a></li>
                            <li><a href="expenses.html">Expenses</a></li>
                            <li><a href="provident-fund.html">Provident Fund</a></li>
                            <li><a href="taxes.html">Taxes</a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-money"></i>
                        <span> Payroll </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/salary/page') }}"> Employee Salary </a></li>
                            <li><a href="{{ url('form/salary/view') }}"> Payslip </a></li>
                            <li><a href="{{ route('form/payroll/items') }}"> Payroll Items </a></li>
                        </ul>
                    </li>--->
                    <li class="submenu"> <a href="#"><i class="la la-pie-chart"></i>
                        <span> Reports </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <!-- <li><a href="{{ route('form/expense/reports/page') }}"> Expense Report </a></li>
                            <li><a href="{{ route('form/invoice/reports/page') }}"> Invoice Report </a></li>
                            <li><a href="payments-reports.html"> Payments Report </a></li>
                            <li><a href="employee-reports.html"> Employee Report </a></li>
                            <li><a href="payslip-reports.html"> Payslip Report </a></li>
                            <li><a href="attendance-reports.html"> Attendance Report </a></li>-->
                            <li><a href="{{ route('form/leave/reports/page') }}"> Leave Report </a></li>
                           <!-- <li><a href="{{ route('form/daily/reports/page') }}"> Daily Report </a></li>-->
                        </ul>
                    </li>
                     @endif
                   <!-- <li class="menu-title"> <span>Performance</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-graduation-cap"></i>
                        <span> Performance </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/performance/indicator/page') }}"> Performance Indicator </a></li>
                            <li><a href="{{ route('form/performance/page') }}"> Performance Review </a></li>
                            <li><a href="{{ route('form/performance/appraisal/page') }}"> Performance Appraisal </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-edit"></i>
                        <span> Training </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/training/list/page') }}"> Training List </a></li>
                            <li><a href="{{ route('form/trainers/list/page') }}"> Trainers</a></li>
                            <li><a href="{{ route('form/training/type/list/page') }}"> Training Type </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>Administration</span> </li>
                    <li> <a href="assets.html"><i class="la la-object-ungroup">
                        </i> <span>Assets</span></a>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-briefcase"></i>
                        <span> Jobs </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="user-dashboard.html"> User Dasboard </a></li>
                            <li><a href="jobs-dashboard.html"> Jobs Dasboard </a></li>
                            <li><a href="jobs.html"> Manage Jobs </a></li>
                            <li><a href="manage-resumes.html"> Manage Resumes </a></li>
                            <li><a href="shortlist-candidates.html"> Shortlist Candidates </a></li>
                            <li><a href="interview-questions.html"> Interview Questions </a></li>
                            <li><a href="offer_approvals.html"> Offer Approvals </a></li>
                            <li><a href="experiance-level.html"> Experience Level </a></li>
                            <li><a href="candidates.html"> Candidates List </a></li>
                            <li><a href="schedule-timing.html"> Schedule timing </a></li>
                            <li><a href="apptitude-result.html"> Aptitude Results </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>Pages</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-user"></i>
                        <span> Profile </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="profile.html"> Employee Profile </a></li>
                        </ul>
                    </li>--->
                    @if (Auth::user()->role_name=='Employee')
                       <li class="menu-title"> <span>Leaves</span> </li>
                            <li class="submenu">
                                <a href="#">
                                    <i class="la la-user"></i> <span> Leaves</span> <span class="menu-arrow"></span>
                                </a>
                                <ul style="display: none;">
                                    
                                    <li><a href="{{route('form/leavesemployee/new')}}">Leaves 
                                    </a></li>
                                    
                                </ul>
                            </li>
                   
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <!-- /Page Header -->
            <div class="card mb-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#">
                                            <img alt="" src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{ Auth::user()->name }}</h3>
                                                <h6 class="text-muted">{{ Auth::user()->department }}</h6>
                                                <small class="text-muted">{{ Auth::user()->position }}</small>
                                                <div class="staff-id">Employee ID : {{ Auth::user()->rec_id }}</div>
                                                <div class="small doj text-muted">Date of Join : {{ Auth::user()->join_date }}</div>
                                                <div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send Message</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Phone:</div>
                                                    <div class="text"><a href="">{{ Auth::user()->phone_number }}</a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    <div class="text"><a href="">{{ Auth::user()->email }}</a></div>
                                                </li>
                                                @if(!empty($information))
                                                    <li>
                                                        @if(Auth::user()->rec_id == $information->rec_id)
                                                        <div class="title">Birthday:</div>
                                                        <div class="text">{{date('d F, Y',strtotime($information->birth_date)) }}</div>
                                                        @else
                                                        <div class="title">Birthday:</div>
                                                        <div class="text">N/A</div>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        @if(Auth::user()->rec_id == $information->rec_id)
                                                        <div class="title">Address:</div>
                                                        <div class="text">{{ $information->address }}</div>
                                                        @else
                                                        <div class="title">Address:</div>
                                                        <div class="text">N/A</div>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        @if(Auth::user()->rec_id == $information->rec_id)
                                                        <div class="title">Gender:</div>
                                                        <div class="text">{{ $information->gender }}</div>
                                                        @else
                                                        <div class="title">Gender:</div>
                                                        <div class="text">N/A</div>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <div class="title">Reports to:</div>
                                                        <div class="text">
                                                            <div class="avatar-box">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                                                                </div>
                                                            </div>
                                                            <a href="profile.html">
                                                                {{ Auth::user()->name }}
                                                            </a>
                                                        </div>
                                                    </li>
                                                    @else
                                                    <li>
                                                        <div class="title">Birthday:</div>
                                                        <div class="text">N/A</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Address:</div>
                                                        <div class="text">N/A</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Gender:</div>
                                                        <div class="text">N/A</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Reports to:</div>
                                                        <div class="text">
                                                            <div class="avatar-box">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                                                                </div>
                                                            </div>
                                                            <a href="profile.html">
                                                                {{ Auth::user()->name }}
                                                            </a>
                                                        </div>
                                                    </li>
                                                @endif    
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        
        <!-- /Page Content -->
        @if(!empty($information))
         <!-- Profile Modal -->
         <div id="profile_info" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Profile Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('profile/information/save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="profile-img-wrap edit-img">
                                        <img class="inline-block" src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                                        <div class="fileupload btn">
                                            <span class="btn-text">edit</span>
                                            <input class="upload" type="file" id="image" name="images">
                                            <input type="hidden" name="hidden_image" id="e_image" value="{{ Auth::user()->avatar }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                                                <input type="hidden" class="form-control" id="rec_id" name="rec_id" value="{{ Auth::user()->rec_id }}">
                                                <input type="hidden" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Birth Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text" id="birthDate" name="birthDate" value="{{ $information->birth_date }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="select form-control" id="gender" name="gender">
                                                    <option value="{{ $information->gender }}" {{ ( $information->gender == $information->gender) ? 'selected' : '' }}>{{ $information->gender }} </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" id="address" name="address" value="{{ $information->address }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" id="state" name="state" value="{{ $information->state }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" id="" name="country" value="{{ $information->country }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pin Code</label>
                                        <input type="text" class="form-control" id="pin_code" name="pin_code" value="{{ $information->pin_code }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $information->phone_number }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Department <span class="text-danger">*</span></label>
                                        <select class="select" id="department" name="department">
                                            <option value="{{ $information->department }}" {{ ( $information->department == $information->department) ? 'selected' : '' }}>{{ $information->department }} </option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="IT Management">IT Management</option>
                                            <option value="Marketing">Marketing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Designation <span class="text-danger">*</span></label>
                                        <select class="select" id="" name="designation">
                                            <option value="{{ $information->designation }}" {{ ( $information->designation == $information->designation) ? 'selected' : '' }}>{{ $information->designation }} </option>
                                            <option value="Web Designer">Web Designer</option>
                                            <option value="Web Developer">Web Developer</option>
                                            <option value="Android Developer">Android Developer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reports To <span class="text-danger">*</span></label>
                                        <select class="select" id="" name="reports_to">
                                            <option value="{{ $information->reports_to }}" {{ ( $information->reports_to == $information->reports_to) ? 'selected' : '' }}>{{ $information->reports_to }} </option>
                                            @foreach ($user as $users )
                                            <option value="{{ $users->name }}">{{ $users->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Profile Modal -->
        @else
         <!-- Profile Modal -->
         <div id="profile_info" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Profile Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('profile/information/save') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="profile-img-wrap edit-img">
                                        <img class="inline-block" src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                                        <div class="fileupload btn">
                                            <span class="btn-text">edit</span>
                                            <input class="upload" type="file" id="upload" name="upload">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                                                <input type="hidden" class="form-control" id="rec_id" name="rec_id" value="{{ Auth::user()->rec_id }}">
                                                <input type="hidden" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Birth Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text" id="birthDate" name="birthDate">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="select form-control" id="gender" name="gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" id="state" name="state">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" id="" name="country">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pin Code</label>
                                        <input type="text" class="form-control" id="pin_code" name="pin_code">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" id="phoneNumber" name="phone_number">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Department <span class="text-danger">*</span></label>
                                        <select class="select" id="department" name="department">
                                            <option selected disabled>Select Department</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="IT Management">IT Management</option>
                                            <option value="Marketing">Marketing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Designation <span class="text-danger">*</span></label>
                                        
                                        <select class="select" id="" name="designation">
                                            <option selected disabled>Select Designation</option>
                                            <option value="Web Designer">Web Designer</option>
                                            <option value="Web Developer">Web Developer</option>
                                            <option value="Android Developer">Android Developer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reports To <span class="text-danger">*</span></label>
                                        <select class="select" id="" name="reports_to">
                                            <option selected disabled>-- select --</option>
                                            @foreach ($user as $users )
                                            <option value="{{ $users->name }}">{{ $users->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Profile Modal -->
        @endif
    
       
        
        <!-- Family Info Modal -->
        <div id="family_info_modal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Family Informations</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-scroll">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Relationship <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date of birth <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Relationship <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date of birth <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-more">
                                            <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      

        <!-- /Page Content -->
    </div>
@endsection