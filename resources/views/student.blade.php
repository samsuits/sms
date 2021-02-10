<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Student management system</title>
</head>
<body>
@include("navbar")


@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="row">

            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

            </section>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="{{asset('images/student-entry.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the student information</h5>
                        <form action="{{url('/store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Reg No</label>
                                <input type="text" name="reg" class="form-control" placeholder="Enter Reg No">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">First name</label>
                                <input type="text" name="firstName" class="form-control" placeholder="Enter First name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Second name</label>
                                <input type="text" name="secondName" class="form-control" placeholder="Enter second name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter age">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Speciality</label>
                                <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">

            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

            </section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">

            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="{{asset('images/student-entry.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update Student Information</h5>
                        <form action="{{url('/update/'.$student->id)}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Reg No</label>
                                <input value="{{$student->reg}}" type="text" name="reg" class="form-control"
                                       placeholder="Enter Reg No">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">First name</label>
                                <input value="{{$student->firstName}}" type="text" name="firstName" class="form-control" placeholder="Enter First name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Second name</label>
                                <input value="{{$student->secondName}}" type="text" name="secondName" class="form-control" placeholder="Enter second name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">age</label>
                                <input value="{{$student->age}}" type="text" name="age" class="form-control" placeholder="Enter age">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Speciality</label>
                                <input value="{{$student->speciality}}" type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer></footer>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
</body>
</html>
