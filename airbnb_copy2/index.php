<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- slick.css -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>    <link rel="icon" href="img/favicon.png">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
    <title>Host your home on airbnb</title>
</head>
<body>
    <section class="entire">
        <header class="index-header">
            <section class="header-tablet-size">
                <div class="index-header1">
                    <div class="airbnb-mark-zone">
                        <a href="#" class="airbnb-mark-link"><i class="fab fa-airbnb airbnb-mark"></i></a>
                    </div>
                    <div>
                        <div class="index-hosting-expected">
                            予想ホスティング収入額をチェック
                        </div>

                        <h1 class="hosting-income">
                        <?php
                            echo "Nerimaでホスティングして、ひと月あたり最大90,543の収入を得ましょう"
                        ?>
                        </h1>
                    </div>
                    <div>
                        <div class="index-ecpected-method">予想ホスティング収入額の計算方法</div>
                    </div>
                </div>

                <div class="index-header2">
                    <form class="index-form" action="post">
                        <div class="index-form-bg">
                            <div class="form-tablet-scroll">
                                <div class="form-top-text">予想ホスティング収入額を更新するにはお部屋についてさらに詳しくお聞かせください</div>
                                <div class="house-gueast">
                                    <div class="location-zone">
                                        <input type="address" placeholder="所在地" class="location">
                                    </div>
                                    <div class="reserved" tabindex="0">まるまる貸切<span class="arrow"></span></div>

                                        <!-- 「まるまる貸切」を押すと現れる -->
                                        <section class="hide-menu">
                                            <button>
                                                <span>まるまる貸切</span>
                                                <p>ゲストはお部屋をまるまる独り占めできます。専用玄関があり、共有スペースはありません。通常、寝室、バスルーム、キッチンが含まれます。</p>
                                            </button>
                                            <button>
                                                <span>個室</span>
                                                <p>就寝時はゲスト専用の個室を利用します。その他のエリアは共用の場合があります。</p>
                                            </button>
                                            <button>
                                                <span>シェアルーム</span>
                                                <p>ゲストの寝室は他者と共有する場合のある相部屋または共用エリアとなります。</p>
                                            </button>
                                        </section>
                                    
                                    <div class="guest" tabindex="0">ゲスト4人<span class="arrow"></span></div>
                                        <!-- ゲスト4人を押すと現れる -->
                                        <section class="hide-menu">
                                            <ul>
                                                <li>
                                                    <div>ゲスト0人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト1人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト2人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト3人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト4人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト5人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト5人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト6人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト7人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト8人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト9人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト10人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト11人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト12人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト13人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト14人</div>
                                                </li>
                                                <li>
                                                    <div>ゲスト15人</div>
                                                </li>
                                            </ul>
                                        </section>
                                    
                                </div>
                                <div class="slide-down">+ ゲストが利用できる特別なスペースがあればお知らせください</div>
                                
                                <!-- + ゲストが利用できる〜　を押下で出現 -->
                                <div class="hide-form">
                                    <div class="building-zone">
                                        <div class="building-type" tabindex="0">建物タイプ<span class="arrow"></span></div>
                                            <section class="hide-menu">
                                                <button>
                                                    <span>建物タイプ</span>
                                                    <p>一般的に集合住宅や団地内にある住居を指します</p>
                                                </button>
                                                <button>
                                                    <span>B&B</span>
                                                    <p>ゲストに朝食を提供する形態の法人ホストを指します。通常はホストも宿泊施設に居住しています</p>
                                                </button>
                                                <button>
                                                    <span>デザイナーズホテル</span>
                                                    <p>ブランド独自のデザインやテーマ、インテリアで統一された法人ホストを指します</p>
                                                </button>
                                                <button>
                                                    <span>一軒家</span>
                                                    <p>一般的に一戸建ての住居を指しますが、メゾネットやテラスハウスなど、境界壁や屋外エリアをほかの世帯と共有する住宅もこの部類に含まれます</p>
                                                </button>
                                                <button>
                                                    <span>サブユニット</span>
                                                    <p>通常ひとつの建物を別のユニットと共用するものを指し、ゲスト専用の玄関があります</p>
                                                </button>
                                                <button>
                                                    <span>ユニークな宿泊施設</span>
                                                    <p>キャンピングカー、ファームステイ、テント、タイニーハウス、ツリーハウスなど、特徴的または一風変わった構造の宿泊先を指します</p>
                                                </button>
                                            </section>


                                        <div class="bed-room" tabindex="0">寝室<span class="arrow"></span></div>
                                        <div class="bath-room" tabindex="0">バスルーム<span class="arrow"></span></div>
                                            <section class="hide-menu">
                                                <ul>
                                                    <li>
                                                        <div>0バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>1バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>2バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>3バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>4バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>5バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>6バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>7バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>8バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>9バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>10バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>11バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>12バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>13バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>14バスルーム</div>
                                                    </li>
                                                    <li>
                                                        <div>15バスルーム</div>
                                                    </li>
                                                </ul>
                                            </section>
                                    </div>
                                <div class="slide-down2">+ 特別なアメニティ・設備を追加</div>
                                </div>
                                
                                <section class="hide-form2">
                                    <div class="check-box-zone">
                                        <div class="check-item">
                                            <input class="form-check-box" type="checkbox" name="jim" id="jim">
                                            <label class="check-box-text" for="jim">ジム</label>
                                        </div>
                                        <div class="check-item">
                                            <input class="form-check-box" type="checkbox" name="waterflont" id="waterflont">
                                            <label class="check-box-text" for="waterflont">ウォーターフロント</label>
                                        </div>
                                        <div class="check-item">
                                            <input class="form-check-box" type="checkbox" name="bath" id="bath">
                                            <label class="check-box-text" for="bath">露天風呂・ジャグジー</label>
                                        </div>
                                        <div class="check-item">
                                            <input class="form-check-box" type="checkbox" name="beach" id="beach">
                                            <label class="check-box-text" for="beach">ビーチフロント</label>
                                        </div>
                                        <div class="check-item">
                                            <input class="form-check-box" type="checkbox" name="pool" id="pool">
                                            <label class="check-box-text" for="pool">プール</label>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <input type="submit" value="リスティングの掲載をはじめる" class="risting-start">
                        </div>
                    </form>
                </div>
            </section>
        </header>

        <main>
            <div class="index-main1">
                <section class="index-main1-zone">
                    <h2 class="index-main1-title">ホスティングの流れ</h2>
                    <ul class="slide-list">
                        <li class="slide-list-item">
                            <article class="slide-img-zone">
                                <img src="img/airbnb-copy2-main1.jpg" alt="" class="slide-img">
                            </article>
                            <div class="slide-list-text-zone">
                                <h3 class="index-main1-subtitle" class="index-main1-subtitle">ゲストに求める要件をホスト自身で選択</h3>
                                <div class="index-main1-text" class="index-main1-text">ゲストの店員と滞在可能な日数を決めましょう。ゲストが滞在中に守るべきハウスルールを設定しましょう。</div>
                                <a href="#" class="index-main1-a">詳細を見る</a>
                            </div>
                        </li>
                        <li class="slide-list-item">
                            <article class="slide-img-zone">
                                <img src="img/airbnb-copy2-main1-2.jpg" alt="" class="slide-img">
                            </article>
                            <div class="slide-list-text-zone">
                                <h3 class="index-main1-subtitle">ホスティングする期間は自由に設定可能</h3>
                                <div class="index-main1-text">カレンダーの日付はいつでもブロックできます。最低受け入れ日数といった制限もありません。</div>
                                <a href="#" class="index-main1-a">詳細を見る</a>
                            </div>
                        </li>
                        <li class="slide-list-item">
                            <article class="slide-img-zone">
                                <img src="img/airbnb-copy2-main1-3.jpg" alt="" class="slide-img">
                            </article>
                            <div class="slide-list-text-zone">
                                <h3 class="index-main1-subtitle">自由な料金設定</h3>
                                <div class="index-main1-text">料金は自由に設定できます。Airbnbのツールや分析情報を活用して、エリア内におけるリスティングの価格競争力の維持に役立てましょう。</div>
                                <a href="#" class="index-main1-a">詳細を見る</a>
                            </div>
                        </li>
                        <li class="slide-list-item">
                            <article class="slide-img-zone">
                                <img src="img/airbnb-copy2-main1-4.jpg" alt="" class="slide-img">
                            </article>
                            <div class="slide-list-text-zone">
                                <h3 class="index-main1-subtitle">ゲストを温かく迎え入れましょう</h3>
                                <div class="index-main1-text">アメニティ・設備とパフォーマンスのガイドラインに従って快適な滞在を提供し、高評価レビューを獲得しましょう。</div>
                                <a href="#" class="index-main1-a">詳細を見る</a>
                            </div>
                        </li>
                    </ul>
                </section>
                <hr class="index-separate-line">
            </div>

            <div class="index-main2">
                <section class="index-main2-zone">
                    <div class="index-main2-tablet-positon">
                        <div class="index-main2-top">
                            <h2 class="index-main2-title">活気あふれるホストコミュニティに参加しよう</h2>
                            <div class="index-main2-text">旅行者の記憶に残る滞在を提供して、ご自身が好きなことを追求するための収入を得ましょう。</div>
                            <button class="start-button">はじめる</button>
                        </div>
                        <div>
                            <div class="slide-blur"></div>
                        </div>
                        <div class="art-slide">
                            <article class="index-main2-img-zone">
                                <img src="img/index-main2-1.jpg" alt="" class="index-main2-img">
                                <h4>Darrelさん</h4>
                                <p>アトランタでタイニーハウスをホスティング</p>
                                <a href="#">タイニーハウスをチェック</a>
                            </article>
                            <article class="index-main2-img-zone">
                                <img src="img/index-main2-2.jpg" alt="" class="index-main2-img">
                                <h4>Candidaさんf<br>＆Jeffさん</h4>
                                <p>ジョシュア・ツリーで一軒家をホスティング</p>
                                <a href="#">一軒家をチェック</a>
                            </article>
                            <article class="index-main2-img-zone">
                                <img src="img/index-main2-3.jpg" alt="" class="index-main2-img">
                                <h4>Ryoさん</h4>
                                <p>小松でファームステイをホスティング</p>
                                <a href="#">ファームステイをチェック</a>
                            </article>
                            <article class="index-main2-img-zone">
                                <img src="img/index-main2-4.jpg" alt="" class="index-main2-img">
                                <h4>Sophieさん</h4>
                                <p>パリでロフトをホスティング</p>
                                <a href="#">ロフトをチェック</a>
                            </article>
                            <article class="index-main2-img-zone">
                                <img src="img/index-main2-5.jpg" alt="" class="index-main2-img">
                                <h4>Nancyさん</h4>
                                <p>サンフランシスコで個室をホスティング</p>
                                <a href="#">個室をチェック</a>
                            </article>
                    </div>
                    </div>
                </section>
                <hr class="index-separate-line">
            </div>

            <div class="index-main3">
                <section class="index-main3-zone">
                    <h2 class="index-main3-title">Airbnbはみなさまの安全を最優先に考えております</h2>
                </section>
            </div>
        </main>

    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="script/min/style.js"></script>
</body>
</html>