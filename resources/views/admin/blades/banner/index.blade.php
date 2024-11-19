@extends('admin.core.admin')
@section('content')
<style>
    .btn-group.focus-btn-group{
        display: none;
    }
</style>
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('dashboard.title_dashboard')}}</a></li>
                                <li class="breadcrumb-item active">{{__('dashboard.banner')}}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{__('dashboard.banner')}}</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-12 d-flex justify-between">
                                    <div class="col-6">
                                        @if(Auth::user()->hasRole('Super') || Auth::user()->can('usuario.tornar usuario master') || Auth::user()->can(['usuario.visualizar', 'usuario.remover']))
                                            {{-- <button id="btSubmitDelete" data-route="{{route('admin.dashboard.banner.destroySelected')}}" type="button" class="btSubmitDelete btn btn-danger" style="display: none;">{{__('dashboard.btn_delete_all')}}</button> --}}
                                        @endif
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        @if (Auth::user()->hasRole('Super') || Auth::user()->can('usuario.tornar usuario master') || Auth::user()->can(['usuario.visualizar', 'usuario.criar']))
                                            <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#banner-create"><i class="mdi mdi-plus-circle me-1"></i> {{__('dashboard.btn_create')}}</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="banner-create" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-light">
                                                            <h4 class="modal-title" id="myCenterModalLabel">{{__('dashboard.btn_create')}}</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <form action="{{route('admin.dashboard.banner.store')}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @include('admin.blades.banner.form')  
                                                                <div class="d-flex justify-content-end gap-2">
                                                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">{{__('dashboard.btn_cancel')}}</button>
                                                                    <button type="submit" class="btn btn-success waves-effect waves-light">{{__('dashboard.btn_create')}}</button>
                                                                </div>                                                 
                                                            </form>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        @endif
                                    </div>
                                </div>
                            </div>
    
                            <div class="table-responsive">
                                <table class="table-sortable table table-centered table-nowrap table-striped" id="products-datatable">
                                    <thead>                                        
                                        <tr>
                                            <th></th>
                                            <th class="bs-checkbox">
                                                <label><input name="btnSelectAll" type="checkbox"></label>
                                            </th>
                                            <th>{{__('blades/banner.banner_title')}}</th>
                                            <th>{{__('blades/banner.banner_description')}}</th>
                                            <th>{{__('blades/banner.banner_link')}}</th>
                                            <th>{{__('blades/banner.banner_image_desktop')}}</th>
                                            <th>{{__('blades/banner.banner_image_mobile')}}</th>
                                            <th>{{__('dashboard.created_at')}}</th>
                                            <th>{{__('dashboard.status')}}</th>
                                            <th style="width: 85px;">{{__('dashboard.action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody data-route="">{{--route('admin.dashboard.banner.sorting')--}}
                                        @foreach($banners as $key => $banner)
                                            <tr data-code="{{$banner->id}}">
                                                <td><span class="btnDrag mdi mdi-drag-horizontal font-22"></span></td>
                                                <td class="bs-checkbox">
                                                    <label><input data-index="{{$key}}" name="btnSelectItem" class="btnSelectItem" type="checkbox" value="{{$banner->id}}"></label>
                                                </td>
                                                <td>{{$banner->title}}</td>
                                                <td>{{$banner->description}}</td>
                                                <td>{{$banner->link}}</td>
                                                <td class="table-user">
                                                    @if ($banner->path_image)
                                                        <img src="{{ asset('storage/'.$banner->path_image_desktop) }}" alt="table-user" class="me-2 rounded-circle">
                                                        @else      
                                                        <img src="{{Vite::asset('resources/assets/admin/images/users/user-3.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                                    @endif
                                                    <a href="javascript:void(0);" class="text-body fw-semibold">{{$banner->title}}</a>
                                                </td>
                                                <td class="table-user">
                                                    @if ($banner->path_image)
                                                        <img src="{{ asset('storage/'.$banner->path_image_mobile) }}" alt="table-user" class="me-2 rounded-circle">
                                                        @else      
                                                        <img src="{{Vite::asset('resources/assets/admin/images/users/user-3.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                                    @endif
                                                    <a href="javascript:void(0);" class="text-body fw-semibold">{{$banner->title}}</a>
                                                </td>
                                                <td>
                                                    @php
                                                        $locales = [
                                                            'pt' => 'd/m/Y H:i:s',
                                                            'en' => 'Y-m-d H:i A',          
                                                            'es' => 'Y-m-d H:i A',          

                                                        ];
                                                        $locale = session()->get('locale');
                                                    @endphp
                                                        @if ($banner && $banner->created_at)
                                                            @if (array_key_exists($locale, $locales))
                                                                {{$banner->created_at->format($locales[$locale])}}
                                                                @else
                                                                {{$banner->created_at->format('d/m/Y H:i:s')}}
                                                            @endif
                                                            @else
                                                            -
                                                        @endif
                                                </td>
                                                <td>
                                                    @switch($banner->active)
                                                        @case(0) <span class="badge bg-soft text-danger">{{__('dashboard.inactive')}}</span> @break
                                                        @case(1) <span class="badge bg-soft-success text-success">{{__('dashboard.active')}}</span>@break
                                                    @endswitch                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>
@endsection
