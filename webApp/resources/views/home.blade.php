@extends('layouts.app')

@section('content')
<div>
    <div class="container common-bg common-fc br6">
        <div class="row justify-content-center">
            <dl class="mH630">
                <dt class="mt10">
                    <img src="{{ asset('/img/user.png') }}">
                    <label>サービスID ： {{ Auth::user()->customer_id }} / 有効期限 ： @TODO 有効期限</label>
                </dt>

                <div>
                    <div class="gram-name-block fL dF">
                        <img src="{{ asset('/img/set_gram.png') }}">
                        <dt class="gram-name"></dt>
                    </div>
                    <div class="select-template-block fL tC">
                        <dt>テンプレート選択</dt>
                        <dd><img src="{{ asset('/img/select_template.png') }}"></dd>
                    </div>
                    <div class="local-save-block fR tC">
                        <dt>ローカルに保存</dt>
                        <dd><img src="{{ asset('/img/save_local.png') }}"></dd>
                    </div>
                </div>

                <textarea id="textarea" class="form-control br0 border-color-black lined pTb50 common-bg-white" rows="10" cols="60" name="memo" value=""></textarea>

                <div class="pRt80">
                    <dt class="mt10 pRr53">エラー出力</dt>
                    <textarea class="form-control bg-error-color br0 border-color-black pointer-events-none" rows="6" name="memo" value="" readonly></textarea>
                </div>

                <div id="drop-area">
                    <p>ドラッグ&ドロップしてファイルをアップロードしてください。</p>
                </div>
            </dl>
        </div>
    </div>
    @endsection
