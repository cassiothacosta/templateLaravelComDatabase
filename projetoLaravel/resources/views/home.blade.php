@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="links ">
                            <a class="card-link" href="shares/create">Adicionar Share</a>
                            <a class="card-link" href="shares">Listar Shares</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
