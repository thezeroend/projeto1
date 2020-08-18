@extends('layouts.app', ['activePage' => 'usuarioCreate', 'titlePage' => __('Controle de Usuario')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form name="formCad" id="formCad" method="post" action="{{ route('usuario.store') }}">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Novo Usuario') }}</h4>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nome') }}</label>
                  <div class="col-sm-4">
                  <div class="form-group">
                      <input class="form-control" name="name" id="input-name" type="text" placeholder="{{ __('Nome') }}" required="true" aria-required="true"/>
                     </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <input class="form-control" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" required />
                     </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Senha') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <input class="form-control" name="password" id="input-password" type="password" placeholder="{{ __('Password') }}" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Prontuario') }}</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <input class="form-control" name="prontuario" id="input-prontuario" type="text" placeholder="{{ __('Prontuario') }}" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                
                <button type="submit" class="btn btn-primary">{{ __('Confirma') }}</button>
                
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection