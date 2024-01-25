<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<h4>Portifolio</h4>
<form action="{{route('profile.store')}}" method="POST">
    @csrf
    <input type="hidden" name="partresume" value="info">
    <input type="hidden" name="user_id" value="{{$user->id}}">

    <label for="inputPassword5" class="form-label">Sobre mim:</label>
    <textarea class="form-control" name="aboutme" rows="3">{{$user->resumebase->aboutme}}</textarea>
    @if($errors->has('aboutme'))
        <div id="aboutmehelp" class="form-text text-danger">
            Campo necessário!
        </div>
    @else
        <div id="aboutmehelp" class="form-text">
            Aqui você pode colocar a sua apresentação, gostos, preferências ou saudação a recrutadores.
        </div>
    @endif

    <label for="inputPassword5" class="form-label">Cargos:</label>
    <input id="inputTags" class="form-control" type="text" name="positions" value="{{$user->resumebase->positions}}" required>
    @if($errors->has('aboutme'))
    <div id="aboutmehelp" class="form-text text-danger">
        Campo necessário!
    </div>
@else
    <div id="aboutmehelp" class="form-text">
        Neste campo, você coloca alguns cargos que já trabalhou ou gostaria de trabalhar, separando-os por virgula
    </div>
@endif

    <input type="submit" value="atualizar" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
</form>
