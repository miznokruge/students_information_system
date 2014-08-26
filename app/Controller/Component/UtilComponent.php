<?php
App::uses('Component', 'Controller');

class UtilComponent extends Component {

    public $user;
    public $controller;
    public $components = array('Session', 'RequestHandler');

    function initialize(Controller $controller) {
        $this->controller = $controller;
    }

    function startup(Controller $controller) {

    }

    function filterPrice($price) {
        $price = str_replace('Rp ', '', $price);
        $price = str_replace(',', '', $price);
        $num_price = doubleval($price);
        return $num_price;
    }

    function nolnoldidepan($value, $places = 3) {
        if (is_numeric($value)) {
            for ($x = 1; $x <= $places; $x++) {
                $ceiling = pow(10, $x);
                if ($value < $ceiling) {
                    $zeros = $places - $x;
                    for ($y = 1; $y <= $zeros; $y++) {
                        $leading .= "0";
                    }
                    $x = $places + 1;
                }
            }
            $output = $leading . $value;
        } else {
            $output = $value;
        }
        return $output;
    }

    function generateNoTransaksi($length = 10) {
        for ($i = 0; $i < $length; $i++) {
            $n = mt_rand(0, 9);
            $pass[$i] = $n;
        }
        return implode('', $pass);
    }

    function currDate() {
        return date("Y-m-d H:i:s");
    }

    function url($txt) {
        /*
          URL-FRIENDLY STRING RENAMER
          => Needed Params
          # txt
          eg : $friendly_url = Url('Bonjour Monsieur 1993 !') => will return bonjour-monsieur-1993
         */
        $txt = strtolower($txt);
        $string = strtr(trim($txt), '�����������������������������������������������������', 'aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn');
        $txt = preg_replace('[^a-z0-9]', '-', $txt);
        $txt = preg_replace('#([^a-z0-9_-]|(-){2,})#', '-', $txt);
        $txt = str_replace('_', '-', $txt);
        $txt = str_replace('---', '-', $txt);
        $txt = str_replace('--', '-', $txt);
        return $txt;
    }

    function Resize($source, $dest, $extension, $size, $scale = 2) {
        $thumb_size = $size;
        $sizes = getimagesize($source);
        $width = $sizes[0];
        $height = $sizes[1];
        $x = 0;
        $y = 0;
        $extension = ltrim($extension, '.');
        //echo $source.' => '.$dest.' => '.$extension.' => '.$size;
        if ($extension == 'jpg')
            $im = imagecreatefromjpeg($source);
        elseif ($extension == 'gif')
            $im = imagecreatefromgif($source);
        elseif ($extension == 'png')
            $im = imagecreatefrompng($source);
        if ($scale == 1) {
            //if($width > $height) {

            $coeff = $width / $size;
            $width = $size;
            $height = round($height / $coeff);
            /* } elseif($height > $width) {
              $coeff = $height/$size;
              $height = $size;
              $width = round($width/$coeff);
              } else {
              $width = $size;
              $height = $size;
              } */
            $new_im = imagecreatetruecolor($width, $height);

            imagecopyresampled($new_im, $im, 0, 0, 0, 0, $width, $height, $sizes[0], $sizes[1]);
        } else {
            if ($width > $height) {
                $x = ceil(($width - $height) / 2);
                $width = $height;
            } elseif ($height > $width) {
                $y = ceil(($height - $width) / 2);
                $height = $width;
            }
            $new_im = imagecreatetruecolor($thumb_size, $thumb_size);

            imagecopyresampled($new_im, $im, 0, 0, $x, $y, $thumb_size, $thumb_size, $width, $height);
        }

        if ($extension == 'jpg')
            imagejpeg($new_im, $dest, 80);
        elseif ($extension == 'gif')
            imagegif($new_im, $dest);
        elseif ($extension == 'png')
            imagepng($new_im, $dest);
        imagedestroy($new_im);
        imagedestroy($im);
    }

    function mapQuestionOrder($id) {
        switch ($id):
            case 1:
                $order_by = "Question.id ASC";
                break;
            case 2:
                $order_by = "Question.id DESC";
                break;
            case 3:
                $order_by = "Question.question ASC";
                break;
            case 4:
                $order_by = "Question.question DESC";
                break;
            case 5:
                $order_by = "RAND()";
                break;
        endswitch;

        return $order_by;
    }

    public function setFlash($message, $type = null) {
        if (!$type) {
            $type = 'info';
        }

        $old = (array) $this->Session->read('messages');
        if (isset($old[$type]) && count($old[$type]) > 99) {
            array_shift($old[$type]);
        }
        $old[$type][] = $message;
        $this->Session->write('messages', $old);
    }

    /**
     * Adds a transient flash message.
     * These flash messages that are not saved (only available for current view),
     * will be merged into the session flash ones prior to output.
     *
     * @param string $message Message to output.
     * @param string $type Type ('error', 'warning', 'success', 'info' or custom class).
     * @return void
     */
    public static function transientFlashMessage($message, $type = null) {
        if (!$type) {
            $type = 'info';
        }

        $old = (array) Configure::read('messages');
        if (isset($old[$type]) && count($old[$type]) > 99) {
            array_shift($old[$type]);
        }
        $old[$type][] = $message;
        Configure::write('messages', $old);
    }

}
