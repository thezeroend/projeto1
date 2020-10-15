<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="#" class="simple-text logo-normal">
        {{ __('SOF') }}
      </a>

    </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <div>
        <li class="nav-item {{ ($activePage == 'user_management') ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
            <p>{{ __('Controle de Usuários') }}
              <b class="caret"></b>
            </p>
          </a>

            <div class="collapse {{ ($activePage == 'user_management') ? 'show' : '' }}" id="laravelExample">
              <ul class="nav">
                <li class="nav-item{{ $activePage == 'user_management' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('usuario.index') }}">
                    <i class="material-icons">persons</i>
                    <span class="sidebar-normal"> {{ __('Usuarios Cadastrados') }} </span>
                  </a>
                </li>
              </ul>
            </div>
        </li>
      </div>

      <div>
        <li class="nav-item {{ ($activePage == 'comercio_ambulante_Add' || $activePage == 'comerciofixoAdd' || $activePage == 'noturnoAdd' || $activePage == 'livreAdd') ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#ocorrencia" aria-expanded="true">
            <p>{{ __('Nova Ocorrencia') }}
              <b class="caret"></b>
            </p>
          </a>

          <div class="collapse {{ ($activePage == 'comercio_ambulante_Add' || $activePage == 'comerciofixoAdd' || $activePage == 'noturnoAdd' || $activePage == 'livreAdd') ? 'show' : '' }}" id="ocorrencia">
            <ul class="nav">
              <li class="nav-item{{ $activePage == 'comerciofixoAdd' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('comerciofixo.create') }}">
                  <i class="material-icons">add</i>
                  <span class="sidebar-normal">{{ __('Comercio Fixo') }} </span>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'comercio_ambulante_Add' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('comercio_ambulante.create') }}">
                  <i class="material-icons">add</i>
                  <span class="sidebar-normal">{{ __('Praia') }} </span>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'noturnoAdd' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('noturno.create') }}">
                  <i class="material-icons">add</i>
                  <span class="sidebar-normal">{{ __('Fisc Noturna') }} </span>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'livreAdd' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('livre.create') }}">
                  <i class="material-icons">add</i>
                  <span class="sidebar-normal">{{ __('Feira Livre') }} </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </div>

      <div>
        <!-- Começo da View do Comercio Fixo-->
        <li class="nav-item {{ ($activePage == 'comerciofixoIndex' || $activePage == 'comerciofixoSemanal') ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#comerciofixo" aria-expanded="true">
            <p>{{ __('Relatorios Semanais') }}</p>
          </a>
          <div class="collapse {{ ($activePage == 'comerciofixoIndex') ? 'show' : '' }}" id="comerciofixo">
            <ul class="nav">
              <li class="nav-item{{ $activePage == 'comerciofixoIndex' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('comerciofixo.index') }}">
                  <i class="material-icons">list</i>
                  <span class="sidebar-normal"> {{ __('Relatorio Diario - Comercio Fixo') }} </span>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'comerciofixoSemanal' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('comerciofixo.semanal') }}">
                  <i class="material-icons">list</i>
                  <span class="sidebar-normal"> {{ __('Relatorio Customizado - Comercio Fixo') }} </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Fim da View do Comercio Fixo-->
        <!-- Começo da View do Praias-->
        <li class="nav-item {{ ($activePage == 'comercio_ambulante_Index') ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#comercio_ambulante" aria-expanded="true">
            <p>{{ __('Comercio Ambulante') }}</p>
          </a>

          <div class="collapse {{ ($activePage == 'comercio_ambulante_Index') ? 'show' : '' }}" id="comercio_ambulante">
            <ul class="nav">
              <li class="nav-item{{ $activePage == 'comercio_ambulante_Index' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('comercio_ambulante.index') }}">
                  <i class="material-icons">list</i>
                  <span class="sidebar-normal"> {{ __('Relatorio - Praia') }} </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Fim da View do Praias-->
        <!-- Começo da View do Fisc. Noturna-->
        <li class="nav-item {{ ($activePage == 'noturnoIndex') ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#noturno" aria-expanded="true">
            <p>{{ __('Fiscalizacao Noturna') }}</p>
          </a>

          <div class="collapse {{ ($activePage == 'noturnoIndex') ? 'show' : '' }}" id="noturno">
            <ul class="nav">
              <li class="nav-item{{ $activePage == 'noturnoIndex' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('noturno.index') }}">
                  <i class="material-icons">list</i>
                  <span class="sidebar-normal"> {{ __('Relatorio - F_Noturna') }} </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Fim da View do Fisc. Noturna-->
        <!-- Começo da View do Feira. Livre-->
        <li class="nav-item {{ ($activePage == 'livreIndex' ) ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#livre" aria-expanded="true">
            <p>{{ __('Feira Livre') }}</p>
          </a>

          <div class="collapse {{ ($activePage == 'livreIndex') ? 'show' : '' }}" id="livre">
            <ul class="nav">
              <li class="nav-item{{ $activePage == 'livreIndex' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('livre.index') }}">
                  <i class="material-icons">list</i>
                  <span class="sidebar-normal"> {{ __('Relatorio - F_Livre') }} </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
          <!-- Fim da View do Feira Livre-->
      </div>
    </ul>
  </div>
</div>
