<?php

namespace Illuminate\Support\Facades;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\PasswordBroker;

/**
 * @method static string sendResetLink(array $credentials)
 * @method static mixed reset(array $credentials, \Closure $callback)
 * @method static void validator(\Closure $callback)
 * @method static bool validateNewPassword(array $credentials)
 *
=======
/**
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 * @see \Illuminate\Auth\Passwords\PasswordBroker
 */
class Password extends Facade
{
    /**
     * Constant representing a successfully sent reminder.
     *
     * @var string
     */
<<<<<<< HEAD
    const RESET_LINK_SENT = PasswordBroker::RESET_LINK_SENT;
=======
    const RESET_LINK_SENT = 'passwords.sent';
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Constant representing a successfully reset password.
     *
     * @var string
     */
<<<<<<< HEAD
    const PASSWORD_RESET = PasswordBroker::PASSWORD_RESET;
=======
    const PASSWORD_RESET = 'passwords.reset';
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Constant representing the user not found response.
     *
     * @var string
     */
<<<<<<< HEAD
    const INVALID_USER = PasswordBroker::INVALID_USER;
=======
    const INVALID_USER = 'passwords.user';
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Constant representing an invalid password.
     *
     * @var string
     */
<<<<<<< HEAD
    const INVALID_PASSWORD = PasswordBroker::INVALID_PASSWORD;
=======
    const INVALID_PASSWORD = 'passwords.password';
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Constant representing an invalid token.
     *
     * @var string
     */
<<<<<<< HEAD
    const INVALID_TOKEN = PasswordBroker::INVALID_TOKEN;
=======
    const INVALID_TOKEN = 'passwords.token';
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth.password';
    }
}
