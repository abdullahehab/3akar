                        <div class="form-group{{ $errors->has('bu_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Name</label>

                            <div class="col-md-6">
                                {!! Form::text('bu_name' , null , ['class' => "form-control"]) !!}

                                @if ($errors->has('bu_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bu_rooms') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Rooms Number</label>

                            <div class="col-md-6">
                                {!! Form::text('bu_rooms' , null , ['class' => "form-control"]) !!}

                                @if ($errors->has('bu_rooms'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_rooms') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bu_price') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Price</label>

                            <div class="col-md-6">
                                {!! Form::text('bu_price' , null , ['class' => "form-control"]) !!}

                                @if ($errors->has('bu_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bu_rent') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Process type</label>

                            <div class="col-md-6">
                                {!! Form::select('bu_rent' , buRent(), null , ['class' => "form-control"]) !!}

                                @if ($errors->has('bu_rent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_rent') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bu_square') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Square</label>

                            <div class="col-md-6">
                                {!! Form::text('bu_square' , null , ['class' => "form-control"]) !!}

                                @if ($errors->has('bu_square'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_square') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bu_type') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Type</label>

                            <div class="col-md-6">
                                {!! Form::select('bu_type' , buType() , null , ['class' => "form-control"]) !!}

                                @if ($errors->has('bu_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bu_status') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Status</label>

                            <div class="col-md-6">
                                {!! Form::select('bu_status' , buStatus() , null , ['class' => "form-control"]) !!}

                                @if ($errors->has('bu_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bu_meta') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Keywords</label>

                            <div class="col-md-6">
                                {!! Form::text('bu_meta' , null , ['class' => "form-control"]) !!}

                                @if ($errors->has('bu_meta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_meta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bu_small_des') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Small Description for search engine</label>

                            <div class="col-md-6">
                                {!! Form::textarea('bu_small_des' , null , ['class' => "form-control", 'rows' => '4']) !!}

                                @if ($errors->has('bu_small_des'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_small_des') }}</strong>
                                    </span>
                                @endif
                                <br>
                                <div class="alert alert-warning">
                                    No more than 160 characters are allowed .
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bu_langtuide') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Longitude</label>

                            <div class="col-md-6">
                                {!! Form::text('bu_langtuide' , null , ['class' => "form-control"]) !!}

                                @if ($errors->has('bu_langtuide'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_langtuide') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bu_latitude') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Latitude</label>

                            <div class="col-md-6">
                                {!! Form::text('bu_latitude' , null , ['class' => "form-control"]) !!}

                                @if ($errors->has('bu_latitude'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_latitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bu_large_dis') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Long Description</label>

                            <div class="col-md-6">
                                {!! Form::textarea('bu_large_dis' , null , ['class' => "form-control"]) !!}

                                @if ($errors->has('bu_large_dis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_large_dis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    OK
                                </button>
                            </div>
                        </div>