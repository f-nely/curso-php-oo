<?php

interface PdfInterface
{
    public static function generate(string $content): string;
    public static function printPdf($file);
}