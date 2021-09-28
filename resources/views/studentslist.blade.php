<div class="card mb-3">
  <img class="card-img-top" src="https://www.litgreytechnologies.com/wp-content/uploads/2020/03/Student-Management-System-Background.png" alt="Card image cap" height="250px">
  <div class="card-body">
    <h5 class="card-title"> List Of Students </h5>
    <p class="card-text">You Can Find Out All The Important Details Of The Students Via This SMS(Student Management System)</p>
  </div>
</div>

<table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td> {{ $student->cne }} </td>
                <td> {{ $student->firstname }} </td>
                <td> {{ $student->secondname }} </td>
                <td> {{ $student->age }} </td>
                <td> {{ $student->speciality }} </td>
                <td>
                    <a href="{{ url('/show/'.$student->id) }}" class="btn btn-sm btn-info">Show</a>
                    <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>