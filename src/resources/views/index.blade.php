<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kakunin-test</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__logo" href="/">
            <h3 class="header__logo-title">FashionablyLate</h3>
        </div>
    </header>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input class="txt" type="text" name="first_name" placeholder="　例:山田" value="{{ old('first_name') }}" />
                            <input class="txt" type="text" name="last_name" placeholder="　例:太郎" value="{{ old('last_name') }}" />
                        </div>
                        <div class="form__error-box">
                            <div class="form__error">
                                @error('first_name')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="form__error">
                                @error('last_name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--gender">
                            <input type="radio" name="gender" value="男性" value="{{ old('gender') }}" checked>男
                            <input type="radio" name="gender" value="女性" value="{{ old('gender') }}">女
                            <input type="radio" name="gender" value="その他" value="{{ old('gender') }}">その他
                        </div>
                        <div class="form__error">
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input class="email" type="email" name="email" placeholder="　例:test@example.com" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--tel">
                            <input class="tel" type="tel" name="tell" placeholder="　08012345678" value="{{ old('tell') }}" />
                        </div>
                        <div class="form__error">
                            @error('tell')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input class="address" type="text" name="address" placeholder="　例:東京千駄ヶ谷区1-2-3" value="{{ old('address') }}" />
                        </div>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input class="building" type="text" name="building" placeholder="　例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <select class="confirm" size="1" name="content" value="{{ old('content') }}" >
                                <option value="" selected disabled>選択してください</option>
                                <option value="商品のお届けについて">商品のお届けについて</option>
                                <option value="商品の交換について">商品の交換について</option>
                                <option value="商品トラブル">商品トラブル</option>
                                <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <div class="form__error">
                            @error('content')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group--textarea">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--textarea">
                            <textarea class="textarea" size="20" name="detail" placeholder="　お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
                        </div>
                        <div class="form__error">
                            @error('detail')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>