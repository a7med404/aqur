
                        <div class="form-group row">
                            <label for="bu_name" class="col-md-3 col-form-label text-md-right"> Title </label>
                            <div class="col-md-7">
                                {!! Form::text('bu_name', null, ['id' => 'bu_name', 'class' => "form-control {{ $errors->has('bu_name') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_name') }}", 'required', 'autofocus']) !!}
                                @if ($errors->has('bu_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row"> 
                            <label for="bu_rent" class="col-md-3 col-form-label text-md-right"> For </label>
                            <div class="col-md-7">
                                {!! Form::select('bu_rent', [0 => 'For Rent', 1 => 'For Sell'], null, ['id' => 'bu_rent', 'placeholder' => 'For Rent Or Sell', 'class' => "form-control {{ $errors->has('bu_rent') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_rent') }}", 'required']) !!}
                                @if ($errors->has('bu_rent'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_rent') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bu_type" class="col-md-3 col-form-label text-md-right"> Type </label>
                            <div class="col-md-7">
                                {!! Form::select('bu_type', selectType(), null, ['id' => 'bu_type', 'placeholder' => 'Type of Aqur', 'class' => "form-control {{ $errors->has('bu_type') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_type') }}", 'required']) !!}
                                @if ($errors->has('bu_type')) 
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bu_rooms" class="col-md-3 col-form-label text-md-right"> Rooms Number </label>
                            <div class="col-md-7">
                                {!! Form::Number('bu_rooms', null, ['id' => 'bu_rooms', 'class' => "form-control {{ $errors->has('bu_rooms') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_rooms') }}", 'required']) !!}
                                @if ($errors->has('bu_rooms'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_rooms') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bu_price" class="col-md-3 col-form-label text-md-right"> Price </label>
                            <div class="col-md-7">
                                {!! Form::number('bu_price', null, ['id' => 'bu_price', 'class' => "form-control {{ $errors->has('bu_price') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_price') }}", 'required']) !!}
                                @if ($errors->has('bu_price'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bu_place" class="col-md-3 col-form-label text-md-right"> Palce </label>
                            <div class="col-md-7">
                                {!! Form::select('bu_place',  selectPalce(), null, ['id' => 'bu_place', 'placeholder' => 'Location of Aqur', 'class' => " form-control {{ $errors->has('bu_place') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_place') }}", 'required']) !!}
                                @if ($errors->has('bu_place')) 
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bu_image" class="col-md-3 col-form-label text-md-right"> Image  </label>
                            <div class="col-md-7">
                                {!! Form::file('bu_image', ['id' => 'bu_image', 'class' => "form-control", 'value' => "{{ old('bu_image') }}", 'autofocus']) !!}
                                @if ($errors->has('bu_image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                            @if(isset($build->bu_image) )
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <img src="{{ public_path('storage/builds/'.$build->bu_image) }}" alt="Build image" width="120px" height="90px">
                                </div>
                            </div>
                            @endif
                        </div>

                        @if(!isset($user))
                        <div class="form-group row">
                            <label for="bu_meta" class="col-md-3 col-form-label text-md-right"> Meta Tage </label>
                            <div class="col-md-7">
                                {!! Form::text('bu_meta', null, ['id' => 'bu_meta', 'class' => "form-control {{ $errors->has('bu_meta') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_meta') }}", 'required', 'autofocus']) !!}
                                @if ($errors->has('bu_meta'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_meta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif


                        <div class="form-group row">
                            <label for="bu_small_des" class="col-md-3 col-form-label text-md-right"> Short Descrition </label>
                            <div class="col-md-7">
                                {!! Form::textarea('bu_small_des', null, ['id' => 'bu_small_des', 'rows' => '3', 'class' => "form-control {{ $errors->has('bu_small_des') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_small_des') }}", 'required']) !!}
                                @if ($errors->has('bu_small_des'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_small_des') }}</strong>
                                    </span>
                                @endif
                                <br />
                                <div class="alert alert-warning">
                                    You Can't Enter More Than 160 Char
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bu_square" class="col-md-3 col-form-label text-md-right"> Square </label>
                            <div class="col-md-7">
                                {!! Form::Number('bu_square', null, ['id' => 'bu_square', 'class' => "form-control {{ $errors->has('bu_square') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_square') }}", 'required']) !!}
                                @if ($errors->has('bu_square'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_square') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bu_longitude" class="col-md-3 col-form-label text-md-right"> Longitude </label>
                            <div class="col-md-7">
                                {!! Form::Number('bu_longitude', null, ['id' => 'bu_longitude', 'class' => "form-control {{ $errors->has('bu_longitude') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_longitude') }}", 'required']) !!}
                                @if ($errors->has('bu_longitude'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_longitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bn_latitude" class="col-md-3 col-form-label text-md-right"> Latitude </label>
                            <div class="col-md-7">
                                {!! Form::Number('bn_latitude', null, ['id' => 'bn_latitude', 'class' => "form-control {{ $errors->has('bn_latitude') ? ' is-invalid' : '' }}", 'value' => "{{ old('bn_latitude') }}", 'required']) !!}
                                @if ($errors->has('bn_latitude'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bn_latitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bu_large_des" class="col-md-3 col-form-label text-md-right"> Long Descrition </label>
                            <div class="col-md-7">
                                {!! Form::textarea('bu_large_des', null, ['id' => 'bu_large_des', 'rows' => '3', 'class' => "form-control {{ $errors->has('bu_large_des') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_large_des') }}", 'required']) !!}
                                @if ($errors->has('bu_large_des'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_large_des') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if(!isset($user))
                        <div class="form-group row">
                            <label for="bu_status" class="col-md-3 col-form-label text-md-right"> Status </label>
                            <div class="col-md-7">
                                {!! Form::select('bu_status', [0 => 'Un Panding', 1 => 'Panding'], null, ['id' => 'bu_status', 'placeholder' => 'Status', 'class' => "form-control {{ $errors->has('bu_status') ? ' is-invalid' : '' }}", 'value' => "{{ old('bu_status') }}", 'required']) !!}
                                @if ($errors->has('bu_status'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bu_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif

                        @if(isset($build))
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
                                         Add Build
                                    </button>
                                </div>
                            </div>
                        @endif