<?php

namespace SEOService2020\Morphy;

use Illuminate\Support\Str;


trait PreprocessWord
{
    protected static function preprocessedWord(?string $word, Morphy $morphy): ?string
    {
        if ($word === null) {
            return null;
        }

        return $morphy->isInUpperCase() ? Str::upper(trim($word)) : Str::lower(trim($word));
    }

    public static function takesWordParameter(string $methodName): bool
    {
        return in_array($methodName, [
            'findWord',
            'lemmatize',
            'getBaseForm',
            'getAllForms',
            'getPseudoRoot',
            'getPartOfSpeech',
            'getAllFormsWithAncodes',
            'getAllFormsWithGramInfo',
            'getAncode',
            'getGramInfo',
            'getGramInfoMergeForms',
            'getAnnotForWord',
            'castFormByAncode',
            'castFormByGramInfo',
            'castFormByPattern',
        ]);
    }
}
