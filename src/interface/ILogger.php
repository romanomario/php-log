<?php

interface ILogger {
    public function info(...$args);
    public function debug(...$args);
    public function warn(...$args);
    public function error(...$args);
}
