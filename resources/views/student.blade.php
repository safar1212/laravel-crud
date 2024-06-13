<h2>single user details</h2>

@foreach ($data as $id => $student )

<h3>Name: {{$student->student_name}}</h3>
<h3>Name: {{$student->age}}</h3>

    
@endforeach