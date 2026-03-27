<?php
if (have_comments()) {
    foreach ($comments as $comment) {
        echo '<p>' . $comment->comment_content . '</p>';
    }
}
comment_form();
?>