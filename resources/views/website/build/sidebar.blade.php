            <div class="col-md-3">
                @auth()
                <div class="sidebar-sidebar">
                    <!-- SIDEBAR title -->
                    <div class="sidebar-title">
                        <h3>User Options</h3>
                    </div>
                    <!-- END SIDEBAR title -->
                    <!-- SIDEBAR MENU -->
                    <div class="sidebar-menu">
                        <ul class="nav">
                            <li class="active">
                                <a href="{{ route('user-build') }}">
                                <i class="fa fa-home"></i>
                                All Aqurs Of {{ auth()->user()->name }}</a>
                            </li>
                            <li>
                                <a href="{{ route('user-waiting-build') }}">
                                <i class="fa fa-flag"></i>
                                Unpandding Aquer </a>
                            </li>
                            <li>
                                <a href="{{ route('user-create-build') }}">
                                <i class="fa fa-flag"></i>
                                Add Aquer </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
                @endauth
                <div class="sidebar-sidebar">
                    <!-- SIDEBAR title -->
                    <div class="sidebar-title">
                        <h3>Aqurs Options</h3>
                    </div>
                    <!-- END SIDEBAR title -->
                    <!-- SIDEBAR MENU -->
                    <div class="sidebar-menu">
                        <ul class="nav">
                            <li class="active">
                                <a href="{{ route('all-build') }}">
                                <i class="fa fa-home"></i>
                                All Aqurs </a>
                            </li>
                            <li>
                                <a href="{{ route('for-rent-build') }}">
                                <i class="fa fa-user"></i>
                                For Rent  </a>
                            </li>
                            <li>
                                <a href="{{ route('for-buy-build') }}">
                                <i class="fa fa-home"></i>
                                For Buy </a>
                            </li>
                            <li>
                                <a href="{{ route('type', ['type' => 1]) }}">
                                <i class="fa fa-user"></i>
                                Apartment  </a>
                            </li>
                            <li>
                                <a href="{{ route('type', ['type' => 2]) }}">
                                <i class="fa fa-home"></i>
                                 Normal Home </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>

                <div class="sidebar-sidebar">
                    <!-- SIDEBAR title -->
                    <div class="sidebar-title">
                        <h3>Search Options</h3>
                    </div>
                    <!-- END SIDEBAR title -->
                    <!-- SIDEBAR MENU -->
                    <div class="sidebar-menu">
                        <ul class="nav">
                                {!! Form::open(['route' => 'search', 'method' => 'GET']) !!}
                            <li>{!! Form::number('price_from', "{{ old('price_from') }}", ['class' => 'form-control', 'placeholder' => 'Price From']) !!}</li>
                            <li>{!! Form::number('price_to', "{{ old('price_to') }}", ['class' => 'form-control', 'placeholder' => 'Price To']) !!}</li>
                            <li>{!! Form::selectRange('bu_rooms', 1, 20, "{{ old('bu_rooms') }}", ['class' => 'form-control', 'placeholder' => 'Rooms Number']) !!}</li>
                            <li>{!! Form::select('bu_rent', [0 => 'For Rent', 1 => 'For Sell'], "{{ old('bu_rent') }}", ['placeholder' => 'For Rent Or Sell', 'class' => "form-control"]) !!}</li>
                            <li>{!! Form::select('bu_type', [1 => 'Market', 2 => 'Department'], "{{ old('bu_type') }}", ['id' => 'bu_type', 'placeholder' => 'Type of Aqur', 'class' => "form-control"]) !!}</li>
                            <li>{!! Form::Number('bu_square', "{{ old('bu_square') }}", ['class' => "form-control", 'placeholder' => 'Square']) !!}</li>
                            <li>{!! Form::submit('Search', ['class' => "form-control btn btn-info"]) !!}</li>        
                                {!! Form::close() !!}
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>

            </div>