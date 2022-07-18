<?php

namespace Asayhome\AsayUploader;

use Livewire\Component;

class AsayUploader extends Component
{
    public $editorId;
    public $height;
    public $language;
    public $placeholder;
    public $firedEvent;

    public function mount(
        $id = 'editor',
        $height = '200px',
        $language = 'en',
        $placeholder = 'Type her...',
        $firedEvent = 'textChange',
    ) {
        $this->editorId = $id;
        $this->height = $height;
        $this->language = $language;
        $this->placeholder = $placeholder;
        $this->firedEvent = $firedEvent;
    }
    public function render()
    {
        return view('asayeditor::uploader');
    }
}
