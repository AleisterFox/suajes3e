<ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="/home">
              <i class="ni ni-tv-2 text-red"></i> Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/customers">
              <i class="ni ni-single-02 text-red"></i> Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/estimates">
              <i class="ni ni-send text-red"></i> Cotizaciones
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/productions">
              <i class="ni ni-single-copy-04 text-red"></i> Hojas de produccion
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/inventories">
              <i class="ni ni-collection text-red"></i> Inventarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/payments">
              <i class="ni ni-credit-card text-red"></i> Ingresos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/expenses">
              <i class="ni ni-money-coins text-red"></i> Gastos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('logout')}}"
                onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
            >
              <i class="fas fa-sign-in-alt text-danger"></i> Cerrar sesion
            </a>
            <form action="{{route ('logout')}}" method="POST" style="display:none;" id="formLogout">
                @csrf
            </form>
          </li>
        </ul>
        <!-- Divider -->
        <!-- Heading -->
        