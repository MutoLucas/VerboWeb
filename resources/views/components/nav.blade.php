<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/verbo_logo.png') }}" alt="" style="height: 30px"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active link-light" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light" href="#">Feed</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Escalas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>

            @if(!auth()->check())

            <div class="nav-item dropdown me-3">
                <a class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">Entrar</a>
                <ul class="dropdown-menu p-3" style="width: 190px">
                    <form action="" method="">
                        @csrf
                        <div class="mx-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="usuario" id="nome" name="nome" class="form-control">
                        </div>

                        <div class="mx-3 mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" id="senha" name="senha" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary ms-5">Submit</button>

                    </form>
                </ul>
            </div>
            <a class="btn btn-secondary">Cadastrar</a>

            @elseif(auth()->check())
                <p>logado</p>
            @endif
        </div>
    </div>
</nav>
