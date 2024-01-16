<?php
namespace Src\Modules\Language\Fixture;

class LanguageFixture
{
    public function generate()
    {
        $languages = ['Русский', 'Английский', 'Французский', 'Испанский', 'Немецкий'];
        for ($i = 0; $i < 5; $i++) {
            $value = $languages[$i];
        }
    }
}
