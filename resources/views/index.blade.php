@extends('footer')
@section('title')
show Page
@endsection
@section('content')
@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-error">
    {{Session::get('messages')}}
</div>
@endif
{{-- <div class="row no-gutters" style="margin: 5%; padding:10px">
    <div class="col-12 col-sm-6 col-md-8"><input type="search" class="form-control" placeholder="Search"></div>
    <div class="col-6 col-md-4"></div>
  </div> --}}

  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Email</th>
        <th scope="col">Activation</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @if (!@empty($data))
        @php $i=1; @endphp
        @foreach ($data as $info )
        <tr>
            <td scope="row">{{$i;}}</td>
            <td>{{$info->name}}</td>
            <td>{{$info->prenom}}</td>
            <td>{{$info->email}}</td>
            <td> @if($info->active==1) <span>Active</span> @else <span>Pas Active</span> @endif</td>
            <td>
                <a href="{{route('personne.edit',$info->id)}}" class="btn btn-warning">Edit</a>
            <a href="{{route('personne.delete',$info->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @php
            $i++;
        @endphp
        @endforeach


        @else

        @endif
    </tbody>
  </table>
  <center>  <div>{{$data->links('pagination::bootstrap-4')}}</div> </center>
  <a href="{{url('create')}}"   class="btn btn-success" style="margin-left: 90%" type="button">add Perssonne</a>
@endsection

