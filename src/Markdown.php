<?php

class Markdown
{
    public function html($text)
    {
        return "<p>Hi, there</p>";
    }

    public function toHtmlFromReader($reader)
    {
        $markdown = $reader->getMarkdown();
        return $this->html($markdown);
    }

    public function outputHtml($text, $writer)
    {
        $html = $this->html($text);
        $writer->writeText($html);
    }
}
