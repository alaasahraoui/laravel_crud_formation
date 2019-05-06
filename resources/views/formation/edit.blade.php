
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

<form   action="{{route('formation.update',$formation->id)}}"      method="post">
  @csrf
  @method('PUT')
  <div class="row">



    <div class="col-md-12">
      <strong> nom </strong>
      <input type="text"  placeholder="nom" value="{{$formation->nom}}" name="nom" class="form-control">
    </div>

    <div class="col-md-12">
      <strong> thematique </strong>
      <input type="text"  value="{{$formation->thematique}}" placeholder="thematique" name="" class="form-control">
    </div>


    <div class="col-md-12">
      <strong> formateur  </strong>
      <input type="text" value="{{$formation->formateur}}" placeholder="nom" name="formateur" class="form-control">

    </div>



    <div class="col-md-12">
      <strong> code </strong>
      <input type="text" value="{{$formation->code}}" placeholder="nom" name="code" class="form-control">

    </div>

    <div class="col-md-12">
      <strong> duree </strong>
      <input type="duree" value="{{$formation->duree}}" placeholder="duree" name="duree" class="form-control">

    </div>







    <div class="col-md-12">
      <strong> fiche_tech </strong>
      <input type="duree" value="{{$formation->fiche_tech}}" placeholder="fiche_tech" name="fiche_tech" class="form-control">

    </div>
    <div class="col-md-12">
      <strong> cible_public </strong>
      <input type="duree" value="{{$formation->cible_public}}" placeholder="cible_public" name="cible_public" class="form-control">

    </div>

  </div>
  <div class="col-md-12">
    <strong> status </strong>
    <input type="duree"  value="{{$formation->status}}"  placeholder="status" name="status" class="form-control">

  </div>




    <div class="col-md-12">
      <strong> programme :  </strong>
      <textarea name="programme" value="{{$formation->programme}}"  class="form-control" rows="8" cols="80"></textarea>

    </div>







    <div class="col-md-12">

      <a href="{{route('formation.index')}}" class="btn btn-sm btn-success"   >back </a>
<button type="submit" class="btn btn-sm btn-primary">submit </button>
    </div>





  </div>
</form>


     </div>
   </div>
 </div>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
