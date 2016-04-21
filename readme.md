# SMS Project on Laravel 4.2

## Installation
1. Download the Zip thru GitHub by clicking Download ZIP.
2. Goto the downloaded folder
3. type: composer install
4. php artisan serve

## PHPStorm
### How to replace PHPStorm terminal with GitBash console
File > Settings > Terminal > Shell Path
C:\Program Files\Git\bin\bash.exe -login -i


## Eloquent Usage
All records: Model::get();
Individual Record: Model::find(1);
Create record: Model::create(['column' => 'value']);

## Input Validation
Validation Apply: $v = Validator::make(Input::all(), ['field' => 'rule']);
Check Validation Status: $v->fais();
Validation Message: ->withErrors($v);