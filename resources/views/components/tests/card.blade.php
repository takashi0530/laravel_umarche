{{-- 初期値 値が設定されていなかった場合、以下が適応される --}}
@props([
    'title',
    'message' => 'メッセージ初期値です ',
    'content' => '本文初期値です'
])

<div class="border-2 shadow-md w-1/ p-2">
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>
