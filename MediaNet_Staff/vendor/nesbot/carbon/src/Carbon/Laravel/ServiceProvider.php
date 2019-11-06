<?php

namespace Carbon\Laravel;

use Carbon\Carbon;
<<<<<<< HEAD
use Carbon\CarbonImmutable;
use Carbon\CarbonInterval;
use Carbon\CarbonPeriod;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Events\Dispatcher;
use Illuminate\Events\EventDispatcher;
use Illuminate\Support\Carbon as IlluminateCarbon;
use Illuminate\Support\Facades\Date;
use Throwable;
=======
use Illuminate\Events\Dispatcher;
use Illuminate\Events\EventDispatcher;
use Illuminate\Translation\Translator as IlluminateTranslator;
use Symfony\Component\Translation\Translator;
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
<<<<<<< HEAD
        $this->updateLocale();

        if (!$this->app->bound('events')) {
            return;
        }

        $service = $this;
        $events = $this->app['events'];

        if ($this->isEventDispatcher($events)) {
            $events->listen(class_exists('Illuminate\Foundation\Events\LocaleUpdated') ? 'Illuminate\Foundation\Events\LocaleUpdated' : 'locale.changed', function () use ($service) {
                $service->updateLocale();
            });
=======
        $service = $this;
        $events = $this->app['events'];
        if ($events instanceof EventDispatcher || $events instanceof Dispatcher) {
            $events->listen(class_exists('Illuminate\Foundation\Events\LocaleUpdated') ? 'Illuminate\Foundation\Events\LocaleUpdated' : 'locale.changed', function () use ($service) {
                $service->updateLocale();
            });
            $service->updateLocale();
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
        }
    }

    public function updateLocale()
    {
<<<<<<< HEAD
        $app = $this->app && method_exists($this->app, 'getLocale') ? $this->app : app('translator');
        $locale = $app->getLocale();
        Carbon::setLocale($locale);
        CarbonImmutable::setLocale($locale);
        CarbonPeriod::setLocale($locale);
        CarbonInterval::setLocale($locale);

        // @codeCoverageIgnoreStart
        if (class_exists(IlluminateCarbon::class)) {
            IlluminateCarbon::setLocale($locale);
        }

        if (class_exists(Date::class)) {
            try {
                $root = Date::getFacadeRoot();
                $root->setLocale($locale);
            } catch (Throwable $e) {
                // Non Carbon class in use in Date facade
            }
        }
        // @codeCoverageIgnoreEnd
=======
        $translator = $this->app['translator'];
        if ($translator instanceof Translator || $translator instanceof IlluminateTranslator) {
            Carbon::setLocale($translator->getLocale());
        }
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }

    public function register()
    {
        // Needed for Laravel < 5.3 compatibility
    }
<<<<<<< HEAD

    protected function isEventDispatcher($instance)
    {
        return $instance instanceof EventDispatcher
            || $instance instanceof Dispatcher
            || $instance instanceof DispatcherContract;
    }
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
}
