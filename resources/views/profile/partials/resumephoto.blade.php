<h4>Foto</h4>
<form action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="partresume" value="photo">
    <input type="hidden" name="user_id" value="{{$user->id}}">

    <label for="inputPassword5" class="form-label">Foto Atual:</label>
    <figure class="figure">
        @if($user->resumebase->photo != '')
        <img class="masthead-avatar mb-5 rounded-circle" src="uploads/{{$user->resumebase->photo}}" alt="..." />
    @else
        <img class="masthead-avatar mb-5 " src="startbootstrap/assets/img/avataaars.svg" alt="..." />
    @endif
        {{-- <figcaption class="figure-caption">A caption for the above image.</figcaption> --}}
      </figure>
    <input type="file" name="resumephoto" >

    <input type="submit" value="atualizar" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
</form>
