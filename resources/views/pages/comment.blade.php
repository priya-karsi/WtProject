    @extends('layouts/main')
    @section('content')
        <form method="POST" action="{{ url('/comment') }}" aria-label="{{ __('Comment') }}">
            @csrf
            <div class="form-group row">
                    <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>

                    <div class="col-md-6">
                        <input id="comment" type="text" class="form-control" name="comment" required autocomplete="comment">
                    </div>
            </div>
            <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
                <!--<div>{{ $user = Auth::user() }}</div>-->
    @endsection