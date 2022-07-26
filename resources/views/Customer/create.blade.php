@extends('layouts.base')
@section('body')

<div class="container">
  <!-- {{dump($errors)}} -->
<ul class="errors">
 @foreach($errors->all() as $message)
 <li><p>{{ $message }}</p></li>
 @endforeach
 </ul>
  <h2>Create new Customer</h2>
  <form method="post" action="{{route('customer.store')}}" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="title" class="control-label">Title</label>
    <input type="text" class="form-control" id="title" name="title"  value="{{old('title')}}">
  </div>
   @if($errors->has('title'))
      <small>{{ $errors->first('title') }}</small>
    @endif
<div class="form-group"> 
    <label for="lname" class="control-label">last name</label>
    <input type="text" class="form-control " id="lname" name="lname" value="{{old('lname')}}" ></text>
  </div>
   @if($errors->has('lname'))
      <small>{{ $errors->first('lname') }}</small>
    @endif
  <div class="form-group"> 
    <label for="fname" class="control-label">First Name</label>
    <input type="text" class="form-control " id="fname" name="fname" value="{{old('fname')}}" >
  </div>
   @if($errors->has('fname'))
      <small>{{ $errors->first('fname') }}</small>
    @endif
<div class="form-group"> 
    <label for="address" class="control-label">Address</label>
    <input type="text" class="form-control" id="address" name="addressline" value="{{old('addressline')}}">
  </div>
   @if($errors->has('addressline'))
      <small>{{ $errors->first('addressline') }}</small>
    @endif
  <div class="form-group"> 
    <label for="town" class="control-label">Town</label>
    <input type="text" class="form-control" id="town" name="town" value="{{old('town')}}">
  </div>
   @if($errors->has('town'))
      <small>{{ $errors->first('town') }}</small>
    @endif
<div class="form-group"> 
    <label for="zipcode" class="control-label">Zip code</label>
    <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{old('zipcode')}}">
  </div>
   @if($errors->has('zipcode'))
      <small>{{ $errors->first('zipcode') }}</small>
    @endif
  <div class="form-group"> 
    <label for="phone" class="control-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}" >
  </div>
   @if($errors->has('phone'))
      <small>{{ $errors->first('phone') }}</small>
    @endif
<button type="submit" class="btn btn-primary">Save</button>
  <a href="{{url()->previous()}}" class="btn btn-default" role="button">Cancel</a>
  </div>     
</div>
</form> 

@endsection