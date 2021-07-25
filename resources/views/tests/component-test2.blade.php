<x-tests.app>

    <x-slot name="header">ヘッダー２</x-slot>

    コンポーネントテスト2

    {{-- 先にTestClassBas3クラスが呼び出されて、その後以下がレンダーされる --}}
    {{-- resources/views/components/tests/test-class-base-component.blade.php のファイルの中身が表示--}}
    {{-- classBaseMessageをクラスにも設定しておく必要がある --}}
    {{-- defaultMessageは設定されていないので、クラスのコンストラクタで設定している初期値が適応される --}}
    <x-test-class-base classBaseMessage="メッセージです"></x-test-class-base>

    <div class="mb-4"></div>

    {{-- 初期値を変更する場合は以下 --}}
    <x-test-class-base classBaseMessage="メッセージです" defaultMessage="初期値から変更しています"></x-test-class-base>

</x-tests.app>
