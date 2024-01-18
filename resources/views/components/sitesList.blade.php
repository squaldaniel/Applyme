@props(['sites'])
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Site</th>
        <th scope="col">Link</th>
        <th scope="col">Descrição</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
        @php $intNum=1; @endphp
        @foreach ($sites as $key => $site)
        <tr>
            <td>{{$intNum}}</td>
            <td>{{$site->sitename}}</td>
            <td><a href="{{$site->sitelink}}">{{$site->sitelink}}</a></td>
            <td>{{$site->descriptions}}</td>
        </tr>
        @php $intNum++ @endphp
        @endforeach

    </tbody>
  </table>
