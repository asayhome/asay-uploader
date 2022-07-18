# AsayUploader

This package upload files inside liveware component array varible, that mean's you can upload multiple files, when adding file the package auto send the file object to fired event so that you can get uploaded files in any place you wont by catching the fired event, all working step will be descriped in next sections.

![Arabic](/screenshots/ar.png)
![English](/screenshots/en.png)

# Requirements

This package require that `livewire\livewire` package it's already installed in your project.

## Usage

```
composer require asayhome/asay-uploader
```

- this package include styles and scripts need to be pushed in your blade, by default the package
  use `after-scripts` tag for scripts stack and `after-styles` for styles stack, you must added in
  your project layout like next:

`@stack('after-styles')`
`@stack('after-scripts')`

or you can change this tags names by Publishing the package config file and change the value of:

`pushed-styles-container`
`pushed-scripts-container`

inside blade file:

```
 <livewire:asay-uploader
    id="imageUploader"
    language="ar"
    containerHeight="300px"
    imageHeight="100px"
    />
```

when selelcting file or drag and drop file will auto fire event `uploaderChange` that contain the all added fiels,
you can change this event as you need by adding `firedEvent='EventName'` in the including uploader tags
as next:

```
 <livewire:asay-uploader
    id="imageUploader"
    language="ar"
    containerHeight="300px"
    imageHeight="100px"
    firedEvent="uploaderChange"
    />
```

This event is livewire event you can get fired files inside blade file as follow:

```
<script>
        Livewire.on('uploaderChange',(fiels)=>{
            console.log(fiels);
        })
</script>
```

Or you can get it inside livewire component by adding the event in inside component listeners array
as follow:

```
 protected $listeners = ['uploaderChange'];

 public function uploaderChange($fiels)
    {
        ...
    }
```

### Publishing config

```
php artisan vendor:publish --tag=asayuploader-config
```

### Publishing lang

```
php artisan vendor:publish --tag=asayuploader-lang
```

### Publishing views

```
php artisan vendor:publish --tag=asayuploader-views
```

### Publishing assets

```
php artisan vendor:publish --tag=asayuploader-assets
```
