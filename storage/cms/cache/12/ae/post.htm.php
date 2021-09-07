<?php 
class Cms6137c14539dee518476693_9a617dcce96f2abb27e3b18e3515818fClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
        $this->page->title = $this->post->title;
}
}
