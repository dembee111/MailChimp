<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap1.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
       <div class="container">
              <a class="navbar-brand" href="#">Go English</a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Мэдээлэл<span class="sr-only">(current)</span></a>
                  </li>                
                 
                   <li class="nav-item">
                    <a class="nav-link" href="#">Дүрэм</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="#">Сонсох</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="#">Унших</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="#">Яриа</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Бичих</a>
                  </li>
                </ul>
                
              </div>
          </div>
          
        </nav>
        
            <header class="masthead text-white text-center" style="background:rgb(242, 242, 242);background-size:cover;">
              <div class="overlay"></div>
              <div class="container">
                  <div class="row">
                      <div class="col-xl-9 mx-auto">
                          <h1 class="mb-5" style="color:white;">Бидэнтэй нэгдэж хичээлийн тухай мэдээлэлээ цаг алдалгүй олж аваарай</h1>
                      </div>
                      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                          <form action="{{ route('newsletter.create')}}" method="post">
                              <div class="form-row">
                                  <div class="col-12 col-md-9 mb-2 mb-md-0">
                                    <input name="email" class="form-control form-control-lg" type="email" placeholder="имэйлээ оруулна уу...">
                                    @if($errors->has('email'))
                                       <div class="error">
                                            {{ $errors->first('email')}}
                                       </div>
                                    @endif
                                  </div>
                                  <!--<input type="hidden" class="form-control" name="_token" value="{{ csrf_token()}}">-->
                                  {{ csrf_field() }}
                                  <div class="col-12 col-md-3"><button class="btn btn-primary btn-block btn-lg" type="submit">Нэгдэх</button></div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </header>
  

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>