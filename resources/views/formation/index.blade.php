
@extends('welcome')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <h1> nos formations ---></h1>


    </div>
    <div class="col-sm-2">
      <a class="btn btn-sm btn-success" href="{{  route('formation.create')   }}"> create new formation    </a>
    </div>


    @foreach($formations as $formation)
    <ul>


      <div class="card" style="width: 18rem;">
        <img style="width:100% ; height:200px; " src="{{URL::to('/')}}/images/{{$formation->image}}" class="card-img-top" alt="formation_img">
        <div class="card-body">
          <h5 class="card-title">{{$formation->nom}}      <i  style="float:right;" class="fab fa-php fa-2x"></i></h5>
          <br>
          <p class="card-text"> <b> {{$formation->nom}}</b> est une formation qui parle de <b>{{$formation->thematique}}</b> presenté par notre formateur <b><a href="#">{{$formation->formateur}}</a></b>  </p>
          <a href="{{route('formation.show',$formation->id)}} " class="btn btn-primary">learn more here</a>

        </div>
      </div>
      <br>
      <form   action="{{ route('formation.destroy',$formation->id)}}" method="post">

        <a class="btn btn-sm btn-warning" href="{{route('formation.edit',$formation->id)}}"> <b>edit</b> </a>
         @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger"> <b>delete</b> </button>


      </form>

</ul>
    @endforeach
    <nav class="fixed-bottom">
      <ul class="pagination">

        <li class="page-item">{!!  $formations->links()  !!} </li>

      </ul>
    </nav>


  </div>
</div>


 @endsection('content')
