<?php
namespace Raml;


trait AnnotationTrait
{
    private $annotations = array();


    public function applyAnnotations($data)
    {
        if (isset($data['annotations'])) {
            foreach ($data['annotations'] as $key => $value) {
                $value = array('value' => $value);
                $this->addAnnotation(Annotation::createFromArray($key, $value));
            }
        }
    }

    public function addAnnotation(Annotation $annotation)
    {
        $this->annotations[$annotation->getName()] = $annotation;
    }

    public function getAnnotations()
    {
        return $this->annotations;
    }


}