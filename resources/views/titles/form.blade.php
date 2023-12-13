<div class="form-group">
    {!! Form::label('name', '黨名：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('chairman', '黨主席：') !!}
    {!! Form::text('chairman', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('secretary', '秘書長：') !!}
    {!! Form::text('secretary', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('secretary', '政治立場：') !!}
    {!! Form::text('secretary', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('link', '官方網站') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>