@extends('common.layout')

@section('contents')
<div class="list-introduction">
    <h1><i class="far fa-envelope-square main-color"></i>コンタクト</h1>
    <p>お問い合わせはこちらのフォームからお願いします。</p>
    <div class="contact-form">
        <form action="">
            <div class="form-grid">
                
                    <div class="form-label">お名前</div>
                    <div class="form-value"><input type="text" name="name"></div>
                
                    <div class="form-label">メールアドレス</div>
                    <div class="form-value"><input type="text" name="email"></div>
                    
                    <div class="form-label">問い合わせ内容</div>
                    <div class="form-value"><textarea name="body"></textarea></div>

                    <div class="confirm-button"><button>確認する</button></div>
            </div>
        </form>
    </div>
</div>
@endsection