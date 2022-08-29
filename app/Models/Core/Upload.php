<?php

namespace App\Models\Core;

use App\Models\BaseModel;
use Intervention\Image\Facades\Image;
use App\Exceptions\ValidatorException;
use Illuminate\Support\Facades\Storage;

class Upload extends BaseModel
{
    public static $BASE_DIR = 'upload/';
    public static $RESIZE_DIR = 'resize/';
    public static $extension = ['png', 'jpg'];
    public static $columns = [
        "id" => "uploads.id",
        "alt" => "uploads.alt",
        "type" => "uploads.type",
        "path" => "uploads.path",
        "size" => "uploads.size",
        "title" => "uploads.title",
        "name" => "uploads.new_name",
        "created_at" => "uploads.created_at",
        "created_by" => "uploads.created_by",
        "updated_at" => "uploads.updated_at"
    ];

    public static function insert($request)
    {
        if (!in_array($request->file->extension(), Upload::$extension)) {
            throw new ValidatorException();
        }

        $dir_path = Upload::getPath();
        $file_path = Storage::putFile($dir_path, $request->file);

        $model = new Upload();
        if (isset($request->file->owned)) {
            $model->old_name = $request->file->owned;
        }
        $model->size = $request->file->getSize();
        $model->type = $request->file->extension();
        $model->path = Upload::$BASE_DIR . $file_path;
        $model->old_name = $request->file->getClientOriginalName();
        $model->new_name = str_replace($dir_path . '/', '', $file_path);
        $model->alt = $request->alt;
        $model->title = $request->title;
        $model->description = $request->description;
        $model->save();

        // if (in_array($request->file->extension(), ['png', 'jpg', 'jpeg'])) {
        $resize = Upload::resizeImage($file_path);
        if ($resize !== false) {
            $file_name = $resize;
        }
        // }
        return [
            'id' => $model->id,
            'path' => Upload::$BASE_DIR . $file_name,
        ];
    }

    public static function getPath()
    {
        $path = (date('y') + 1240) . (date('m') + 12);
        if (!file_exists(Upload::$BASE_DIR . $path)) {
            mkdir(Upload::$BASE_DIR . $path, 0755, true);
            mkdir(Upload::$BASE_DIR . Upload::$RESIZE_DIR . $path . "/", 0755, true);
        }
        return $path;
    }

    public static function destroy($id)
    {
        $model = Upload::find($id);
        unlink($model->path);
        $model->delete();
        return 'ok';
    }

    public static function setUploadKey($string)
    {
        return str_rot13("dfv5fFev5582EV222" . $string);
    }

    public static function getUploadKey($string)
    {
        return str_replace('dfv5fFev5582EV222', '', str_rot13(str_rot13(str_rot13($string))));
    }

    public static function resizeImage($file_path, $max_width = 512, $max_height = 512)
    {
        $image = Image::make(Upload::$BASE_DIR . $file_path);
        $width = $image->width();
        $height = $image->height();
        if ($height <= $max_height && $width <= $max_width) {
            return false;
        }
        $response['new'] = true;

        if ($height > $max_height) {
            $height = $max_height;
            $width = ($max_height / $height) * $width;
        } elseif ($width > $max_width) {
            $width = $max_width;
            $height = ($max_width / $width) * $height;
        }

        $image->resize($height, $height);
        $resize_path = Upload::$RESIZE_DIR . $file_path;
        $image->save(Upload::$BASE_DIR . $resize_path);
        return $resize_path;
    }

    public static function search($request)
    {
        $search = BaseModel::beforeSearch($request, Upload::class);
        $query = $search['query'];

        return BaseModel::afterSearch($query, $search['paginate_num']);
    }
}
