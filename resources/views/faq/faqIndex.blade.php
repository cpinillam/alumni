{{-- @include('partials.header') --}}
{{-- @yield('header') --}}
<div class="list-group">

    <button type="button" class="list-group-item list-group-item-action"><a href="
            {{ route('allquestions') }}">SEE ALL QUESTIONS</a>
    </button>

    <button type="button" class="list-group-item list-group-item-action"><a href="/createquestion">POST
            QUESTIONS</a></button>
    </form>
</div>
</div>

{{-- @include('partials.footer') --}}
{{-- @yield('footer') --}}