<?php

function beorx_comment_form($beorx_comment_form_fields)
{

    $beorx_comment_form_fields['author'] = '
        <div class="row comment-form-wrap">
        <div class="col-lg-6 mb-30">
            <div class="contact__form-form-group icon">
            <i class="far fa-user"></i>
            <input type="text" name="author" class="thin-bg" placeholder="' . esc_attr__('Your Name*', 'beorx') . '">
            </div>
        </div>
    ';

    $beorx_comment_form_fields['email'] =  '
        <div class="col-lg-6 mb-30">
            <div class="contact__form-form-group icon">
            <i class="far fa-envelope-open"></i>
            <input type="email" name="email" placeholder="' . esc_attr__('Your Email*', 'beorx') . '">
            </div>
        </div>
        </div>
    ';

    $beorx_comment_form_fields['url'] = '
       
    ';

    return $beorx_comment_form_fields;
}

add_filter('comment_form_default_fields', 'beorx_comment_form');

function beorx_comment_default_form($default_form)
{

    $default_form['comment_field'] = '
        <div class="row">
            <div class="col-sm-12  mb-30">
                <div class="contact__form-form-group icon">
                    <i class="far fa-comments"></i>
                    <textarea name="comment" rows="8" required="required"  placeholder="' . esc_attr__('Your Comment*', 'beorx') . '"></textarea>
                </div>
            </div>
        </div>
    ';

    $default_form['submit_button'] = '
    <div class="row">
        <div class="col-sm-12">
            <div class="contact__form-form-group">
            <button type="submit" class="theme-btn">' . esc_html__('Post Comment', 'beorx') . '<i class="flaticon-send"></i>' . '</button>
            </div>        
        </div>
    </div>
    ';

    $default_form['comment_notes_before'] = esc_html__('Fields (*) Mark are Required', 'beorx');
    $default_form['title_reply'] = esc_html__('Leave A Comment', 'beorx');
    $default_form['title_reply_before'] = '<h4 class="comments-heading">';
    $default_form['title_reply_after'] = '</h4>';

    return $default_form;
}

add_filter('comment_form_defaults', 'beorx_comment_default_form');


function beorx_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'beorx_move_comment_field_to_bottom');
