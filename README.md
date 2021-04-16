# Laravel File Upload

This Laravel package contains functions for:

* Generating unique filename
* Saving uploaded file on a folder
* Deleting file on a folder

Uploaded files will be saved on the storage folder *(storage\app\public)*.

## Installation

```bash
composer require kapitannwel/laravelfileupload
```

## Usage

```php
use kapitannwel\LaravelFileUpload\LaravelFileUpload;

$file = $request->file('element');

LaravelFileUpload::generateUniqueFileName($file->getClientOriginalName(), 'folder_name');

LaravelFileUpload::deleteFile($filename, 'folder_name');

LaravelFileUpload::saveFile('folder_name', $file, $filename);
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
[MIT](https://choosealicense.com/licenses/mit/)
