<?php 
class Cms6123d6ffa1cc2670590264_ccefff99463b7bbcef932bec8fdd2a7dClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
        $this->page->title = $this->post->title;
}
}
