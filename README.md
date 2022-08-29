# Laravel Nova Progress Field

A progress bar field for the Laravel Nova

![progress-field-preview](https://user-images.githubusercontent.com/109284641/187126454-3fc60215-d657-4d6f-b2de-46ffe31911b0.gif)

## Install

```bash
composer require masoudi/nova-progress-field
```

## Usage

```php
use Masoudi\Nova\Fields\Progress;

Progress::make('Progress')
    ->min(0) // default: 0
    ->max(100) // default: 100
    ->step(1) // default: 1
    ->default(25) // deafult number value
    ->displayUsing(fn ($progress) => "$progress%"), // change display text: 25%
```

Please star package on github. Thank you.
