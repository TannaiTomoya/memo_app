<?php

use function Livewire\Volt\{state};
use App\Models\Memo; //モデルの読み込み

state(['memos' => fn() => Memo::all()]);

?>

<div>
    <h1>タイトル一覧</h1>


    <ul>
    @foreach ($memos as $memo)
        <li><a href="{{route ('memos.show', $memo)}}">{{ $memo->title }}</a></li>
    @endforeach
    </ul>
</div>
