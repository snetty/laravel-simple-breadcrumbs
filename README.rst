################################################################################
 Laravel Simple Breadcrumbs
################################################################################

An uber simple, "collection" style way to create breadcrumbs in `Laravel 5.1 <http://laravel.com/>`_.

================================================================================
 Installation
================================================================================

1. ``composer require snetty/laravel-simple-breadcrumbs``
2. Add ``'Snetty\LaravelSimpleBreadcrumbs\ServiceProvider'`` to your service providers in ``/config/app.php``
3. Type hint the class in your controller ``public function index(Request $request, Breadcrumbs $breadcrumbs)``
4. Pass the object to your view ``return view('sites.index', compact('sites', 'breadcrumbs'));``
5. Render the object ``{!! $breadcrumbs->render() !!}``

================================================================================
 Usage
================================================================================

Breadcrumbs are added to your controllers thus ``$breadcrumbs->add('/the/url', 'The Link Name');``

It is suggested that you add your index breadcrumb in the controller.