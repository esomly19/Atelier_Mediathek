<?php

namespace Illuminate\Support\Testing\Fakes;

<<<<<<< HEAD
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Traits\Macroable;
use PHPUnit\Framework\Assert as PHPUnit;
use Illuminate\Contracts\Translation\HasLocalePreference;
=======
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Collection;
use PHPUnit\Framework\Assert as PHPUnit;
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
use Illuminate\Contracts\Notifications\Factory as NotificationFactory;
use Illuminate\Contracts\Notifications\Dispatcher as NotificationDispatcher;

class NotificationFake implements NotificationFactory, NotificationDispatcher
{
<<<<<<< HEAD
    use Macroable;

=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    /**
     * All of the notifications that have been sent.
     *
     * @var array
     */
    protected $notifications = [];

    /**
<<<<<<< HEAD
     * Locale used when sending notifications.
     *
     * @var string|null
     */
    public $locale;

    /**
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * Assert if a notification was sent based on a truth-test callback.
     *
     * @param  mixed  $notifiable
     * @param  string  $notification
     * @param  callable|null  $callback
     * @return void
     */
    public function assertSentTo($notifiable, $notification, $callback = null)
    {
        if (is_array($notifiable) || $notifiable instanceof Collection) {
            foreach ($notifiable as $singleNotifiable) {
                $this->assertSentTo($singleNotifiable, $notification, $callback);
            }

            return;
        }

        if (is_numeric($callback)) {
            return $this->assertSentToTimes($notifiable, $notification, $callback);
        }

        PHPUnit::assertTrue(
            $this->sent($notifiable, $notification, $callback)->count() > 0,
            "The expected [{$notification}] notification was not sent."
        );
    }

    /**
     * Assert if a notification was sent a number of times.
     *
     * @param  mixed  $notifiable
     * @param  string  $notification
     * @param  int  $times
     * @return void
     */
    public function assertSentToTimes($notifiable, $notification, $times = 1)
    {
        PHPUnit::assertTrue(
            ($count = $this->sent($notifiable, $notification)->count()) === $times,
<<<<<<< HEAD
            "Expected [{$notification}] to be sent {$times} times, but was sent {$count} times."
=======
            "The expected [{$notification}] notification was sent {$count} times instead of {$times} times."
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
        );
    }

    /**
     * Determine if a notification was sent based on a truth-test callback.
     *
     * @param  mixed  $notifiable
     * @param  string  $notification
     * @param  callable|null  $callback
     * @return void
     */
    public function assertNotSentTo($notifiable, $notification, $callback = null)
    {
        if (is_array($notifiable) || $notifiable instanceof Collection) {
            foreach ($notifiable as $singleNotifiable) {
                $this->assertNotSentTo($singleNotifiable, $notification, $callback);
            }

            return;
        }

        PHPUnit::assertTrue(
            $this->sent($notifiable, $notification, $callback)->count() === 0,
            "The unexpected [{$notification}] notification was sent."
        );
    }

    /**
     * Assert that no notifications were sent.
     *
     * @return void
     */
    public function assertNothingSent()
    {
        PHPUnit::assertEmpty($this->notifications, 'Notifications were sent unexpectedly.');
    }

    /**
<<<<<<< HEAD
     * Assert the total amount of times a notification was sent.
     *
     * @param  int  $expectedCount
     * @param  string  $notification
     * @return void
     */
    public function assertTimesSent($expectedCount, $notification)
    {
        $actualCount = collect($this->notifications)
            ->flatten(1)
            ->reduce(function ($count, $sent) use ($notification) {
                return $count + count($sent[$notification] ?? []);
            }, 0);

        PHPUnit::assertSame(
            $expectedCount, $actualCount,
            "Expected [{$notification}] to be sent {$expectedCount} times, but was sent {$actualCount} times."
        );
    }

    /**
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * Get all of the notifications matching a truth-test callback.
     *
     * @param  mixed  $notifiable
     * @param  string  $notification
     * @param  callable|null  $callback
     * @return \Illuminate\Support\Collection
     */
    public function sent($notifiable, $notification, $callback = null)
    {
        if (! $this->hasSent($notifiable, $notification)) {
            return collect();
        }

        $callback = $callback ?: function () {
            return true;
        };

        $notifications = collect($this->notificationsFor($notifiable, $notification));

        return $notifications->filter(function ($arguments) use ($callback) {
            return $callback(...array_values($arguments));
        })->pluck('notification');
    }

    /**
     * Determine if there are more notifications left to inspect.
     *
     * @param  mixed  $notifiable
     * @param  string  $notification
     * @return bool
     */
    public function hasSent($notifiable, $notification)
    {
        return ! empty($this->notificationsFor($notifiable, $notification));
    }

    /**
     * Get all of the notifications for a notifiable entity by type.
     *
     * @param  mixed  $notifiable
     * @param  string  $notification
     * @return array
     */
    protected function notificationsFor($notifiable, $notification)
    {
<<<<<<< HEAD
        return $this->notifications[get_class($notifiable)][$notifiable->getKey()][$notification] ?? [];
=======
        if (isset($this->notifications[get_class($notifiable)][$notifiable->getKey()][$notification])) {
            return $this->notifications[get_class($notifiable)][$notifiable->getKey()][$notification];
        }

        return [];
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }

    /**
     * Send the given notification to the given notifiable entities.
     *
     * @param  \Illuminate\Support\Collection|array|mixed  $notifiables
     * @param  mixed  $notification
     * @return void
     */
    public function send($notifiables, $notification)
    {
        return $this->sendNow($notifiables, $notification);
    }

    /**
     * Send the given notification immediately.
     *
     * @param  \Illuminate\Support\Collection|array|mixed  $notifiables
     * @param  mixed  $notification
<<<<<<< HEAD
     * @param  array|null  $channels
     * @return void
     */
    public function sendNow($notifiables, $notification, array $channels = null)
=======
     * @return void
     */
    public function sendNow($notifiables, $notification)
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    {
        if (! $notifiables instanceof Collection && ! is_array($notifiables)) {
            $notifiables = [$notifiables];
        }

        foreach ($notifiables as $notifiable) {
            if (! $notification->id) {
<<<<<<< HEAD
                $notification->id = Str::uuid()->toString();
=======
                $notification->id = Uuid::uuid4()->toString();
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
            }

            $this->notifications[get_class($notifiable)][$notifiable->getKey()][get_class($notification)][] = [
                'notification' => $notification,
<<<<<<< HEAD
                'channels' => $channels ?: $notification->via($notifiable),
                'notifiable' => $notifiable,
                'locale' => $notification->locale ?? $this->locale ?? value(function () use ($notifiable) {
                    if ($notifiable instanceof HasLocalePreference) {
                        return $notifiable->preferredLocale();
                    }
                }),
=======
                'channels' => $notification->via($notifiable),
                'notifiable' => $notifiable,
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
            ];
        }
    }

    /**
     * Get a channel instance by name.
     *
     * @param  string|null  $name
     * @return mixed
     */
    public function channel($name = null)
    {
        //
    }
<<<<<<< HEAD

    /**
     * Set the locale of notifications.
     *
     * @param  string  $locale
     * @return $this
     */
    public function locale($locale)
    {
        $this->locale = $locale;

        return $this;
    }
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
}
