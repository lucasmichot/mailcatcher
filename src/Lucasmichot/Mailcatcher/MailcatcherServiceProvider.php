<?php namespace Lucasmichot\Mailcatcher;

use Illuminate\Support\ServiceProvider;

class MailcatcherServiceProvider extends ServiceProvider
{
	/**
	 * {@inheritdoc }
	 */
	public function boot()
	{
		$this->package('lucasmichot/mailcatcher');

		$config = $this->app['config'];

		if ($config->get('mail.pretend') == true)
		{
			$config->set('mail.driver', 'smtp');
			$config->set('mail.sendmail', '/usr/bin/env catchmail');
			$config->set('mail.encryption', null);
			$config->set('mail.pretend', false);

			$config->set('mail.host', $config->get('mailcatcher::host', '127.0.0.1'));
			$config->set('mail.port', $config->get('mailcatcher::port', 1025));
			$config->set('mail.from.address', $config->get('mailcatcher::from.address', 'laravel@localhost'));
			$config->set('mail.from.name', $config->get('mailcatcher::from.name', 'Laravel'));
		}
	}

	/**
	 * {@inheritdoc }
	 */
	public function register()
	{
	}
}
