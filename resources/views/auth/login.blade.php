

@extends('auth.layouts')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">

            <div class="card-header">Login</div>

            <div class="card-body">

                <form action="{{route('authenticate')}}" method="post">


                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">E-mail</label>
                        <div class="col md-6">
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                            @if($errors->has('email'))
                            <span class="text-dandger">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col md-6">
                            <input type="password" name="password" id="password" class="form-control @error('value') is-invalid @enderror" value="{{old('password')}}">
                            @if($errors->has('password'))
                            <span class="text-dandger">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="btn btn-primary col-md-3 offset-md-5" value="Login">
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
@endsection