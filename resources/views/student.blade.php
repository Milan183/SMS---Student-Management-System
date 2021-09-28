<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SMS</title>
  </head>
  <body>

    @include('navbar')
    
    @if($layout == 'index')

            <div class="container-fluid mt-2">
                <div class="row">
                    <section class='col-md-7'>
                        @include('studentslist')
                    </section>
                    <section class="col-md-5">
                        <div class="card mb-3">
                            <img class="card-img-top" src="https://static8.depositphotos.com/1173077/910/v/950/depositphotos_9106842-stock-illustration-class-room.jpg" alt="Card image cap" height="350px">
                            <div class="card-body">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        
        <!-- <div class=" row header-container justify-content-center">
                <div class="header">
                    <h1> SMS - Student Management System </h1>
                </div>
            </div> -->

    @elseif($layout == 'create')

        <div class="container-fluid mt-2">
            <div class="row">
                <section class='col-md-7'>
                    @include('studentslist')
                </section>
                <section class="col-md-5">

                <div class="card mb-3">
                <img class="card-img-top" src="https://st3.depositphotos.com/27811286/33830/v/1600/depositphotos_338304752-stock-illustration-happy-cute-little-kids-boy.jpg" alt="Card image cap" height="350px">
                <div class="card-body">
                <h3 style="color:red"> Student Registration Form </h3>
                    <form action="{{ url('/store') }}">
                    @csrf
                    <div class="form-group">
                        <label for=""> CNE </label>
                        <input type="text" name="cne" class="form-control" placeholder="Enter CNE" required>
                    </div>
                    <div class="form-group">
                        <label for=""> First Name </label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group">
                        <label for=""> Second Name </label>
                        <input type="text" name="secondname" class="form-control" placeholder="Enter Second Name" required>
                    </div>
                    <div class="form-group">
                        <label for=""> Age </label>
                        <input type="text" name="age" class="form-control" placeholder="Enter Age" required>
                    </div>
                    <div class="form-group">
                        <label for=""> Speciality </label>
                        <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality" required>
                    </div>
                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
                        <input type="reset" name="reset" class="btn btn-dark" value="Reset">
                    </form>
                </div>
                </div>
                </section>
            </div>
        </div>

    @elseif($layout == 'show')

        <div class="container-fluid mt-2">
            <div class="row">
                <section class='col-md-7'>
                    @include('studentslist')
                </section>
                <section class="col-md-5">
                <div class="card mb-3">
                <img class="card-img-top" src="https://st3.depositphotos.com/27811286/33830/v/1600/depositphotos_338304752-stock-illustration-happy-cute-little-kids-boy.jpg" alt="Card image cap" height="350px">
                <div class="card-body">
                <h3 style="color:red"> Student Registration Form </h3>
                    <form action="{{ url('/show/'.$student->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for=""> CNE </label>
                        <input type="text" name="cne" class="form-control" placeholder="Enter CNE" value="{{ $student->cne }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> First Name </label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" value="{{ $student->firstname }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Second Name </label>
                        <input type="text" name="secondname" class="form-control" placeholder="Enter Second Name" value="{{ $student->secondname }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Age </label>
                        <input type="text" name="age" class="form-control" placeholder="Enter Age" value="{{ $student->age }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Speciality </label>
                        <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality" value="{{ $student->speciality }}" readonly>
                    </div>
                </form>
                </section>
            </div>
        </div>

    @elseif($layout == 'edit')

        <div class="container-fluid mt-2">
            <div class="row">
                <section class='col-md-7'>
                    @include('studentslist')
                </section>
                <section class="col-md-5">
                <div class="card mb-3">
                <img class="card-img-top" src="https://st3.depositphotos.com/27811286/33830/v/1600/depositphotos_338304752-stock-illustration-happy-cute-little-kids-boy.jpg" alt="Card image cap" height="350px">
                <div class="card-body">
                <h3 style="color:red"> Update Student Registration Form </h3>
                    <form action="{{ url('/update/'.$student->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for=""> CNE </label>
                        <input type="text" name="cne" class="form-control" placeholder="Enter CNE" value="{{ $student->cne }}" required>
                    </div>
                    <div class="form-group">
                        <label for=""> First Name </label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" value="{{ $student->firstname }}" required>
                    </div>
                    <div class="form-group">
                        <label for=""> Second Name </label>
                        <input type="text" name="secondname" class="form-control" placeholder="Enter Second Name" value="{{ $student->secondname }}" required>
                    </div>
                    <div class="form-group">
                        <label for=""> Age </label>
                        <input type="text" name="age" class="form-control" placeholder="Enter Age" value="{{ $student->age }}" required>
                    </div>
                    <div class="form-group">
                        <label for=""> Speciality </label>
                        <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality" value="{{ $student->speciality }}" required>
                    </div>
                        <input type="submit" name="submit" class="btn btn-success" value="Update">
                </form>
                </section>
            </div>
        </div>

    @elseif($layout == 'delete')

    <div class="container-fluid mt-2">
        <div class="row">
            <section class='col-md-7'>
                @include('studentslist')
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img class="card-img-top" src="https://static8.depositphotos.com/1173077/910/v/950/depositphotos_9106842-stock-illustration-class-room.jpg" alt="Card image cap" height="350px">
                    <div class="card-body">
                    </div>
                </div>
            </section>
        </div>
    </div>

    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>