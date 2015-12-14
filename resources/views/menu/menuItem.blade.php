
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 14/12/15
 * Time: 18:02
 */
        <li class="action">
    @if ($url = null)
        <a href = "{{$url}}">
    @endif
        @if ($icon = null)
        <i class = "fa" {{$icon}}></i>
        @endif
<span>{{ $title }}</span>
@if ($url = null)
    </a>
    @endif

    </li>