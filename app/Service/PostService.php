<?php

namespace App\Service;

use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PostService
{
    public function store($data) {
        try {
            DB::beginTransaction();
            if(isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }


          /*  $previewImage = $data['preview_image']; - создание переменной с данными по изображению превью
            $mainImage = $data['main_image'];
            $previewImagePath = Storage::put('/images', $previewImage); - создание переменной, которая подключает метод пут у класса сторадж и помещает в локальное хранилище указанную переменную
            $mainImagePath = Storage::put('/images', $mainImage); - переменная, которая показывает путь к файлу на локалке
            dd($previewImagePath);
           */
            if(isset($data['preview_image'])){
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }

            if(isset($data['main_image'])){
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }


            $post = Post::create($data);
            if(isset($data['tags_ids'])) {
                $post->tags()->attach($tagIds);
            }

            DB::commit();
            } catch (Exception $exception) {
                DB::rollBack();
                abort(500);
            }
            return $post;
    }

    public function update($data, $post) {


        try {
            Db::beginTransaction();
            if(isset($data['tags_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

           if(isset($data['preview_image'])) {
               $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }

           if(isset($data['main_image'])) {
               $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);

           }

            $post->update($data);
            if(isset($data['tags_ids'])) {
                $post->tags()->sync($tagIds);
            }

            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $post;
    }
}
