<?php

namespace Asayhome\AsayUploader;

use Livewire\Component;

class AsayUploader extends Component
{
    public $uploaderId;
    public $containerHeight;
    public $imageHeight;
    public $language;
    public $placeholder;
    public $firedEvent;

    public function mount(
        $id = 'uploader',
        $containerHeight = '200px',
        $imageHeight = '70px',
        $language = 'en',
        $placeholder = 'Type her...',
        $firedEvent = 'uploaderChange',
    ) {
        $this->uploaderId = $id;
        $this->containerHeight = $containerHeight;
        $this->imageHeight = $imageHeight;
        $this->language = $language;
        $this->placeholder = $placeholder;
        $this->firedEvent = $firedEvent;
    }
    public function render()
    {
        return view('asayuploader::uploader');
    }
}
