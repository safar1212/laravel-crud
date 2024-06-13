<H2>update existing Student</H2>

{{-- <form action="{{ route('addStudent') }}" method="post"> --}}
    @csrf
<div style="display: flex; flex-direction:column; width:200px; justify-content:center; margin-left:50px;">
<label for="">Stduent name</label>
<input type="text" name="studentName">
<label for="">Age</label>
<input type="text" name="studentAge">
<label for="">city</label>
<input type="text" name="studentCity">
 <br>
<button>Update</button>
</div>
</form>