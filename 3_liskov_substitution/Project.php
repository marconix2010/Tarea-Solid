<?php

/**
 * El problema se resuelve después de hacer que la clase de documento de solo lectura sea la clase base.
 */
class Project {
    protected $documents;
    protected $writableDocuments;

    public function addDocuments(Document $document)
    {
        $this->documents[] = $document;
    }

    public function addWritableDocuments(WritableDocument $document)
    {
        $this->writableDocuments[] = $document;
    }

    public function openAll()
    {
        foreach ($this->documents as $document) {
            $document->open();
        }
    }

    public function saveAll()
    {
        foreach ($this->writableDocuments as $document) {
            $document->save();
        }    
    }
}