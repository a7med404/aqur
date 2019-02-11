
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                            <div class="col-md-6">
                                {!! Form::text('phone', null, ['id' => 'phone', 'class' => "form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}", 'name' => 'phone', 'value' => "{{ old('phone') }}", 'required']) !!}

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                {!! Form::text('email', null, ['id' => 'email', 'class' => "form-control {{ $errors->has('email') ? ' is-invalid' : '' }}", 'name' => 'email', 'value' => "{{ old('email') }}", 'required']) !!}

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if(!isset($isUser))
                        <div class="form-group row">
                            <label for="admin" class="col-md-4 col-form-label text-md-right"> Level </label>
                            <div class="col-md-6">
                                {!! Form::select('admin', [0 => 'User', 1 => 'Admin'], null, ['id' => 'admin', 'placeholder' => 'Level', 'class' => "form-control {{ $errors->has('admin') ? ' is-invalid' : '' }}", 'value' => "{{ old('admin') }}", 'required']) !!}
                                @if ($errors->has('admin'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('admin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif
                        @if(!isset($userInfo))
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        @endif

                        @if(isset($userInfo))
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        @else
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        @endif