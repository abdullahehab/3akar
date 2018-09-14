<div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
    <div class="col-md-10">
        {!! Form::text('contact_name' , null , ['class' => "form-control"]) !!}

        @if ($errors->has('contact_name'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_name') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-lg-2">
        Name
    </div>

</div>
<div class="clearfix"></div>
<br>

<div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
    <div class="col-md-10">
        {!! Form::text('contact_email' , null , ['class' => "form-control"]) !!}

        @if ($errors->has('contact_email'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_email') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-lg-2">
        Email
    </div>

</div>
<div class="clearfix"></div>
<br>

<div class="form-group{{ $errors->has('contact_subject') ? ' has-error' : '' }}">
    <div class="col-md-10">
        {!! Form::text('contact_subject' , null , ['class' => "form-control"]) !!}

        @if ($errors->has('contact_subject'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_subject') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-lg-2">
        Subject
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group{{ $errors->has('contact_message') ? ' has-error' : '' }}">
    <div class="col-md-10">
        {!! Form::text('contact_message' , null , ['class' => "form-control"]) !!}

        @if ($errors->has('contact_message'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_message') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-lg-2">
        Message
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="form-group{{ $errors->has('contact_type') ? ' has-error' : '' }}">
    <div class="col-md-10">
        {!! Form::select('contact_type' , contact() , null , ['class' => "form-control"]) !!}

        @if ($errors->has('contact_type'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_type') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-lg-2">
        Contact Type
    </div>

</div>
<div class="clearfix"></div>
<br>


<div class="form-group{{ $errors->has('contact_type') ? ' has-error' : '' }}">
    <div class="col-md-10">
        {!! Form::submit('Send', ['class' => "form-control"]) !!}

    </div>
</div>
<div class="clearfix"></div>
<br>