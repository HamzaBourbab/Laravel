
@extends("master")
<form method="POST" action="{{ route('posts.store')}}">

@csrf
<label for="title">{{__('title')}}</label>
<input type="text" id="title" name="title" value="{{old('title')}}" @error('title') is-invalid  @enderror autocomplete="title" autofocus>


@error('title')
<span  class="error">
    <strong>{{$message}}</strong>
</span>
@enderror
<br>
<label for="content">{{ __('content')}}</label>
<textarea name="content" id="content" cols="30" rows="10" value="{{old('content')}}"  @error('content') is-invalid  @enderror  autocomplete="content"></textarea> 
@error('content')
<span class="error">
    <strong>{{__("invalidContent")}}</strong>
</span>
@enderror
<br>
<input type="submit" value="{{__('enregistrer')}}">

</form>