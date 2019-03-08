# Kirby 3 Fathom

Plugin for Kirby 3 that adds the Fathom Tracking Code to your Kirby 3 site.

If the user has set "Do Not Track" in the browser the code is not embedded.

## Installation

### Download

Download and copy this repository to `/site/plugins/fathom`.

### Git submodule

```bash
git submodule add https://github.com/kx550/kirby3-fathom.git site/plugins/fathom
```

### Composer

```bash
composer require kx550/fathom
```

## Setup

Set the following in your `config.php`:

```php
return array [
  'kx550.fathom.url' => 'analytics.yoursite.com', # required
]
```

Replace `analytics.yoursite.com` with the URL to your Fathom installation omitting the protocol.

Then add this code to your `/snippets/footer.php`: `<?php echo snippet('fathom') ?>`

## License

MIT
