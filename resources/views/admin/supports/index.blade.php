<h1>Listagem dos Supportes</h1>

<a href="{{ route('supports.create') }}" >Criar uma nova duvida</a>
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descricao</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
            </tr>
        @endforeach
    </tbody>
</table>