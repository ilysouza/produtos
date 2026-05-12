<div class="mt-5">

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Gestão de estoque</h2>
            <div class="d-flex gap-2">
                <a href="{{ route('movimentacao.create') }}" class="btn btn-secondary">Movimentações</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5>Movimentações de Produtos</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Produto</th>
                        <th>Tipo</th>
                        <th>Quantidade</th>
                        <th>Usuário</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movimentacoes as $m)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($m->data_movimentacao)->format('d/m/Y') }}</td>
                            <td>{{ $m->produto->nome }}</td>
                            <td>@if($m->tipo == 'entrada')
                              <span class="badge bg-primary">Entrada</span>
                              @else
                              <span class="badge bg-danger">Saída</span>
                              @endif
                            </td>
                            <td>{{ $m->quantidade }}</td>
                            <td>{{ $m->user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
