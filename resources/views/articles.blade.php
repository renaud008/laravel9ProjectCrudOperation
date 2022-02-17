@extends('base')

@section('content')

 {{-- @dump($articles ) --}}
    <div class="container-fluid">
        <h1 class="display-3 text-center text-danger " >Articles</h1>
       
        <div class="d-flex justify-content-center my-5"> 
            <a href="{{route('article.create')}}" class="btn btn-info">Ajouter un article</a> 
        </div>
       
        <div class="artilces row px-4 my-5 justify-content-center">
              
            @foreach ($articles as $article)
               

                <div class="card m-2"  style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$article->subtitle}}</h6>
                      <p class="card-text">{{$article->content}}</p>
 
                     </div>
                    <div class="card-footer d-flex justify-content-center">
                         {{-- <a href="{{route('article.edit',$article->id)}}" class="card-link  text-decoration-none">Modifier</a>
                          --}}
                         <form action="{{route('article.edit',$article->id)}}"  method="GET">
                            @csrf
                            
                            <button TYPE="submit" class="btn btn-card-link text-primary ">Modifier</a>
                           </form>
                           <form action="{{route('article.delete',$article->id)}}"  method="POST">
                            @csrf
                            @Method("DELETE")
                            <button TYPE="submit" class="btn btn-card-link text-danger ">Supprimer</a>
                           </form>
                           
                           <form action="{{route('commentaire.create',$article)}}"  method="POST">
                            @csrf
                           
                            <button TYPE="submit" class="btn btn-card-link text-danger ">Commenter</a>
                           </form>
                      </div>

                      <div class="card-footer d-flex justify-content-center">
                          
                        @foreach ($article->comments as $comment)
                        <ul>
                            <li> {{$comment->id}} </li>
                        </ul>
                            
                        @endforeach
                      </div>
                  </div>

                  
            @endforeach
        </div>
       
    </div>
@endsection