<?php

<<<<<<< HEAD
/**
=======
/*
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

<<<<<<< HEAD
/*
 * Authors:
 * - Glavić
 * - Milos Sakovic
 */
return array_replace_recursive(require __DIR__.'/sr.php', [
    'month' => ':count mjesec|:count mjeseca|:count mjeseci',
    'week' => ':count nedjelja|:count nedjelje|:count nedjelja',
    'second' => ':count sekund|:count sekunde|:count sekundi',
=======
return array(
    'year' => '{2,3,4,22,23,24,32,33,34,42,43,44,52,53,54}:count godine|[0,Inf[ :count godina',
    'y' => ':count g.',
    'month' => '{1} :count mjesec|{2,3,4}:count mjeseca|[5,Inf[ :count mjeseci',
    'm' => ':count mj.',
    'week' => '{1} :count nedjelja|{2,3,4}:count nedjelje|[5,Inf[ :count nedjelja',
    'w' => ':count ned.',
    'day' => '{1,21,31} :count dan|[2,Inf[ :count dana',
    'd' => ':count d.',
    'hour' => '{1,21} :count sat|{2,3,4,22,23,24}:count sata|[5,Inf[ :count sati',
    'h' => ':count č.',
    'minute' => '{1,21,31,41,51} :count minut|[2,Inf[ :count minuta',
    'min' => ':count min.',
    'second' => '{1,21,31,41,51} :count sekund|{2,3,4,22,23,24,32,33,34,42,43,44,52,53,54}:count sekunde|[5,Inf[:count sekundi',
    's' => ':count sek.',
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    'ago' => 'prije :time',
    'from_now' => 'za :time',
    'after' => ':time nakon',
    'before' => ':time prije',
<<<<<<< HEAD
    'week_from_now' => ':count nedjelju|:count nedjelje|:count nedjelja',
    'week_ago' => ':count nedjelju|:count nedjelje|:count nedjelja',
]);
=======

    'year_from_now' => '{1,21,31,41,51} :count godinu|{2,3,4,22,23,24,32,33,34,42,43,44,52,53,54} :count godine|[5,Inf[ :count godina',
    'year_ago' => '{1,21,31,41,51} :count godinu|{2,3,4,22,23,24,32,33,34,42,43,44,52,53,54} :count godine|[5,Inf[ :count godina',

    'week_from_now' => '{1} :count nedjelju|{2,3,4} :count nedjelje|[5,Inf[ :count nedjelja',
    'week_ago' => '{1} :count nedjelju|{2,3,4} :count nedjelje|[5,Inf[ :count nedjelja',

    'diff_now' => 'upravo sada',
    'diff_yesterday' => 'juče',
    'diff_tomorrow' => 'sutra',
    'diff_before_yesterday' => 'prekjuče',
    'diff_after_tomorrow' => 'preksutra',
);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
