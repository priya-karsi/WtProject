@extends('layouts.main')
@section('content')
<script src="/js/Bootstrap/Select/bootstrap-select.js"></script>

<form method="POST" action="{{ url('/schedule') }}" aria-label="{{ __('Schedule') }}">
    @csrf
    <div class="row">
            <div class="col-md-4">
                    <div class="form-group" >
                            <select class="form-control"  name="standard" id="standard">
                                    <option style="background-color:#d9d5d5; color:#566f90;" value="8">Standard VIII</option>
                                    <option style="background-color:#d9d5d5; color:#566f90;" value="9">Standard IX</option>
                                    <option style="background-color:#d9d5d5; color:#566f90;" value="10">Standard X</option>
                            </select>
                        </div>
            </div>
        </div>
    <div class="form-group row">
            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

            <div class="col-md-6">
                <input id="date" type="date" class="form-control" name="date" required autocomplete="date">
            </div>
    </div>
    <div class="form-group row">
            <label for="time_in" class="col-md-4 col-form-label text-md-right">{{ __('Time_in') }}</label>

            <div class="col-md-6">
                <input id="time_in" type="time" class="form-control" name="time_in" required autocomplete="time_in">
            </div>
    </div>
    <div class="form-group row">
            <label for="time_out" class="col-md-4 col-form-label text-md-right">{{ __('Time_out') }}</label>

            <div class="col-md-6">
                <input id="time_out" type="time" class="form-control" name="time_out" required autocomplete="time_out">
            </div>
    </div>
    <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>
            </div>
        </div>
@endsection