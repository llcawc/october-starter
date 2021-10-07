<?php 
class Cms615f58e492522954483048_74cb5cf9b5c50147b96548db9df0bf7fClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
        $this->page->title = $this->post->title;
}
}
