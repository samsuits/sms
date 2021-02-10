<div class="col">

    <div class="card mb-3">
        <img src="{{asset('images/sms.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">List of Students</h5>
            <p class="card-text">All the information about students</p>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Reg No</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Second Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operations</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->reg }}</td>
                        <td>{{ $student->firstName }}</td>
                        <td>{{ $student->secondName }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->speciality }}</td>
                        <td>
                            <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>


</div>
