<div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">

    <div class="col-lg-2" style="margin-bottom:3px">
        Name
    </div>

    <div class="col-md-10">

        {!! Form::text('contact_name' , null , ['class' => "form-control"]) !!}

        @if ($errors->has('contact_name'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_name') }}</strong>
            </span>
        @endif
    </div>



</div>
<div class="clearfix"></div>
<br>

<div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">

    <div class="col-lg-2" style="margin-bottom:3px">
        Email
    </div>
    <div class="col-md-10">
        {!! Form::text('contact_email' , null , ['class' => "form-control"]) !!}

        @if ($errors->has('contact_email'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_email') }}</strong>
            </span>
        @endif
    </div>



</div>
<div class="clearfix"></div>
<br>


<div class="form-group{{ $errors->has('contact_message') ? ' has-error' : '' }}">

    <div class="col-lg-2" style="margin-bottom:3px">
        Message
    </div>
    <div class="col-md-10">
        {!! Form::textarea('contact_message' , null , ['class' => "form-control"]) !!}

        @if ($errors->has('contact_message'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_message') }}</strong>
            </span>
        @endif
    </div>


</div>
<div class="clearfix"></div>
<br>

<div class="form-group{{ $errors->has('contact_type') ? ' has-error' : '' }}">
    <div class="col-lg-2" style="margin-bottom:3px">
        Contact Type
    </div>
    <div class="col-md-10">
        {!! Form::select('contact_type' , contact() , null , ['class' => "form-control"]) !!}

        @if ($errors->has('contact_type'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_type') }}</strong>
            </span>
        @endif
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