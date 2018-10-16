<?php

namespace App\Http\Controllers;
use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;

class googleCalendar extends Controller
{
  public static function get(Carbon $startDateTime = null,
   Carbon $endDateTime = null,
   array $queryParameters = [],
   string $calendarId = null): Collection
}
