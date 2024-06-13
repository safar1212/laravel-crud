<h1>All users page</h1>

@foreach ( $data as $id => $student )

<h3>{{$student->student_name}} |
{{$student->age}} |
{{$student->city}} |
<a href="{{route('view.student', $student->id)}}">view student</a>
<a href="{{route('delete.student', $student->id)}}">Delete student</a>

</h3>
    
@endforeach