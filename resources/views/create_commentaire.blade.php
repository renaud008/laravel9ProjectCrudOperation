@extends('base')

@section('content')
  {{-- @dump($article)     --}}
    <div class="container">
        <h1 class="display-3 text-center text-danger " > ajouter un commentaire</h1>
        <div class="artilces row px-4 my-5 justify-content-center">
            
        </div>
        <form method="POST" action="{{route('commentaire.store')}}"  class="form-example  px-4 my-5 justify-content-center">
           
            @csrf
              
             <div class="form-control my-5">
               <label for="title">Titre : </label>
               <input type="text" class="form-control" value="{{$article->title}}"  name="title" id="title"  readonly="readonly" >
             
             </div>
 
              
             <div class="form-control my-5">
                <label for="content">content: </label>
                <input type="text" class="form-control"   name="content" id="content" required>
                
              </div> 
              
              <div class="form-control my-5">
                <label for="article_id">article_id: </label>
                <input type="text" class="form-control" value="{{$article->id}}"  name="article_id" id="content"  readonly="readonly" >
                
              </div> 
               

              <button type="submit" class="btn btn-primary">Submit</button>

           </form>
        {{-- <div class="d-flex justify-content-center mt-5">{{$articles->links('vendor.pagination.custom')}}</div>
     --}}
    </div>
@endsection