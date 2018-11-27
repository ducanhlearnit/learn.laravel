@extends('layouts.app')

@section('content')
 <h1>This is post</h1>
 
 <h3>list posts</h3>

 @if (count($posts))
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post }}</li>    
        @endforeach        
    </ul>    
 @endif
 
@endsection