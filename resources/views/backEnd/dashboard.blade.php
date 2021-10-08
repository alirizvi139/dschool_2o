@extends('backEnd.master')

@section('title') 
  {{@Auth::user()->roles->name}}  @lang('lang.dashboard')
@endsection

@section('mainContent')
<section class="mb-40">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                @if(moduleStatusCheck('SaasSubscription') && moduleStatusCheck('Saas') && auth()->user()->role_id == 1)
                    <h3 class="mb-0">@lang('lang.welcome') - {{@Auth::user()->school->school_name}} | {{@Auth::user()->roles->name}} | 
                        @lang('lang.active') @lang('lang.package') : {{@$package_info['package_name']}}  |
                    @lang('lang.remain_days') : {{@$package_info['remaining_days']}} |
                        @lang('lang.student') : {{@count($totalStudents)}} out {{@$package_info['student_quantity']}}
                    </h3>
                @else
                    <h3 class="mb-3">@lang('lang.welcome') - {{@Auth::user()->school->school_name}} | {{@Auth::user()->roles->name}}</h3>
                @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @if(session()->has('message-success'))
                <div class="alert alert-success">
                   {{ session()->get('message-success') }}
               </div>
               @elseif(session()->has('message-danger'))
               <div class="alert alert-danger">
                  {{ session()->get('message-danger') }}
              </div>
              @endif
          </div>
      </div>
      <div class="row align-items-end">
		<div class="col-xl-9 col-12">
			<div class="box bg-primary-light pull-up" style="
    background: #e1eaf9;
    border-radius: 15px;
    padding: 8px;
">
				<div class="box-body p-xl-0">							
					<div class="row align-items-center">
						<div class="col-12 col-lg-3"><img src="https://eduadmin-template.multipurposethemes.com/bs5/images/svg-icon/color-svg/custom-14.svg" alt=""></div>
						<div class="col-12 col-lg-9">
							<h2 style="
    font-weight: bold;
">Hello Johen, Welcome Back!</h2>
							<p class="text-dark mb-0 fs-16">
								Your course Overcoming the fear of public speaking was completed by 11 New users this week!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-12">
			<div class="box bg-transparent no-shadow">
				<div class="box-body p-xl-0 text-center">							
					<h3 class="px-30 mb-20" style="
    font-weight: bold;
">Have More<br>knowledge to share?</h3>
					<a href="https://app.dschoolpk.com/addstudents"><button type="button" class="waves-effect waves-light w-p100 btn btn-primary"><i class="fa fa-plus me-15"></i> Cheate New Student</button></a>
				</div>
			</div>
		</div>
	</div>
      @if(Auth::user()->is_saas == 0)
      <div class="row">
        @if(userPermission(2))
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="d-block">
                <div class="white-box single-summery dashboard_box1">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="font-weight-bold">@lang('lang.student')</h3>
                            <p class="mb-0">@lang('lang.total') @lang('lang.students')</p>
                        </div>
                        <h1 class="gradient-color2">
                            @if(isset($totalStudents))
                            {{count($totalStudents)}}
                            @endif
                        </h1>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @if(userPermission(3))

        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="d-block">
                <div class="white-box single-summery dashboard_box2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="font-weight-bold">@lang('lang.teachers')</h3>
                            <p class="mb-0">@lang('lang.total') @lang('lang.teachers')</p>
                        </div>
                        <h1 class="gradient-color2">
                            @if(isset($totalStudents))
                            {{count($totalTeachers)}}
                        @endif</h1>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @if(userPermission(4))
        {{-- mt-30-md --}}
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="d-block">
                <div class="white-box single-summery dashboard_box3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="font-weight-bold">@lang('lang.parents')</h3>
                            <p class="mb-0">@lang('lang.total') @lang('lang.parents')</p>
                        </div>
                        <h1 class="gradient-color2">
                            @if(isset($totalParents))
                            {{($totalParents)}}
                        @endif</h1>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @if(userPermission(5))

        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="d-block">
                <div class="white-box single-summery dashboard_box4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="font-weight-bold">@lang('lang.staffs')</h3>
                            <p class="mb-0">@lang('lang.total') @lang('lang.staffs')</p>
                        </div>
                        <h1 class="gradient-color2">
                           @if(isset($totalStaffs))
                           {{count($totalStaffs)}}
                           @endif
                       </h1>
                   </div>
               </div>
           </a>
       </div>
       @endif
   </div>
      @endif

      @if(Auth::user()->is_saas == 1)
     
      <div class="row">
        @if(userPermission(2))

        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="d-block">
                <div class="white-box single-summery">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3>@lang('lang.student')</h3>
                            <p class="mb-0">@lang('lang.total') @lang('lang.students')</p>
                        </div>
                        <h1 class="gradient-color2">
                          
                            @if(isset($totalStudents))
                            {{(count($totalStudents))}}
                            @endif
                        </h1>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @if(userPermission(3)) 

        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="d-block">
                <div class="white-box single-summery">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3>@lang('lang.teachers')</h3>
                            <p class="mb-0">@lang('lang.total') @lang('lang.teachers')</p>
                        </div>
                        <h1 class="gradient-color2">
                            @if(isset($totalTeachers))
                            {{count($totalTeachers)}}
                        @endif</h1>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @if(userPermission(4)) 
        {{-- mt-30-md --}}
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="d-block">
                <div class="white-box single-summery">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3>@lang('lang.parents')</h3>
                            <p class="mb-0">@lang('lang.total') @lang('lang.parents')</p>
                        </div>
                        <h1 class="gradient-color2">
                            @if(isset($totalParents))
                            {{($totalParents)}}
                        @endif</h1>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @if(userPermission(5)) 

        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="d-block">
                <div class="white-box single-summery">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3>@lang('lang.staffs')</h3>
                            <p class="mb-0">@lang('lang.total') @lang('lang.staffs')</p>
                        </div>
                        <h1 class="gradient-color2">
                           @if(isset($totalStaffs))
                           {{count($totalStaffs)}}
                           @endif
                       </h1>
                   </div>
               </div>
           </a>
       </div>
       @endif
        </div>
      @endif
</div>
</section>
@if(userPermission(6))

<section class="" id="incomeExpenseDiv">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-8 col-md-9 col-8">
                <div class="main-title">
                    <h3 class="mb-30"> @lang('lang.income_and_expenses_for') {{date('M')}} {{ $year }} </h3>
                </div>
            </div>
            <div class="offset-lg-2 col-lg-2 text-right col-md-3 col-4">
                <button type="button" class="primary-btn small tr-bg icon-only" id="barChartBtn">
                    <span class="pr ti-move"></span>
                </button>

                <button type="button" class="primary-btn small fix-gr-bg icon-only ml-10"  id="barChartBtnRemovetn">
                    <span class="pr ti-close"></span>
                </button>
            </div>
            <div class="col-lg-12">
                <div class="white-box" id="barChartDiv">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="text-center">
                                @php
                                $setting = generalSetting();
                                @endphp
                                <h1>{{generalSetting()->currency_symbol}}{{number_format($m_total_income)}}</h1>
                                <p>@lang('lang.total_income')</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="text-center">
                                <h1>{{generalSetting()->currency_symbol}}{{number_format($m_total_expense)}}</h1>
                                <p>@lang('lang.total_expenses')</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="text-center">
                                <h1>{{generalSetting()->currency_symbol}}{{number_format($m_total_income - $m_total_expense)}}</h1>
                                <p>@lang('lang.total_profit')</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="text-center">
                                <h1>{{generalSetting()->currency_symbol}}{{number_format($m_total_income)}}</h1>
                                <p>@lang('lang.total_revenue')</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div id="commonBarChart" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


@if(userPermission(7))

<section class="mt-50" id="incomeExpenseSessionDiv">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-8 col-md-9 col-8">
                <div class="main-title">
                    <h3 class="mb-30">@lang('lang.income_and_expenses_for') {{ $year }}</h3>
                </div>
            </div>
            <div class="offset-lg-2 col-lg-2 text-right col-md-3 col-4">
                <button type="button" class="primary-btn small tr-bg icon-only" id="areaChartBtn">
                    <span class="pr ti-move"></span>
                </button>

                <button type="button" class="primary-btn small fix-gr-bg icon-only ml-10"  id="areaChartBtnRemovetn">
                    <span class="pr ti-close"></span>
                </button>
            </div>
            <div class="col-lg-12">
                <div class="white-box" id="areaChartDiv">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="text-center">
                                <h1>{{generalSetting()->currency_symbol}}{{number_format($y_total_income)}}</h1>
                                <p>@lang('lang.total_income')</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="text-center">
                               
                                <h1>{{generalSetting()->currency_symbol}}{{number_format($y_total_expense)}}</h1>
                                <p>@lang('lang.total_expenses')</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="text-center">
                                <h1>{{generalSetting()->currency_symbol}}{{number_format($y_total_income - $y_total_expense)}}</h1>
                                <p>@lang('lang.total_profit')</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="text-center">
                                <h1>{{generalSetting()->currency_symbol}}{{number_format($y_total_income)}}</h1>
                                <p>@lang('lang.total_revenue')</p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div id="commonAreaChart" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


@if(userPermission(8))

<section class="mt-50">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-10">
                <div class="main-title">
                    <h3 class="mb-30">@lang('lang.notice_board')</h3>
                </div>
            </div>
            <div class="col-lg-2 pull-right text-right">
                <a href="{{route('add-notice')}}" class="primary-btn small fix-gr-bg"> <span class="ti-plus pr-2"></span> @lang('lang.add') </a>
            </div>

            <div class="col-lg-12">
                <table class="school-table-style w-100">
                    <thead>
                        <tr>
                            <th>@lang('lang.date')</th>
                            <th>@lang('lang.title')</th>
                            <th>@lang('lang.actions')</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php $role_id = Auth()->user()->role_id; ?>

                      <?php if (isset($notices)) {

                        foreach ($notices as $notice) {
                            $inform_to = explode(',', @$notice->inform_to);
                            if (in_array($role_id, $inform_to)) {
                                ?>
                                <tr>
                                    <td>

                                        {{@$notice->publish_on != ""? dateConvert(@$notice->publish_on):''}}

                                    </td>
                                    <td>{{@$notice->notice_title}}</td>
                                    <td>
                                        <a href="{{route('view-notice',@$notice->id)}}" title="@lang('lang.view') @lang('lang.notice')"  class="primary-btn small tr-bg modalLink" data-modal-size="modal-lg">@lang('lang.view')</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
@endif

<section class="mt-50">
    <div class="container-fluid p-0">
        <div class="row">
            @if(userPermission(9))

            <div class="col-lg-7 col-xl-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">


                            <div id="eventContent" title="Event Details" style="display:none;">
                                @lang('lang.start'): <span id="startTime"></span><br>
                                @lang('lang.end'): <span id="endTime"></span><br><br>
                                <p id="eventInfo"></p>
                                <p><strong><a id="eventLink" href="" target="_blank">@lang('lang.read_more')</a></strong></p>
                            </div>


                            <h3 class="mb-30">@lang('lang.calendar')</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <div class='common-calendar'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-lg-5 col-xl-4 mt-50-md md_infix_50">
                @if(userPermission(10))

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="main-title">
                            <h3 class="mb-30">@lang('lang.to_do_list')</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right col-md-6 col-6">
                        <a href="#" data-toggle="modal" class="primary-btn small fix-gr-bg" data-target="#add_to_do" title="Add To Do" data-modal-size="modal-md">
                            <span class="ti-plus pr-2"></span>
                            @lang('lang.add')
                        </a>
                    </div>
                </div>
                @endif

                <div class="modal fade admin-query" id="add_to_do">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">@lang('lang.add_to_do')</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                             <div class="container-fluid">
                                 {{ Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'saveToDoData',
                                 'method' => 'POST', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return validateToDoForm()']) }}

                                 <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row mt-25">
                                            <div class="col-lg-12" id="sibling_class_div">
                                                <div class="input-effect">
                                                    <input  class="primary-input form-control" type="text" name="todo_title" id="todo_title">
                                                    <label>@lang('lang.to_do_title') *<span></span> </label>
                                                    <span class="focus-border"></span>
                                                    <span class="modal_input_validation red_alert"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-30">
                                            <div class="col-lg-12" id="">
                                                <div class="no-gutters input-right-icon">
                                                    <div class="col">
                                                        <div class="input-effect">
                                                            <input class="read-only-input primary-input date form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" id="startDate" type="text" autocomplete="off" readonly="true" name="date" value="{{date('m/d/Y')}}">
                                                            <label>@lang('lang.date') <span></span> </label>
                                                            @if ($errors->has('date'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('date') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button class="" type="button">
                                                            <i class="ti-calendar" id="start-date-icon"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 text-center">
                                            <div class="mt-40 d-flex justify-content-between">
                                                <button type="button" class="primary-btn tr-bg" data-dismiss="modal">@lang('lang.cancel')</button>
                                                <input class="primary-btn fix-gr-bg submit" type="submit" value="@lang('lang.save')">
                                            </div>
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box school-table">
                        <div class="row to-do-list mb-20">
                            <div class="col-md-6 col-6">
                                <button class="primary-btn small fix-gr-bg" id="toDoList">@lang('lang.incomplete')</button>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="primary-btn small tr-bg" id="toDoListsCompleted">@lang('lang.completed')</button>
                            </div>
                        </div>
                        <input type="hidden" id="url" value="{{url('/')}}">
                        <div class="toDoList">
                            @if(count(@$toDos->where('complete_status','P')) > 0)

                            @foreach($toDos->where('complete_status','P') as $toDoList)
                            <div class="single-to-do d-flex justify-content-between toDoList" id="to_do_list_div{{@$toDoList->id}}">
                                <div>
                                    <input type="checkbox" id="midterm{{@$toDoList->id}}" class="common-checkbox complete_task" name="complete_task" value="{{@$toDoList->id}}">

                                    <label for="midterm{{@$toDoList->id}}">
                                        <input type="hidden" id="id" value="{{@$toDoList->id}}">
                                        <input type="hidden" id="url" value="{{url('/')}}">
                                        <h5 class="d-inline">{{@$toDoList->todo_title}}</h5>
                                        <p class="ml-35">
                                            {{$toDoList->date != ""? dateConvert(@$toDoList->date):''}}

                                        </p>
                                    </label>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="single-to-do d-flex justify-content-between">
                                @lang('lang.no_do_lists_assigned_yet')
                            </div>

                            @endif
                        </div>


                        <div class="toDoListsCompleted">
                            @if(count(@$toDos->where('complete_status','C'))>0)

                            @foreach($toDos->where('complete_status','C') as $toDoListsCompleted)

                            <div class="single-to-do d-flex justify-content-between" id="to_do_list_div{{@$toDoListsCompleted->id}}">
                                <div>
                                    <h5 class="d-inline">{{@$toDoListsCompleted->todo_title}}</h5>
                                    <p class="">

                                     {{@$toDoListsCompleted->date != ""? dateConvert(@$toDoListsCompleted->date):''}}

                                 </p>
                             </div>
                         </div>
                         @endforeach
                         @else
                         <div class="single-to-do d-flex justify-content-between">
                            @lang('lang.no_do_lists_assigned_yet')
                        </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>


<div id="fullCalModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="modalTitle" class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span> <span class="sr-only">@lang('lang.close')</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="" alt="There are no image" id="image" height="150" width="auto">
                <div id="modalBody"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="primary-btn tr-bg" data-dismiss="modal">@lang('lang.close')</button>
            </div>
        </div>
    </div>
</div>

{{-- Dashboard Secound Graph Start  --}}

{{-- @php
@$chart_data = "";

for($i = 1; $i <= date('d'); $i++){

    $i = $i < 10? '0'.$i:$i;
    @$income = App\SmAddIncome::monthlyIncome($i);
    @$expense = App\SmAddIncome::monthlyExpense($i);

    @$chart_data .= "{ day: '" . $i . "', income: " . @$income . ", expense:" . @$expense . " },";
}
@endphp

@php
@$chart_data_yearly = "";

for($i = 1; $i <= date('m'); $i++){

    $i = $i < 10? '0'.$i:$i;

    @$yearlyIncome = App\SmAddIncome::yearlyIncome($i);

    @$yearlyExpense = App\SmAddIncome::yearlyExpense($i);

    @$chart_data_yearly .= "{ y: '" . $i . "', income: " . @$yearlyIncome . ", expense:" . @$yearlyExpense . " },";
    
}
@endphp --}}

{{-- Dashboard Secound Graph End  --}}


@endsection

@section('script')

<script type="text/javascript">
    function barChart(idName) {
        window.barChart = Morris.Bar({
            element: 'commonBarChart',
            data: [ <?php echo $chart_data; ?> ],
            xkey: 'day',
            ykeys: ['income', 'expense'],
            labels: ['Income', 'Expense'],
            barColors: ['#8a33f8', '#f25278'],
            resize: true,
            redraw: true,
            gridTextColor: '#1d677a',
            gridTextSize: 12,
            gridTextFamily: '"Poppins", sans-serif',
            barGap: 4,
            barSizeRatio: 0.3
        });
    }

    const monthNames = ["", "Jan", "Feb", "Mar", "Apr", "May", "Jun",
    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];

    function areaChart() {
        window.areaChart = Morris.Area({
            element: 'commonAreaChart',
            data: [ <?php echo $chart_data_yearly; ?> ],
            xkey: 'y',
            parseTime: false,
            ykeys: ['income', 'expense'],
            labels: ['Income', 'Expense'],
            xLabelFormat: function (x) {
                var index = parseInt(x.src.y);
                return monthNames[index];
            },
            xLabels: "month",
            labels: ['Income', 'Expense'],
            hideHover: 'auto',
            lineColors: ['rgba(124, 50, 255, 0.5)', 'rgba(242, 82, 120, 0.5)'],
        });
    }

</script>

<script type="text/javascript">
       if ($('.common-calendar').length) {
        $('.common-calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#image').attr('src',event.url);
                    $('#fullCalModal').modal();
                    return false;
                },
            height: 650,
            events: <?php echo json_encode($calendar_events);?> ,
        });
    }
</script>
@endsection

