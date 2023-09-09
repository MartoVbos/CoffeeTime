<ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="{{route('home')}}">
              <i class="ni ni-tv-2 text-primary"></i> Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{url('/carta')}}">
            <i class="fas fa-coffee"></i> Nuestra carta
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="ni ni-pin-3 text-orange"></i> Como llegar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="ni ni-bullet-list-67 text-red"></i> Horario de atencion
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="ni ni-single-02 text-yellow"></i> Contacto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}"
                onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
            >
              <i class="fas fa-sign-in-alt"></i> Cerrar sesión
            </a>
            <form action="{{route('logout')}}" method="POST" style="display: none;" id="formLogout">
                @csrf
            </form>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
       
       