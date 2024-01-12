<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Sobrenome</th>
        <th scope="col">E-mail</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
        @php $intNum = 1 @endphp
        @foreach ($recruiters as $key => $recruiter)
        <tr>
            <td>{{$intNum}}</td>
            <td>{{$recruiter->namerecruiter}}</td>
            <td>{{$recruiter->surname}}</td>
            <td>{{$recruiter->email}}</td>
        </tr>
        @php $intNum++ @endphp
        @endforeach

    </tbody>
  </table>
  {{$recruiters->links()}}
