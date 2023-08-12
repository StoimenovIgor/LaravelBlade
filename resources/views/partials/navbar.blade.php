<!-- NAVBAR -->
    <nav
        class="d-flex justify-content-md-between align-content-center navbar navbar-expand-lg navbar-light bg-warning py-3">
        <div class="navbar-brand  logo-con d-flex flex-column align-content-center mr-0">
            <a href="{{ route('home') }}">
                <img src="{{asset('images/logo.png')}}" class="d-block mx-auto w-25" />
            </a>
            <h6 class="mb-0 text-center"><small class="font-weight-bold">BRAINSTER</small></h6>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-around align-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav d-contents academy-con justify-content-md-between">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-dark d-block py-2 px-2 link"
                        href="https://brainster.co/full-stack/"><span>Академија за програмирање</span>
                    </a>
                </li>
                <li class=" nav-item ">
                    <a class="nav-link font-weight-bold text-dark d-block py-2 px-2 link" type="button"
                        href="https://brainster.co/marketing/" target="_blank"><span>Академија за маркетинг</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-dark d-block py-2 px-2 link"
                        href="https://brainster.co/graphic-design/" target="_blank"><span>Академија за дизајн</span></a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link font-weight-bold text-dark d-block py-2 px-2 link"
                        href="https://blog.brainster.co/" target="_blank"><span>Блог</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-dark d-block py-2 px-2 link" data-toggle="modal" data-target="#employModal">
                       Вработи студент
                    </a>
                </li>
                @auth
                    <li class="nav-item d-flex align-items-center">
                        <a href="{{ route('admin-panel') }}" class="nav-link btn btn-info text-white mr-3 px-3"> <small class="small">Панел</small></a>

                        <a href="{{ route('logout') }}" class="nav-link btn btn-danger text-white px-3"><small class="small">Одјавa</small></a>
                    </li>
                @endauth
                <!-- <li class="nav-item">
                    <a h ref="{{ route('login') }}" class="btn btn-primary">Логирај се</a>
                </li> -->
            </ul>
        </div>
    </nav>
<!-- NAVBAR -->

<!-- MODAL -->
<div class="modal fade" id="employModal" tabindex="-1">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Вработи наши студенти</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p class="text-secondary">Внесете ваши информации за да стапиме во контакт:</p>

                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif

                      @if (session()->has('success_email'))
                          <div class="alert alert-success">
                              {{ session('success_email') }}
                          </div>
                      @endif

                      <form action="{{ route('mails.hireStudent') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <label for="company_email" class="col-form-label">Е-пошта:</label>
                              <input type="text" class="form-control" name="company_email" id="company_email"
                                  value="{{ old('company_email') }}">
                          </div>
                          <div class="form-group">
                              <label for="company_phone" class="col-form-label">Телефон:</label>
                              <input type="text" class="form-control" name="company_phone" id="company_phone"
                                  value="{{ old('company_phone') }}">
                          </div>
                          <div class="form-group">
                              <label for="company_name" class="col-form-label">Компанија:</label>
                              <input type="text" class="form-control" name="company_name" id="company_name"
                                  value="{{ old('company_name') }}">
                          </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-warning btn-block">Испрати</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
<!-- MODAL -->