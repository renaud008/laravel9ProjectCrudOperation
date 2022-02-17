@extends('base')

@section('content')
 {{-- @dump($article)   --}}
    <div class="container">
        <h1 class="display-3 text-center text-danger " > Modifier cet article</h1>
        <div class="artilces row px-4 my-5 justify-content-center">
            
        </div>
        <form action="{{route('article.update',$article->id)}}" method="POST" class="form-example  px-4 my-5 justify-content-center">
            @Method('PUT')
            @csrf
              
             <div class="form-control my-5">
               <label for="title">Titre : </label>
               <input type="text" class="form-control" value="{{$article->title}}" name="title" id="title" required>
             
             </div>


             <div class="form-control my-5">
                <label for="subtitle">subtitle: </label>
                <input type="text" class="form-control" value="{{$article->subtitle}}" name="subtitle" id="subtitle" required>
                
              </div>  
              
              <div class="form-control my-5">
                <label for="content">content: </label>
                <input type="aria-text" class="form-control" value="{{$article->content}}" name="content" id="content" required>
                
              </div>


              <button type="submit" class="btn btn-primary">Submit</button>
           </form>
        {{-- <div class="d-flex justify-content-center mt-5">{{$articles->links('vendor.pagination.custom')}}</div>
     --}}
    </div>
@endsection