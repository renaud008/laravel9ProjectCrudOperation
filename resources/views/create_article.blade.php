@extends('base')

@section('content')
 {{-- @dump($article)   --}}
    <div class="container">
        <h1 class="display-3 text-center text-danger " > Creer un article</h1>
        <div class="artilces row px-4 my-5 justify-content-center">
            
        </div>
        <form method="POST" action="{{route('article.store')}}"  class="form-example  px-4 my-5 justify-content-center">
           
            @csrf
              
             <div class="form-control my-5">
               <label for="title">Titre : </label>
               <input type="text" class="form-control"     name="title" id="title" required>
              
               @error('title')
               <div class="text-danger"> {{$message}}</div>
                @enderror
             </div>


             <div class="form-control my-5">
                <label for="subtitle">subtitle: </label>
                <input type="text" class="form-control"   name="subtitle" id="subtitle" required>
              
                @error('subtitle')
                <div class="text-danger"> {{$message}}</div>
                 @enderror
              </div>  
              
              <div class="form-control my-5">
                <label for="content">content: </label>
                <input type="aria-text" class="form-control"   name="content" id="content" required>
               
                @error('content')
                <div class="text-danger"> {{$message}}</div>
                 @enderror
              </div> 
              
            

              <button type="submit" class="btn btn-primary">Submit</button>
           </form>
        {{-- <div class="d-flex justify-content-center mt-5">{{$articles->links('vendor.pagination.custom')}}</div>
     --}}
    </div>
@endsection