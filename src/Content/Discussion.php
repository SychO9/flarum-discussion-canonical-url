<?php

namespace SychO\DiscussionCanonical\Content;

use Flarum\Frontend\Document;
use Psr\Http\Message\ServerRequestInterface;

class Discussion extends \Flarum\Forum\Content\Discussion
{
    public function __invoke(Document $document, ServerRequestInterface $request)
    {
        $document = parent::__invoke($document, $request);

        $document->canonicalUrl = $this->url
            ->to('forum')
            ->route('discussion', ['id' => $document->payload['apiDocument']->data->attributes->slug]);

        return $document;
    }
}
