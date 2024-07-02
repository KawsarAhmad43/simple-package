# SimplePackage

SimplePackage is a Laravel package that provides a basic greeting functionality.

## Installation

To install SimplePackage, follow these steps:

1. **Require the Package**:
   ```bash
   composer require kawsarahmad43/simple-package
   ```

2. **Publish Configuration**:
```bash
   php artisan vendor:publish --provider="KawsarAhmad43\SimplePackage\SimplePackageServiceProvider"
```

3. **Configure (if needed)**:
  You can configure the package in config/simple-package.php if you've published the configuration.


## Usage
 - Once installed, you can use SimplePackage in your Laravel application:

 ```php
    <?php
    use KawsarAhmad43\SimplePackage\Facades\Greet;
    
    Route::get('/greet/{name}', function ($name) {
        return Greet::greet($name);
    });
```
- Or You can use the package without the facade:

  ```php
      <?php
      use KawsarAhmad43\SimplePackage\Helpers\Greet;
      
      Route::get('/greet/{name}', function ($name) {
          return app('greet')->greet($name);
    });      

  ```


  ## Licence
  
SimplePackage is open-sourced software licensed under the MIT license.


# Notes 
- Ensure your Laravel application meets the PHP version requirement (>=7.4).
- Customize the greeting logic or expand the package functionality as needed in src/Helpers/Greet.php.
- For more customization options, refer to Laravel's documentation on package development.

## Troubleshooting
- If encountering issues during installation or usage, clear Composer cache (composer clear-cache) and update dependencies (composer update).
