@extends('layouts.wedding')

@section('title', 'Veronika & Alex | RSVP')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-3">
                <form method="POST" action="">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>RSVP</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name(s)</label>
                                <small>Please enter the names of those who were listed on your invitation</small>
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <small>Please enter the email address for one person in your party</small>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Telephone</label>
                                <input type="text" class="form-control" name="telephone" id="telephone" value="{{ old('telephone') }}">
                                @if ($errors->has('telephone'))
                                    <span class="text-danger">{{ $errors->first('telephone') }}</span>
                                @endif

                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="attending" value="attending">
                                    I/we <strong>will</strong> be attending
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="attending" value="evening">
                                    I/we <strong>can't make the daytime event</strong> but I/we <strong>will</strong> be attending in the evening
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="attending" value="not attending">
                                    I/we <strong>will not</strong> be attending
                                </label>
                            </div>
                            @if ($errors->has('attending'))
                                <span class="text-danger">{{ $errors->first('attending') }}</span>
                            @endif
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-lg btn-primary" name="submit" value="RSVP">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
