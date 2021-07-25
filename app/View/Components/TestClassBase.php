<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestClassBase extends Component
{
    // クラスベースでの値設定では以下のプロパティと、コンストラクタでの設定が必要
    public $classBaseMessage;
    public $defaultMessage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    // resources/views/tests/component-test2.blade.php の中の classBaseMessageの値の初期値を以下のコンストラクタで設定する必要がある
    public function __construct($classBaseMessage, $defaultMessage = '$defaultMessageの初期値です')
    {
        //
        $this->classBaseMessage = $classBaseMessage;
        $this->defaultMessage = $defaultMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // resources/views/components/tests/test-class-base-component.blade.php
        // のファイルを表示する
        return view('components.tests.test-class-base-component');
    }
}
