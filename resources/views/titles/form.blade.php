<div class="form-group">
    {!! Form::label('name', '民意代表姓名：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('gender','性別:') !!}
    {!! Form::text('gender',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('session','屆次:') !!}
    {!! Form::text('session',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('title','民意代表:') !!}
    {!! Form::text('title',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('city', '城市：') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('birthday', '生日：') !!}
    {!! Form::date('birthday', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('area', '選區：') !!}
    {!! Form::text('area', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('cellphone', '電話：') !!}
    {!! Form::text('cellphone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('address', '通訊處：') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('website', '個人網站：') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid', '所屬政黨：') !!}
    {!! Form::select('tid', $parties, $partySelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>

