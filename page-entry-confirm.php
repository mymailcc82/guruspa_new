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
                    <li class="text-center active"><span>内容確認</span></li>
                    <li class="text-right"><span>送信完了</span></li>
                </ul>
                <p>
                    エントリーはメールまたはフォームからお問い合わせください。<br>
                    <a href="mailto:info@royal-gr.jp">info@royal-gr.jp</a><br><br>

                    エントリーフォームでの応募の場合、<br>
                    フォームの必要項目を入力し、送信ボタンをクリックして下さい。<br>
                    エントリー後、確認メールが届きます。<br>
                    その後、当社より選考フロー等のご案内をお送りいたします。<br>
                    お気軽にエントリーください。<br><br>

                    必須項目は必ずご入力いただきますようお願いいたします。
                </p>

            </div>
            <div class="contact-wrap-right">
                <?php //ショートコード[contact-form-7 id="9d7709b" title="お問い合わせ"]
                //echo do_shortcode('[contact-form-7 id="9" title="お問い合わせ"]');
                echo do_shortcode('[mwform_formkey key="531"]'); ?>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>