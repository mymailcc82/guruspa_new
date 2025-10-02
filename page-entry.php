<?php
$html = '';

$get = [];
foreach ($_GET as $key => $value) {
    // amp;employment → employment に修正
    $clean_key = str_replace('amp;', '', $key);
    $get[$clean_key] = $value;
}


if (isset($get['occupation'])) {
    $occupation = $get['occupation'];
    $occupation = preg_replace('/<br\s*\/?>/i', '', $occupation); // <br>タグを削除
}
//category
/*
if (isset($_GET['category'])) {
    $html .= "\nタイプ：";

    $category = $_GET['category'];
    //ループで回して、taxonomyのcategoryのslugと同じものの名前を取得して$htmlに格納
    if (is_array($category)) {
        foreach ($category as $key) {
            //$keyが$termsのslugと一致したら、$termのnameを取得
            //slugからnameを取得
            $term = get_term_by('slug', $key, 'recruit_type');
            echo $key;
            $html .= $term->name . ' ';
        }
    } else {
        $term = get_term_by('slug', $category, 'recruit_type');
        $html .= $term->name . ' ';
    }

    $term = get_term_by('slug', $category, 'recruit_type');
}
*/

//locationの値を取得
if (isset($get['location'])) {
    $html .= "\n勤務地：";
    $location = $get['location'];
    //$locationを,で区切って配列に変換
    $location = explode(',', $location);
    //ループで回して、taxonomyのwork_locationのslugと同じものの名前を取得して$htmlに格納
    if (is_array($location)) {
        foreach ($location as $key) {
            //$keyが$termsのslugと一致したら、$termのnameを取得
            //slugからnameを取得
            $term = get_term_by('slug', $key, 'work_location');
            $html .= $term->name . ' ';
        }
    } else {
        $term = get_term_by('slug', $location, 'work_location');
        $html .= $term->name . ' ';
    }
}
//employmentの値を取得


if (isset($get['employment'])) {
    $html .= "\n雇用形態：";
    $employment = $get['employment'];
    //$employmentを,で区切って配列に変換
    $employment = explode(',', $employment);
    //ループで回して、taxonomyのemploymentのslugと同じものの名前を取得して$htmlに格納
    if (is_array($employment)) {
        foreach ($employment as $key) {
            //$keyが$termsのslugと一致したら、$termのnameを取得
            //slugからnameを取得
            $term = get_term_by('slug', $key, 'employment_status');
            $html .= $term->name . ' ';
        }
    } else {
        $term = get_term_by('slug', $employment, 'employment_status');
        $html .= $term->name . ' ';
    }
}
//start_workの値を取得
if (isset($get['start_work'])) {
    $html .= "\n勤務開始可能日：";
    $start_work = $get['start_work'];
    $start_work = explode(',', $start_work);

    if (is_array($start_work)) {
        foreach ($start_work as $key) {
            //$keyが$termsのslugと一致したら、$termのnameを取得
            //slugからnameを取得
            $term = get_term_by('slug', $key, 'start_work');
            $html .= $term->name . ' ';
        }
    } else {
        $term = get_term_by('slug', $start_work, 'start_work');
        $html .= $term->name . ' ';
    }
}
//dutiesの値を取得
if (isset($get['duties'])) {
    $html .= "\n職務内容：";
    $duties = $get['duties'];
    //$dutiesを,で区切って配列に変換
    $duties = explode(',', $duties);
    if (is_array($duties)) {
        foreach ($duties as $key) {
            //$keyが$termsのslugと一致したら、$termのnameを取得
            //slugからnameを取得
            $term = get_term_by('slug', $key, 'duties');
            $html .= $term->name . ' ';
        }
    } else {
        $term = get_term_by('slug', $duties, 'duties');
        $html .= $term->name . ' ';
    }
}
//othersの値を取得
if (isset($get['others'])) {
    $html .= "\nその他：";
    $others = $get['others'];
    //$othersを,で区切って配列に変換
    $others = explode(',', $others);

    if (is_array($others)) {
        foreach ($others as $key) {
            //$keyが$termsのslugと一致したら、$termのnameを取得
            //slugからnameを取得
            $term = get_term_by('slug', $key, 'others');
            $html .= $term->name . ' ';
        }
    } else {
        $term = get_term_by('slug', $others, 'others');
        $html .= $term->name . ' ';
    }
}

?>
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
                    <li class="active"><span>情報入力</span></li>
                    <li class="text-center"><span>内容確認</span></li>
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
                //echo do_shortcode('[mwform_formkey key="52" html_class="h-adr"]'); 
                ?>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<script>
    var occupation = "<?php echo isset($occupation) ? esc_js($occupation) : ''; ?>";

    document.addEventListener('DOMContentLoaded', function() {
        if (occupation) {
            var selectBox = document.querySelector('select[name="occupatation"]');
            if (selectBox) {
                var options = selectBox.options;
                for (var i = 0; i < options.length; i++) {
                    if (options[i].text === occupation) {
                        options[i].selected = true;
                        break;
                    }
                }
            }
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        var html = <?php echo json_encode($html, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;

        var textarea = document.querySelector('textarea[name="rireki"]');
        if (textarea) {
            textarea.value = html;
        }
    });
</script>


<?php get_footer(); ?>