<?php namespace AnasT\Mailing;

use Illuminate\Support\ServiceProvider;

class MailingServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Should I really keep a service provider ?
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['anas-t.mailing'];
	}

}
