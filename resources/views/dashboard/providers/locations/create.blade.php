@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@lang('site.locations')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}"><i
                                        class="fa fa-home"></i>@lang('site.dashboard')</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.providers.index') }}"> @lang('site.providers')</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.providers.locations.index',$provider->id) }}"> @lang('site.locations')</a></li>
                            <li class="breadcrumb-item active">@lang('site.add')</li>
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
                    <div class="col-md-12">
                        <div class="card card-info card-outline">
                            <div class="card-header"><h3 class="card-title">@lang('site.add')</h3></div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('dashboard.providers.locations.store',$provider->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('post') }}

                                    <div class="form-group">
                                        <label class="control-label"
                                               for="longitude"> @lang('site.longitude')</label>
                                        <input type="text" name="longitude" value="{{ old('longitude') }}"
                                               class="form-control @error('longitude') is-invalid @enderror"
                                               id="longitude"
                                               placeholder="@lang('site.longitude')">

                                        @error ('longitude')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"
                                               for="latitude"> @lang('site.latitude')</label>
                                        <input type="text" name="latitude" value="{{ old('latitude') }}"
                                               class="form-control @error('latitude') is-invalid @enderror"
                                               id="latitude"
                                               placeholder="@lang('site.latitude')">

                                        @error ('latitude')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-plus"></i> @lang('site.add')</button>
                                    </div>
                                </form><!-- end of form -->
                            </div>
                        </div><!-- /.card -->
                    </div><!-- /.col-->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div><!-- end of content wrapper -->
@endsection
