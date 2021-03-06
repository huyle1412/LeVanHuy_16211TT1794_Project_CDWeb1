@include('layouts/header')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-3">
                <h2>Log into your account</h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{route('postLogin')}}" method="POST" role="form">
                            {!! csrf_field() !!}

                            <legend>Login</legend>
                            @if($errors->has('errorlogin'))
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{$errors->first('errorlogin')}}
                            </div>
                            @endif

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}">
                                @if($errors->has('email'))
                                <p style="color:red">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                @if($errors->has('password'))
                                <p style="color:red">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary "> Login </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('layouts/footer')
