@extends('layouts.template')

    @section('title') Cadastro de login @endsection

    @section('estilo')
        .white-blue{
            background-color: #039be5;
            color: white;
        }
    @endsection

    @section('nav&footer')

    <!-- Início formulário -->
    <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5 text-light">
            <form class="row g-2" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="col-md-12 mb-3">
                    <label class="form-label">Nome de usuário</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">E-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Tipo de perfil</label>
                    <select name="id_perfil" class="form-control" placeholder="Selecione o tipo de usuário:"required>
						<option value="1">Administrador</option>
                        <option value="2">Leitor</option>
                        <option value="3">Técnico</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Senha</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror      
                </div>

                <div class="col-md-6 mb-5">
                    <label class="form-label">Confirme sua senha</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror      
                </div>

                <div class="col-md-12 d-grid gap-1 mb-5">
                    <button class="btn white-blue" type="submit">Salvar</button>
                </div>
            </form> 
        </div>
    </div>
    <!-- Fim formulário -->

    @endsection