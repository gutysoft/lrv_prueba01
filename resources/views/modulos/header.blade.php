
<nav class="main-header navbar navbar-expand-md navbar-dark navbar-info">
    <div class="container">
        <a href="" class="navbar-brand mr-md-3">

            <i class="fas fa-store-alt" class="brand-image img-circle elevation-3"></i>
            <span class="brand-text font-weight-dark">Sistema de Ventas</span>
        </a>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

            {{-- <li class="nav-item image">

                <i class="fas fa-store-alt" class="brand-image img-circle elevation-3"></i>

            </li> --}}

            <li class="nav-item">
                <a class="nav-link">
                    Usuario 01
                </a>
            </li>


            <li class="nav-item">

                <a class="nav-link" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">

                    <i class="fas fa-sign-out-alt"></i>

                </a>

                <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display:none">
                    @csrf
                </form>

            </li>

        </ul>

    </div>

</nav>
<!-- /.navbar -->