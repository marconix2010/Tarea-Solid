<?php

class Project {
    protected $documents;

    public function addDocuments(Document $document)
    {
        $this->documents[] = $document;
    }

    public function openAll()
    {
        foreach ($this->documents as $document) {
            $document->open();
        }
    }

    /**
      * Pasamos un objeto ReadOnlyDocument en esta clase de Proyecto.
      * Se activó una excepción cuando se llamó al método save(), ya que los documentos de solo lectura no se pueden guardar.
      * Tuvimos que insertar esta verificación de instancia antes de guardar el documento.
      * El código resultante viola tanto la sustitución de Liskov como los principios abierto/cerrado.
     */
    public function saveAll()
    {
        foreach ($this->documents as $document) {
            if ($document instanceof ReadOnlyDocument) {
                continue;
            }
            $document->save();
        }    
    }
}