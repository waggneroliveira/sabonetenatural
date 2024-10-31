@php
    use App\Enums\ModelTypeAudit;
    use App\Models\AuditActivity;
@endphp
@extends('admin.core.admin')
@section('content')
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
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard.audit.index')}}">Auditoria</a>
                                    </li>
                                    <li class="breadcrumb-item active">Visualizar Evento Auditoria</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Visualizar Evento Auditoria</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="card card-body">
                    <div class="mb-2 col-lg-6">
                        <div>
                            <h5>Usuário manipulador</h5>
                        </div>
                        @if($activitie->causer)
                            <!-- Verifica se há um usuário associado (causer) -->
                            <td>{{ $activitie->causer->name }}</td>
                        @else
                            <td>Não encontrado</td>
                        @endif
                    </div>
                    <div class="mb-2 col-lg-6">
                        <div>
                            <h5>Recurso manipulado</h5>
                        </div>
                        {{$modelName = AuditActivity::getModelName($activitie->subject_type)}}
                    </div>
                    <div class="mb-2">
                        <div>
                            <h5>Ação realizada</h5>
                        </div>
                        @switch($activitie->description)
                            @case('created') <span>Criação</span> @break
                            @case('updated') <span>Atualização</span> @break
                            @case('deleted') <span>Deleção</span> @break
                            @case('order_updated') <span>Mudança na ordenação do item</span> @break
                            @case('multiple_deleted') <span>Deleção multipla de itens</span> @break
                            @case('test_conection_smtp') <span>Teste de conexão SMTP</span> @break
                        @endswitch
                    </div>
                    <div class="mb-2">
                        <div>
                            <h5>Data do evento</h5>
                        </div>
                        @switch($activitie->description)
                            @case('created')
                                <span>{{$activitie->created_at->format('d/m/Y H:i:s')}}</span> @break
                            @case('updated')
                                <span>{{$activitie->updated_at->format('d/m/Y H:i:s')}}</span> @break
                            @case('deleted')
                                <span>{{$activitie->created_at->format('d/m/Y H:i:s')}}</span> @break
                            @case('order_updated')
                                <span>{{$activitie->updated_at->format('d/m/Y H:i:s')}}</span> @break
                            @case('multiple_deleted')
                                <span>{{$activitie->updated_at->format('d/m/Y H:i:s')}}</span> @break
                            @case('test_conection_smtp')
                            <span>{{$activitie->created_at->format('d/m/Y H:i:s')}}</span> @break
                        @endswitch
                    </div>
                    <div class="mb-2">
                        <div>
                            <h5>Valores Antigos</h5>
                        </div>
                        <code>
                            {{ print_r($activitie->properties['old'] ?? [], true) }}
                        </code>
                    </div>
                    <div class="mb-2">
                        <div>
                            <h5>Valores Novos</h5>
                        </div>
                        <code>
                            {{ print_r($activitie->properties['attributes'] ?? [], true) }}
                        </code>
                    </div>
                </div> <!-- end card-body-->

            </div> <!-- container -->
        </div> <!-- content -->
    </div>
@endsection
