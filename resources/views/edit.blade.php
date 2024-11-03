@extends("footer")
@section('title')
update Page
@endsection
@section('content')
@if(Session::has('error'))
<div class="alert alert-error">
    {{Session::get('messages')}}
</div>
@endif
<form style="width: 80%; margin:0 auto" method="POST" action="{{route('personne.update',$data['id']) }}">
    @csrf
    <div class="form-group">
      <label for="">Nom</label>
      <input type="text" class="form-control"name="pr_name" id="name" value="{{old('pr_name',$data['name'])}}">
      @error('pr_name')
      <small id="emailHelp" class="form-text  text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Prenom</label>
      <input type="text" class="form-control" id="prenom" name="pr_prenom" value="{{old('pr_prenom',$data['prenom'])}}">
      @error('pr_prenom')
      <small id="emailHelp" class="form-text  text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="email"name="pr_email" placeholder="Enter email" value="{{old('pr_email',$data['email'])}}">
      <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
      @error('pr_email')
      <small id="emailHelp" class="form-text  text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pr_password" value="{{old('pr_password',$data['password'])}}">
      @error('pr_password')
      <small id="emailHelp" class="form-text  text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">situation active</label>
        <select class="form-select" aria-label="Default select example" name="pr_active">
            <option value="">select sitution</option>
            <option value="1" @if(old('pr_active',$data['active'])==1) selected @endif>yes</option>
            <option value="0" @if (old('pr_active',$data['active'])==0) selected @endif>no</option>
            @error('pr_active')
            <small id="emailHelp" class="form-text  text-danger">{{ $message }}</small>
            @enderror
        </select>
      </div >
    <div style="margin-top: 10%">
        <button type="submit" class="btn btn-primary">Update personne</button>
    <a href="{{url('show')}}"   class="btn btn-outline-dark"  type="button"> back to Perssonne Liste</a>
    </div>
  </form>
@endsection
