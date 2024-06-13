<h1>All users page</h1>

<a href="{{route('view.form')}}"><button>Add Student</button></a>

@foreach ( $data as $id => $student )

<h3>{{$student->student_name}} |
{{$student->age}} |
{{$student->city}} |
<a href="{{route('view.student', $student->id)}}"><button>view </button></a>
<a href="{{route('delete.student', $student->id)}}"><button>Delete student</button></a>
<a href="{{route('update.page', $student->id)}}"><button>Update student</button></a>


</h3>
    
@endforeach