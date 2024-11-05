<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>Add Vehicle</title>
</head>

<body class="d-flex flex-column min-vh-100 bg-default">
  <nav class="navbar navbar-expand-lg navbar-light bg-black shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand text-yellow-color" href={{ route('vehicle.index') }}>Add Vehicle</a>
      <div class="justify-end ">
        <ul class="navbar-nav ms-auto">
          <div class="d-flex align-items-center gap-3">
            <li>
              <a class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-light" href={{ route('home') }}>
                Home
              </a>
            </li>
            <li class="text-light">|</li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container flex-grow-1 mt-3 mb-4">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-12 col-md-10 col-lg-8 text-light">
        <h3 class="h1 text-yellow-color">Vehicle</h3>
        <form action="{{ route('vehicle.store') }}" method="post" class="border-custom p-5 rounded bg-black">
          @csrf
          <div class="row mb-3">
            <div class="form-group col-12 col-md-6">
              <label for="name" class="text-yellow-color">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group col-12 col-md-3">
              <label for="model" class="text-yellow-color">Model</label>
              <input class="form-control" id="model" name="model" rows="3" required></input>
            </div>
            <div class="form-group col-12 col-md-3">
              <label for="year" class="text-yellow-color">Year</label>
              <input class="form-control" id="year" name="year" rows="3" required type="number"></input>
            </div>
          </div>

          <div class="row mb-3">
            <div class="form-group col-12 col-md-3">
              <label for="mark" class="text-yellow-color">Mark</label>
              <input type="text" class="form-control" id="mark" name="mark" required>
            </div>
            <div class="form-group col-12 col-md-3">
              <label for="photo" class="text-yellow-color">Photo</label>
              <input class="form-control" id="photo" name="photo" rows="3" required></input>
            </div>
            <div class="form-group col-12 col-md-6">
              <label for="characteristics" class="text-yellow-color">Characteristics</label>
              <input class="form-control" id="characteristics" name="characteristics" rows="3" required max="500"></input>
            </div>
          </div>

          <div class="row mb-3">
            <div class="form-group col-12 col-md-4">
              <label for="type" class="text-yellow-color">Type</label>
              <select id="type" name="type" required class="form-select">
                <option value="CAR">Car</option>
                <option value="MOTORCYCLE">Motorcycle</option>
              </select>
            </div>
            <div class="form-group col-12 col-md-4">
              <label for="price" class="text-yellow-color">Price</label>
              <input class="form-control" id="price" name="price" rows="3" required type="number"></input>
            </div>
            <div class="form-group col-12 col-md-4">
              <label for="user_name" class="text-yellow-color">Owner</label>
              <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $userName }}" readonly disabled>
              <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            </div>
          </div>

          <br>
          <div class="d-flex justify-content-center">
            <button type="submit" class="px-3 btn btn-purple text-align-right fs-5">Create Vehicle</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="bg-black text-light py-4 mt-auto">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5 class="text-yellow-color">About us</h5>
          <p class="text-white-50">
            Our mission is to provide the best vehicle sales and maintenance service, ensuring satisfaction and trust for our customers.
          </p>
        </div>
        <div class="col-md-4 mb-3">
          <h5 class="text-yellow-color">Links</h5>
          <ul class="list-unstyled">
            <li><a href="{{ route('home') }}" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-light">Home</a></li>
            <li><a href="{{ route('vehicle.index') }}" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-light">Vehicles</a></li>
            <li><a href="{{ route('vehicle.create') }}" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-light">Add Vehicle</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-3">
          <h5 class="text-yellow-color">Contact</h5>
          <p class="text-white-50">Email: contact@devgarage.com</p>
          <p class="text-white-50">Phone: (11) 1234-5678</p>
        </div>
      </div>
      <hr class="text-light">
      <div class="text-center">
        <p class="m-0 text-white-50">&copy; {{ date('Y') }} Our Store. All rights reserved.</p>
      </div>
    </div>
  </footer>

</body>

</html>