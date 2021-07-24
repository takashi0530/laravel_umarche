<x-tests.app>
    <x-slot name="header">ヘッダー１</x-slot>
    コンポーネントテスト１

    <x-tests.card title="タイトル1" content="本文1" :message="$message"></x-tests>
    <x-tests.card title="タイトル２"></x-test>
    <x-tests.card title="cssを変更したい" class="bg-red-300"></x-test>
</x-tests.app>
