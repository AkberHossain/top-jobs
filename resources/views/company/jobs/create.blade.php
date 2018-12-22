@extends('layouts.app')

@push('styles')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('company.components.sidebar')
            </div>
            <div class="col-9">

                <!-- Job Form -->

                @include('company.jobs.forms.form-job-create')

            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $('.js-example-basic-multiple').select2();
    </script>


@endpush
