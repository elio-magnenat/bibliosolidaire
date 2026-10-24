<?php
class ImageStorage {
    public static function saveCroppedJpeg($dataUrl, $directory, $prefix) {
        if (strlen($dataUrl) > 7000000 || !preg_match('/^data:image\/jpeg;base64,([A-Za-z0-9+\/=]+)$/D', $dataUrl, $matches)) {
            throw new InvalidArgumentException('Invalid image upload');
        }
        $bytes = base64_decode($matches[1], true);
        $image = $bytes === false ? false : @getimagesizefromstring($bytes);
        if (!$image || $image['mime'] !== 'image/jpeg' || $image[0] > 4000 || $image[1] > 4000 || strlen($bytes) > 5000000) {
            throw new InvalidArgumentException('Invalid JPEG image');
        }
        if (!is_dir($directory) && !mkdir($directory, 0755, true)) {
            throw new RuntimeException('Could not create image directory');
        }
        $name = $prefix . bin2hex(random_bytes(12)) . '.jpg';
        if (file_put_contents($directory . $name, $bytes) === false) {
            throw new RuntimeException('Could not save image');
        }
        return $name;
    }
}
