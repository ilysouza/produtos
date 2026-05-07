<div class="mt-5">

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Produto ID</th>
      <th scope="col">Tipo</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
    @foreach($movimentacoes as $m)
    <tr>
      <th scope="row">{{ $m->id }}</th>
      <td>{{ $m->produto_id }}</td>
      <td>{{ $m->tipo }}</td>
      <td>{{ $m->quantidade }}</td>
      <td>{{ $m->data_movimentacao }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
