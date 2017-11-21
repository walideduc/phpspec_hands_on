<?php

namespace spec;

use Markdown;
use Markdown\Reader;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MarkdownSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Markdown::class);
    }

    function it_converts_plain_text_to_html_paragraphs()
    {
       $this->html("Hi, there")->shouldReturn("<p>Hi, there</p>") ;
    }

    function it_converts_text_from_an_external_source(Reader $reader ){
        $reader->getMarkdown()->willReturn("Hi, there");
        $this->toHtmlFromReader($reader)->shouldReturn("<p>Hi, there</p>");
    }

}
