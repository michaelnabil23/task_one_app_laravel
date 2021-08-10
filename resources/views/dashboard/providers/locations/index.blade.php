@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@lang('site.providers')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}"><i
                                        class="fa fa-home"></i> @lang('site.dashboard')</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.providers.index') }}"> @lang('site.locations')</a></li>
                            <li class="breadcrumb-item active">@lang('site.locations')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="margin-bottom: 15px">@lang('site.locations')
                                    <small> {{ $locations->total() }}</small></h3>
                                <a href="{{ route('dashboard.providers.locations.create',$provider->id) }}"
                                        class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>@lang('site.longitude')</th>
                                            <th>@lang('site.latitude')</th>
                                            <th>@lang('site.action')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($locations as $index=>$location)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $location->longitude }}</td>
                                                <td>{{ $location->latitude }}</td>
                                                <td class="py-0 align-middle">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="{{ route('dashboard.providers.locations.edit', ['provider' => $provider->id, 'location' => $location->id]) }}"
                                                            class="btn btn-md btn-info"><i
                                                                class="fa fa-edit"></i> @lang('site.edit')</a>
                                                        <a href="#" class="btn delete btn-md btn-danger"><i
                                                                class="fa fa-trash"></i> @lang('site.delete')</a>
                                                        <form
                                                            action="{{ route('dashboard.providers.locations.destroy', ['provider' => $provider->id, 'location' => $location->id]) }}"
                                                            method="post" style="display: inline-block">
                                                            {{ csrf_field() }}{{ method_field('delete') }}
                                                        </form><!-- end of form -->
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="15" class="text-center">@lang('site.no_data_found')</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table><!-- end of table -->
                                    {{ $locations->appends(request()->query())->links() }}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div><!-- end of content wrapper -->
@endsection
