@extends('layouts.main')
@section('content')
<div class="container">
    <div class="jumbotron">
        @if(count($worksheets) > 0)
        @for($x = 0;$x < count($worksheets);$x++)
        <object width="1000" height="400" data="storage/files/{{ $worksheets[$x]->file }}">
        </object>
        <p>Note:{{ $worksheets[$x]->description }}</p>
         <h4>By {{ $worksheets[$x]->teacher }}</h4>
        @endfor    
        @else
            <h1>No Worksheets!!</h1>
        @endif
    </div>
</div>
@endsection