<?php

class Markdown
{
    public function html($argument1)
    {
        return "<p>Hi, there</p>";
    }

    public function toHtmlFromReader($reader)
    {
        $markdown = $reader->getMarkdown();
        return $this->html($markdown);
    }
}
