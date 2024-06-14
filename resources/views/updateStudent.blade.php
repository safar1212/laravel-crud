<H2>update existing Student</H2>

<form action="{{ route('update.student', $data->id) }}" method="post">
    @csrf
    @method('PUT')
<div style="display: flex; flex-direction:column; width:200px; justify-content:center; margin-left:50px;">
<label for="">Stduent name</label>
<input type="text" value="{{$data->student_name}}" name="studentName">
<label for="">Age</label>
<input type="text" value="{{$data->age}}" name="studentAge">
<label for="">city</label>
<input type="text" value="{{$data->city}}" name="studentCity">
 <br>
<button>Update</button>
</div>
</form>