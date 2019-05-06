@extends('welcome')
@section('content')


 <div class="container">
   <div class="row">
     <div class="col-lg-12">
       <h1>new formation  data : </h1>
       @if ($errors->any())
           <div class="alert alert-danger">
             <strong><b>whoops ! u have an input problem try again </b> </strong>
             <ul>
               @foreach ($errors as $error)
               <li>{{$error}}</li>

               @endforeach
             </ul>
           </div>
       @endif

<form   action="{{route('formation.store')}}"      method="post"  enctype="multipart/form-data">
  @csrf
  <div class="row">



    <div class="col-md-12">
      <strong> nom </strong>
      <input type="text"  placeholder="nom" name="nom" class="form-control">
    </div>

    <div class="col-md-12">
      <strong> thematique </strong>
      <input type="text"  placeholder="thematique" name="thematique" class="form-control">
    </div>


    <div class="col-md-12">
      <strong> formateur  </strong>
      <input type="text"  placeholder="formateur" name="formateur" class="form-control">

    </div>



    <div class="col-md-12">
      <strong> code </strong>
      <input type="text"  placeholder="nom" name="code" class="form-control">

    </div>

    <div class="col-md-12">
      <strong> duree </strong>
      <input type="duree"  placeholder="duree" name="duree" class="form-control">

    </div>







    <div class="col-md-12">
      <strong> fiche_tech </strong>
      <input type="duree"  placeholder="fiche_tech" name="fiche_tech" class="form-control">

    </div>
    <div class="col-md-12">
      <strong> cible_public </strong>
      <input type="duree"  placeholder="cible_public" name="cible_public" class="form-control">

    </div>
  <div class="col-md-12">
    <strong> status </strong>
    <input type="duree"  placeholder="status" name="status" class="form-control">

  </div>



    <div class="col-md-12">
    <strong> image </strong>
    <input type="file"  placeholder="image" name="image" class="form-control">

  </div>
  </div>





    <div class="col-md-12">
      <strong> programme :  </strong>
      <textarea name="programme" class="form-control" rows="8" cols="80"></textarea>

    </div>







    <div class="col-md-12">

      <a href="{{route('formation.index')}}" class="btn btn-sm btn-success"   >back </a>
<button type="submit" class="btn btn-sm btn-primary">submit </button>
    </div>





  </div>
</form>


     </div>
   </div>
@endsection('content')
