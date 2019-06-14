
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


<table id="myTable">
 
  <thead>
    <tr>
      <th>image</th>
      <th>nom_formation</th>
      <th>nom_formateur</th>
      <th>thematique</th>
 

    </tr>
  </thead>
  <tbody>

    @foreach($formations as $formation)
    <tr>
      <td><img style="width:50px ; height:50px; " src="{{URL::to('/')}}/images/{{$formation->image}}" class="card-img-top" alt="formation_img"></td>
      <td>{{$formation->nom}}    </td>
      <td>{{$formation->formateur}}</td>
      <td>{{$formation->thematique}}</td>
       
    </tr>
      @endforeach
  </tbody>
</table>






 
 
    <nav class="fixed-bottom">
      <ul class="pagination">

        <li class="page-item">{!!  $formations->links()  !!} </li>

      </ul>
    </nav>


  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8" async defer></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8" async defer></script>
<script  >   
$(document).ready( function () {
    $('#myTable').DataTable();
} );


</script>

 @endsection('content')
