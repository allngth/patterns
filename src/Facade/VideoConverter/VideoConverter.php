<?php

namespace App\Facade\VideoConverter;

class VideoConverter
{
    public function convert($filename, $format)
    {
        $this->actionA();
        $this->actionB();
        $this->actionC();
        // etc...

        // It's only for example, don't use it in the real app :D
        return $filename.'.'.$format;
    }

    private function actionA()
    {
        // todo: does something to convert file)
    }

    private function actionB()
    {
        // todo: does something to convert file)
    }

    private function actionC()
    {
        // todo: does something to convert file)
    }
}
