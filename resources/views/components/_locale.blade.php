<form class="d-inline" action="{{route('set_language.locale',$lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn">
        <img src="{{asset('vendor/blade-flags/language-'. $lang . '.svg')}}" alt="" width="40" height="40"/>
    </button>
</form>
