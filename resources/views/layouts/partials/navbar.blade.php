@if(Auth::user() != null)
<nav class="navbar navbar-expand-lg navbar-light bg-light">     
    <a class="navbar-brand" href="/"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav cascadaUno" style="justify-content:flex-end; align-items:center">      
            <li class="nav-item dropdown d-flex" >
                <a class="nav-link usuario dropdown-toggle" data-toggle="dropdown" href="/profile">{{Auth::user()->name}}</a>
                <ul class="dropdown-menu cascadaDos">

                    <li class="borderli">
                        <a href="/profile">Perfil</a>
                    </li>
                    <li>
                        <a href="/logout">Cerrar Sesión</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/faq">FAQ</a>
            </li>

            <li class="nav-item" >
                <form action="/productos/busqueda" class="form" method="GET" style="display:flex; flex-direction:row">
                            <input type="text" name="clave" class="input-group-text mb-3 mt-3 mr-3">
                            <input type="submit" class="btn btn-info" name="" id="" style="background-color:yellow; color:black; font-weight:bold; border: 1px solid yellow; margin:5%auto;">
                </form>
            </li>

        </ul>
    </div>
</nav>
@else
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/faq">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Search</a>
            </li>
        </ul>
    </div>
</nav>
@endif