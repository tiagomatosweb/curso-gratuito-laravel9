

<h1>User</h1>
{{ $user->name }} <br>
{{ $user->email }} <br>

<br>
{{ date('d/m/y') }}

<br>
@php
    $total = 0;
    $array = [];
    $boolean = false;
@endphp

Unless<br>
@unless($boolean)
    Falso
@endunless
<br><br>

If<br>
@if($boolean)
    True
@endif
<br><br>

@empty($array)
    O array está vazio jovem!
@endempty

<br><br>

@if($total > 100)
    Muito caro
@elseif($total > 80)
    tá ok
@elseif($total > 50)
    tá barato
@endif
