@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('company.components.sidebar')
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        @include('company.home.dashboard')
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h1>Packages</h1>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h1>Account details</h1>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h1>Logout</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
