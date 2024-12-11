@extends ('layout.app')
@section('content')
<h2 class="mb-4">Add new student</h2>

<form action="{{ route('students.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-lable">Name :</label>
        <input type="text" name="name" id="name" placeholder="Name" class="form controler">
    </div>
    <div class="mb-3">
        <label for="email" class="form-lable">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" class="form controler">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-lable">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Phone" class="form controler">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary"></a>
</form>
@endsection