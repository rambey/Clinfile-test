<?php

namespace Root\Www\Exceptions;

class FileException extends \Exception
{
    public static function fileNotFound(string $fileName): self
    {
        return new static("Le fichier '$fileName' est introuvable.");
    }

    public static function directoryNotFound(string $directory): self
    {
        return new static("Le repertoire '$directory' est introuvable.");
    }
    public function toJsonResponse(): string
    {
        $response = [
            'error' => true,
            'message' => $this->getMessage()
        ];
        return json_encode($response);
    }
}
