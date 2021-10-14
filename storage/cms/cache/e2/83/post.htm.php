<?php 
class Cms616872c12d9e0099331550_126ad2620e072a4a379e2d16158a65f5Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
        $this->page->title = $this->post->title;
}
}
