@estends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('login')}}</div>

                <div class="card-boby">
                    <form method="POST" action="{{route('login')}}">

                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-rigth">{{__('E-Mail Address')}}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" require autocomplete="email" autofocus>

                            @error('email')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>

                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="cold-md-4 col-form-label text-md-right">{{__('Password')}}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>

                            @enderror
                        </div>
                    </div>

                    <div class="form-goup row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{old('remember')}} ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{__('Remember Me')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
