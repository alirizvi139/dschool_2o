@extends('backEnd.master')

@section('title')
@lang('lang.contact') @lang('lang.message')
@endsection

@section('mainContent')
    <section class="sms-breadcrumb mb-40 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1>@lang('lang.contact') @lang('lang.message')</h1>
                <div class="bc-pages">
                    <a href="{{route('dashboard')}}">@lang('lang.dashboard')</a>
                    <a href="#">@lang('lang.front_settings')</a>
                    <a href="#">@lang('lang.contact') @lang('lang.message')</a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 no-gutters">
                            <div class="main-title">
                                <h3 class="mb-0">@lang('lang.contact') @lang('lang.message')</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ">
                            <table id="table_id" class="display school-table" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="10%">@lang('lang.name')</th>
                                        <th width="20%">@lang('lang.email')</th>
                                        <th width="10%">@lang('lang.subject')</th>
                                        <th width="10%">@lang('lang.message')</th>
                                        <th width="10%">@lang('lang.action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contact_messages as $contact_message)
                                    <tr>
                                        <td width="10%">{{$contact_message->name}}</td>
                                        <td width="20%">{{$contact_message->email}}</td>
                                        <td width="10%">{{$contact_message->subject}}</td>
                                        <td width="10%">{{$contact_message->message}}</td>
                                        <td width="10%">
                                            @if(userPermission(519))
                                                <a class="primary-btn icon-only fix-gr-bg" data-toggle="modal"
                                                data-target="#deleteDocumentModal{{$contact_message->id}}" href="#">
                                                 <span class="ti-trash"></span>
                                                </a>
                                             @endif
                                        </td>
                                    </tr>
                                    <div class="modal fade admin-query" id="deleteDocumentModal{{$contact_message->id}}">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">@lang('lang.delete') @lang('lang.message')</h4>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        &times;
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <h4>@lang('lang.are_you_sure_to_delete')</h4>
                                                    </div>
                                                    <div class="mt-40 d-flex justify-content-between">
                                                        <button type="button" class="primary-btn tr-bg"
                                                                data-dismiss="modal">@lang('lang.cancel')
                                                        </button>
                                                        <a class="primary-btn fix-gr-bg"
                                                           href="{{route('delete-message', [$contact_message->id])}}">
                                                            @lang('lang.delete')
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
