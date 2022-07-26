@extends('layouts.base')
@section('body')
<div class="container">
<h2>Edit Customer</h2>
   {{ Form::model($customer,['route' => ['customer.update',$customer->id],'method' => 'PUT']) }}
 
  <!--   {{ method_field('PUT') }} -->
<div class="form-group">
    <label for="title" class="control-label">Title</label>
    {{ Form::text('title',null,array('class'=>'form-control','id'=>'title')) }}
  </div> 
     @if($errors->has('title'))
      <small>{{ $errors->first('title') }}</small>
    @endif
  <div class="form-group"> 
    <label for="lname" class="control-label">last name</label>
   {{ Form::text('lname',null,array('class'=>'form-control','id'=>'lname')) }}
  </div> 
     @if($errors->has('lname'))
      <small>{{ $errors->first('lname') }}</small>
    @endif
<div class="form-group"> 
    <label for="fname" class="control-label">First Name</label>
    {{ Form::text('fname',null,array('class'=>'form-control','id'=>'fname')) }}
  </div>
     @if($errors->has('fname'))
      <small>{{ $errors->first('fname') }}</small>
    @endif
  <div class="form-group"> 
    <label for="address" class="control-label">Address</label>
   {{ Form::text('addressline',null,array('class'=>'form-control','id'=>'addressline')) }}
  </div>
     @if($errors->has('addressline'))
      <small>{{ $errors->first('addressline') }}</small>
    @endif
<div class="form-group"> 
    <label for="town" class="control-label">Town</label>
    {{ Form::text('town',null,array('class'=>'form-control','id'=>'town')) }}
  </div>
     @if($errors->has('town'))
      <small>{{ $errors->first('town') }}</small>
    @endif
  <div class="form-group"> 
    <label for="zipcode" class="control-label">Zip code</label>
    {{ Form::text('zipcode',null,array('class'=>'form-control','id'=>'zipcode')) }}
  </div>
     @if($errors->has('zipcode'))
      <small>{{ $errors->first('zipcode') }}</small>
    @endif
<div class="form-group"> 
    <label for="phone" class="control-label">Phone</label>
   {{ Form::text('phone',null,array('class'=>'form-control','id'=>'phone')) }}
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
  <a href="{{url()->previous()}}" class="btn btn-default" role="button">Cancel</a>
  </div>     
  </div>
{!! Form::close() !!} 
@endsection 