@extends('frontend.main_master')

@section('content')
    
<!-- Jumbotron -->
  <section class="jumbotron text-center">

    @foreach ($profiles as $item)
        
    <img src="{{ asset($item->profile_photo) }}" alt="Thomas Ardiansah" width="200" class="rounded-circle img-thumbnail" />

    {{-- name --}}
    <h1 class="display-4">{{ $item->name }}</h1>

    {{-- Job --}}
    <p class="lead">{{ $item->status }} || {{ $item->job }}</p>
      
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#fff"
        fill-opacity="1"
        d="M0,32L48,48C96,64,192,96,288,133.3C384,171,480,213,576,202.7C672,192,768,128,864,106.7C960,85,1056,107,1152,112C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">

        {{-- Description --}}
        <div class="col-md-4 mb-3"> {{ $item->description }} </div>
        
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#e0e0e0"
        fill-opacity="1"
        d="M0,224L48,208C96,192,192,160,288,128C384,96,480,64,576,58.7C672,53,768,75,864,112C960,149,1056,203,1152,218.7C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>

      @endforeach
  </section>
  <!-- Akhir About -->

  <!-- Projects -->
  <section id="projects">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Projects</h2>
        </div>
      </div>
      <div class="row justify-content-center">

        @foreach ($projects as $item)
            
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ asset($item->project_photo) }}" class="card-img-top" height="250"/>
              <div class="card-body">
                <h4 for="">{{ $item->title }}</h4>
                <p class="card-text">{{ $item->description }}</p>
              </div>
            </div>
          </div>

        @endforeach
        
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#fff"
        fill-opacity="1"
        d="M0,288L48,261.3C96,235,192,181,288,138.7C384,96,480,64,576,53.3C672,43,768,53,864,53.3C960,53,1056,43,1152,32C1248,21,1344,11,1392,5.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- Akhir Projects -->

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" name="name" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" name="email" required />
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea class="form-control" id="message" rows="3" name="message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>

          </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#e0e0e0"
        fill-opacity="1"
        d="M0,128L40,122.7C80,117,160,107,240,112C320,117,400,139,480,149.3C560,160,640,160,720,181.3C800,203,880,245,960,234.7C1040,224,1120,160,1200,149.3C1280,139,1360,181,1400,202.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- Akhir Contact -->

  @endsection