<?php get_header(); ?>
<main class="entry page">
    <div class="page_visual">
        <div class="page-breadcrumbs">
            <ul>
                <li><a href="<?php echo home_url(); ?>">TOP</a></li>
                <li><span>ENTRY</span></li>
            </ul>
        </div>
        <div class="page_visual_title">
            <h1>ENTRY</h1>
            <span>応募フォーム</span>
        </div>
    </div>
    <div class="content-width">
        <div class="contact-wrap flex flex-wrap">
            <div class="contact-wrap-left">
                <ul>
                    <li class=""><span>情報入力</span></li>
                    <li class="text-center"><span>内容確認</span></li>
                    <li class="text-right active"><span>送信完了</span></li>
                </ul>
                <p>
                    以下のフォームの必要項目をご入力頂き、送信ボタンをクリックして下さい。確認でき次第担当からご連絡させていただきます。
                    必須項目は必ずご入力いただきますようお願いいたします。
                </p>

            </div>
            <div class="contact-wrap-right">
                <div class="contact-wrap-right-finish">
                    <h2>ご応募<br class="hidden-sm">ありがとうございました</h2>
                    <p>
                        担当より3営業日以内に<br class="hidden-sm">ご連絡をさせていただきます。<br>
                        3営業日経っても連絡がない場合は、<br>
                        お手数ですが<a href="tel:0566-82-9666">0566-82-9666</a>（採用課直通）まで<br class="hidden-sm">お電話くださいませ。
                        <?php echo do_shortcode('[mwform_formkey key="531"]'); ?>
                    <div class="com-btn">
                        <a href="<?php echo home_url(); ?>">トップに戻る</a>
                    </div>
                    </p>
                </div>
                <?php //ショートコード[contact-form-7 id="9d7709b" title="お問い合わせ"]
                //echo do_shortcode('[contact-form-7 id="9" title="お問い合わせ"]');
                //echo do_shortcode('[mwform_formkey key="46"]'); 
                ?>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>