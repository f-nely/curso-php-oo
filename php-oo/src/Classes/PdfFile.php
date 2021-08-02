<?php

class PdfIle implements PdfInterface
{
    public static function generate(string $content): string
    {
        return "<h1>{$content}</h1>";
    }

    public static function printPdf($file)
    {
        return $file;
    }
}