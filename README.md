# Laravel + Playwright Integration

This package provides the necessary boilerplate to quickly begin testing your Laravel applications using Playwright.

## Installation

If you haven't already installed [Playwright](https://playwright.dev/docs/intro); that's your first step.

```bash
yarn create playwright
```

Now you're ready to install this package through Composer. Pull it in as a development-only dependency.

```bash
composer require adrum/laravel-playwright --dev
```

Next, run the `playwright:boilerplate` command to copy over the initial boilerplate files for your Playwright tests.

```bash
php artisan playwright:boilerplate
```

Finally, enable the package in your `.env` file.

```bash
PLAYWRIGHT_ENABLED=true
```

That's it! You're ready to go. We've provided an `laravel-examples.spec.ts` spec for you to play around with it. Let's run it now:

```
yarn playwright test
```

## Credits

- [Yoann Frommelt](https://www.linkedin.com/in/yoannfrommelt/)
- [Jeffrey Way](https://twitter.com/jeffrey_way) for the amazing inspiration

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
