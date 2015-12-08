################################################################################
 Laravel Simple Breadcrumbs
################################################################################

An uber simple, "collection" style way to create breadcrumbs in `Laravel 5.1 <http://laravel.com/>`_.

================================================================================
 Installation
================================================================================

1. ``composer require snetty/laravel-simple-breadcrumbs``
2. ``php artisan vendor:publish``
3. Add ``'Snetty\LaravelSimpleBreadcrumbs\ServiceProvider'`` to your service providers in ``/config/app.php``
4. Type hint the class in your controller ``public function index(Request $request, Breadcrumbs $breadcrumbs)``
5. Pass the object to your view ``return view('sites.index', compact('sites', 'breadcrumbs'));``
6. Render the object ``{!! $breadcrumbs->render() !!}``

================================================================================
 Usage
================================================================================

Breadcrumbs are added to your controllers like this: ``$breadcrumbs->add('/the/url', 'The Link Name');``,
or you can add multiple at once like this: ``$breadcrumbs->add(['/your-url' => 'Your Title', '/another/url'
=> 'Another Title']);``.

It is suggested that you add your index breadcrumb in the controller.
