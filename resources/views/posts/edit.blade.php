<x-layouts.main>
    <x-slot name="title">
        Blog
    </x-slot>

    <div class="container">
        <div class="w-50 py-4">
                   <div class="contact-form">
                       <div id="success"></div>

                   {{-- @if ($errors->any())
                   <div class="alert alert-danger">
                               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                       @endforeach
                               </ul>
                                               </div>
                           @endif --}}
                       <form action="{{ route('posts.update',['post'=>$post->id])}}" method="POST" enctype="multipart/form-data" >
                           @csrf
                           @method('PUT')
                          <div class="control-group mb-4">
                               <input type="text" class="form-control p-4" name="title" value="{{$post->title}}" placeholder="Sarlavha"  />
                               @error('title')
                               <p class="help-block text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="control-group mb-4">
                               <input type="file" class="form-control p-4" name="photo" placeholder="rasm"  />
                               @error('photo')
                               <p class="help-block text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="control-group mb-4">
                               <textarea class="form-control p-4" rows="3" name="short_content" placeholder="Qisqacha mazmuni" >{{$post->short_content}}</textarea>
                                @error('short_content')
                               <p class="help-block text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="control-group mb-4">
                               <textarea class="form-control p-4" rows="6" name="content" placeholder="Maqola" >{{$post->content}}</textarea>
                                @error('content')
                               <p class="help-block text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div>
                               <button class="btn btn-success btn-block py-3 px-5" type="submit" >Saqlash</button>
                           </div>
                           <div>
                            <a href="{{route('posts.show',['post'=>$post->id])}}" class="btn btn-danger btn-block py-3 px-5"  >Bekor qilish</a>
                        </div>
                       </form>
                   </div>
               </div>
            {{-- </div> --}}

           </div>

</x-layouts.main>
