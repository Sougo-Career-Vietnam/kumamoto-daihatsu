@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">
        <link rel="stylesheet" media="all" href="./css/interview.css"/>
        <script type="text/javascript" src="./js/interview.js"></script>
        {{--html埋め込み部分 start--}}

        <main id="main_wrap">

            <div id="oneday-page">

                <div class="main-banner">
                    <div class="inner-samll">
                        <h1 class="heading-main">
                            <span class="ttl-en">INTERVIEW</span>
                            <span class="ttl-ja">社員インタビュー</span>
                        </h1>
                    </div>
                </div>
  
  
                <div class="oneday-tabs">
                    <div class="inner-samll">
                        <p class="note-tab">待ちに待った新車が届いた時のお客様の「ワクワク・ドキドキ」の笑顔。 <br>仲良くなったお客様との会話のなかでみられるたくさんの笑顔。</p>
                        <ul class="onedayImage-list js-fadein">
                            <li class="onedayImage-item">
                              <a class="scroll" href="#oneday01">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_tab_01_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_tab_01_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/interview/oneday_tab_01_pc.png')}}" alt="サービス社員の写真">
                                </picture>
                                <div class="tab-info"> 
                                  <p class="t1">サービスアドバイザー&ensp;菊池店 （2020年入社）</p>
                                  <p class="t2">齊藤 高耶<span class="es-red">Takaya Saito</span></p>
                      
                                  </div>
                                  <div class="icon-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.414" height="10.121" viewBox="0 0 17.414 10.121">
                                      <path id="Path_6916" data-name="Path 6916" d="M3700.605-9306.274l8,8,8-8" transform="translate(-3699.898 9306.981)" fill="none" stroke="#4d4545" stroke-width="2"/>
                                    </svg>
                                  </div>
                              </a>
                            </li>
                            <li class="onedayImage-item">
                              <a class="scroll" href="#oneday02">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_tab_02_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_tab_02_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/interview/oneday_tab_02_pc.png')}}" alt="技術者の写真">
                                </picture>
                                <div class="tab-info">
                                  <p class="t1">サービスアドバイザー&ensp;菊池店 （2020年入社）</p>
                                  <p class="t2">今井 一希<span class="es-red">Kazuki Imai</span></p>
                              </div>
                              <div class="icon-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17.414" height="10.121" viewBox="0 0 17.414 10.121">
                                  <path id="Path_6916" data-name="Path 6916" d="M3700.605-9306.274l8,8,8-8" transform="translate(-3699.898 9306.981)" fill="none" stroke="#4d4545" stroke-width="2"/>
                                </svg>
                              </div>
                            </li>
                          </a>
                        </ul>
          
                    </div>
                </div>
  
  
  
                <div id="oneday01" class="oneday-block">
                    <div class="oneday-banner js-fadein">
                      <div class="box-icon">
                        <picture class="image">
                          <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/text_01_sp.png')}}">
                          <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/text_01_pc.png')}}">
                          <img class="sizes" src="{{asset('images/contentBox/interview/text_01_pc.png')}}" alt="">
                      </picture>
                      </div>
  
                        <div class="banner-info">
                            <div class="inner-samll info-b">
                              <p class="t3">サービスアドバイザー&ensp;菊池店 （2020年入社）</p>
                              <p class="t4">齊藤 高耶 <span class="es-red">Takaya Saito</span></p>
                              <div class="bannerImage">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_01_ttl_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_01_ttl_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/interview/oneday_01_ttl_pc.png')}}" alt="サービス社員の写真">
                                </picture>
                              </div>
                              <div class="list-qa">
                                <dl class="dl-item">
                                  <dt class="dt-item">入社のきっかけは？</dt>
                                  <dd class="dd-item">私は、以前車の購入を検討している際、熊本ダイハツの店舗に伺いました。 <br>
                                    そのときのスタッフの接客応対がとても良く、車の知識がない私に対してわかりやすく丁寧に説明し<br class="pc-br">
                                    てくださいました。お店の雰囲気も良く、 私もこのような環境で働きたいと思い入社を決めました。</dd>
                                  </dl>
                                  <dl class="dl-item">
                                  <dt class="dt-item">仕事のやりがいは？</dt>
                                  <dd class="dd-item">お客様から「あなたから車を買いたい」と言われた時とてもやりがいを感じます。 <br>
                                    「あなたが気に入ったから買うことにした」と言ってもらえることが最高の誉め言葉です。<br>
                                    これからも、お客様にそう言って頂けるような接客を 心掛けていこうと思います。</dd>
                                  </dl>
                                  <dl class="dl-item">
                                  <dt class="dt-item">会社の魅力は？</dt>
                                  <dd class="dd-item">残業も少なく希望休もあるので、プライベートと仕事の両立もできてとても働きやすい環境です！ <br>
                                    また人事評価制度も充実していて、自分の頑張りが給料に反映されるので、モチベーションの向上に<br class="pc-br">
                                    繋がっています。</dd>
                                  </dl>
  
                              </div>
  
                              <div class="box-messge">
                                <picture class="image-messge">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/text_messge_sp.png')}}">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/text_messge_pc.png')}}">
                                  <img class="sizes" src="{{asset('images/contentBox/interview/text_messge_pc.png')}}" alt="">
                              </picture>
                                <dl class="dl-messge">
                                  <dt class="dt-messge">未来の後輩へのメッセージ</dt>
                                  <dd class="dd-messge">たくさんのお客様との出会いがあり、とてもやりがいのある仕事です。<br>お客様との関わりを通して自分自身も成長できる会社です！<br>ぜひこの熊本ダイハツで一緒に働きましょう。</dd>
                                </dl>
  
                              </div>
                            </div>
                        </div>
        
                    </div>
                    <div class="inner">
                         <h3 class="title-line">
                          
                            <picture class="icon-schehule">
                              <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/text_schedule_sp.png')}}">
                              <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/text_schedule_pc.png')}}">
                              <img class="sizes" src="{{asset('images/contentBox/interview/text_schedule_pc.png')}}" alt="">
                          </picture>
                          1日のスケジュール
                        </h3>
                        <div class="oneday-time">
                            <ul class="oneday-list">
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">9:30</span>出社</p>
                                        <p class="text">お客様に気持ちよく過ごしていただけるよう、ショールームなどの掃除を行います。</p>
                                        <picture class="image">
                                          <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_01_image01_sp.png')}} 2x">
                                          <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_01_image01_pc.png')}} 2x">
                                          <img class="sizes" src="{{asset('images/contentBox/interview/oneday_01_image02_pc.png')}}" alt="ショールーム掃除">
                                      </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">9:45</span>情報共有</p>
                                        <p class="text">店舗全体のスケジュールや情報を共有します。スムーズに仕事が進められるように各部署の連絡事項などを確認します。</p>
                                        <picture class="image">
                                          <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_01_image02_sp.png')}} 2x">
                                          <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_01_image02_pc.png')}} 2x">
                                          <img class="sizes" src="{{asset('images/contentBox/interview/oneday_01_image02_pc.png')}}" alt="スケジュール確認">
                                      </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">10:00</span>お客様への対応</p>
                                        <p class="text">ご来店いただいたお客様への対応・電話対応を行います。<br class="sp-br">電話で点検・車検のご案内、予約のお知らせも行っていきます。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_01_image03_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_01_image03_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/interview/oneday_01_image02_pc.png')}}" alt="電話で顧客対応">
                                        </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">11:00</span>商談</p>
                                        <p class="text">午前中はたくさんのお客様が来店されるため、お出迎えや点検・車検の受付、商談がメインとなります。</p>
                                        <picture class="image">
                                          <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_01_image04_sp.png')}} 2x">
                                          <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_01_image04_pc.png')}} 2x">
                                          <img class="sizes" src="{{asset('images/contentBox/interview/oneday_01_image02_pc.png')}}" alt="来客対応">
                                      </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">14:00</span>商談</p>
                                        <p class="text">お昼休憩の後、ご来店されたお客様と商談をします。<br class="sp-br">お車車の使用目的や使用頻度などをヒアリングし、お客様に<br class="pc-br">ぴったりのお車をご提案します。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_01_image05_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_01_image05_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/interview/oneday_01_image03_pc.png')}}" alt="車について顧客に説明">
                                        </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">18:00</span>退社</p>
                                        <p class="text">新規でご来店いただいたお客様の情報、商談の状況、点検・車検の入庫予定などを記録。<br class="sp-br">翌日のスケジュール等を確認してから退社します。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_01_image06_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_01_image06_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/interview/oneday_01_image04_pc.png')}}" alt="退社前の作業">
                                        </picture>
                                    </div>
                                </li>
          
                            </ul>
                        </div>
                    </div>
  
                </div>
  
  
  
  
  
  
                 <div id="oneday02" class="oneday-block">
                    <div class="oneday-banner js-fadein">
                      <div class="box-icon two">
                        <picture class="image">
                          <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/text_02_sp.png')}}">
                          <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/text_02_pc.png')}}">
                          <img class="sizes" src="{{asset('images/contentBox/interview/text_02_pc.png')}}" alt="">
                      </picture>
                      </div>
  
                        <div class="banner-info">
                            <div class="inner-samll info-b">
                              <p class="t3">サービスアドバイザー&ensp;菊池店 （2022年入社）</p>
                              <p class="t4">今井 一希<span class="es-red">Kazuki Imai</span></p>
                              <div class="bannerImage">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_02_ttl_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_02_ttl_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/interview/oneday_02_ttl_pc.png')}}" alt="技術者の写真">
                                </picture>
                              </div>
                              <div class="list-qa">
                                <dl class="dl-item">
                                  <dt class="dt-item">入社のきっかけは？</dt>
                                  <dd class="dd-item">父も熊本ダイハツで働いていて小さい頃から、父の働く姿を見て育ちました。<br>
                                    私も父のような整備士になりたいと思い整備士になりました。<br>
                                    また父と同じ熊本ダイハツでキャリアアップしたいと思い入社しました。</dd>
                                  </dl>
                                  <dl class="dl-item">
                                  <dt class="dt-item">仕事のやりがいは？</dt>
                                  <dd class="dd-item">修理の際にはお客さまに直接お車の状態を説明し、ご納得いただいたうえで部品交換やご購入いただ<br class="pc-br">くことを心がけています。
                                    <br>
                                    後日「乗り心地が良くなったよ」と言っていただけるととてもやりがいを感じます。<br>
                                    またお客様に頼っていただけた時もやりがいを感じます。
                                  </dd>
                                  </dl>
                                  <dl class="dl-item">
                                  <dt class="dt-item">会社の魅力は？</dt>
                                  <dd class="dd-item">研修も多くあり、入社したてでも安心して日々の業務ができ、先輩方も優しく教えてくれるので働き<br class="pc-br">
                                    やすい会社です。<br>
                                    また熊本県からブライト企業の認定されていて安心して働ける会社です。</dd>
                                  </dl>
  
                              </div>
  
                              <div class="box-messge">
                                <picture class="image-messge">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/text_messge_sp.png')}}">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/text_messge_pc.png')}}">
                                  <img class="sizes" src="{{asset('images/contentBox/interview/text_messge_pc.png')}}" alt="">
                              </picture>
                                <dl class="dl-messge">
                                  <dt class="dt-messge">未来の後輩へのメッセージ</dt>
                                  <dd class="dd-messge">整備士としてスキルアップ、キャリアアップできる会社です。<br>とても働きやすくお客様も優しく、楽しく仕事ができる職場です。<br>不安になる方も多いかもしれませんが、頼りになる先輩、同僚が多いですし、成長したいという思い<br class="pc-br">があれば大丈夫です！</dd>
                                </dl>
  
                              </div>
                            </div>
                        </div>
        
                    </div>
                    <div class="inner">
                         <h3 class="title-line">
                          
                            <picture class="icon-schehule">
                              <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/text_schedule_sp.png')}}">
                              <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/text_schedule_pc.png')}}">
                              <img class="sizes" src="{{asset('images/contentBox/interview/text_schedule_pc.png')}}" alt="">
                          </picture>
                          1日のスケジュール
                        </h3>
                        <div class="oneday-time">
                            <ul class="oneday-list">
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">9:30</span>出社</p>
                                        <p class="text">安全に作業ができるように、作業場の整理や掃除を行います。</p>
                                        <picture class="image">
                                          <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_02_image01_sp.png')}} 2x">
                                          <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_02_image01_pc.png')}} 2x">
                                          <img class="sizes" src="{{asset('images/contentBox/interview/oneday_02_image02_pc.png')}}" alt="社員研修">
                                      </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">9:45</span>情報共有</p>
                                        <p class="text">スムーズに仕事ができるよう店舗全体のスケジュールや情報を共有します。</p>
                                        <picture class="image">
                                          <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_02_image02_sp.png')}} 2x">
                                          <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_02_image02_pc.png')}} 2x">
                                          <img class="sizes" src="{{asset('images/contentBox/interview/oneday_02_image02_pc.png')}}" alt="スケジュールの確認">
                                      </picture>
                                    </div>
                                </li>
                                <li class="oneday-item two">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">10:00</span>午前作業</p>
                                        <p class="text">点検や整備、修理、オイル交換などを丁寧に行っていきます。交換部品がなかったり、時間のかかる作業の場合は、お預かりをします。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_02_image03_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_02_image03_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/interview/oneday_02_image02_pc.png')}}" alt="作業中の写真">
                                        </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">13:00</span>午後作業</p>
                                        <p class="text">昼休憩後、午後の作業に入ります。難しい作業や分からないことは、自分で調べたり先輩にアドバイスをもらいます。</p>
                                        <picture class="image">
                                          <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_02_image04_sp.png')}} 2x">
                                          <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_02_image04_pc.png')}} 2x">
                                          <img class="sizes" src="{{asset('images/contentBox/interview/oneday_02_image02_pc.png')}}" alt="先輩と相談">
                                      </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">17:00</span>車両お渡し</p>
                                        <p class="text">お預かりしていた車両をお渡しします。お客様に安心して乗っていいただけるよう整備・点検内容などを丁寧に説明します。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_02_image05_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_02_image05_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/interview/oneday_02_image03_pc.png')}}" alt="顧客に車両を渡し">
                                        </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">18:00</span>退社</p>
                                        <p class="text">翌日のスケジュールや作業内容を確認し、退社します。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/oneday_02_image06_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/oneday_02_image06_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/interview/oneday_02_image04_pc.png')}}" alt="退社前の写真">


                                           
                                        </picture>
                                    </div>
                                </li>
          
                            </ul>
                        </div>
                    </div>
  
                </div> 
  

            </div>


        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
