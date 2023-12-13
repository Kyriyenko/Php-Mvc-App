<?php

use App\Database\AppDatabase;

/** Здесь исполняются скрипты для базовой настройки базы данных, создания таблиц, полей и данных по умолчанию */

$connection = AppDatabase::getAppDatabase();